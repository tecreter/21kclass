<?php

use App\Models\Back\Course;
use Illuminate\Support\Facades\Route;

Route::prefix('commerce')->name('commerce.')->group(function () {

    Route::get('', 'CommerceController@index')->name('index');

    // About Us
    Route::name('about-us.')->group(function () {
        Route::view('what-sets-us-apart', 'front.pages.commerce.about-us.what-sets-us-apart')->name('what-sets-us-apart');
        Route::view('values-and-ethos', 'front.pages.commerce.about-us.values-and-ethos')->name('values-and-ethos');
        Route::view('21k-group', 'front.pages.commerce.about-us.21k-group')->name('21k-group');
        Route::view('our-team', 'front.pages.commerce.about-us.our-team')->name('our-team');
        Route::view('policy-and-governance', 'front.pages.commerce.about-us.policy-and-governance')->name('policy-and-governance');
    });




    // Academics
    Route::name('academics.')->group(function () {
        Route::name('ca-foundation-coaching.')->group(function () {
            Route::view('about-the-course', 'front.pages.commerce.academics.ca-foundation-coaching.introduction')->name('introduction');
            Route::view('21k-ca-foundation-extension-course-class-xii', 'front.pages.commerce.academics.ca-foundation-coaching.extension-course-for-class-xii')->name('extension-course-for-class-xii');
            Route::view('21k-ca-foundation-comprehensive-course-class-xi', 'front.pages.commerce.academics.ca-foundation-coaching.comprehensive-course-for-class-xi')->name('comprehensive-course-for-class-xi');
            Route::view('21k-ca-foundation-crash-course-for-class-xii', 'front.pages.commerce.academics.ca-foundation-coaching.crash-course-for-class-xii')->name('crash-course-for-class-xii');
            Route::view('21k-ca-test-series-for-class-xii', 'front.pages.commerce.academics.ca-foundation-coaching.test-series-for-class-xii')->name('test-series-for-class-xii');
        });
    });



    // Admissions
    Route::name('admission.')->group(function () {
        Route::view('how-to-apply', 'front.pages.commerce.admission.how-to-apply')->name('how-to-apply');
        Route::view('fees-and-scholarships', 'front.pages.commerce.admission.fees-and-scholarships')->name('fees-and-scholarships');
        Route::view('who-should-enrol', 'front.pages.commerce.admission.who-should-enrol')->name('who-should-enrol');
    });

    // FAQ
    Route::name('faq.')->group(function () {
        Route::view('how-does-it-work', 'front.pages.commerce.faq.how-does-it-work')->name('how-does-it-work');
        Route::view('technology', 'front.pages.commerce.faq.technology')->name('technology');
        Route::view('why-online-only', 'front.pages.commerce.faq.why-online-only')->name('why-online-only');
        Route::view('who-is-21k-class', 'front.pages.commerce.faq.who-is-21k-class')->name('who-is-21k-class');
        Route::view('faq', 'front.pages.commerce.faq.faq')->name('faq');
        Route::view('your-privacy', 'front.pages.commerce.faq.your-privacy')->name('your-privacy');
    });

    // #Being21k
    Route::name('being21k.')->group(function () {
        Route::view('student-work', 'front.pages.commerce.being21k.student-work')->name('student-work');
        Route::view('parents-speak', 'front.pages.commerce.being21k.parents-speak')->name('parents-speak');
        Route::get('meet-our-faculty', 'CommerceController@meetOurFaculty')->name('meet-our-faculty');
        Route::view('events', 'front.pages.commerce.being21k.events')->name('events');
        Route::view('media-hub', 'front.pages.commerce.being21k.media-hub')->name('media-hub');
        Route::view('insights', 'front.pages.commerce.being21k.insights')->name('insights');
    });

    // Connect
    Route::name('connect.')->group(function () {
        Route::view('contact-us', 'front.pages.commerce.connect.contact-us')->name('contact-us');
        Route::view('work-with-us', 'front.pages.commerce.connect.work-with-us')->name('work-with-us');
        Route::view('career-intern', 'front.pages.commerce.connect.career-intern')->name('career-intern');
        Route::view('career-software-engineer', 'front.pages.commerce.connect.career-software-engineer')->name('career-software-engineer');
        Route::view('social', 'front.pages.commerce.connect.social')->name('social');
    });

    // View course details
    Route::get('course/{course:slug}', function (Course $course) {
        $otherCourses = Course::where('category_id', $course->category_id)->where('id', '!=', $course->id)->get();

        return view('front.pages.commerce.course', [
            'course' => $course,
            'otherCourses' => $otherCourses
        ]);
    })->name('course-details');
});

