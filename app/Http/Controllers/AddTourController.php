<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Notification;

class AddTourController extends Controller
{
    // add tour
    public function store(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'tour_name' => 'required|string|max:255',
            'tour_image' => 'required|string',
            'start_day' => 'required|date',
            'time' => 'required|string',
            'star_from' => 'required|string',
            'price' => 'required|numeric',
            'vehicle' => 'required|string',
            'tour_description' => 'required|string',
            'tour_schedule' => 'required|string',
            'tour_sale' => 'required|string',
            'location_id' => 'required|integer',
            'guide_id' => 'required|integer',
        ]);

        // Create a new tour instance
        $tour = new Tour;
        $tour->tour_name = $validatedData['tour_name'];
        $tour->tour_image = $validatedData['tour_image'];
        $tour->start_day = $validatedData['start_day'];
        $tour->time = $validatedData['time'];
        $tour->star_from = $validatedData['star_from'];
        $tour->price = $validatedData['price'];
        $tour->vehicle = $validatedData['vehicle'];
        $tour->tour_description = $validatedData['tour_description'];
        $tour->tour_schedule = $validatedData['tour_schedule'];
        $tour->tour_sale = $validatedData['tour_sale'];
        $tour->location_id = $validatedData['location_id'];
        $tour->guide_id = $validatedData['guide_id'];
        $tour->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Tour đã được thêm thành công!');
    }

    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);
        $tour->delete();

        return redirect()->back()->with('success', 'Tour đã được xóa thành công!');
    }

    // edit tour
    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        return view('admin.editTour', compact('tour'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tour_name' => 'required|string|max:255',
            'tour_image' => 'required|string',
            'start_day' => 'required|date',
            'time' => 'required|string',
            'star_from' => 'required|string',
            'price' => 'required|numeric',
            'vehicle' => 'required|string',
            'tour_description' => 'required|string',
            'tour_schedule' => 'required|string',
            'tour_sale' => 'required|string',
            'location_id' => 'required|integer',
            'guide_id' => 'required|integer',
        ]);

        $tour = Tour::findOrFail($id);
        $tour->update($validatedData);

        return redirect()->back()->with('success', 'Tour đã được cập nhật thành công!');
    }
}
