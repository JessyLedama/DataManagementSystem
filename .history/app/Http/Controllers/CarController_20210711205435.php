<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarMake;
use App\Models\CarModel;
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

        return view('user.sellcar', compact('carMakes', 'carModels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carAd = Car::create([
            'name' => $request->name, 
            'make' => $request->makeId, 
            'model' => $request->modelId, 
            'price' => $request->price, 
            'mileage' => $request->mileage, 
            'condition' => $request->conditionId, 
            'year' => $request->year, 
            'bodytypeId' => $request->bodytypeId, 
            'transmissionId' => $request->transmissionId, 
            'enginetypeId' => $request->enginetypeId, 
            'enginesizeId' => $request->enginet, 'image', 'youtubelink', 'tags', 'description', 'city', 'sellername', 'sellermobile', 'selleraddress'
        ]);
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
