<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LienKetTrangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('{name?}', function ($name = 'name') {
//     return view($name);
// });

Route::get('/{page?}', [LienKetTrangController::class, "index"]);