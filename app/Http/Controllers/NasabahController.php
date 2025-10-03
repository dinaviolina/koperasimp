<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;


class NasabahController extends Controller
{
    public function index(){
        return view('das.nasabah.index', [
            'title' => 'Data Nasabah',
            'nasabahs' => Nasabah::latest()->filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }
    public function create(){
        return view('das.nasabah.insert', [
            'title' => 'Tambah Nasabah'
        ]);
    }
    public function store(Request $request){
       $validatedData = $request->validate([
           'nama' => 'required|max:255',
              'NIK' => 'required|unique:nasabahs,NIK|max:16',
           
           'slug' => 'required|unique:nasabahs,slug',
           'tanggal_bergabung' => 'required|date',
           'alamat' => 'required|max:255',
           'telepon' => 'required|max:14',
           'jenis_kelamin'=>'required|in:Laki-laki,Perempuan'
       ]);

    //    $validatedData['user_id'] = auth()->id();
       Nasabah::create($validatedData);

       return redirect('/dashboard/nasabah')->with('success', 'Nasabah berhasil ditambahkan!');
    }

    public function show(){
    }

    public function edit(){
    }
    public function update(){

    }

    
public function destroy(Nasabah $nasabah)
{}
public function checkSlug(Request $request){
    $slug = SlugService::createSlug(Nasabah::class, 'slug', $request->nama);
    return response()->json(['slug' => $slug]);
}
public function generateKode()
{
    do {
        $kode = 'KMP-' . substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
    } while (\App\Models\Nasabah::where('kode_nasabah', $kode)->exists());

    return response()->json(['kode_nasabah' => $kode]);
}
}

