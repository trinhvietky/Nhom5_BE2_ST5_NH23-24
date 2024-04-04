<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Guide;
use Illuminate\Http\Request;
// use Ramsey\Uuid\Guid\Guide;

class LienKetTrangController extends Controller
{
    public function index($page = "index") {
        $tours = Tour::orderBy('tour_id')->get();
        $guide = Guide::orderBy('guide_Id')->get();
        return view($page, ['data'=>$tours,'data_guide'=>$guide]);
    }
}
