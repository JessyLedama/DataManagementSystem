<?php

namespace App\Http\Controllers;

use App\Models\EngineType;
use Illuminate\Http\Request;

class EngineTypeController extends Controller
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
        $carMake = CarMake::create([
            'name' => $request->name,
        ]);

        
        return redirect()->route('car-engine-types-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EngineType  $engineType
     * @return \Illuminate\Http\Response
     */
    public function show(EngineType $engineType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EngineType  $engineType
     * @return \Illuminate\Http\Response
     */
    public function edit(EngineType $engineType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EngineType  $engineType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EngineType $engineType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EngineType  $engineType
     * @return \Illuminate\Http\Response
     */
    public function destroy(EngineType $engineType)
    {
        //
    }
}
