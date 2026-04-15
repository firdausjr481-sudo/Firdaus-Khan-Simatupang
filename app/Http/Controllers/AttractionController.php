<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;

class AttractionController extends Controller
{
    public function index() { 

        $attractions = Attraction::all();
        return view('pages.attractions.index', compact('attractions'));
    }

    public function create() {

        return view('pages.attractions.create');
    }

    public function store(Request $request) {

        Attraction::create($request->all());
        return redirect('/attractions')->with('success', 'Data tersimpan!.');
    }

    public function edit($id) {

        $attraction = Attraction::find($id);
        return view('pages.attractions.edit', compact('attraction'));
    }

    public function update(Request $request, $id) {

        $attraction = Attraction::find($id);
        $attraction->update($request->all());
        return redirect('/attractions')->with('success', 'Data berhasil diupdate!.');
    }

    public function delete($id) {

        $attraction = Attraction::find($id);
        $attraction->delete();  
        return redirect('/attractions')->with('success', 'Data dihapus!.');
    }
}
