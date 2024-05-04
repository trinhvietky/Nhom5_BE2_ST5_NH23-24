<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Guide;
use App\Models\Location;
use Illuminate\Http\Request;
// use Ramsey\Uuid\Guid\Guide;

class LienKetTrangController extends Controller
{
    public function search(Request $request) {
   
    $search = $request->search;
    $tours=Tour::where(function($query) use ($search){
        $query->where('tour_name','like',"%$search%");
    })->get();
    return view('result', compact('tours'));
    }

    public function index($page = "index") {
        $tours = Tour::orderBy('tour_id')->get();
        $guide = Guide::orderBy('guide_Id')->get();
        $location = Location::orderBy('location_id')->get();
        return view($page, ['data'=>$tours,'data_guide'=>$guide, 'data_location'=>$location]);
    }
    public function hienThi($id)
    {
        $tours = Tour::orderBy('tour_id')->get();
        $tour = Tour::findOrFail($id);
        return view('booking', ['value'=>$tour,'data'=>$tours]);
    }
    public function hienThiUser($id)
    {
        $tours = Tour::orderBy('tour_id')->get();
        $tour = Tour::findOrFail($id);
        return view('user.booking', ['value'=>$tour,'data'=>$tours]);
    }

    public function hienThiTourTheoDiaDiem($id)
    {
        // $tours = Tour::orderBy('location_id')->get();
        // $tour = Tour::findOrFail($id);
        // return view('tour_location', ['value'=>$tour,'data'=>$tours]);
        $tours = Tour::where('location_id', $id)->get();
        $location = Location::find($id);
        return view('tour_location', compact('tours','location'));

    }
}
