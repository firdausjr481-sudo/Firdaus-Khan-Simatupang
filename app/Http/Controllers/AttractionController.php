<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;
use App\Models\Destination;

class AttractionController extends Controller
{
    public function index() { 

        $attractions = Attraction::all();
        return view('pages.attractions.index', compact('attractions'));
    }

    public function create() {
        $destinations = Destination::all();
        return view('pages.attractions.create', compact('destinations'));
    }

    public function store(Request $request) {

    $validated= $request->validate([
        'destination_id' => 'required|exists:destination,id',
        'name' => 'required',
        'description' => 'nullable',
    ]);
    \App\Models\Attraction::create($validated);

     return redirect()->route('attractions.index')->with('success', 'Data berhasil ditambahkan!.');
    }

    public function edit($id) {

        $destinations = Destination::all();
         $attraction = Attraction::find($id);
        return view('pages.attractions.edit', compact('attraction', 'destinations'));

    }

    public function update(Request $request, $id) {

    $request->validate([
        'destination_id' => 'required|exists:destination,id',
        'name' => 'required',
        'description' => 'nullable',
    ]);

        $attraction = Attraction::find($id);
        $attraction->update($request->all());
        return redirect('/attractions')->with('success', 'Data berhasil diupdate!.');
    }

    public function delete($id) {

        $attraction = Attraction::find($id);
        $attraction->delete();  
        return redirect('/attractions')->with('success', 'Data dihapus!.');
    }

    public function show($id) {

        $attraction = Attraction::find($id);
        return view('pages.attractions.detail', compact('attraction'));
    }
}
