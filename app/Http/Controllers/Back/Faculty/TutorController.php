<?php

namespace App\Http\Controllers\Back\Faculty;

use App\Http\Controllers\Controller;
use App\Models\Back\Course;
use App\Models\Back\CourseCategory;
use App\Models\Back\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Mockery\Exception;

class TutorController extends Controller
{
    protected $requestParams = '';

    public function index()
    {
        return view('back.faculty.tutor.list', [
            'courseList' => Course::with('category')->where('enable_flag', '1')->get()
        ]);
    }

    public function create()
    {
        $tutorCategory = CourseCategory::where('enable_flag', 1)->orderBy('created_at', 'asc')->get();

        if (count($tutorCategory) < 1) {
            return redirect()->route('back.course.category.index')->with('warning', 'Add/Enable a category to create new course!');
        }

        return view('back.faculty.tutor.create', [
            'courseCategories' => CourseCategory::where('enable_flag', '1')->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:course_categories,id',
            'honorifics' => 'nullable',
            'first_name' => 'required|min:1|max:255',
            'last_name' => 'nullable|min:1|max:255',
            'qualification' => 'required|min:1|max:255',
            'position' => 'nullable|max:255',
            'excerpt' => 'nullable',
            'profile_picture' => 'nullable|image|mimes:gif,jpeg,jpg,bmp,png|max:2048',
            'order' => 'nullable|numeric',
            'social_facebook' => 'nullable',
            'social_twitter' => 'nullable',
            'social_linkedin' => 'nullable',
            'social_google' => 'nullable',
            'social_quora' => 'nullable',
        ]);

        $tutor = new Tutor();
        $tutor->category_id = request('category_id');
        $tutor->honorifics = request('honorifics');
        $tutor->first_name = request('first_name');
        $tutor->last_name = request('last_name');
        $tutor->qualification = request('qualification');
        $tutor->position = request('position');
        $tutor->excerpt = request('excerpt');
        $tutor->profile_picture = request('profile_picture');
        $tutor->order = request('order');
        $tutor->social_facebook = request('social_facebook');
        $tutor->social_twitter = request('social_twitter');
        $tutor->social_linkedin = request('social_linkedin');
        $tutor->social_google = request('social_google');
        $tutor->social_quora = request('social_quora');

        if (request('profile_picture')) {
            $profile_picture = request('profile_picture');
            $tutor->profile_picture = Storage::disk('public')->putFileAs('tutor_profile_thumb', $profile_picture, time() . '.' . $profile_picture->getClientOriginalName());
        }

        $tutor->save();

        return redirect()->route('back.faculty.tutor.index')->with('success', 'New tutor added!');
    }

    public function edit($id)
    {
        return view('back.faculty.tutor.edit', ([
            'tutor' => Tutor::findOrFail($id),
            'courseCategories' => CourseCategory::where('enable_flag', '1')->get()
        ]));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:course_categories,id',
            'honorifics' => 'nullable',
            'first_name' => 'required|min:1|max:255',
            'last_name' => 'nullable|min:1|max:255',
            'qualification' => 'required|min:1|max:255',
            'position' => 'nullable|max:255',
            'excerpt' => 'nullable',
            'profile_picture' => 'nullable|image|mimes:gif,jpeg,jpg,bmp,png|max:2048',
            'order' => 'nullable|numeric',
            'social_facebook' => 'nullable',
            'social_twitter' => 'nullable',
            'social_linkedin' => 'nullable',
            'social_google' => 'nullable',
            'social_quora' => 'nullable',
        ]);

        $tutor = Tutor::findOrFail($id);
        $tutor->category_id = request('category_id');
        $tutor->honorifics = request('honorifics');
        $tutor->first_name = request('first_name');
        $tutor->last_name = request('last_name');
        $tutor->qualification = request('qualification');
        $tutor->position = request('position');
        $tutor->excerpt = request('excerpt');
        $tutor->order = request('order');
        $tutor->social_facebook = request('social_facebook');
        $tutor->social_twitter = request('social_twitter');
        $tutor->social_linkedin = request('social_linkedin');
        $tutor->social_google = request('social_google');
        $tutor->social_quora = request('social_quora');

        if ($request->hasFile('profile_picture')) {
            // delete old thumb image
            Storage::disk('public')->delete($tutor->profile_picture);

            // store new thumb image
            $profile_picture = request('profile_picture');
            $tutor->profile_picture = Storage::disk('public')->putFileAs('tutor_profile_thumb', $profile_picture, time() . '.' . $profile_picture->getClientOriginalName());
        }

        $tutor->save();

        return redirect()->route('back.faculty.tutor.index')->with('success', 'Tutor information updated!');
    }

    public function destroy($id, Request $request)
    {
        if ($request->ajax()) {
            try {

                // Check if any Tutor is registered under this category
                $tutor = Tutor::findOrFail($id);

                // Delete tutor profile_picture image
                if (!is_null($tutor)) {
                    Storage::disk('public')->delete($tutor->profile_picture);
                }

                $tutor->delete();

                return response()->json(RESULT_OK());
            } catch (Exception $e) {
                Log::notice($e->getMessage());
            }
        }
        return response()->json(RESULT_BAD_REQUEST());
    }

    public function getTutorsList(Request $request)
    {
        if ($request->ajax()) {
            try {
                $this->requestParams = $request->all();
                $start = $this->requestParams['start'];
                $length = $this->requestParams['length'];

                $tutorLists = array();
                if(count($this->requestParams['order']) > 0) {
                    foreach ($this->requestParams['order'] as $order) {
                        switch ($order['column']) {
                            case '0':
                                $tutorLists = Tutor::with('category')->orderBy('first_name', $order['dir'])->take($length)->skip($start)->get();
                                break;

                            case '4':
                                $tutorLists = Tutor::with('category')->orderBy('order', $order['dir'])->take($length)->skip($start)->get();
                                break;

                            case '5':
                                $tutorLists = Tutor::with('category')->orderBy('created_at', $order['dir'])->take($length)->skip($start)->get();
                                break;
                        }
                    }
                }
                else {
                    $tutorLists = Tutor::with('category')->orderBy('created_at', 'asc')->take($length)->skip($start)->get();
                }

                if(count($tutorLists) > 0) {
                    $result['recordsTotal'] = count($tutorLists);
                    $result['recordsFiltered'] = Tutor::count();
                    $result['data'] = $tutorLists;
                }
                else {
                    $result['data'] = '';
                    $result['recordsTotal'] = $result['recordsFiltered'] = 0;
                }
                return response()->json($result);
            } catch (Exception $e) {
                Log::notice($e->getMessage());
            }
        }
        return response()->json(RESULT_BAD_REQUEST());
    }

}
