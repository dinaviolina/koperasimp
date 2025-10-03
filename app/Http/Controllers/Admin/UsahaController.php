<?php

namespace App\Http\Controllers\Admin;

use App\Models\Usaha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class UsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usahas = Usaha::all();
        return view('das.usaha.index',
         ['title' => 'Usaha', 'usahas' => $usahas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('das.usaha.add', [
            'title' => 'Tambah Usaha'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_usaha' => 'required|max:255',
            'slug' => 'required|unique:usahas,slug',
            'jenis_usaha' => 'required|max:255',
            'body' => 'required'
        ]);
        Usaha::create($validatedData);
        return redirect('/das/usaha')->with('success', 'Usaha berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $usaha = Usaha::where('slug', $slug)->first();
        return view('das.usaha.view', [
            'title' => 'Detail Usaha',
            'usaha' => $usaha
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usaha $usaha)
    {
        return view('das.usaha.edit', [
            'title' => 'Edit Usaha',
            'usaha' => $usaha
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usaha $usaha)
    {
        $rules = [
            'nama_usaha' => 'required|max:255',
            'jenis_usaha' => 'required|max:255',
            'body' => 'required'
        ];

        if($request->slug != $request->slug){
            $rules['slug'] = 'required|unique:usahas';
        }
        $validatedData = $request->validate($rules);
        Usaha::where('id', $usaha->id)
            ->update($validatedData);
        return redirect('/das/usaha')->with('success', 'Data usaha berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usaha $usaha)
    {
        Usaha::destroy($usaha->id);
        return redirect('/das/usaha')->with('success', 'Data usaha berhasil dihapus!');
        
    }
    public function checkSlug(Request $request){
    $slug = SlugService::createSlug(Usaha::class, 'slug', $request->nama_usaha);
    return response()->json(['slug' => $slug]);
}
}
