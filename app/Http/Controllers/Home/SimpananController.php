<?php

namespace App\Http\Controllers\Home;

use App\Models\Nasabah;
use App\Models\Simpanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class SimpananController extends Controller
{
    public function cekSimpanan($kode_nasabah)
{
    $nasabah = Nasabah::where('kode_nasabah', $kode_nasabah)->first();
    if ($nasabah){
    return response()->json([
            'nama' => $nasabah->nama,
            'saldo' => $nasabah->saldo,
        ]);
    } else {
        return response()->json([
            'saldo' => 'ID tidak ditemukan'
        ]);
    }
}

public function viewSimpanan($kode_nasabah)
{   
    $nasabah = Nasabah::where('kode_nasabah', $kode_nasabah)->firstOrFail();
    $title = 'Detail Simpanan';
    $simpanan = Simpanan::where('nasabah_id', $nasabah->id)
    ->paginate(3)
    ->withQueryString();
    return view('home.simpanan',compact('nasabah', 'title', 'simpanan'));
}
public function create($kode_nasabah)
{
    $nasabah = Nasabah::where('kode_nasabah', $kode_nasabah)->firstOrFail();
    return view('home.add_simpanan',[
        'title' => 'Tambah Simpanan',
        'nasabah' => $nasabah
    ]);
}
public function store(Request $request)
{
    $validated = $request->validate([
        'nasabah_id' => 'required|exists:nasabahs,id',
        'jumlah_simpanan' => 'required|numeric|min:0',
        'jenis_simpanan' => 'required|in:transfer,tunai',
        'bukti_simpanan' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);
    $path = $request->file('bukti_simpanan')->store('home/bukti_simpanan', 'public');
   

    // kode_simpanan tetap dibuat auto increment format SIM-00001
    $last = Simpanan::latest('created_at')->first();
    $number = $last ? intval(substr($last->kode_simpanan, 4)) + 1 : 1;
    $kode_simpanan = 'SIM-' . str_pad($number, 5, '0', STR_PAD_LEFT);

    Simpanan::create([
    'kode_simpanan' => $kode_simpanan,
    'nasabah_id' => $validated['nasabah_id'],
    'jumlah_simpanan' => $validated['jumlah_simpanan'],
    'jenis_simpanan' => $validated['jenis_simpanan'],
    'bukti_simpanan' => $path,
    'status' => 'diajukan', // default
]);
   $nasabah = \App\Models\Nasabah::findOrFail($validated['nasabah_id']);
return redirect("nasabah/simpanan/{$nasabah->kode_nasabah}")
        ->with('success', 'Simpanan berhasil diajukan!');

}
public function cetakKwitansi($id)
{
    $simpanan = Simpanan::with('nasabah')->findOrFail($id);

    if ($simpanan->status !== 'disetujui') {
        return redirect()->back()->with('error', 'Kwitansi hanya bisa dicetak jika simpanan sudah disetujui.');
    }

    return view('home.invoiceIndividu', compact('simpanan'));
}

}
