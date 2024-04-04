<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class LienKetTrangController extends Controller
{
    public function index($page = "index") {
        // tour
        if($page == "index"){
            $tours = Tour::orderBy('tour_id')->get();
            return view($page, ['data'=>$tours]);
        }else{

        }
        
    }
}
