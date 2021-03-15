<?php

namespace App\Http\Controllers\Front;

use App\Events\OrderCreated;
use App\Events\OrderCreatedEvent;
use App\Http\Controllers\Controller;
use App\Models\Back\Course;
use App\Models\Back\Order;
use App\Models\Back\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Tzsk\Payu\Concerns\Attributes;
use Tzsk\Payu\Concerns\Customer;
use Tzsk\Payu\Concerns\Transaction;
use Tzsk\Payu\Facades\Payu;
use Tzsk\Payu\Jobs\VerifyTransaction;
use Tzsk\Payu\Models\PayuTransaction;

class PaymentController extends Controller
{

    public function addToCart(Request $request)
    {
        $session_cart_course_ids = session('SESSION_TOC_CART_COURSE_IDS', []);
        $session_cart_course_details = session('SESSION_TOC_CART_COURSE_DETAILS', []);


        if (!in_array((int)$request->course_id, $session_cart_course_ids)) {
            $session_cart_course_ids[] = (int) $request->course_id;
            session(['SESSION_TOC_CART_COURSE_IDS' => $session_cart_course_ids], []);

            $course_info = Course::where('id', (int) $request->course_id)->first();
            $session_cart_course_details[] = array(
                'site_id' => $course_info->category->type_id,
                'site_type' => strtolower($course_info->category->getSiteName()),
                'id' => (int)$request->course_id,
                'name' => $course_info->name,
                'slug' => $course_info->slug,
                'excerpt' => $course_info->excerpt,
                'price' => $course_info->price,
                'original_price' => $course_info->original_price,
                'thumb' => $course_info->thumb,
            );
            session(['SESSION_TOC_CART_COURSE_DETAILS' => $session_cart_course_details], []);

            return redirect()->route( strtolower($course_info->category->getSiteName()) . '.course-details', ['course'=>$course_info->slug]);
        }

        return redirect()->route('index');
    }

    public function buyNow(Request $request)
    {
        $session_cart_course_ids = session('SESSION_TOC_CART_COURSE_IDS', []);
        $session_cart_course_details = session('SESSION_TOC_CART_COURSE_DETAILS', []);

        if (!in_array((int)$request->course_id, $session_cart_course_ids)) {
            $session_cart_course_ids[] = (int) $request->course_id;
            session(['SESSION_TOC_CART_COURSE_IDS' => $session_cart_course_ids], []);

            $course_info = Course::where('id', (int) $request->course_id)->first();
            $session_cart_course_details[] = array(
                'site_id' => $course_info->category->type_id,
                'site_type' => strtolower($course_info->category->getSiteName()),
                'id' => (int)$request->course_id,
                'name' => $course_info->name,
                'slug' => $course_info->slug,
                'excerpt' => $course_info->excerpt,
                'price' => $course_info->price,
                'original_price' => $course_info->original_price,
                'thumb' => $course_info->thumb,
            );
            session(['SESSION_TOC_CART_COURSE_DETAILS' => $session_cart_course_details], []);

            return redirect()->route('checkout');
        }

        return redirect()->route('cart');
    }

    public function removeFromCart(Request $request)
    {
        $session_cart_course_ids = session('SESSION_TOC_CART_COURSE_IDS', []);
        $session_cart_course_details = session('SESSION_TOC_CART_COURSE_DETAILS', []);

        $req_course_id = (int)$request->course_id;

        $index = array_search($req_course_id, $session_cart_course_ids);

        if ($index === false) { // course_id not found in the shopping cart session
            return redirect()->route('cart');
        }
        else {
            // remove cart session array for the selected course_id
            array_splice($session_cart_course_ids, $index, 1);
            array_splice($session_cart_course_details, $index, 1);

            session(['SESSION_TOC_CART_COURSE_IDS' => $session_cart_course_ids], []);
            session(['SESSION_TOC_CART_COURSE_DETAILS' => $session_cart_course_details], []);

            return redirect()->route('cart');

        }
    }

    public function cart()
    {
        return view('front.pages.payment.cart');
    }

