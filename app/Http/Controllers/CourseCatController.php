<?php

namespace App\Http\Controllers;

use App\Models\CourseCat;
use App\Http\Requests\StoreCourseCatRequest;
use App\Http\Requests\UpdateCourseCatRequest;

class CourseCatController extends Controller
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
     * @param  \App\Http\Requests\StoreCourseCatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseCatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseCat  $courseCat
     * @return \Illuminate\Http\Response
     */
    public function show(CourseCat $courseCat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseCat  $courseCat
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseCat $courseCat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseCatRequest  $request
     * @param  \App\Models\CourseCat  $courseCat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseCatRequest $request, CourseCat $courseCat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseCat  $courseCat
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseCat $courseCat)
    {
        //
    }
}
