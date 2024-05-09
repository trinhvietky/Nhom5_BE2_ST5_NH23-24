<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Tour;
use App\Models\User;
use App\Models\Guide;
use App\Models\Location;
use App\Models\Client;
use Illuminate\Http\Request;
// use Ramsey\Uuid\Guid\Guide;

class LienKetTrangController extends Controller
{

    public function index($page = "index")
    {
        $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        $tours = Tour::orderBy('tour_id')->get();
        $user = User::orderBy('id')->get();
        $guide = Guide::orderBy('guide_Id')->get();
        $location = Location::orderBy('location_id')->get();
        $client = Client::orderBy('client_id')->get();
        return view($page, ['user_main' => $user_main,'data' => $tours, 'data_guide' => $guide, 'data_location' => $location, 'decentralization' => $user, 'data_comment' => $client]);
    }
    public function hienThi($id)
    {
        $tours = Tour::orderBy('tour_id')->get();
        $tour = Tour::findOrFail($id);
        return view('booking', ['value' => $tour, 'data' => $tours]);
    }
    public function hienThiUser($id)
    {
        $tours = Tour::orderBy('tour_id')->get();
        $tour = Tour::findOrFail($id);
        return view('user.booking', ['value' => $tour, 'data' => $tours]);
    }

    public function hienThiTourTheoDiaDiem($id)
    {
        // $tours = Tour::orderBy('location_id')->get();
        // $tour = Tour::findOrFail($id);
        // return view('tour_location', ['value'=>$tour,'data'=>$tours]);
        $tours = Tour::where('location_id', $id)->get();
        $location = Location::find($id);
        return view('tour_location', compact('tours', 'location'));
    }
    public function userHienThiTourTheoDiaDiem($id)
    {
        // $tours = Tour::orderBy('location_id')->get();
        // $tour = Tour::findOrFail($id);
        // return view('tour_location', ['value'=>$tour,'data'=>$tours]);
        $tours = Tour::where('location_id', $id)->get();
        $location = Location::find($id);
        return view('user.tour_location', compact('tours', 'location'));
    }

    public function userHienThiChiTietTuor($id)
    {
        $client = Client::orderBy('client_id')->get();
        $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        $tours = Tour::orderBy('tour_id')->get();
        $tour = Tour::findOrFail($id);
        return view('user.booking', ['user_main' => $user_main,'value' => $tour, 'data' => $tours, 'data_comment' => $client]);
    }

    public function userSearch(Request $request)
    {
        $search = $request->usersearch;
        $tours = Tour::where(function ($query) use ($search) {
            $query->where('tour_name', 'like', "%$search%");
        })->get();
        return view('user.result', compact('tours'));
    }

    public function search(Request $request)
    {

        $search = $request->search;
        $tours = Tour::where(function ($query) use ($search) {
            $query->where('tour_name', 'like', "%$search%");
        })->get();
        return view('result', compact('tours'));
    }
}
