<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Guide;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::id()) {
            
            $userType = Auth()->user()->usertype;

            if  ($userType == 'user') {
                $tours = Tour::orderBy('tour_id')->get();
                $guide = Guide::orderBy('guide_Id')->get();
                $location = Location::orderBy('location_id')->get();
                return view('user/home', ['data' => $tours, 'data_guide' => $guide, 'data_location' => $location]);
            }
            else if($userType == 'admin') {
                $tours = Tour::orderBy('tour_id')->get();
                $guide = Guide::orderBy('guide_Id')->get();
                $location = Location::orderBy('location_id')->get();
                return view('admin/home', ['data' => $tours, 'data_guide' => $guide, 'data_location' => $location]);
            }
        }
    }
}
