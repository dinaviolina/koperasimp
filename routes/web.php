<?php

use App\Models\Usaha;
use App\Models\Nasabah;
use App\Models\Simpanan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\Admin\UsahaController;
use App\Http\Controllers\Home\SimpananController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SimpananAdminController;
use App\Http\Controllers\Admin\PenarikanAdminController;
use App\Http\Controllers\Admin\PeminjamanAdminController;

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

// Route::get('/dashboard', function () {
//     return view('das.index');
// });
Route::resource('/dashboard', DashboardController::class );
// Usaha
// Route::get('/das/usaha', function () {
//     $usahas = Usaha::all();
//     return view('das.usaha.index', ['title' => 'Usaha', 'usahas' => $usahas]);
// });

Route::get('/das/usaha/checkSlug', [UsahaController::class, 'checkSlug']);
Route::resource('/das/usaha', UsahaController::class);
Route::get('/das/usahadetail/{nasabah:slug}', function (Usaha $usaha) {
    return view('das.usaha.detail', ['title' => 'Detail usaha', 'usaha' => $usaha]);
});
// Route::get('/usaha/add', function () {
//     return view('das.usaha.add', ['title' => 'Tambah Usaha']);
// });
Route::get('/usaha/view/{usaha:slug}', function (Usaha $usaha) {
    return view('das.usaha.view', ['title' => 'Detail Usaha', 'usaha' => $usaha]);
});
// end Usaha
Route::get('/daslain', function () {
    return view('das.lain');
});
// Simpanan
// Route::get('/das/simpanan', function () {
//     return view('das.simpanan.index');
// });
Route::resource('/das/simpanan', SimpananAdminController::class);
// routes/web.php
// Route::post('/dashboard/simpanan/{id}/update-status', [SimpananController::class, 'updateStatus'])->name('simpanan.updateStatus');
// Route::put('/dashboard/simpanan/{id}/update-status', [SimpananController::class, 'updateStatus'])->name('simpanan.updateStatus');

Route::post('/dashboard/simpanan/{id}/setujui', [SimpananAdminController::class, 'setujui'])->name('simpanan.setujui');
Route::post('/dashboard/simpanan/{id}/tolak', [SimpananAdminController::class, 'tolak'])->name('simpanan.tolak');
Route::get('/simpanan/add', function () {
    return view('das.simpanan.insert_simpanan', ['title' => 'Tambah Simpanan']);
});
Route::get('/simpanan/view', function () {
    return view('home.simpanan', ['title' => 'Simpanan']);
});

// Penarikan
Route::get('/das/penarikan/detail', [PenarikanAdminController::class, 'detail']);
Route::get('/das/penarikan/reject', [PenarikanAdminController::class, 'reject'])->name('penarikan.reject');
Route::get('/das/penarikan/setujui', [PenarikanAdminController::class, 'setujui'])->name('penarikan.setujui');
Route::get('/das/penarikan/belumvalidasi', [PenarikanAdminController::class, 'belumvalidasi'])->name('penarikan.belumvalidasi');
Route::resource('/das/penarikan', PenarikanAdminController::class);

// Peminjaman
Route::get('/das/peminjaman/detail', [PeminjamanAdminController::class, 'detail']);
Route::get('/das/peminjaman/reject', [PeminjamanAdminController::class, 'reject'])->name('peminjaman.reject');
Route::get('/das/peminjaman/tervalidasi', [PeminjamanAdminController::class, 'setujui'])->name('peminjaman.setujui');
Route::get('/das/peminjaman/belumvalidasi', [PeminjamanAdminController::class, 'belumvalidasi'])->name('peminjaman.belumvalidasi');
Route::resource('/das/peminjaman', PeminjamanAdminController::class);

// Nasabah
Route::get('/nasabah', [NasabahController::class, 'index']);
Route::get('dashboard/nasabah/checkSlug', [NasabahController::class, 'checkSlug']);
Route::get('/dashboard/nasabah/generateKode', [NasabahController::class, 'generateKode']);
Route::resource('/dashboard/nasabah', NasabahController::class);
// Route::get('/nasabah/detail/{nasabah:slug}', function (Nasabah $nasabah) {
//     return view('das.nasabah.detail', ['title' => 'Detail Nasabah', 'nasabah' => $nasabah]);
// });
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

