<?php

namespace App\Http\Controllers;

use App\Models\HsnCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HsnCodeController extends Controller
{ 
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = HsnCode::query();
        if (!empty($request->search)) {
            $query->where('code', 'LIKE', '%' . $request->search . '%')->orWhere('gst', 'LIKE', '%' . $request->search . '%');
        }
        $hsnCodes = $query->latest()->paginate(10);
        return view('admin.screens.hsncode.index', compact('hsnCodes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        request()->flush();
        return view('admin.screens.hsncode.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hsnCode = new HsnCode();
        $hsnCode->code = $request->code;
        $hsnCode->gst = $request->gst;
        $hsnCode->save();

        return redirect(route('admin.hsncode.index'))->with('success', 'Success! A new record has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(HsnCode $hsnCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HsnCode $hsnCode)
    {
        request()->replace($hsnCode->toArray());
        request()->flash();
        return view('admin.screens.hsncode.edit', compact('hsnCode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HsnCode $hsnCode)
    {
        $hsnCode->code = $request->code;
        $hsnCode->gst = $request->gst;
        $hsnCode->save();

        return redirect(route('admin.hsncode.index'))->with('success', 'Success! A record has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HsnCode $hsnCode)
    {
        $hsnCode->delete();

        return redirect(route('admin.hsncode.index'))->with('success', 'Success! A record has been deleted.');
    }

    public function bulkDelete(Request $request)
    {
        foreach ($request->delIds as $id) {
            $hsnCode = HsnCode::find($id);
            $hsnCode->delete();
        }

        return redirect()->back()->with('success', 'Success! Selected record(s) has been deleted.');
    }
}
