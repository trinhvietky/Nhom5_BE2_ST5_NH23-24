<?php

namespace App\Http\Controllers;
use App\Models\Guide;
use Illuminate\Http\Request;
use Ramsey\Uuid\Guid\Guid;

class LienKetTrangController extends Controller
{
    public function index($page = "index") {
        // $guide = Guide::orderBy('Guide_id')->get();
        // return view($page,['guide_data'=>$guide]);
    }
}
