<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Back\CourseCategory;
use App\Models\Back\Tutor;

class HomeController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    // About us
    public function index()
    {
        $courseCategories = CourseCategory::with('courses')->where('enable_flag', 1)->get();
        return view('front.pages.index', [
            'courseCategories' => $courseCategories
        ]);
    }

    public function whatSetsUsApart()
    {
        return view('front.pages.about-us.what-sets-us-apart');
    }

    public function valuesAndEthos()
    {
        return view('front.pages.about-us.values-and-ethos');
    }

    public function tocGroup()
    {
        return view('front.pages.about-us.21k-group');
    }

    public function ourTeam()
    {
        return view('front.pages.about-us.our-team');
    }

    public function policyAndGovernance()
    {
        return view('front.pages.about-us.policy-and-governance');
    }




    // Academics
    public function neetTestSeries()
    {
        return view('front.pages.courses.neet-test-series');
    }

    public function neetExtensionCourse()
    {
        return view('front.pages.courses.neet-extension-course');
    }

    public function neetComprehensiveCourse()
    {
        return view('front.pages.courses.neet-comprehensive-course');
    }

    public function neetCrashCourse()
    {
        return view('front.pages.courses.neet-crash-course');
    }

    public function neetRepeaterCourse()
    {
        return view('front.pages.courses.neet-repeater-course');
    }

    public function jeeExtensionCourse()
    {
        return view('front.pages.courses.jee-extension-course');
    }

    public function jeeComprehensiveCourse()
    {
        return view('front.pages.courses.jee-comprehensive-course');
    }

    public function jeeCrashCourse()
    {
        return view('front.pages.courses.jee-crash-course');
    }

    public function jeeTestSeries()
    {
        return view('front.pages.courses.jee-test-series');
    }

    public function classPreFoundationCourse()
    {
        return view('front.pages.courses.class-pre-foundation-course');
    }

    public function classPreparatoryCourse()
    {
        return view('front.pages.courses.class-preparatory-course');
    }









    // Excellence
    public function olympiads()
    {
        return view('front.pages.excellence.olympiads');
    }

    public function nationalTalentExam()
    {
        return view('front.pages.excellence.national-talent-exam');
    }




    // Admissions
    public function howToApply()
    {
        return view('front.pages.admissions.how-to-apply');
    }

    public function keyDates()
    {
        return view('front.pages.admissions.key-dates');
    }

    public function feesAndScholarships()
    {
        return view('front.pages.admissions.fees-and-scholarships');
    }

    public function whoShouldEnrol()
    {
        return view('front.pages.admissions.who-should-enrol');
    }

    public function processAndRequirements()
    {
        return view('front.pages.admissions.process-and-requirements');
    }





    // How it works
    public function howDoesItWork()
    {
        return view('front.pages.how-it-works.how-does-it-work');
    }

    public function technology()
    {
        return view('front.pages.how-it-works.technology');
    }

    public function whyOnlineOnly()
    {
        return view('front.pages.how-it-works.why-online-only');
    }

    public function whoIs21kClass()
    {
        return view('front.pages.how-it-works.who-is-21k-class');
    }

    public function faq()
    {
        return view('front.pages.how-it-works.faq');
    }

    public function yourPrivacy()
    {
        return view('front.pages.how-it-works.your-privacy');
    }







    // #Being21k
    public function studentWork()
    {
        return view('front.pages.being21k.student-work');
    }

    public function parentsSpeak()
    {
        return view('front.pages.being21k.parents-speak');
    }

    public function meetOurFaculty()
    {
        $tutors = Tutor::with('category')->get();
        return view('front.pages.being21k.meet-our-faculty', [
            'tutors' => $tutors
        ]);
    }

    public function events()
    {
        return view('front.pages.being21k.events');
    }

    public function mediaHub()
    {
        return view('front.pages.being21k.media-hub');
    }

    public function insights()
    {
        return view('front.pages.being21k.insights');
    }






    // Connect
    public function contactUs()
    {
        return view('front.pages.connect.contact-us');
    }

    public function workWithUs()
    {
        return view('front.pages.connect.work-with-us');
    }

    public function careerIntern()
    {
        return view('front.pages.connect.career-intern');
    }

    public function careerSoftwareEngineer()
    {
        return view('front.pages.connect.career-software-engineer');
    }

    public function social()
    {
        return view('front.pages.connect.social');
    }

}
