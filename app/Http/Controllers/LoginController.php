<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public const HOME = '/home'; // Đường dẫn mặc định

    public function redirectTo()
    {
        if (Auth::check()) {
            $userType = Auth::user()->usertype;

            if ($userType == 'admin') {
                return '/admin/home'; // Đường dẫn dành cho admin
            } else {
                return '/user/home'; // Đường dẫn mặc định cho người dùng
            }
        }

        return self::HOME; // Nếu không đăng nhập, chuyển hướng về đường dẫn mặc định
    }
}
