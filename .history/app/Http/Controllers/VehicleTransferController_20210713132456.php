<?php

namespace App\Http\Controllers;

use App\Models\VehicleTransfer;
use Illuminate\Http\Request;

class VehicleTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $newOw
        $transfer = Car::update([
            'sellerId' => $request->n,
        ]);

        session()->flash('success', 'Your city has been posted!');

        return redirect()->route('cities-list')
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleTransfer  $vehicleTransfer
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleTransfer $vehicleTransfer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleTransfer  $vehicleTransfer
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleTransfer $vehicleTransfer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleTransfer  $vehicleTransfer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleTransfer $vehicleTransfer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleTransfer  $vehicleTransfer
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleTransfer $vehicleTransfer)
    {
        //
    }
}
