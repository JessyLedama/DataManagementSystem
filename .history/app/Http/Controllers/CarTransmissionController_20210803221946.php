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
        $transmissionTypes = CarTransmission::paginate();


        return view('admin.settings.car_transmissions.index', compact('transmissionTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.car_transmissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transmissionType = CarTransmission::create([
            'name' => $request->name,
        ]);
        session()->flash('success', $engineSize->name.' has been saved.');
        
        return redirect()->route('car-transmission-types-list');
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
