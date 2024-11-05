<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;
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
});
Route::get('/admin/validasi-detail',  function () {
    return view('admin.detail_validasi');
});


Route::get('/admin/rating', function () {
    return view('admin.rating');
});
Route::get('/admin/rating-detail', function () {
    return view('admin.detail_rating');
});
Route::get('/admin/kategori/tambah', function () {
    return view('admin.tambah_kategori');
});
// Route::get('/admin/kategori', function () {
//     return view('admin.kategori');
// });
Route::get('/admin/kategori', [KategoriController::class, 'kategori']);
Route::post('/admin/kategori/tambah/submit', [KategoriController::class, 'submit'])->name('kategori.submit');
Route::get('/admin/profile', function () {
    return view('admin.profile');
});
Route::get('/admin/profile-avatar', function () {
    return view('admin.avatar_profile');
});
Route::get('/admin/profile-password', function () {
    return view('admin.password_profile');
});


Route::get('/user/beranda', function () {
    return view('user.beranda');
})->name('user.beranda')->middleware('role:user');
Route::get('/user/profile', function () {
    return view('user.profile');
});
Route::get('/user/profile-avatar', function () {
    return view('user.avatar_profile');
});
Route::get('/user/profile-password', function () {
    return view('user.password_profile');
});
Route::get('/user/jelajahi-barang', function () {
    return view('user.jelajahiBarang');
});

Route::post('/custom-login', [SessionController::class, 'login'])->name('custom.login');

