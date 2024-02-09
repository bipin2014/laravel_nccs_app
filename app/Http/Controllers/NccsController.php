<?php

namespace App\Http\Controllers;

use App\Models\Nccs;
use Illuminate\Http\Request;

class NccsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name = "Mainali";
        return view('nccs.index', ['name' => $name]);
    }
    public function about()
    {
        return view('nccs.about');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Nccs $nccs)
    {
        return view('nccs.about');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nccs $nccs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nccs $nccs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nccs $nccs)
    {
        //
    }
}
