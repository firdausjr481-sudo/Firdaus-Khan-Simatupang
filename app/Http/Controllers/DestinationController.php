<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Illuminate\Queue\Jobs\RedisJob;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword != ''){
            $destinations = Destination::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        } else {
            $destinations = Destination::orderby('id')->paginate(5);
        }
        return view('pages.destinations.indexDestinasi', compact('destinations'));
    }

    public function show($id)
    {
        $destination = Destination::find($id);
        return view('pages.destinations.detaildestinasi', compact('destination'));
    }

    public function create()
    {
        return view('pages.destinations.createDestination');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'location' => 'required',
            'ticket_price' => 'required|numeric',
            'working_hours' => 'nullable',
            'working_days' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

            if ($request->hasFile('image')) {
                $imagepPath = $request->file('image')->store('images', 'public');
                @$validated['image'] = basename($imagepPath);
            }
                
        \App\Models\Destination::create($validated);

        return redirect('/destinations')->with('success', 'Destination created successfully.');
    }

    public function delete($id)
    {
        $destination = Destination::find($id);
        if ($destination) {
            $destination->delete();
            return redirect('/destinations')->with( 'success', 'Destination deleted successfully.');     
        } else {
            return redirect('/destinations')->with( 'error', 'Destination not found.');
        }
    }

    public function edit($id)
    {
        $destination = Destination::find($id);
        return view('pages.destinations.editDestination', compact('destination'));
    }
    public function update(Request $request, $id)
    {
      
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'location' => 'required',
            'ticket_price' => 'required|numeric',
            'working_hours' => 'nullable',
            'working_days' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $destination=Destination::find($id);
        if ($destination) {
            if ($destination->image && $request->hasFile('image')) {
                Storage::disk('public')->delete('images/' . $destination->image);
            }

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $validated['image'] = basename($imagePath);
            }
            $destination->update($validated);
            return redirect('/destinations')->with('success', 'Destination updated successfully.');
        } else {
            return redirect('/destinations')->with('error', 'Destination not found.');
        }
    }
}