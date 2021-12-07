<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarMake;
use App\Models\CarModel;
use App\Models\CarBody;
use App\Models\EngineSize;
use App\Models\CarColor;
use App\Models\CarCondition;
use App\Models\EngineType;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.searchcars');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carMakes = CarMake::all();
        $carModels = CarModel::all();
        $carBodies = CarBody::all();
        $engineSizes = EngineSize::all();
        $colorIds = CarColor::all();
        $conditionIds = CarCondition::all();
        $transmissionIds = CarTransmission::all();
        $engineTypeIds = EngineType::all();
        $city = Cities::

        return view('user.sellcar', compact('carMakes', 'carModels', 'carBodies', 'engineSizes', 'colorIds', 'conditionIds', 'transmissionIds', 'engineTypeIds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adImage = $request->file('image')->store('public/cars');
        $carAd = Car::create($request->except(['image']) + ['image' => $adImage]);

        session()->flash('success', 'Your car has been posted.');
        return redirect()->route('sell-car');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
