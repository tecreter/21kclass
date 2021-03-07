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

//        if (session()->get('SESSION_TOC_CART_COURSE_IDS')) {
//            dd( session()->all() );
//        }

        $courseCategories = CourseCategory::with('courses')->where('enable_flag', 1)->get();
        return view('front.pages.index', [
            'courseCategories' => $courseCategories
        ]);
    }

    public function whatSetsUsApart()
    {
        return view('front.pages.what-sets-us-apart');
    }

    public function valuesAndEthos()
    {
        return view('front.pages.values-and-ethos');
    }

    public function tocGroup()
    {
        return view('front.pages.21k-group');
    }

    public function ourTeam()
    {
        return view('front.pages.our-team');
    }

    public function ourPartners()
    {
        return view('front.pages.our-partners');
    }

    public function policyAndGovernance()
    {
        return view('front.pages.policy-and-governance');
    }





    // Academics
    public function neetTestSeries()
    {
        return view('front.pages.neet-test-series');
    }

    public function neet2021PersonalCoaching()
    {
        return view('front.pages.neet-2021-personal-coaching');
    }

    public function neet2022FullYear()
    {
        return view('front.pages.neet-2022-full-year');
    }

    public function iitJee2022FullYear()
    {
        return view('front.pages.iit-jee-2022-full-year');
    }

    public function olympiads()
    {
        return view('front.pages.olympiads');
    }

    public function nationalTalentExam()
    {
        return view('front.pages.national-talent-exam');
    }




    // Admissions
    public function howToApply()
    {
        return view('front.pages.how-to-apply');
    }

    public function keyDates()
    {
        return view('front.pages.key-dates');
    }

    public function feesFinanceAndScholarships()
    {
        return view('front.pages.fees-finance-and-scholarships');
    }

    public function whoShouldEnrol()
    {
        return view('front.pages.who-should-enrol');
    }

    public function processAndRequirements()
    {
        return view('front.pages.process-and-requirements');
    }





    // How it works
    public function howDoesItWork()
    {
        return view('front.pages.how-does-it-work');
    }

    public function technology()
    {
        return view('front.pages.technology');
    }

    public function whyOnlineOnly()
    {
        return view('front.pages.why-online-only');
    }

    public function whoIs21kClass()
    {
        return view('front.pages.who-is-21k-class');
    }

    public function faq()
    {
        return view('front.pages.faq');
    }

    public function healthAndWealthness()
    {
        return view('front.pages.health-and-wealthness');
    }

    public function yourPrivacy()
    {
        return view('front.pages.your-privacy');
    }

    public function safetyAndSecurity()
    {
        return view('front.pages.safety-and-security');
    }






    // #Being21k
    public function studentWork()
    {
        return view('front.pages.student-work');
    }

    public function parentsSpeak()
    {
        return view('front.pages.parents-speak');
    }

    public function meetOurFaculty()
    {
        $tutors = Tutor::with('category')->orderBy('order')->get();
        return view('front.pages.meet-our-faculty', [
            'tutors' => $tutors
        ]);
    }

    public function events()
    {
        return view('front.pages.events');
    }

    public function mediaHub()
    {
        return view('front.pages.media-hub');
    }

    public function insights()
    {
        return view('front.pages.insights');
    }






    // Connect
    public function contactUs()
    {
        return view('front.pages.contact-us');
    }

    public function workWithUs()
    {
        return view('front.pages.work-with-us');
    }

    public function careerIntern()
    {
        return view('front.pages.career-intern');
    }

    public function careerSoftwareEngineer()
    {
        return view('front.pages.career-software-engineer');
    }

    public function social()
    {
        return view('front.pages.social');
    }

}
