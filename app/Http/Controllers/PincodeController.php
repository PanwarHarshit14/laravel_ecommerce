<?php

namespace App\Http\Controllers;

use App\Models\Pincode;
use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class PincodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Pincode::query();
        if (!empty($request->search)) {
            $query->where('code', 'LIKE', '%' . $request->search . '%');
        }
        $pincodes = $query->latest()->paginate(10);
        return view('admin.screens.pincode.index', compact('pincodes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::orderBy('name')->pluck('name', 'id');
        return view('admin.screens.pincode.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pincode = new Pincode();
        $pincode->code = $request->code;
        $pincode->city_id = $request->city_id;
        $pincode->save();

        return redirect(route('admin.pincode.index'))->with('success', 'Success! A new record has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pincode $pincode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pincode $pincode)
    {
        request()->replace($pincode->toArray());
        request()->flash();
        $cities = City::orderBy('name')->pluck('name', 'id');
        return view('admin.screens.pincode.edit', compact('pincode', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pincode $pincode)
    {
        $pincode->code = $request->code;
        $pincode->city_id = $request->city_id;
        $pincode->save();

        return redirect(route('admin.pincode.index'))->with('success', 'Success! A record has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pincode $pincode)
    {
        $pincode->delete();

        return redirect(route('admin.pincode.index'))->with('success', 'Success! A record has been deleted.');
    }

    public function bulkDelete(Request $request)
    {
        foreach ($request->delIds as $id) {
            $pincode = Pincode::find($id);
            $pincode->delete();
        }

        return redirect()->back()->with('success', 'Success! Selected record(s) has been deleted.');
    }
}
