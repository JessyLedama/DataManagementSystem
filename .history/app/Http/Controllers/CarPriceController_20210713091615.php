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

        return view('admin.settings.price_types.index', compact('carPriceTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.price_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $priceType = CarPrice::create([
            'name' => $request->name,
        ]);

        session()->flash('success', 'Your price type has been posted!');

        return redirect()->route('car-price-list');
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
    public function edit(CarPrice $priceType)
    {
        $priceType = CarPrice::where('id', $priceType->id)->first();

        return view('admin.settings.price_types.edit', compact('priceType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarPrice  $carPrice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarPrice $carPrice, )
    {
        $carPrice = CarPrice::where('id', )->update([
            'name' => $request->name,
        ]);

        session()->flash('success', 'Your car price type has been updated!');

        return redirect()->route('car-price-list');
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
