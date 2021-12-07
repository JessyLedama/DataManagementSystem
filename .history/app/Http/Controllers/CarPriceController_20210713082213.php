<?php

namespace App\Http\Controllers;

use App\Models\CarPrice;
use Illuminate\Http\Request;

class CarPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carPriceTypes = CarPrice::paginate();

        return view('admin.settings.price.index', compact('carPriceTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cities = Cities::create([
            'name' => $request->name,
        ]);

        session()->flash('success', 'Your city has been posted!');

        return redirect()->route('cities-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarPrice  $carPrice
     * @return \Illuminate\Http\Response
     */
    public function show(CarPrice $carPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarPrice  $carPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(CarPrice $carPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarPrice  $carPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarPrice $carPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarPrice  $carPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarPrice $carPrice)
    {
        //
    }
}
