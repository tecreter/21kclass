<?php

use App\Models\Back\Course;
use Illuminate\Support\Facades\Route;

Route::namespace('Front')->group(function () {

    Route::get('/', 'HomeController@index')->name('index');

    // About Us
    Route::get('/what-sets-us-apart', 'HomeController@whatSetsUsApart')->name('what-sets-us-apart');
    Route::get('/values-and-ethos', 'HomeController@valuesAndEthos')->name('values-and-ethos');
    Route::get('/21k-group', 'HomeController@tocGroup')->name('21k-group');
    Route::get('/our-team', 'HomeController@ourTeam')->name('our-team');
    Route::get('/our-partners', 'HomeController@ourPartners')->name('our-partners');
    Route::get('/policy-and-governance', 'HomeController@policyAndGovernance')->name('policy-and-governance');

    // Academics
    Route::get('/neet-test-series', 'HomeController@neetTestSeries')->name('neet-test-series');
    Route::get('/neet-2021-personal-coaching', 'HomeController@neet2021PersonalCoaching')->name('neet-2021-personal-coaching');
    Route::get('/neet-2022-full-year', 'HomeController@neet2022FullYear')->name('neet-2022-full-year');
    Route::get('/iit-jee-2022-full-year', 'HomeController@iitJee2022FullYear')->name('iit-jee-2022-full-year');
    Route::get('/olympiads', 'HomeController@olympiads')->name('olympiads');
    Route::get('/national-talent-exam', 'HomeController@nationalTalentExam')->name('national-talent-exam');

    // Admissions
    Route::get('/how-to-apply', 'HomeController@howToApply')->name('how-to-apply');
    Route::get('/key-dates', 'HomeController@keyDates')->name('key-dates');
    Route::get('/fees-finance-and-scholarships', 'HomeController@feesFinanceAndScholarships')->name('fees-finance-and-scholarships');
    Route::get('/who-should-enrol', 'HomeController@whoShouldEnrol')->name('who-should-enrol');
    Route::get('/process-and-requirements', 'HomeController@processAndRequirements')->name('process-and-requirements');

    // How it works
    Route::get('/how-does-it-work', 'HomeController@howDoesItWork')->name('how-does-it-work');
    Route::get('/technology', 'HomeController@technology')->name('technology');
    Route::get('/why-online-only', 'HomeController@whyOnlineOnly')->name('why-online-only');
    Route::get('/who-is-21k-class', 'HomeController@whoIs21kClass')->name('who-is-21k-class');
    Route::get('/faq', 'HomeController@faq')->name('faq');
    Route::get('/health-and-wealthness', 'HomeController@healthAndWealthness')->name('health-and-wealthness');
    Route::get('/your-privacy', 'HomeController@yourPrivacy')->name('your-privacy');
    Route::get('/safety-and-security', 'HomeController@safetyAndSecurity')->name('safety-and-security');

    // #Being21k
    Route::get('/student-work', 'HomeController@studentWork')->name('student-work');
    Route::get('/parents-speak', 'HomeController@parentsSpeak')->name('parents-speak');
    Route::get('/meet-our-faculty', 'HomeController@meetOurFaculty')->name('meet-our-faculty');
    Route::get('/events', 'HomeController@events')->name('events');
    Route::get('/media-hub', 'HomeController@mediaHub')->name('media-hub');
    Route::get('/insights', 'HomeController@insights')->name('insights');

    // Connect
    Route::get('/contact-us', 'HomeController@contactUs')->name('contact-us');
    Route::get('/work-with-us', 'HomeController@workWithUs')->name('work-with-us');
    Route::get('/career-intern', 'HomeController@careerIntern')->name('career-intern');
    Route::get('/career-software-engineer', 'HomeController@careerSoftwareEngineer')->name('career-software-engineer');
    Route::get('/social', 'HomeController@social')->name('social');

    Route::get('/course/{course:slug}', function (Course $course) {
        $otherCourses = Course::where('category_id', $course->category_id)->where('id', '!=', $course->id)->get();

        return view('front.pages.course', [
            'course' => $course,
            'otherCourses' => $otherCourses
        ]);
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
