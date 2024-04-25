<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\Guide;
use App\Models\Location;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tours = Tour::orderBy('tour_id')->get();
        $guide = Guide::orderBy('guide_Id')->get();
        $location = Location::orderBy('location_id')->get();
        return view('user.home', ['data'=>$tours, 'data_guide'=>$guide, 'data_location'=>$location]);
    }
}
