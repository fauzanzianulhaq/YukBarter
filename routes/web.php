<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/beranda', function () {
//     return view('admin/beranda');
// });
Route::get('/login', function () {
    return view('login');
})->name('login');

// Route::get('/daftar', function () {
//     return view('daftar');
// });
Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::post('/daftar', [AuthController::class, 'daftar'])->name('daftar.custom');
Route::get('/berandaUser', function () {
    return view('user/beranda');
});
// Route::get('/login', [SessionController::class, 'index']);
// Route::post('/login/masuk', [SessionController::class, 'login']);
// Route::get('/admin/dashboard', [SessionController::class, 'index'])->name('admin.dashboard')->middleware('role:admin');
// Route::get('/user/dashboard', [SessionController::class, 'index'])->name('user.dashboard')->middleware('role:user');
// Route::post('/custom-login', [SessionController::class, 'login'])->name('custom.login');
Route::get('/admin/beranda', function () {
    return view('admin.beranda');
})->name('admin.beranda')->middleware('role:admin');
Route::get('/admin/validasi', function () {
    return view('admin.validasi');
})->name('admin.beranda');


Route::get('/user/beranda', function () {
    return view('user.beranda');
})->name('user.beranda')->middleware('role:user');

Route::post('/custom-login', [SessionController::class, 'login'])->name('custom.login');

