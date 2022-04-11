<?php

namespace App\Http\Controllers;

use App\Models\CourseTeacher;
use App\Http\Requests\StoreCourseTeacherRequest;
use App\Http\Requests\UpdateCourseTeacherRequest;

class CourseTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCourseTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseTeacherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseTeacher  $courseTeacher
     * @return \Illuminate\Http\Response
     */
    public function show(CourseTeacher $courseTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseTeacher  $courseTeacher
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseTeacher $courseTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseTeacherRequest  $request
     * @param  \App\Models\CourseTeacher  $courseTeacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseTeacherRequest $request, CourseTeacher $courseTeacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseTeacher  $courseTeacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseTeacher $courseTeacher)
    {
        //
    }
}