    public function checkout(Request $request)
    {
        if ($request->isMethod('post')) {

            $customer_info = $request->validate([
                'first_name' => 'required|min:1|max:100',
                'last_name' => 'nullable|min:1|max:100',
                'email_address' => 'required|email|max:100',
                'phone_number' => 'required|max:15',
                'apt_name' => 'nullable|max:100',
                'street_address' => 'nullable|max:150',
                'city' => 'nullable|max:150',
                'state' => 'nullable|max:150',
                'country' => 'nullable|max:5',
                'postcode' => 'nullable|max:10',
                'terms_condition' => [
                    'required',
                    Rule::in(['on']),
                ],
                'subscribe_newsletter' => [
                    'nullable',
                    Rule::in(['on']),
                ]
            ]);

            // Step 1. Generate Order Number
            $lastOrderNoInfo = Order::select('invoice')->orderBy('id', 'desc')->take(1)->first();
            $old_invoice = $lastOrderNoInfo ? substr($lastOrderNoInfo->invoice, -5) : 0 . '<br>';
            $new_invoice = 'LB' . str_pad((int) $old_invoice + 1, 5, 0, STR_PAD_LEFT);

            // Step 2. Calculate Checkout Price
            $cart_course_details = session('SESSION_TOC_CART_COURSE_DETAILS', []);
            $checkout_price = 0;
            foreach (session('SESSION_TOC_CART_COURSE_DETAILS', []) as $item) {
                $checkout_price += (int) $item['price'];
            }




            // Step 3. Save sales order for backoffice team
            $sales = new Order();
            $sales->invoice = $new_invoice;
            $sales->first_name = $customer_info['first_name'];
            $sales->last_name = $customer_info['last_name'];
            $sales->email_address = $customer_info['email_address'];
            $sales->phone_number = $customer_info['phone_number'];
            $sales->apt_name = $customer_info['apt_name'];
            $sales->address = $customer_info['street_address'];
            $sales->city = $customer_info['city'];
            $sales->state = $customer_info['state'];
            $sales->country = $customer_info['country'];
            $sales->postcode = $customer_info['postcode'];
            $sales->terms_condition = (isset($request->terms_condition) && $request->terms_condition === 'on') ? 1 : 0;
            $sales->subscribe_newsletter = (isset($request->subscribe_newsletter) && $request->subscribe_newsletter === 'on') ? 1 : 0;

            $sales->total_products = count($cart_course_details);
            $sales->sub_total = $checkout_price;
            $sales->discounts = 0;
            $sales->tax = 0;
            $sales->total = $checkout_price;
            $sales->save();
            $order = Order::find($sales->id);




            // Step 4. Save order's product_list into `order_products` table for backoffice team
            foreach ($cart_course_details as $cart_course) {
                $items = new OrderProduct();
                $items->site_id = $cart_course['site_id'];
                $items->order_id = $sales->id;
                $items->course_name = $cart_course['name'];
                $items->thumb = $cart_course['thumb'];
                $items->course_price = $cart_course['price'];
                $items->quantity = (int) 1;
                $items->total = $cart_course['price'] * 1;
                $items->save();
            }




            // Step 5. Make transaction data to PayU Payment Gateway Server
            $customer = Customer::make()
                ->firstName($request->first_name)
                ->lastName(($request->last_name) ? $request->last_name : '')
                ->email($request->email_address)
                ->phone($request->phone_number)
                ->addressOne(($request->apt_name) ? $request->apt_name : '')
                ->addressTwo(($request->address) ? $request->address : '')
                ->city(($request->city) ? $request->city : '')
                ->state(($request->state) ? $request->state : '')
                ->country(($request->country) ? $request->country : '')
                ->zipCode(($request->postcode) ? $request->postcode : '');

            $attributes = Attributes::make()
                ->udf1($cart_course_details[0]['name'])
                ->udf2($request->email_address)
                ->udf3((string)$request->phone_number)
                ->udf4((($request->apt_name) ? $request->apt_name : '') . ' ' . (($request->address) ? $request->address : ''))
                ->udf5($new_invoice)
                ->udf6((isset($request->terms_condition) && $request->terms_condition === 'on') ? 1 : 0)
                ->udf7((isset($request->subscribe_newsletter) && $request->subscribe_newsletter === 'on') ? 1 : 0);

            $transaction = Transaction::make()
                ->charge($checkout_price)
                ->for($cart_course_details[0]['name'])
                ->with($attributes)
                ->against($order)
                ->to($customer);

            // Step 4. Update transaction_id to invoice table before sending to PayU
            Order::where('id', $sales->id)->update(['transaction_id' => $transaction->transactionId]);

            // Step 5. Initiate payment
            return Payu::initiate($transaction)->redirect(route('checkout-status'));

        }

        // Check if cart is empty and redirect to cart page
        if (count(session('SESSION_TOC_CART_COURSE_IDS', [])) < 1) {
            return view('front.pages.payment.cart');
        }

        return view('front.pages.payment.checkout');
    }

