<?php

namespace App\Http\Controllers\Back\Course;

use App\Http\Controllers\Controller;
use App\Models\Back\Course;
use App\Models\Back\CourseCategory;
use App\Models\Back\Tutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;

class CategoryController extends Controller
{
    protected $requestParams = '';

    public function index()
    {
        return view('back.course.category.list', [
            'courseCategoryList' => CourseCategory::with('courses')->where('enable_flag', '1')->get()
        ]);
    }

    public function create()
    {
        return view('back.course.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|min:2|max:255|unique:App\Models\Back\CourseCategory,name,' . request('name'), // unique:table,column,except,idColumn
        ]);

        $courseCategory = new CourseCategory();
        $courseCategory->name = request('name');

        $courseCategory->save();

        return redirect()->route('back.course.category.index')->with('success', 'New course category information added!');
    }

    public function edit($id)
    {
        return view('back.course.category.edit', ([
            'courseCategory' => CourseCategory::findOrFail($id)
        ]));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|min:2|max:255|unique:App\Models\Back\CourseCategory,name,' . request('name'), // unique:table,column,except,idColumn
        ]);

        $courseCategory = CourseCategory::findOrFail($id);
        $courseCategory->name =  $request->get('name');
        $courseCategory->save();

        return redirect()->route('back.course.category.index')->with('success', 'Course category information updated!');
    }

    public function destroy($id, Request $request)
    {
        if ($request->ajax()) {
            try {

                // Check if any Course are registered under this category
                $course = Course::where('category_id', $id)->first();

                if (!is_null($course)) {
                    return response()->json(RESULT_BAD_REQUEST_ERROR_CODE(1));
                }

                // Delete course thumbnail images
                if (!is_null($course)) {
                    Storage::disk('public')->delete($course->thumb);
                }

                $courseCategory = CourseCategory::findOrFail($id);
                $courseCategory->delete();

                return response()->json(RESULT_OK());
            } catch (Exception $e) {
                Log::notice($e->getMessage());
            }
        }
        return response()->json(RESULT_BAD_REQUEST());
    }

    public function getCourseCategoryList(Request $request)
    {
        if ($request->ajax()) {
            try {
                $this->requestParams = $request->all();
                $start = $this->requestParams['start'];
                $length = $this->requestParams['length'];

                $categoryLists = array();
                if(count($this->requestParams['order']) > 0) {
                    foreach ($this->requestParams['order'] as $order) {
                        switch ($order['column']) {
                            case '0':
                                $categoryLists = CourseCategory::with('courses')->orderBy('name', $order['dir'])->take($length)->skip($start)->get();
                                break;

                            case '3':
                                $categoryLists = CourseCategory::with('courses')->orderBy('created_at', $order['dir'])->take($length)->skip($start)->get();
                                break;
                        }
                    }
                }
                else {
                    $categoryLists = CourseCategory::with('courses')->orderBy('created_at', 'asc')->take($length)->skip($start)->get();
                }

                if(count($categoryLists) > 0) {
                    $result['recordsTotal'] = count($categoryLists);
                    $result['recordsFiltered'] = CourseCategory::count();
                    $result['data'] = $categoryLists;
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

    public function updateCourseCategoryEnableFlag(Request $request, CourseCategory $courseCategory)
    {
        if ($request->ajax()) {
            try {
                $info = $courseCategory->find($request->id);
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
