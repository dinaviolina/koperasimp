<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Simpanan;
use Illuminate\Http\Request;

class SimpananAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $simpanan= Simpanan::paginate(5);
        // $simpanan = Simpanan::all();
        return view('das.simpanan.index', [
            'title' => 'Simpanan',
            'simpanan' => $simpanan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Simpanan $simpanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($kode_simpanan)
    {
        $simpanan = Simpanan::where('kode_simpanan', $kode_simpanan)->firstOrFail();
        return view('das.simpanan.edit', [
            'title' => 'Edit Simpanan',
            'simpanan' => $simpanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Simpanan $simpanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Simpanan $simpanan)
{
    // Jika simpanan sudah disetujui, kurangi saldo nasabah
    if ($simpanan->status === 'disetujui') {
        $nasabah = $simpanan->nasabah;
        $nasabah->saldo -= $simpanan->jumlah_simpanan;

        // Pastikan saldo tidak negatif
        if ($nasabah->saldo < 0) {
            $nasabah->saldo = 0;
        }

        $nasabah->save();
    }

    // Hapus data simpanan
    $simpanan->delete();

    return redirect()->back()->with('success', 'Simpanan berhasil dihapus dan saldo nasabah diperbarui.');
}


    public function setujui ($id){
        // dd('masuk ke setujui');
    $simpanan = Simpanan::findOrFail($id);
        if ($simpanan->status === 'diajukan') {
        $simpanan->status = 'disetujui';
        $simpanan->save();

        // update saldo nasabah
        $nasabah = $simpanan->nasabah;
        $nasabah->saldo = $nasabah->saldo + $simpanan->jumlah_simpanan;
        $nasabah->status = 'aktif';
        $nasabah->save();
    }
    return redirect()->back()->with('success', 'Simpanan berhasil disetujui dan saldo nasabah diperbarui.');
    }
    
public function tolak($id)
{
    $simpanan = Simpanan::findOrFail($id);
    if ($simpanan->status === 'diajukan') {
        $simpanan->status = 'ditolak';
        $simpanan->save();
    }
    return redirect()->back()->with('error', 'Simpanan ditolak.');
}
// public function updateStatus(Request $request, $id)
// {
//     dd($request->all());
//     $simpanan = Simpanan::findOrFail($id);

//     if ($simpanan->status === 'diajukan') {
//         if ($request->action === 'setujui') {
//             $simpanan->status = 'disetujui';
//             $simpanan->save();

//             // update saldo nasabah
//             $nasabah = $simpanan->nasabah;
//             $nasabah->saldo += $simpanan->jumlah_simpanan;
//             $nasabah->status = 'aktif';
//             $nasabah->save();

//             return redirect()->back()->with('success', 'Simpanan berhasil disetujui dan saldo nasabah diperbarui.');
//         }

//         if ($request->action === 'tolak') {
//             $simpanan->status = 'ditolak';
//             $simpanan->save();

//             return redirect()->back()->with('error', 'Simpanan ditolak.');
//         }
//     }

//     return redirect()->back();
// }

public function cetakKwitansi($id)
{
    $simpanan = Simpanan::with('nasabah')->findOrFail($id);

    if ($simpanan->status !== 'disetujui') {
        return redirect()->back()->with('error', 'Kwitansi hanya bisa dicetak jika simpanan sudah disetujui.');
    }
    $pdf = Pdf::loadView('simpanan.kwitansi', compact('simpanan'))
              ->setPaper('A5', 'portrait');

    return $pdf->download('kwitansi_simpanan_'.$simpanan->id.'.pdf');
}

}