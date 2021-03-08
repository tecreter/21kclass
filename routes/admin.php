<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Back')->prefix('backoffice')->name('back.')->group(function () {

    // Authentication
    Route::namespace('Auth')->group(function () {
        Route::get('', 'LoginController@showLoginForm')->name('home');
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout')->name('logout');
    });

    Route::get('/home', 'HomeController@index')->name('home')->middleware(['auth:admin']);
    Route::get('/settings', 'HomeController@settings')->name('settings')->middleware(['auth:admin']);
    Route::post('/settings', 'HomeController@settings')->name('settings')->middleware(['auth:admin']);

    // Customers
    Route::get('customer', 'CustomerController@index')->middleware(['auth:admin'])->name('customer.index');
    Route::post('getCustomersList', 'CustomerController@getCustomersList')->name('getCustomersList');


    // Faculty
    Route::namespace('Faculty')->prefix('faculty')->name('faculty.')->group(function () {

        // Tutor
        Route::resource('tutor', 'TutorController')->middleware(['auth:admin']);
        Route::post('getTutorsList', 'TutorController@getTutorsList')->name('getTutorsList');
        Route::post('updateTutorEnableFlag', 'TutorController@updateTutorEnableFlag')->name('updateTutorEnableFlag');

    });

    // Course
    Route::namespace('Course')->prefix('course')->name('course.')->group(function () {

        // Types
        Route::resource('types', 'CourseController')->middleware(['auth:admin']);
        Route::post('getCourseTypeList', 'CourseController@getCourseTypeList')->name('getCourseTypeList');
        Route::post('updateCoursesEnableFlag', 'CourseController@updateCoursesEnableFlag')->name('updateCoursesEnableFlag');

        // Category
        Route::resource('category', 'CategoryController')->middleware(['auth:admin']);
        Route::post('getCourseCategoryList', 'CategoryController@getCourseCategoryList')->name('getCourseCategoryList');
        Route::post('updateCourseCategoryEnableFlag', 'CategoryController@updateCourseCategoryEnableFlag')->name('updateCourseCategoryEnableFlag');

    });

});
