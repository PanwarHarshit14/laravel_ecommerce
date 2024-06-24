<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;
 
class CityController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::latest()->paginate(10);
        return view('admin.screens.city.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $states = State::orderBy('name')->pluck('name', 'id');
        return view('admin.screens.city.create', compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $city = new City();
        $city->name = $request->name;
        $city->short_name = $request->short_name;
        $city->code = $request->code;
        $city->state_id = $request->state_id;
        $city->save();

        return redirect(route('admin.city.index'))->with('success', 'Success! A new record has been added.');
    }
 
    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        request()->replace($city->toArray());
        request()->flash();
        $states = State::orderBy('name')->pluck('name', 'id');
        return view('admin.screens.city.edit', compact('city', 'states'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        $city->name = $request->name;
        $city->short_name = $request->short_name;
        $city->code = $request->code;
        $city->state_id = $request->state_id;
        $city->save();

        return redirect(route('admin.city.index'))->with('success', 'Success! A record has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();

        return redirect(route('admin.city.index'))->with('success', 'Success! A record has been deleted.');
    }
}
