<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Attraction;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword != ''){
            $reviews = Review::where('reviewer_name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        } else {
            $reviews = Review::orderby('id')->paginate(5);
        }
        return view('pages.reviews.index', compact('reviews'));
    }

    public function create()
    {
        $attractions = Attraction::all();
        return view('pages.reviews.create', compact('attractions'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'attraction_id' => 'required',
            'reviewer_name' => 'required',
            // 'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable',
        ]);

        Review::create($validated);

        return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $attractions = Attraction::all();
        return view('pages.reviews.edit', compact('review', 'attractions'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'attraction_id' => 'required',
            'reviewer_name' => 'required',
            // 'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable',
        ]);

        $review = Review::findOrFail($id);
        $review->update($validated);

        return redirect()->route('reviews.index')->with('success', 'Review updated successfully.');
    }

    public function destroy($id)
    {
        $review = \App\Models\Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
    }

    public function show($id)
    {
        $review = Review::findOrFail($id);
        return view('pages.reviews.detail', compact('review'));
    }
}
