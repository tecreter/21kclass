<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Back\Course;
use App\Models\Front\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Tzsk\Payu\Concerns\Attributes;
use Tzsk\Payu\Concerns\Customer as PayUCustomer;
use Tzsk\Payu\Concerns\Transaction;
use Tzsk\Payu\Facades\Payu;

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
                'id' => (int)$request->course_id,
                'name' => $course_info->name,
                'slug' => $course_info->slug,
                'excerpt' => $course_info->excerpt,
                'price' => $course_info->price,
                'original_price' => $course_info->original_price,
                'thumb' => $course_info->thumb,
            );
            session(['SESSION_TOC_CART_COURSE_DETAILS' => $session_cart_course_details], []);

            return redirect()->route('course-details', ['course'=>$course_info->slug]);
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
        return view('front.pages.cart');
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
                'address' => 'nullable|max:150',
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

            // Step 1. Make transaction data to PayU Payment Gateway Server
            $customer = PayUCustomer::make()
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

            $course_details = session('SESSION_TOC_CART_COURSE_DETAILS', []);
            $checkout_price = 0;
            foreach (session('SESSION_TOC_CART_COURSE_DETAILS', []) as $item) {
                $checkout_price += (int) $item['price'];
            }

            $attributes = Attributes::make()
                ->udf1($course_details[0]['name'])
                ->udf2($request->email_address)
                ->udf3((string)$request->phone_number)
                ->udf4((($request->apt_name) ? $request->apt_name : '') . ' ' . (($request->address) ? $request->address : ''));

            $transaction = Transaction::make()
                ->charge($checkout_price)
                ->for($course_details[0]['name'])
                ->with($attributes)
                ->to($customer);


            // Step 2. Create customer information record into table for backoffice team
            $customer_info['transaction_id'] = $transaction->transactionId;
            $customer_info['cart_amount'] = $checkout_price;
            $customer_info['terms_condition'] = (isset($request->terms_condition) && $request->terms_condition === 'on') ? 1 : 0;
            $customer_info['subscribe_newsletter'] = (isset($request->subscribe_newsletter) && $request->subscribe_newsletter === 'on') ? 1 : 0;
            $customer_info['created_at'] = now();
            $customer_info['updated_at'] = now();
            Customer::insert($customer_info);

            // Step 3. Initiate payment
            return Payu::initiate($transaction)->redirect(route('checkout-status'));

        }


        // Check if cart is empty and redirect to cart page
        if (count(session('SESSION_TOC_CART_COURSE_IDS', null)) < 1) {
            return view('front.pages.cart');
        }

        return view('front.pages.checkout');
    }


    public function checkoutStatus(Request $request)
    {
        $transaction = Payu::capture();

        if ($transaction->successful()) {

            // Step 1. Update Customer table payment status information
            $customer = \App\Models\Front\Customer::where('transaction_id', $transaction['transaction_id'])->firstOrFail();
            $customer->payment_status = 'success';
            $customer->save();

            // Step 2. Clear cart session value
            $request->session()->forget(['SESSION_TOC_CART_COURSE_IDS', 'SESSION_TOC_CART_COURSE_DETAILS']);

            // Step 3. Update Customer table payment status information
            // Todo - Send Thank you email to Customer after transaction completed
            //event(new TransactionInitiated($payload['transaction']));

            // Step 4. Show order completed page
            return view('front.pages.order-completed');
        }

        return redirect()->route('index');
    }

}
