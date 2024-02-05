<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mobile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|Integer',
        ]);
        $mobile = new Mobile();
        $mobile->name = $request->name;
        $mobile->modal = $request->modal;
        $mobile->user_id = $request->user()->id;
        $mobile->price = $request->price;
        $mobile->save();

        return redirect(route('mobile.new'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Mobile $mobile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mobile $mobile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mobile $mobile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mobile $mobile)
    {
        //
    }

    public function layoutDemo()
    {
        return view('mobile.list');
    }
    public function layoutDemoNew()
    {
        $mobiles = Mobile::all();

        return view('mobile.listnew', 
        ["mobiles" => $mobiles]);
    }
}
