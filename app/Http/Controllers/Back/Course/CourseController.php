<?php

namespace App\Http\Controllers\Back\Course;

use App\Http\Controllers\Controller;
use App\Models\Back\Course;
use App\Models\Back\CourseCategory;
use App\Models\Back\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Mockery\Exception;

class CourseController extends Controller
{
    protected $requestParams = '';

    public function index()
    {
        return view('back.course.types.list', [
            'courseList' => Course::with('category')->where('enable_flag', '1')->get()
        ]);
    }

    public function create()
    {
        $courseCategory = CourseCategory::where('enable_flag', 1)->orderBy('created_at', 'asc')->get();

        if (count($courseCategory) < 1) {
            return redirect()->route('back.course.category.index')->with('warning', 'Add/Enable a category to create new course!');
        }

        return view('back.course.types.create', [
            'courseCategories' => CourseCategory::where('enable_flag', '1')->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:course_categories,id',
            'name' => 'required|unique:courses|max:50',
            'price' => 'required|numeric|between:0,9999999.99',
            'original_price' => 'required|numeric|between:0,9999999.99|gte:price',
            'excerpt' => 'required|max:100',
            'description' => 'required',
            'features' => 'nullable',
            'rating' => 'required|numeric|between:0,5.00',
            'is_new' => [
                'required',
                Rule::in([0, 1]),
            ],
            'thumb' => [
                'required',
                Rule::dimensions()->minWidth(500)->minHeight(300)->maxWidth(500)->maxHeight(300),
            ],
        ]);

        if (!$request->hasFile('thumb')) {
            return redirect()->back()->withInput();
        }

        $course = new Course();
        $course->category_id = request('category_id');
        $course->name = request('name');
        $course->slug = Str::slug(request('name'), '-');
        $course->price = request('price');
        $course->original_price = request('original_price');
        $course->excerpt = request('excerpt');
        $course->description = request('description');
        $course->features = request('features');
        $course->rating = request('rating');
        $course->is_new = request('is_new');

        $thumb_img = request('thumb');
        $course->thumb = Storage::disk('public')->putFileAs('course_thumb', $thumb_img, time() . '.' . $thumb_img->getClientOriginalName());

        $course->save();

        return redirect()->route('back.course.types.index')->with('success', 'New course category information added!');
    }

    public function edit($id)
    {
        $courseCategory = CourseCategory::where('enable_flag', 1)->orderBy('created_at', 'asc')->get();

        return view('back.course.types.edit', ([
            'course' => Course::findOrFail($id),
            'courseCategories' => CourseCategory::where('enable_flag', '1')->get()
        ]));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required|exists:course_categories,id',
            'name' => 'required|min:2|max:50|unique:App\Models\Back\Course,name,' . $id,
            'price' => 'required|numeric|between:0,9999999.99',
            'original_price' => 'required|numeric|between:0,9999999.99|gte:price',
            'excerpt' => 'required|max:100',
            'description' => 'required',
            'features' => 'nullable',
            'rating' => 'required|numeric|between:0,5.00',
            'is_new' => [
                'required',
                Rule::in([0, 1]),
            ],
            'thumb' => [
                'nullable',
                Rule::dimensions()->minWidth(500)->minHeight(300)->maxWidth(500)->maxHeight(300),
            ],
        ]);

        $course = Course::findOrFail($id);
        $course->category_id =  $request->get('category_id');
        $course->name =  $request->get('name');
        $course->slug = Str::slug(request('name'), '-');
        $course->price = request('price');
        $course->original_price = request('original_price');
        $course->excerpt =  $request->get('excerpt');
        $course->description =  $request->get('description');
        $course->features =  $request->get('features');
        $course->rating =  $request->get('rating');
        $course->is_new =  $request->get('is_new');

        if ($request->hasFile('thumb')) {
            // delete old thumb image
            Storage::disk('public')->delete($course->thumb);

            // store new thumb image
            $thumb_img = request('thumb');
            $course->thumb = Storage::disk('public')->putFileAs('course_thumb', $thumb_img, time() . '.' . $thumb_img->getClientOriginalName());
        }
        else {
            $errors_list = [];
            if (!isset($course->thumb)) $errors_list['thumb'] = 'Thumbnail image is required.';

            if (!isset($course->thumb)) {
                return redirect()->back()->withErrors($errors_list)->withInput();
            }
        }

        $course->save();

        return redirect()->route('back.course.types.index')->with('success', 'Course information updated!');
    }

    public function destroy($id, Request $request)
    {
        if ($request->ajax()) {
            try {
                $course = Course::findOrFail($id)->first();
                $course->delete();

                return response()->json(RESULT_OK());
            } catch (Exception $e) {
                Log::notice($e->getMessage());
            }
        }
        return response()->json(RESULT_BAD_REQUEST());
    }

    public function getCourseTypeList(Request $request)
    {
        if ($request->ajax()) {
            try {
                $this->requestParams = $request->all();
                $start = $this->requestParams['start'];
                $length = $this->requestParams['length'];

                $courseTypeLists = array();
                if(isset($this->requestParams['order']) && count($this->requestParams['order']) > 0) {
                    foreach ($this->requestParams['order'] as $order) {
                        switch ($order['column']) {
                            case '0':
                                $courseTypeLists = Course::with('category')->orderBy('name', $order['dir'])->take($length)->skip($start)->get();
                                break;

                            case '4':
                                $courseTypeLists = Course::with('category')->orderBy('created_at', $order['dir'])->take($length)->skip($start)->get();
                                break;
                        }
                    }
                }
                else {
                    $courseTypeLists = Course::with('category')->orderBy('created_at', 'asc')->take($length)->skip($start)->get();
                }

                if(count($courseTypeLists) > 0) {
                    $result['recordsTotal'] = count($courseTypeLists);
                    $result['recordsFiltered'] = Course::count();
                    $result['data'] = $courseTypeLists;
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

    public function updateCoursesEnableFlag(Request $request, Course $course)
    {
        if ($request->ajax()) {
            try {
                $info = $course->find($request->id);
                $info->enable_flag = $request->enable_flag;
                $info->save();
                return response()->json(RESULT_OK());
            } catch (Exception $e) {
                Log::notice($e->getMessage());
            }
        }
        return response()->json(RESULT_BAD_REQUEST());
    }

}
