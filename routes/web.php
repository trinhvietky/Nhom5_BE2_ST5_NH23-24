<?php

use App\Http\Controllers\AddTourController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Tour;
use App\Http\Controllers\LienKetTrangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
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
Route::get('/search', [LienKetTrangController::class, 'search']);

Route::get('/{page?}', [LienKetTrangController::class, 'index']);
Route::get('/user/home', [UserController::class, 'index'])->name('user.home');
Route::get('/admin/home', [UserController::class, 'index'])->name('admin');



// Route::get('/booking/{tour_id}', [BookingController::class, 'showBooking'])->name('booking');

Route::get('/tour/{tour_id}', [LienKetTrangController::class, 'hienThi'])->name('tourShow.booking');
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'show'])->name('tour.booking');

Route::get('/tour_location/{location_id}', [LienKetTrangController::class, 'hienThiTourTheoDiaDiem'])->name('tour.location');

Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'hienThiUser'])->name('tour.readmore');

Route::post('/tours', [AddTourController::class, 'store'])->name('tours.store');

Route::delete('/tours/{id}', [AddTourController::class, 'destroy'])->name('tours.destroy');

Route::get('/tours/{id}/edit', [AddTourController::class, 'edit'])->name('tours.edit');
Route::put('/tours/{id}', [AddTourController::class, 'update'])->name('tours.update');