<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    }
    public function index()
    {

        $course = Course::query();
        $agetn = $course->where('type', 'course');
        if ($keyword = request('search')) {
            $agetn = $course->where('name', 'LIKE', "%{$keyword}%")->orWhere('family', 'LIKE', "%{$keyword}%")->orWhere('code', 'LIKE', "%{$keyword}%");
        }
        $course = $course->latest()->paginate(25);
        return view('admin.course.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = new Course();
        $action = URL::route('course.store');
        $title = 'افزودن دوره ';
        return view('admin.course.create',
            compact(
                [
                    'course',
                    'action',
                    'title',
                ]
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = Course::create($request->all());
        alert()->success('اطلاعات با موفقیت ثبت شد', 'پیغام سیستم')->persistent("تایید");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('Admin.course.profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $action = URL::route('course.update', ['course' => $course->id]);
        $title = 'ویرایش دوره ';
        return view('Admin.course.create', compact(['course', 'action', 'title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->update($request->all());

        alert()->success('ویرایش  با موفقیت انجام شد', 'پیغام سیستم')->persistent('تایید');
        return redirect(route('course.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        alert()->success('حذف با موفقیت انجام شد', 'پیغام سیستم')->persistent('تایید');
        return back();
    }
}
