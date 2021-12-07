<?php

namespace App\Http\Controllers;

use App\Models\LogbookCarSearch;
use Illuminate\Http\Request;

class LogbookCarSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logbookCarSearch = LogbookCarSearch::paginate();

        return view('admin.settings.logbook_car_search.index', compact('logbookCarSearch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $carSearch = Log::where('sellerId', $currentOwner->name)->get();

        $carMakes = CarMake::all();

        return view('user.vehicle_transfer.create', compact('vehicles', 'carMakes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newOwner = User::where('id', $request->new_owner)->first();
        $transfer = VehicleTransfer::create([
            'current_owner' => Auth::user()->name,
            'select_product' => $request->select_product,
            'new_owner' => $request->new_owner,
        ]);

        $updatedCar = Car::where('id', $request->select_product)->update([
            'sellerId' => $request->new_owner
        ]);

        session()->flash('success', 'Your vehicle has been transferred!');

        return redirect()->route('vehicle-transfers-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LogbookCarSearch  $logbookCarSearch
     * @return \Illuminate\Http\Response
     */
    public function show(LogbookCarSearch $logbookCarSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LogbookCarSearch  $logbookCarSearch
     * @return \Illuminate\Http\Response
     */
    public function edit(LogbookCarSearch $logbookCarSearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LogbookCarSearch  $logbookCarSearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LogbookCarSearch $logbookCarSearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LogbookCarSearch  $logbookCarSearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(LogbookCarSearch $logbookCarSearch)
    {
        //
    }
}
