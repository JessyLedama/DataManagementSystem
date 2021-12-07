<?php

namespace App\Http\Controllers;

use App\Models\CarCondition;
use Illuminate\Http\Request;

class CarConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carModels = CarModel::paginate();

        return view('admin.settings.car_models.index', compact('carModels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carMakes = CarMake::all();

        return view('admin.settings.car_models.create', compact('carMakes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carModel = CarModel::create([
            'name' => $request->name,
            'makeId' => $request->makeId,
        ]);

        
        return redirect()->route('car-models-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarCondition  $carCondition
     * @return \Illuminate\Http\Response
     */
    public function show(CarCondition $carCondition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarCondition  $carCondition
     * @return \Illuminate\Http\Response
     */
    public function edit(CarCondition $carCondition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarCondition  $carCondition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarCondition $carCondition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarCondition  $carCondition
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarCondition $carCondition)
    {
        //
    }
}
