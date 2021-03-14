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
        Route::view('introduction-to-virtual-tutoring', 'front.pages.tutoring.academics.introduction')->name('introduction');
        Route::view('year-long-course-ix-and-x-science-and-maths-combo', 'front.pages.tutoring.academics.science-maths-combo-ix-x')->name('science-maths-combo-ix-x');
        Route::view('year-long-course-ix-and-x-individual-subject', 'front.pages.tutoring.academics.individual-subject-ix-x')->name('individual-subject-ix-x');
        Route::view('year-long-course-xi-and-xii-science-and-maths-combo', 'front.pages.tutoring.academics.science-maths-combo-xi-xii')->name('science-maths-combo-xi-xii');
        Route::view('year-long-course-xi-and-xii-individual-subject', 'front.pages.tutoring.academics.individual-subject-xi-xii')->name('individual-subject-xi-xii');
    });



    // Electives
    Route::name('electives.')->group(function () {
        Route::view('language', 'front.pages.tutoring.electives.language')->name('language');
        Route::view('social-science', 'front.pages.tutoring.electives.social-science')->name('social-science');
    });

    // Admissions
    Route::name('admission.')->group(function () {
        Route::view('how-to-apply', 'front.pages.tutoring.admission.how-to-apply')->name('how-to-apply');
        Route::view('key-dates', 'front.pages.tutoring.admission.key-dates')->name('key-dates');
        Route::view('fees-and-scholarships', 'front.pages.tutoring.admission.fees-and-scholarships')->name('fees-and-scholarships');
        Route::view('who-should-enrol', 'front.pages.tutoring.admission.who-should-enrol')->name('who-should-enrol');
    });

    // FAQ
    Route::name('faq.')->group(function () {
        Route::view('how-does-it-work', 'front.pages.tutoring.faq.how-does-it-work')->name('how-does-it-work');
        Route::view('technology', 'front.pages.tutoring.faq.technology')->name('technology');
        Route::view('why-online-only', 'front.pages.tutoring.faq.why-online-only')->name('why-online-only');
        Route::view('who-is-21k-class', 'front.pages.tutoring.faq.who-is-21k-class')->name('who-is-21k-class');
        Route::view('faq', 'front.pages.tutoring.faq.faq')->name('faq');
        Route::view('your-privacy', 'front.pages.tutoring.faq.your-privacy')->name('your-privacy');
    });

    // #Being21k
    Route::name('being21k.')->group(function () {
        Route::view('student-work', 'front.pages.tutoring.being21k.student-work')->name('student-work');
        Route::view('parents-speak', 'front.pages.tutoring.being21k.parents-speak')->name('parents-speak');
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

