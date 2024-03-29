<?php

namespace App\Http\Controllers;

use App\Models\CarColor;
use Illuminate\Http\Request;

class CarColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carColors = CarColor::paginate();


        return view('admin.settings.car_transmissions.index', compact('carColors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.car_colors.create');
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

        
        return redirect()->route('car-transmission-types-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarColor  $carColor
     * @return \Illuminate\Http\Response
     */
    public function show(CarColor $carColor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarColor  $carColor
     * @return \Illuminate\Http\Response
     */
    public function edit(CarColor $carColor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarColor  $carColor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarColor $carColor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarColor  $carColor
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarColor $carColor)
    {
        //
    }
}
