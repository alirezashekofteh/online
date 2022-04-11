<?php

namespace App\Http\Controllers;

use App\Models\Metting;
use App\Http\Requests\StoreMettingRequest;
use App\Http\Requests\UpdateMettingRequest;

class MettingController extends Controller
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
     * @param  \App\Http\Requests\StoreMettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Metting  $metting
     * @return \Illuminate\Http\Response
     */
    public function show(Metting $metting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Metting  $metting
     * @return \Illuminate\Http\Response
     */
    public function edit(Metting $metting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMettingRequest  $request
     * @param  \App\Models\Metting  $metting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMettingRequest $request, Metting $metting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Metting  $metting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metting $metting)
    {
        //
    }
}
