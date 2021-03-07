<?php

use App\Models\Back\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;

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







    // View course details
    Route::get('/course/{course:slug}', function (Course $course) {
        $otherCourses = Course::where('category_id', $course->category_id)->where('id', '!=', $course->id)->get();

        return view('front.pages.course', [
            'course' => $course,
            'otherCourses' => $otherCourses
        ]);
    })->name('course-details');

    // Course add to cart
    Route::post('/add-to-cart', function (Request $request) {

        $session_cart_course_ids = session('SESSION_TOC_CART_COURSE_IDS', []);
        $session_cart_course_details = session('SESSION_TOC_CART_COURSE_DETAILS', []);

        if (!in_array((int)$request->course_id, $session_cart_course_ids)) {
            $session_cart_course_ids[] = (int) $request->course_id;
            session(['SESSION_TOC_CART_COURSE_IDS' => $session_cart_course_ids], []);

            $course_info = Course::where('id', (int) $request->course_id)->first();
            $session_cart_course_details[] = array(
                'id' => (int)$request->course_id,
                'name' => $course_info->name,
                'slug' => $course_info->slug,
                'excerpt' => $course_info->excerpt,
                'price' => $course_info->price,
                'original_price' => $course_info->original_price,
                'thumb' => $course_info->thumb,
            );
            session(['SESSION_TOC_CART_COURSE_DETAILS' => $session_cart_course_details], []);

            return redirect()->route('course-details', ['course'=>$course_info->slug]);
        }
        else {
            return redirect()->route('index');
        }
    })->name('add-to-cart');

    // Remove course from cart
    Route::post('/remove-from-cart', function (Request $request) {

        $session_cart_course_ids = session('SESSION_TOC_CART_COURSE_IDS', []);
        $session_cart_course_details = session('SESSION_TOC_CART_COURSE_DETAILS', []);

        $req_course_id = (int)$request->course_id;

        $index = array_search($req_course_id, $session_cart_course_ids);

        if ($index === false) { // course_id not found in the shopping cart session
            return redirect()->route('cart');
        }
        else {
            // remove cart session array for the selected course_id
            array_splice($session_cart_course_ids, $index, 1);
            array_splice($session_cart_course_details, $index, 1);

            session(['SESSION_TOC_CART_COURSE_IDS' => $session_cart_course_ids], []);
            session(['SESSION_TOC_CART_COURSE_DETAILS' => $session_cart_course_details], []);

            return redirect()->route('cart');

        }
    })->name('remove-from-cart');

    // View cart page
    Route::get('/cart', function () {
        return view('front.pages.cart');
    })->name('cart');

    // View checkout page
    Route::get('/checkout', function () {
        return view('front.pages.checkout');
    })->name('checkout');

    // Checkout to Payment Gateway
    Route::post('/checkout', function (Request $request) {


        $request->validate([
            'first_name' => 'required|min:1|max:1',
            'last_name' => 'required|min:1|max:1',
            'email_address' => 'required|email|max:100',
            'phone_number' => 'required|max:15',
            'apt_name' => 'required|max:100',
            'street_address' => 'required|max:150',
            'city_address' => 'required|max:150',
            'country' => 'required|max:5',
            'postcode' => 'required|max:10',
            'termsCheckbox' => [
                'required',
                Rule::in(['on']),
            ],
            'subscribeCheckbox' => [
                'nullable',
                Rule::in(['on']),
            ]
        ]);


        dd( $request->all() );

        return view('front.pages.checkout');
    })->name('checkout-store');







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
