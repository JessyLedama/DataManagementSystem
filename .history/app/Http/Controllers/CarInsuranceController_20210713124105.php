<?php

namespace App\Http\Controllers;

use App\Models\CarInsurance;
use Illuminate\Http\Request;

class CarInsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.carinsurance');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insurance = CarInsurance::create([
            'vehicle_category' => $request->vehicle_category,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'vehicle_type' => $request->vehicle_type,
            'cover_type' => $request->cover_type,
            'vehicle_value' => $request->vehicle_value,
            'vehicle_registration' => $request->vehicle_registration,
            'insuranceCompanyId' => $request->insuranceCompanyId,
        ]);

        session()->flash('success', 'Your insurance request has been saved!');
        
        return redirect()->route('search-cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarInsurance  $carInsurance
     * @return \Illuminate\Http\Response
     */
    public function show(CarInsurance $carInsurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarInsurance  $carInsurance
     * @return \Illuminate\Http\Response
     */
    public function edit(CarInsurance $carInsurance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarInsurance  $carInsurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarInsurance $carInsurance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarInsurance  $carInsurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarInsurance $carInsurance)
    {
        //
    }
}
