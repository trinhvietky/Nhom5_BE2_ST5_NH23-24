<?php

use App\Http\Controllers\AddTourController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Tour;
use App\Http\Controllers\LienKetTrangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/trangchu', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Tìm kiếm của user không tài khoản
Route::get('/search', [LienKetTrangController::class, 'search']);

Route::get('/{page?}', [LienKetTrangController::class, 'index']);
Route::get('/user/home', [UserController::class, 'index'])->name('user.home');
Route::get('/admin/home', [UserController::class, 'index'])->name('home');

//USER CHƯA CÓ TÀI KHOẢN

//-------Hiển thị tour theo địa điểm
Route::get('/tour_location/{location_id}', [LienKetTrangController::class, 'hienThiTourTheoDiaDiem'])->name('tour.location');

//-------Hiển thị chi tiết tour
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'hienThiUser'])->name('tour.readmore');

//-------Tìm và hiển thị kết quả tìm kiếm
Route::get('/search', [LienKetTrangController::class, 'search']);





//USER ĐÃ CÓ TÀI KHOẢN

//-------Hiển thị tour theo địa điểm
Route::get('/user/tour_location/{location_id}', [LienKetTrangController::class, 'userHienThiTourTheoDiaDiem'])->name('user.tour.location');

//-------Hiển thị chi tiết tour
Route::get('/user/booking/{tour_id}', [LienKetTrangController::class, 'userHienThiChiTietTuor'])->name('user.tour.readmore');

//-------Tìm và hiển thị kết quả tìm kiếm
Route::get('/user/result', [LienKetTrangController::class, 'userSearch'])->name('searchUser');







// Route::get('/booking/{tour_id}', [BookingController::class, 'showBooking'])->name('booking');

Route::get('/tour/{tour_id}', [LienKetTrangController::class, 'hienThi'])->name('tourShow.booking');
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'show'])->name('tour.booking');



// thêm tour
Route::post('/tours', [AddTourController::class, 'store'])->name('tours.store');
// xóa tour
Route::delete('/tours/{id}', [AddTourController::class, 'destroy'])->name('tours.destroy');
// chỉnh sửa tour
Route::get('/tours/{id}/edit', [AddTourController::class, 'edit'])->name('tours.edit');
// cập nhật tour
Route::put('/tours/{id}', [AddTourController::class, 'update'])->name('tours.update');

// thêm guide
Route::post('/guide', [AddTourController::class, 'storeGuide'])->name('guide.store');
// xóa guide
Route::delete('/guide/{id}', [AddTourController::class, 'destroyGuide'])->name('guide.destroy');
// chỉnh sửa guide
Route::get('/guide/{id}/edit', [AddTourController::class, 'editGuide'])->name('guide.edit');
// cập nhật guide
Route::put('/guide/{id}', [AddTourController::class, 'updateGuide'])->name('guide.update');

// Xóa thông tin user
Route::delete('/xoaUser/{id}', [AdminController::class, 'xoaUser'])->name('tours.xoaUser');
// Sửa quyền user
Route::post('/update-usertype',  [AdminController::class, 'updateUsertype'])->name('tours.suaUser');
// Đăng ký thông báo user
Route::post('/notice', [NoticeController::class, 'store'])->name('notice.store');
// comment
Route::post('/submit-comment', [ClientController::class, 'store'])->name('submit_comment');