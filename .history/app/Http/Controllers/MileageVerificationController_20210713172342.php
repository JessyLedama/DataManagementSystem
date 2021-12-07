<?php

namespace App\Http\Controllers;

use App\Models\MileageVerification;
use Illuminate\Http\Request;

class MileageVerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mileageVerifications = MileageVerification::paginate();

        return view('admin.settings.logbook_car_search.index', compact('mileageVerifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.mileage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $carSearch = LogbookCarSearch::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'registration_no' => $request->registration_no
        ]);

        session()->flash('success', 'Your vehicle has been transferred!');

        return redirect()->route('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MileageVerification  $mileageVerification
     * @return \Illuminate\Http\Response
     */
    public function show(MileageVerification $mileageVerification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MileageVerification  $mileageVerification
     * @return \Illuminate\Http\Response
     */
    public function edit(MileageVerification $mileageVerification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MileageVerification  $mileageVerification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MileageVerification $mileageVerification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MileageVerification  $mileageVerification
     * @return \Illuminate\Http\Response
     */
    public function destroy(MileageVerification $mileageVerification)
    {
        //
    }
}
