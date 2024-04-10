<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Guide;
use App\Models\Location;
use Illuminate\Http\Request;
// use Ramsey\Uuid\Guid\Guide;

class LienKetTrangController extends Controller
{
    public function index($page = "index") {
        $tours = Tour::orderBy('tour_id')->get();
        $guide = Guide::orderBy('guide_Id')->get();
        $location = Location::orderBy('location_id')->get();
        return view($page, ['data'=>$tours,'data_guide'=>$guide, 'data_location'=>$location]);
    }
}
