<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Guide;
use App\Models\Location;
use Illuminate\Http\Request;
// use Ramsey\Uuid\Guid\Guide;

class LienKetTrangController extends Controller
{
    public function searchT(Request $request) {
    $page = "result";
    $tours = Tour::orderBy('tour_id');
    if (request()->has('search')) {
    // $data = $request -> input('search');
    // $tours = $tours->where('tour_name' , 'like' , '%' . $data . '%');
    $tours = $tours->where('tour_name' , 'like' , '%' . request()->get('search','') . '%');
    }
    // $tours = $tours->where('tour_name' , 'like' , '%' . $data . '%')->get();
    return view($page, ['result'=>$tours]);
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
}
