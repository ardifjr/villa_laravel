<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('review.index', compact('reviews'));
    }

    public function create()
    {
        return view('review.create');
    }

    public function store(Request $request)
{
    $review = new Review;

    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoName = time() . '.' . $photo->getClientOriginalExtension();
        $photo->move(public_path('photos'), $photoName);
        $review->photo = $photoName;
    }

    $review->save();

    return redirect()->route('reviews.index')->with('success', 'Review created successfully.');
}


public function destroy($id)
{
    $review = Review::findOrFail($id);

    // Hapus foto jika ada
    if ($review->photo) {
        $photoPath = public_path('photos/' . $review->photo);
        if (file_exists($photoPath)) {
            unlink($photoPath);
        }
    }

    $review->delete();

    return redirect()->route('reviews.index')->with('success', 'Review deleted successfully.');
}
}
