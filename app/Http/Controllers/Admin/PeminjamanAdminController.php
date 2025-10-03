<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('das.pinjaman.index', ['title' => 'Peminjaman']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('das.pinjaman.create', ['title' => 'Tambah Peminjaman']);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('das.pinjaman.edit', ['title' => 'Edit Peminjaman']);
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
        return view('das.pinjaman.pending', [
            'title' => 'Belum Tervalidasi'
        ]);
    }
    public function reject()
    {
        return view('das.pinjaman.reject', [
            'title' => 'Tolak peminjaman'
        ]);
    }
    public function setujui()
    {
        return view('das.pinjaman.valid', [
            'title' => 'Tervalidasi'
        ]);
    }
}
