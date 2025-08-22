<?php

use App\Models\Usaha;
use App\Models\Nasabah;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home\SimpananController;
use App\Http\Controllers\Admin\SimpananAdminController;
use App\Http\Controllers\NasabahController;
use App\Models\Simpanan;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('index');
});
Route::get('/usaha', function () {
    return view('home/usaha');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/usaha/detail', function () {
    $usahas = Usaha::all();
    return view('home.usaha', ['title' => 'Usaha', 'usahas' => $usahas]);
});
Route::get('usaha/detail/{usaha:slug}', function (Usaha $usaha) {
    // $usaha = Usaha::find($id);
    return view('home.usaha_detail', ['title' => 'Detail Usaha', 'usaha' => $usaha]);
});

// end Home

// Admin
Route::get('/das', function () {
    return view('das.dashboard');
});

Route::get('/dashboard', function () {
    return view('das.index');
});
// Usaha
Route::get('/das/usaha', function () {
    $usahas = Usaha::all();
    return view('das.usaha.index', ['title' => 'Usaha', 'usahas' => $usahas]);
});
Route::get('/usaha/add', function () {
    return view('das.usaha.add', ['title' => 'Tambah Usaha']);
});
Route::get('/usaha/view/{usaha:slug}', function (Usaha $usaha) {
    return view('das.usaha.view', ['title' => 'Detail Usaha', 'usaha' => $usaha]);
});
// end Usaha
Route::get('/daslain', function () {
    return view('das.lain');
});
// Simpanan
// Route::get('/dashboard/simpanan', function () {
//     return view('das.simpanan.index');
// });
Route::resource('/dashboard/simpanan', SimpananAdminController::class);
// routes/web.php
Route::post('/dashboard/simpanan/{id}/setujui', [SimpananAdminController::class, 'setujui'])->name('simpanan.setujui');
Route::post('/dashboard/simpanan/{id}/tolak', [SimpananAdminController::class, 'tolak'])->name('simpanan.tolak');

Route::get('/simpanan/add', function () {
    return view('das.simpanan.insert_simpanan', ['title' => 'Tambah Simpanan']);
});
Route::get('/simpanan/view', function () {
    return view('home.simpanan', ['title' => 'Simpanan']);
});

// Peminjaman
route::get('/das/peminjaman', function () {
    return view('das.peminjaman.index');
});
Route::get('/das/peminjaman/tervalidasi', function () {
    return view('das.peminjaman.tervalidasi');
});
Route::get('/das/peminjaman/blm-tervalidasi', function () {
    return view('das.peminjaman.blm-tervalidasi');
});
Route::get('/das/peminjaman/reject', function () {
    return view('das.peminjaman.reject');
});
// Nasabah
Route::get('/nasabah', [NasabahController::class, 'index']);


// Route::get('/nasabah', function () {
//     $nasabah = Nasabah::all();
//     return view('das.nasabah.index', ['title' => 'Nasabah', 'nasabah' => $nasabah]);
// });
Route::get('dashboard/nasabah/checkSlug', [NasabahController::class, 'checkSlug']);
Route::get('/dashboard/nasabah/generateKode', [NasabahController::class, 'generateKode']);
Route::resource('/dashboard/nasabah', NasabahController::class);
Route::get('/nasabah/detail/{nasabah:slug}', function (Nasabah $nasabah) {
    return view('das.nasabah.detail', ['title' => 'Detail Nasabah', 'nasabah' => $nasabah]);
});
Route::get('/das/nasabah/bermasalah', function () {
    return view('das.nasabah.problem');
});
Route::get('/nasabah/add', function () {
    return view('das.nasabah.insert', ['title' => 'Tambah Nasabah']);
});

// Profil Admin
Route::get('/das/profile', function(){
    return view ('das.nasabah.profile');
});

// HOME
Route::resource('/simpanan', SimpananController::class);
Route::get('cek-simpanan/{kode_nasabah}', [SimpananController::class, 'cekSimpanan']);
Route::get('nasabah/simpanan/{kode_nasabah}', [SimpananController::class, 'viewSimpanan']);
// web.php
Route::get('nasabah/{kode_nasabah}/simpanan/add', [SimpananController::class, 'create'])->name('simpanan.create');
// Nasabah cetak kwitansi simpanan
Route::get('/nasabah/simpanan/{id}/cetak', [SimpananController::class, 'cetakKwitansi'])->name('nasabah.simpanan.cetak');

