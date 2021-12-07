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
        $covers = CoverTypes::paginate();

        return view('admin.settings.cover_types.index', compact('covers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.cover_types.'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $covers = CoverTypes::create([
            'name' => $request->name,
        ]);

        session()->flash('success', 'Your cover Type has been posted!');

        return redirect()->route('cover-types-list');
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
