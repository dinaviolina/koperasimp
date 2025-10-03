<?php

namespace App\Http\Controllers\Admin;

use App\Models\Penarikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenarikanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penarikan = Penarikan::all();
        return view('das.penarikan.index', [
            'title' => 'Penarikan',
            'penarikan' => $penarikan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('das.penarikan.add', [
            'title' => 'Tambah Penarikan'
        ]);
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
    public function show(string $id)
    {
        
         return view('das.penarikan.view', [
            'title' => 'Detail Penarikan'
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('das.penarikan.edit', [
            'title' => 'Edit Penarikan'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    public function belumvalidasi()
    {
        return view('das.penarikan.pending', [
            'title' => 'Belum Tervalidasi'
        ]);
    }
    public function reject()
    {
        return view('das.penarikan.reject', [
            'title' => 'Tolak Penarikan'
        ]);
    }
    public function setujui()
    {
        return view('das.penarikan.valid', [
            'title' => 'Tervalidasi'
        ]);
    }
}
