<?php

namespace App\Http\Controllers;

use App\Models\BlackBelt;
use Illuminate\Http\Request;

class BlackBeltController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blackbelt.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlackBelt  $blackBelt
     * @return \Illuminate\Http\Response
     */
    public function show(BlackBelt $blackBelt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlackBelt  $blackBelt
     * @return \Illuminate\Http\Response
     */
    public function edit(BlackBelt $blackBelt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlackBelt  $blackBelt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlackBelt $blackBelt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlackBelt  $blackBelt
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlackBelt $blackBelt)
    {
        //
    }
}
