<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LienKetTrangController extends Controller
{
    public function index($page = "index") {
        return view($page);
    }
}
