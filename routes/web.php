<?php

use App\Events\OrderCompleted;
use App\Models\Back\Course;
use Illuminate\Support\Facades\Route;

Route::namespace('Front')->group(function () {

    Route::get('', 'HomeController@index')->name('index');

    // About Us
    Route::get('what-sets-us-apart', 'HomeController@whatSetsUsApart')->name('what-sets-us-apart');
    Route::get('values-and-ethos', 'HomeController@valuesAndEthos')->name('values-and-ethos');
    Route::get('21k-group', 'HomeController@tocGroup')->name('21k-group');
    Route::get('our-team', 'HomeController@ourTeam')->name('our-team');
    Route::get('policy-and-governance', 'HomeController@policyAndGovernance')->name('policy-and-governance');

    // Courses
    Route::get('21k-neet-test-series', 'HomeController@neetTestSeries')->name('21k-neet-test-series');
    Route::get('21k-neet-extension-course', 'HomeController@neetExtensionCourse')->name('21k-neet-extension-course');
    Route::get('21k-neet-comprehensive-course', 'HomeController@neetComprehensiveCourse')->name('21k-neet-comprehensive-course');
    Route::get('21k-neet-crash-course', 'HomeController@neetCrashCourse')->name('21k-neet-crash-course');
    Route::get('21k-neet-repeater-course', 'HomeController@neetRepeaterCourse')->name('21k-neet-repeater-course');
    Route::get('21k-jee-extension-course', 'HomeController@jeeExtensionCourse')->name('21k-jee-extension-course');
    Route::get('21k-jee-comprehensive-course', 'HomeController@jeeComprehensiveCourse')->name('21k-jee-comprehensive-course');
    Route::get('21k-jee-crash-course', 'HomeController@jeeCrashCourse')->name('21k-jee-crash-course');
    Route::get('21k-jee-test-series', 'HomeController@jeeTestSeries')->name('21k-jee-test-series');
    Route::get('21k-class-pre-foundation-course', 'HomeController@classPreFoundationCourse')->name('21k-class-pre-foundation-course');
    Route::get('21k-class-preparatory-course', 'HomeController@classPreparatoryCourse')->name('21k-class-preparatory-course');

    // Excellence
    Route::get('olympiads', 'HomeController@olympiads')->name('olympiads');
    Route::get('national-talent-exam', 'HomeController@nationalTalentExam')->name('national-talent-exam');

    // Admissions
    Route::get('how-to-apply', 'HomeController@howToApply')->name('how-to-apply');
    Route::get('key-dates', 'HomeController@keyDates')->name('key-dates');
    Route::get('fees-and-scholarships', 'HomeController@feesAndScholarships')->name('fees-and-scholarships');
    Route::get('who-should-enrol', 'HomeController@whoShouldEnrol')->name('who-should-enrol');
    Route::get('process-and-requirements', 'HomeController@processAndRequirements')->name('process-and-requirements');

    // How it works
    Route::get('how-does-it-work', 'HomeController@howDoesItWork')->name('how-does-it-work');
    Route::get('technology', 'HomeController@technology')->name('technology');
    Route::get('why-online-only', 'HomeController@whyOnlineOnly')->name('why-online-only');
    Route::get('who-is-21k-class', 'HomeController@whoIs21kClass')->name('who-is-21k-class');
    Route::get('faq', 'HomeController@faq')->name('faq');
    Route::get('your-privacy', 'HomeController@yourPrivacy')->name('your-privacy');

    // #Being21k
    Route::get('student-work', 'HomeController@studentWork')->name('student-work');
    Route::get('parents-speak', 'HomeController@parentsSpeak')->name('parents-speak');
    Route::get('meet-our-faculty', 'HomeController@meetOurFaculty')->name('meet-our-faculty');
    Route::get('events', 'HomeController@events')->name('events');
    Route::get('media-hub', 'HomeController@mediaHub')->name('media-hub');
    Route::get('insights', 'HomeController@insights')->name('insights');

    // Connect
    Route::get('contact-us', 'HomeController@contactUs')->name('contact-us');
    Route::get('work-with-us', 'HomeController@workWithUs')->name('work-with-us');
    Route::get('career-intern', 'HomeController@careerIntern')->name('career-intern');
    Route::get('career-software-engineer', 'HomeController@careerSoftwareEngineer')->name('career-software-engineer');
    Route::get('social', 'HomeController@social')->name('social');

    // View course details
    Route::get('course/{course:slug}', function (Course $course) {
        $otherCourses = Course::where('category_id', $course->category_id)->where('id', '!=', $course->id)->get();

        return view('front.pages.course', [
            'course' => $course,
            'otherCourses' => $otherCourses
        ]);
    })->name('course-details');

    // Cart
    Route::post('add-to-cart', 'PaymentController@addToCart')->name('add-to-cart');
    Route::post('buy-now', 'PaymentController@buyNow')->name('buy-now');
    Route::post('remove-from-cart', 'PaymentController@removeFromCart')->name('remove-from-cart');
    Route::get('cart', 'PaymentController@cart')->name('cart');
    Route::get('checkout', 'PaymentController@checkout')->name('checkout');
    Route::post('checkout', 'PaymentController@checkout')->name('checkout-store');
    Route::get('checkout-status', 'PaymentController@checkoutStatus')->name('checkout-status');



    Route::get('test', function () {

        $customer = array(
            'name' => 'Senthilraja T',
            'email' => 'senthilraja.tk@gmail.com',
            'amount' => '4500',
        );
        event(new OrderCompleted((object) $customer));

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
