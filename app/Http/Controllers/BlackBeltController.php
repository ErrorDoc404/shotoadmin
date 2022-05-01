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
        $blackbelt = BlackBelt::all();
        return view('blackbelt.index',compact('blackbelt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return false;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return false;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlackBelt  $blackBelt
     * @return \Illuminate\Http\Response
     */
    public function show(BlackBelt $blackBelt)
    {
        return false;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlackBelt  $blackBelt
     * @return \Illuminate\Http\Response
     */
    public function edit(BlackBelt $blackBelt)
    {
        return false;
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
        return false;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlackBelt  $blackBelt
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlackBelt $blackBelt)
    {
        return false;
    }
}
