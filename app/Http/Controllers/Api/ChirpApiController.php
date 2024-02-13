<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpApiController extends Controller
{
    //
    public function index()
    {
        $chirps = Chirp::with('user')->latest()->get();
        return [
            "chirps" => $chirps
        ];
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
            'image' => 'required|image',
        ]);

        $path = $request->file('image')->store('public');
        $validated['image'] = $path;
        $chirp = $request->user()->chirps()->create($validated);

        return ["message" => "Chirp Created", "chirp" => $chirp];
    }
}
