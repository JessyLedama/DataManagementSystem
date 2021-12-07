<?php

namespace App\Http\Controllers;

use App\Models\CarTransmission;
use Illuminate\Http\Request;

class CarTransmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $engineSizes = Car::paginate();


        return view('admin.settings.car_engine_sizes.index', compact('engineSizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.car_engine_sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $engineSize = EngineSize::create([
            'name' => $request->name,
        ]);

        
        return redirect()->route('car-engine-sizes-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarTransmission  $carTransmission
     * @return \Illuminate\Http\Response
     */
    public function show(CarTransmission $carTransmission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarTransmission  $carTransmission
     * @return \Illuminate\Http\Response
     */
    public function edit(CarTransmission $carTransmission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarTransmission  $carTransmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarTransmission $carTransmission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarTransmission  $carTransmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarTransmission $carTransmission)
    {
        //
    }
}
