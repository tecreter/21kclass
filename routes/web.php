<?php

use App\Mail\SendOrderToCustomerMail;
use App\Models\Back\Course;
use Illuminate\Support\Facades\Route;

Route::namespace('Front')->group(function () {

    Route::redirect('/', '/coaching')->name('index');

    // Cart
    Route::post('add-to-cart', 'PaymentController@addToCart')->name('add-to-cart');
    Route::post('buy-now', 'PaymentController@buyNow')->name('buy-now');
    Route::post('remove-from-cart', 'PaymentController@removeFromCart')->name('remove-from-cart');
    Route::get('cart', 'PaymentController@cart')->name('cart');
    Route::get('checkout', 'PaymentController@checkout')->name('checkout');
    Route::post('checkout', 'PaymentController@checkout')->name('checkout-store');
    Route::get('checkout-status', 'PaymentController@checkoutStatus')->name('checkout-status');

    // Coaching
    require __DIR__.'/coaching.php';
    require __DIR__.'/tutoring.php';
    require __DIR__.'/commerce.php';


    Route::get('test', function () {
        $order = array(
            'name' => 'Saravanan M',
            'email' => 'mailatmsn@gmail.com',
            'amount' => 1233,
            'invoice' => 'LB00001',
            'transaction_id' => 'sdfFG345',
            'transaction_date' => date('M d, Y h:i A'),

            'order' => array(
                'total_products' => 2,
                'total_shipping' => 0,
                'discounts' => 0,
                'tax' => 0,
                'total' => 1233,
            ),

            'products' => array(
                [
                    'name' => 'Test course 1',
                    'quantity' => '1',
                    'price' => '777',
                ],
                [
                    'name' => 'Test course 2',
                    'quantity' => '1',
                    'price' => '888',
                ],
            )
        );

        return new SendOrderToCustomerMail( json_decode(json_encode($order)) );
    });


    // Authentication
    // NOTE: Below Route is for user authentication
    /*
    Route::namespace('Auth')->group(function () {
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('logout');
    });
    */
});


