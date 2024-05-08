<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Guide;
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
    //-------------------------------------------------------------------------------------


    public function storeGuide(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'guide_name' => 'required|string|max:255',
            'guide_pno' => 'required|string',
            'guide_image' => 'required|string',
            'guide_mail' => 'required|string',
            'guide_intro' => 'required|string',
        ]);

        // Create a new tour instance
        $guide = new Guide;
        $guide->guide_Name = $validatedData['guide_name'];
        $guide->guide_Pno = $validatedData['guide_pno'];
        $guide->guide_Img = $validatedData['guide_image'];
        $guide->guide_Mail = $validatedData['guide_mail'];
        $guide->guide_Intro = $validatedData['guide_intro'];
        $guide->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Đã thêm hướng dẫn viên mới!');
    }

    public function destroyGuide($id)
    {
        $guide = Guide::findOrFail($id);
        $guide->delete();

        return redirect()->back()->with('success', 'Hướng dẫn viên đã bị đuổi!');
    }

    public function editGuide($id)
    {
        $guide = Guide::findOrFail($id);
        return view('admin.editGuide', compact('guide'));
    }

    public function updateGuide(Request $request, $id)
    {
    // Validate the incoming request data
    $validatedData = $request->validate([
        'guide_Name' => 'required|string|max:255',
        'guide_Pno' => 'required|string',
        'guide_Img' => 'required|string',
        'guide_Mail' => 'required|string',
        'guide_Intro' => 'required|string',
    ]);
    // Tìm guide dựa trên id hoặc trả về null nếu không tìm thấy
    $guide = Guide::findOrFail($id);

    // Cập nhật thông tin của guide
    $guide->update($validatedData);

    return redirect()->back()->with('success', 'Thông tin hướng dẫn viên đã được cập nhật thành công!');
    }
}
