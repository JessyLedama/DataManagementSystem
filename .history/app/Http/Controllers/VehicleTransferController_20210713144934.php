<?php

namespace App\Http\Controllers;

use App\Models\VehicleTransfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Models\Cities;

class VehicleTransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicleTransferRequests = VehicleTransfer::paginate();

        return view('admin.settings.vehicle_transfer.index', compact('vehicleTransferRequests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentOwner = Auth::user();

        $vehicles = Car::where('sellerId', $currentOwner->name)->get();

        return view('user.vehicle_transfer.create', compact('vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newOwner = $request->new_owner;
        $selectVehicle = $request->select_vehicle;

        $transfer = VehicleTransfer::create([
            'sellerId' => $request->new_owner,
        ]);

        $cities = Cities::all();

        session()->flash('success', 'Your vehicle has been transferred!');

        return redirect()->route('vehicle-transfers-list');
        
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
