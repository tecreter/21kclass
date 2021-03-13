<?php

use App\Models\Back\Course;
use Illuminate\Support\Facades\Route;

Route::prefix('tutoring')->name('tutoring.')->group(function () {

    Route::get('', 'TutoringController@index')->name('index');

    // About Us
    Route::name('about-us.')->group(function () {
        Route::view('what-sets-us-apart', 'front.pages.tutoring.about-us.what-sets-us-apart')->name('what-sets-us-apart');
        Route::view('values-and-ethos', 'front.pages.tutoring.about-us.values-and-ethos')->name('values-and-ethos');
        Route::view('21k-group', 'front.pages.tutoring.about-us.21k-group')->name('21k-group');
        Route::view('our-team', 'front.pages.tutoring.about-us.our-team')->name('our-team');
        Route::view('policy-and-governance', 'front.pages.tutoring.about-us.policy-and-governance')->name('policy-and-governance');
    });




    // Academics
    Route::name('academics.')->group(function () {
        Route::name('neet.')->group(function () {
            Route::view('21k-class-neet-tutoring', 'front.pages.tutoring.academics.neet.introduction')->name('introduction');
            Route::view('21k-neet-extension-course', 'front.pages.tutoring.academics.neet.extension-course')->name('extension-course');
            Route::view('21k-neet-comprehensive-course', 'front.pages.tutoring.academics.neet.comprehensive-course')->name('comprehensive-course');
            Route::view('21k-neet-crash-course', 'front.pages.tutoring.academics.neet.crash-course')->name('crash-course');
            Route::view('21k-neet-repeater-course', 'front.pages.tutoring.academics.neet.repeater-course')->name('repeater-course');
            Route::view('21k-neet-test-series', 'front.pages.tutoring.academics.neet.test-series')->name('test-series');
        });
        Route::name('jee.')->group(function () {
            Route::view('21k-class-jee-tutoring', 'front.pages.tutoring.academics.jee.introduction')->name('introduction');
            Route::view('21k-jee-extension-course', 'front.pages.tutoring.academics.jee.extension-course')->name('extension-course');
            Route::view('21k-jee-comprehensive-course', 'front.pages.tutoring.academics.jee.comprehensive-course')->name('comprehensive-course');
            Route::view('21k-jee-crash-course', 'front.pages.tutoring.academics.jee.crash-course')->name('crash-course');
            Route::view('21k-jee-test-series', 'front.pages.tutoring.academics.jee.test-series')->name('test-series');
        });
        Route::name('foundation-course.')->group(function () {
            Route::view('21k-class-foundation-course', 'front.pages.tutoring.academics.foundation-course.introduction')->name('introduction');
            Route::view('21k-class-pre-foundation-course-for-class-viii', 'front.pages.tutoring.academics.foundation-course.pre-foundation-course')->name('pre-foundation-course');
            Route::view('21k-class-preparatory-course-for-class-ix-and-x', 'front.pages.tutoring.academics.foundation-course.preparatory-foundation-course')->name('preparatory-foundation-course');
        });
        Route::view('21k-competitive-examination-practice-programs', 'front.pages.tutoring.academics.competitive-examination')->name('competitive-examination');
        Route::view('21k-ce-test-series', 'front.pages.tutoring.academics.ce-test-series')->name('ce-test-series');
    });



    // Excellence
    Route::name('excellence.')->group(function () {
        Route::view('olympiads', 'front.pages.tutoring.excellence.olympiads')->name('olympiads');
        Route::view('national-talent-exam', 'front.pages.tutoring.excellence.national-talent-exam')->name('national-talent-exam');
    });

    // Admissions
    Route::name('admission.')->group(function () {
        Route::view('how-to-apply', 'front.pages.tutoring.admission.how-to-apply')->name('how-to-apply');
        Route::view('key-dates', 'front.pages.tutoring.admission.key-dates')->name('key-dates');
        Route::view('fees-and-scholarships', 'front.pages.tutoring.admission.fees-and-scholarships')->name('fees-and-scholarships');
        Route::view('who-should-enrol', 'front.pages.tutoring.admission.who-should-enrol')->name('who-should-enrol');
        Route::view('process-and-requirements', 'front.pages.tutoring.admission.process-and-requirements')->name('process-and-requirements');
    });

    // How it works
    Route::name('how-it-works.')->group(function () {
        Route::view('how-does-it-work', 'front.pages.tutoring.how-it-works.how-does-it-work')->name('how-does-it-work');
        Route::view('technology', 'front.pages.tutoring.how-it-works.technology')->name('technology');
        Route::view('why-online-only', 'front.pages.tutoring.how-it-works.why-online-only')->name('why-online-only');
        Route::view('who-is-21k-class', 'front.pages.tutoring.how-it-works.who-is-21k-class')->name('who-is-21k-class');
        Route::view('faq', 'front.pages.tutoring.how-it-works.faq')->name('faq');
        Route::view('your-privacy', 'front.pages.tutoring.how-it-works.your-privacy')->name('your-privacy');
    });

    // #Being21k
    Route::name('being21k.')->group(function () {
        Route::view('student-work', 'front.pages.tutoring.being21k.student-work')->name('student-work');
        Route::view('parents-speak', 'front.pages.tutoring.being21k.parents-speak')->name('parents-speak');
        Route::view('meet-our-faculty', 'front.pages.tutoring.being21k.meet-our-faculty')->name('meet-our-faculty');
        Route::get('meet-our-faculty', 'TutoringController@meetOurFaculty')->name('meet-our-faculty');
        Route::view('events', 'front.pages.tutoring.being21k.events')->name('events');
        Route::view('media-hub', 'front.pages.tutoring.being21k.media-hub')->name('media-hub');
        Route::view('insights', 'front.pages.tutoring.being21k.insights')->name('insights');
    });

    // Connect
    Route::name('connect.')->group(function () {
        Route::view('contact-us', 'front.pages.tutoring.connect.contact-us')->name('contact-us');
        Route::view('work-with-us', 'front.pages.tutoring.connect.work-with-us')->name('work-with-us');
        Route::view('career-intern', 'front.pages.tutoring.connect.career-intern')->name('career-intern');
        Route::view('career-software-engineer', 'front.pages.tutoring.connect.career-software-engineer')->name('career-software-engineer');
        Route::view('social', 'front.pages.tutoring.connect.social')->name('social');
    });

    // View course details
    Route::get('course/{course:slug}', function (Course $course) {
        $otherCourses = Course::where('category_id', $course->category_id)->where('id', '!=', $course->id)->get();

        return view('front.pages.tutoring.course', [
            'course' => $course,
            'otherCourses' => $otherCourses
        ]);
    })->name('course-details');
});

