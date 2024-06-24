<?php 

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountryController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Country::latest()->paginate(10);
        return view('admin.screens.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.screens.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $country = new Country();
        $country->name = $request->name;
        $country->short_name = $request->short_name;
        $country->code = $request->code;
        $country->flag;
        $country->save();

        return redirect(route('admin.country.index'))->with('success', 'Success! A new record has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        request()->replace($country->toArray());
        request()->flash();
        return view('admin.screens.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        $country->name = $request->name;
        $country->short_name = $request->short_name;
        $country->code = $request->code;
        $country->flag = $request->flg;
        $country->save();

        return redirect(route('admin.country.index'))->with('success', 'Success! A record has been updated.');
    }

    /** 
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();

        return redirect(route('admin.country.index'))->with('success', 'Success! A record has been deleted.');
    }
}
