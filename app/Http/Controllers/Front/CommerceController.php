<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Back\CourseCategory;
use App\Models\Back\Tutor;

class CommerceController extends Controller
{
    public function index()
    {
        $courseCategories = CourseCategory::with('courses')->where('enable_flag', 1)->get();
        //$courseCategories = CourseCategory::with('courses')->where('type_id', 3)->where('enable_flag', 1)->get();
        return view('front.pages.commerce.index', [
            'courseCategories' => $courseCategories
        ]);
    }

    public function meetOurFaculty()
    {
        $tutors = Tutor::with('category')->where('type_id', 3)->get();
        return view('front.pages.commerce.being21k.meet-our-faculty', [
            'tutors' => $tutors
        ]);
    }
}
