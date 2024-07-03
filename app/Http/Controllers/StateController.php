<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Http\Controllers\Controller;
use App\Models\Country;
// use App\Models\states;
use Illuminate\Http\Request;

class StateController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = State::query();
        if(!empty($request->search)){
            $query->where('name', 'LIKE', '%' . $request->search . '%')->orWhere('short_name', 'LIKE', '%' . $request->search . '%');
        }
        $states = $query->latest()->paginate(10);
        return view('admin.screens.state.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        request()->flush();
        $countries = Country::orderBy('name')->pluck('name', 'id');
        return view('admin.screens.state.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $state = new State();
        $state->name = $request->name;
        $state->short_name = $request->short_name;
        $state->code = $request->code;
        $state->country_id = $request->country_id;
        $state->save();

        return redirect(route('admin.state.index'))->with('success', 'Success! A new record has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $state)
    {
        request()->replace($state->toArray());
        request()->flash();
        $countries = Country::orderBy('name')->pluck('name','id');
        return view('admin.screens.state.edit', compact('state','countries'));
    }

    /**
     * Update the specified resource in storage.
     */ 
    public function update(Request $request, State $state)
    {
        $state->name = $request->name;
        $state->short_name = $request->short_name;
        $state->code = $request->code;
        $state->country_id = $request->country_id;
        $state->save();

        return redirect(route('admin.state.index'))->with('success', 'Success! A record has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        $state->delete();

        return redirect(route('admin.state.index'))->with('success', 'Success! A record has been deleted.');
    }

    /**
     * Select Delete Feature
     */
    public function bulkDelete(Request $request)
    {
        foreach ($request->delIds as $id) {
            $state = State::find($id);
            $state->delete();
        }

        return redirect()->back()->with('success', 'Success! Selected record(s) has been deleted.');
    }
}
