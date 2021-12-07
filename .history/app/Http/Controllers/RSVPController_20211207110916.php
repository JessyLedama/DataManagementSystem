<?php

namespace App\Http\Controllers;

use App\Models\RSVP;
use Illuminate\Http\Request;

class RSVPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carBodies = RSVP::paginate();

        return view('admin.settings.car_body_types.index', compact('carBodies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.settings.car_body_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carBody = SRV::create([
            'name' => $request->name,
        ]);

        session()->flash('success', $carBody->name.' has been saved.');
        return redirect()->route('car-body-list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SRV  $carBody
     * @return \Illuminate\Http\Response
     */
    public function show(SRV $carBody)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SRV  $carBody
     * @return \Illuminate\Http\Response
     */
    public function edit(SRV $carBody)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SRV  $carBody
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SRV $carBody)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SRV  $carBody
     * @return \Illuminate\Http\Response
     */
    public function destroy(SRV $carBody)
    {
        //
    }
}
