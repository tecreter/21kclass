<?php

use App\Events\OrderCompleted;
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


