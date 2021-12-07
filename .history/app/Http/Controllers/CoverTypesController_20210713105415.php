<?php

namespace App\Http\Controllers;

use App\Models\CoverTypes;
use Illuminate\Http\Request;

class CoverTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covers = Cities::paginate();

        return view('admin.settings.cities.index', compact('covers')); 
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
     * @param  \App\Models\CoverTypes  $coverTypes
     * @return \Illuminate\Http\Response
     */
    public function show(CoverTypes $coverTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CoverTypes  $coverTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(CoverTypes $coverTypes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CoverTypes  $coverTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CoverTypes $coverTypes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CoverTypes  $coverTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoverTypes $coverTypes)
    {
        //
    }
}