    public function checkoutStatus(Request $request)
    {

        // Check if the referer is from PayU
        if (strpos(request()->headers->get('referer'), "payu") !== false) {

            // Step 1. Capture payment response from PayU
            $transaction = Payu::capture();

            // Step 2. Update Invoices table about payment status information
            $invoice = \App\Models\Back\Order::where('invoice', $transaction->response('udf5'))->where('transaction_id', $transaction['transaction_id'])->firstOrFail();
            $invoice->payment_status = $transaction->response('status');
            $invoice->save();

            // Step 3. Clear cart session value
            $request->session()->forget(['SESSION_TOC_CART_COURSE_IDS', 'SESSION_TOC_CART_COURSE_DETAILS']);

            // Step 4. Show order status page to Customer based on PayU response
            $order_info = Order::find($transaction->paidFor->id);
            if ($transaction->successful()) {


                // Step 4.1. Verify with PayU
                // --------- Start - Verify Payment ---------
                $key = env('PAYU_BIZ_KEY');
                $salt = env('PAYU_BIZ_SALT');
                $command = "verify_payment";
                $var1 = $transaction['transaction_id'];
                $hash_str = $key  . '|' . $command . '|' . $var1 . '|' . $salt ;
                $hash = strtolower(hash('sha512', $hash_str));

                $r = array('key' => $key , 'hash' =>$hash , 'var1' => $var1, 'command' => $command);
                $qs= http_build_query($r);
                $wsUrl = "https://test.payu.in/merchant/postservice.php?form=1";
                //$wsUrl = 'https://' . (app()->environment('production') ? 'info' : 'test') . '.payu.in/merchant/postservice.php?form=1'; // TODO for Production Server

                Log::info("------------ /verify_payment/request -----------\n" . json_encode($qs, JSON_UNESCAPED_UNICODE));

                $c = curl_init();
                curl_setopt($c, CURLOPT_URL, $wsUrl);
                curl_setopt($c, CURLOPT_POST, 1);
                curl_setopt($c, CURLOPT_POSTFIELDS, $qs);
                curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 30);
                curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
                $o = curl_exec($c);
                if (curl_errno($c)) {
                    $sad = curl_error($c);
                    throw new Exception($sad);
                }
                curl_close($c);

                $valueSerialized = @unserialize($o);
                if($o === 'b:0;' || $valueSerialized !== false) {
                    print_r($valueSerialized);
                }
                Log::info("------------ /verify_payment/response -----------\n" . $o);
                // --------- End - Verify Payment ---------



                // Step 4.2. Update `paid_at` date in orders table
                $invoice = \App\Models\Back\Order::where('invoice', $transaction->response('udf5'))->where('transaction_id', $transaction['transaction_id'])->firstOrFail();
                $invoice->paid_at = date('Y-m-d H:i:s', strtotime($transaction->response('addedon')));
                $invoice->save();


                // Step 4.1. Send email to Customer for successful payment
                $order_products = OrderProduct::where('order_id', $invoice->id)->get();
                $products = array();
                foreach ($order_products as $item) {
                    $products[] = array(
                        'name' => $item->course_name,
                        'quantity' => $item->quantity,
                        'price' => $item->course_price
                    );
                }

                $order = array(
                    'name' => $transaction->response('firstname') . ' ' . $transaction->response('lastname'),
                    'email' => $transaction->response('email'),
                    'invoice' => $transaction->response('udf5'),
                    'transaction_id' => $transaction['transaction_id'],
                    'transaction_date' => date('M d, Y h:i A', strtotime($transaction->response('addedon'))),

                    'order' => array(
                        'sub_total' => $order_info->sub_total,
                        'discounts' => $order_info->discounts,
                        'tax' => $order_info->tax,
                        'total' => $order_info->total
                    ),

                    'products' => $products
                );

                event(new OrderCreatedEvent( json_decode(json_encode($order)) ));
            }

            // Step 5. Get the transactions that are pending in status and verify with PayU
            $transactions = $order_info->transactions()->pending()->get();
            $transactions->each->verifyAsync();

            // Step 6. Show order complete page
            return view('front.pages.payment.order-completed', [
                'status' => $transaction->response('status'),
                'invoice' => $transaction->response('udf5'),
                'trans_id' => $transaction['transaction_id'],
                'trans_datetime' => $transaction->response('addedon'),
                'amount' => number_format($transaction->response('amount')),
                'error_no' => $transaction->response('error'),
                'error_msg' => $transaction->response('error_Message'),
            ]);
        }
        else {
            abort(403, 'NOT HAVING ACCESS PERMISSION TO THIS PAGE.');
        }

        return redirect()->route('index');
    }

}
