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
        Route::name('neet.')->group(function () {
            Route::view('21k-class-neet-commerce', 'front.pages.commerce.academics.neet.introduction')->name('introduction');
            Route::view('21k-neet-extension-course', 'front.pages.commerce.academics.neet.extension-course')->name('extension-course');
            Route::view('21k-neet-comprehensive-course', 'front.pages.commerce.academics.neet.comprehensive-course')->name('comprehensive-course');
            Route::view('21k-neet-crash-course', 'front.pages.commerce.academics.neet.crash-course')->name('crash-course');
            Route::view('21k-neet-repeater-course', 'front.pages.commerce.academics.neet.repeater-course')->name('repeater-course');
            Route::view('21k-neet-test-series', 'front.pages.commerce.academics.neet.test-series')->name('test-series');
        });
        Route::name('jee.')->group(function () {
            Route::view('21k-class-jee-commerce', 'front.pages.commerce.academics.jee.introduction')->name('introduction');
            Route::view('21k-jee-extension-course', 'front.pages.commerce.academics.jee.extension-course')->name('extension-course');
            Route::view('21k-jee-comprehensive-course', 'front.pages.commerce.academics.jee.comprehensive-course')->name('comprehensive-course');
            Route::view('21k-jee-crash-course', 'front.pages.commerce.academics.jee.crash-course')->name('crash-course');
            Route::view('21k-jee-test-series', 'front.pages.commerce.academics.jee.test-series')->name('test-series');
        });
        Route::name('foundation-course.')->group(function () {
            Route::view('21k-class-foundation-course', 'front.pages.commerce.academics.foundation-course.introduction')->name('introduction');
            Route::view('21k-class-pre-foundation-course-for-class-viii', 'front.pages.commerce.academics.foundation-course.pre-foundation-course')->name('pre-foundation-course');
            Route::view('21k-class-preparatory-course-for-class-ix-and-x', 'front.pages.commerce.academics.foundation-course.preparatory-foundation-course')->name('preparatory-foundation-course');
        });
        Route::view('21k-competitive-examination-practice-programs', 'front.pages.commerce.academics.competitive-examination')->name('competitive-examination');
        Route::view('21k-ce-test-series', 'front.pages.commerce.academics.ce-test-series')->name('ce-test-series');
    });



    // Excellence
    Route::name('excellence.')->group(function () {
        Route::view('olympiads', 'front.pages.commerce.excellence.olympiads')->name('olympiads');
        Route::view('national-talent-exam', 'front.pages.commerce.excellence.national-talent-exam')->name('national-talent-exam');
    });

    // Admissions
    Route::name('admission.')->group(function () {
        Route::view('how-to-apply', 'front.pages.commerce.admission.how-to-apply')->name('how-to-apply');
        Route::view('key-dates', 'front.pages.commerce.admission.key-dates')->name('key-dates');
        Route::view('fees-and-scholarships', 'front.pages.commerce.admission.fees-and-scholarships')->name('fees-and-scholarships');
        Route::view('who-should-enrol', 'front.pages.commerce.admission.who-should-enrol')->name('who-should-enrol');
        Route::view('process-and-requirements', 'front.pages.commerce.admission.process-and-requirements')->name('process-and-requirements');
    });

    // How it works
    Route::name('how-it-works.')->group(function () {
        Route::view('how-does-it-work', 'front.pages.commerce.how-it-works.how-does-it-work')->name('how-does-it-work');
        Route::view('technology', 'front.pages.commerce.how-it-works.technology')->name('technology');
        Route::view('why-online-only', 'front.pages.commerce.how-it-works.why-online-only')->name('why-online-only');
        Route::view('who-is-21k-class', 'front.pages.commerce.how-it-works.who-is-21k-class')->name('who-is-21k-class');
        Route::view('faq', 'front.pages.commerce.how-it-works.faq')->name('faq');
        Route::view('your-privacy', 'front.pages.commerce.how-it-works.your-privacy')->name('your-privacy');
    });

    // #Being21k
    Route::name('being21k.')->group(function () {
        Route::view('student-work', 'front.pages.commerce.being21k.student-work')->name('student-work');
        Route::view('parents-speak', 'front.pages.commerce.being21k.parents-speak')->name('parents-speak');
        Route::view('meet-our-faculty', 'front.pages.commerce.being21k.meet-our-faculty')->name('meet-our-faculty');
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

