<?php

namespace App\Http\Controllers;

use App\Models\VehicleTransfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Models\Cities;
use App\Models\CarMake;
use App\Models\User;
use App\Models\EngineSize;
use App\Models\CarBody;

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

        $carMakes = CarMake::all();

        $carTypes = CarBody::all();

        $engineCapacity = EngineSize::all();

        return view('user.vehicle_transfer.create', compact('vehicles', 'carMakes', 'engineCapacity', 'carTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $transfer = VehicleTransfer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'transfer_type' => $request->transfer_type,
            'vehicle_type' => $request->vehicle_type,
            'engine_capacity' => $request->engine_capacity,
        ]);


        session()->flash('success', 'Your vehicle transfer request has been receive! Our representative will get in touch with you soon.');

        return redirect()->route('/');
        
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
        $vehicleTransferRequests = VehicleTransfer::paginate();
        $carMakes = CarMake::all();

        $carTypes = CarBody::all();

        $engineCapacity = EngineSize::all();


        return view('user.vehicle_transfer.edit', compact('vehicleTransferRequests', 'carMakes', 'carTypes', 'engineCapacity'));
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
        $updatedTransfer = VehicleTransfer::where('id', )
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
