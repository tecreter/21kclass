<?php

namespace App\Http\Controllers\Front;

use App\Events\OrderCompleted;
use App\Http\Controllers\Controller;
use App\Models\Back\Course;
use App\Models\Back\Invoice;
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

        return redirect()->route('index');
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
            $lastOrderNoInfo = Invoice::select('order_no')->orderBy('id', 'desc')->take(1)->first();
            $old_order_no = $lastOrderNoInfo ? substr($lastOrderNoInfo->order_no, -5) : 0 . '<br>';
            $new_order_no = 'LB' . str_pad((int) $old_order_no + 1, 5, 0, STR_PAD_LEFT);

            // Step 2. Calculate Checkout Price
            $course_details = session('SESSION_TOC_CART_COURSE_DETAILS', []);
            $checkout_price = 0;
            foreach (session('SESSION_TOC_CART_COURSE_DETAILS', []) as $item) {
                $checkout_price += (int) $item['price'];
            }

            // Step 2. Save customer information record into invoice table for backoffice team
            $invc = new Invoice();
            $invc->order_no = $new_order_no;
            $invc->first_name = $customer_info['first_name'];
            $invc->last_name = $customer_info['last_name'];
            $invc->email_address = $customer_info['email_address'];
            $invc->phone_number = $customer_info['phone_number'];
            $invc->cart_amount = $checkout_price;
            $invc->apt_name = $customer_info['apt_name'];
            $invc->address = $customer_info['street_address'];
            $invc->city = $customer_info['city'];
            $invc->state = $customer_info['state'];
            $invc->country = $customer_info['country'];
            $invc->postcode = $customer_info['postcode'];
            $invc->terms_condition = (isset($request->terms_condition) && $request->terms_condition === 'on') ? 1 : 0;
            $invc->subscribe_newsletter = (isset($request->subscribe_newsletter) && $request->subscribe_newsletter === 'on') ? 1 : 0;
            $invc->cart_amount = $checkout_price;
            $invc->save();
            $invoice_id = $invc->id;
            $invoice = Invoice::find($invoice_id);

            // Step 3. Make transaction data to PayU Payment Gateway Server
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
                ->udf1($course_details[0]['name'])
                ->udf2($request->email_address)
                ->udf3((string)$request->phone_number)
                ->udf4((($request->apt_name) ? $request->apt_name : '') . ' ' . (($request->address) ? $request->address : ''))
                ->udf5($new_order_no)
                ->udf6((isset($request->terms_condition) && $request->terms_condition === 'on') ? 1 : 0)
                ->udf7((isset($request->subscribe_newsletter) && $request->subscribe_newsletter === 'on') ? 1 : 0);

            $transaction = Transaction::make()
                ->charge($checkout_price)
                ->for($course_details[0]['name'])
                ->with($attributes)
                ->against($invoice)
                ->to($customer);

            // Step 4. Update transaction_id to invoice table before sending to PayU
            Invoice::where('id', $invoice_id)
                ->update(['transaction_id' => $transaction->transactionId]);

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
            $invoice = \App\Models\Back\Invoice::where('order_no', $transaction->response('udf5'))->where('transaction_id', $transaction['transaction_id'])->firstOrFail();
            $invoice->payment_status = $transaction->response('status');
            $invoice->save();

            // Step 3. Clear cart session value
            $request->session()->forget(['SESSION_TOC_CART_COURSE_IDS', 'SESSION_TOC_CART_COURSE_DETAILS']);

            // Step 4. Show order status page to Customer based on PayU response
            if ($transaction->successful()) {

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

                // Step 4.1. Send email to Customer for successful payment
                $invoice = array(
                    'name' => $transaction->response('firstname') . ' ' . $transaction->response('lastname'),
                    'email' => $transaction->response('email'),
                    'amount' => $transaction->response('amount'),
                    'order_no' => $transaction->response('udf5')
                );
                // event(new OrderCompleted((object) $invoice)); // TODO for Production Server
            }

            // Step 5. Get the transactions that are pending in status and verify with PayU
            $invoice = Invoice::find($transaction->paidFor->id);
            $transactions = $invoice->transactions()->pending()->get();
            $transactions->each->verifyAsync();

            // Step 6. Show order complete page
            return view('front.pages.payment.order-completed', [
                'status' => $transaction->response('status'),
                'order_no' => $transaction->response('udf5'),
                'trans_id' => $transaction['transaction_id'],
                'trans_datetime' => date('Y-m-d H:i:s'),
                'amount' => number_format($transaction->response('amount'), 2),
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
