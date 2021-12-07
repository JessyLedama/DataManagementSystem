<?php

namespace App\Http\Controllers;

use App\Models\EngineSize;
use Illuminate\Http\Request;

class EngineSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $engineTypes = EngineType::paginate();


        return view('admin.settings.car_engine_types.index', compact('engineTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.car_engine_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $engineType = EngineType::create([
            'name' => $request->name,
        ]);

        
        return redirect()->route('car-engine-types-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EngineSize  $engineSize
     * @return \Illuminate\Http\Response
     */
    public function show(EngineSize $engineSize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EngineSize  $engineSize
     * @return \Illuminate\Http\Response
     */
    public function edit(EngineSize $engineSize)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EngineSize  $engineSize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EngineSize $engineSize)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EngineSize  $engineSize
     * @return \Illuminate\Http\Response
     */
    public function destroy(EngineSize $engineSize)
    {
        //
    }
}
