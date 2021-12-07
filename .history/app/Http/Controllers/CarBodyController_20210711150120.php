<?php

namespace App\Http\Controllers;

use App\Models\CarBody;
use Illuminate\Http\Request;

class CarBodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carBodies = CarBody::paginate();


        return view('admin.settings.car_bodys.index', compact('carBodies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.car_makes.create');
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

        
        return redirect()->route('car-makes-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarBody  $carBody
     * @return \Illuminate\Http\Response
     */
    public function show(CarBody $carBody)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarBody  $carBody
     * @return \Illuminate\Http\Response
     */
    public function edit(CarBody $carBody)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarBody  $carBody
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarBody $carBody)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarBody  $carBody
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarBody $carBody)
    {
        //
    }
}
