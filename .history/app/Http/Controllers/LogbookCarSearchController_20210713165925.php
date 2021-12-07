<?php

namespace App\Http\Controllers;

use App\Models\LogbookCarSearch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogbookCarSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logbookCarSearches = LogbookCarSearch::paginate();

        return view('admin.settings.logbook_car_search.index', compact('logbookCarSearches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user.logbook_car_search');
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
