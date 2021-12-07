<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();


        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.settings.users.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function activate(Request $request)
    {
        $user = User::where('id', $request->name)->first();

        $activate = User::where('id', $request->name)->update([
            'status' => 'active'
        ]);

        session()->flash('success', $user->name.' has been activated!');

        return back();
    }

    public function deactivate(Request $request)
    {
        $user = User::where('id', $request->name)->first();

        $activate = User::where('id', $request->name)->update([
            'status' => 'inactive'
        ]);

        session()->flash('success', $user->name.' has been deactivated!');

        return back();
    }

    public function ban(Request $request)
    {
        $user = User::where('id', $request->name)->first();

        $activate = User::where('id', $request->name)->update([
            'status' => 'banned'
        ]);

        session()->flash('success', $user->name.' has been banned!');

        return back();
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function carInsuranceRequests()
    {
        return view('admin.car_insurance_requests');
    }

    public function vehicleTransferRequests()
    {
        return view('admin.vehicle_transfer_requests');
    }

    public function mileageVerificationRequests()
    {
        return view('admin.mileage_verification_requests');
    }

    public function logbookCarSearchRequests()
    {
        return view('admin.logbook_car_search_requests');
    }
}
