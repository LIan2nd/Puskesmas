<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{

    // Method untuk menampilkan data semua pasien
    public function index()
    {
        $pasiens = pasien::all();
        return view('admin.pasien.index', [
            'title' => 'Data Pasien',
            'pasiens' => $pasiens
        ]);
    }

    public function create()
    {
        return view('admin.pasien.create', [
            'title' => 'Tambah Data Pasien'
        ]);
    }
    // Untuk menangani submit form tambah pasien
    public function store(Request $request)
    {
        // Melakukan Validasi data form
        $request->validate([
            'nama' => 'required | min:3',
            'jk' => 'required',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required | max:500',
            'tlp' => 'required | numeric | digits_between:10,14'
        ]);

        // Insert data ke table pasiens di database;
        pasien::create([
            // 'Field dari table' => Nilai yang ingin diisi
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp,
        ]);

        return redirect('/pasien');

    }

    public function edit($id)
    {
        // Mendapatkan pasien berdasarkan id
        $pasien = Pasien::find($id);

        return view('admin.pasien.edit', [
            'title' => 'Edit Data Pasien',
            'pasien' => $pasien
        ]);
    }

    // Method untuk update pasien
    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required | min:3',
            'jk' => 'required',
            'tgl_lahir' => 'required | date',
            'alamat' => 'required | max:500',
            'tlp' => 'required | numeric | digits_between:10,14'
        ]);

        // Cari pasien yang akan diupdate
        $pasien = Pasien::find($id);
        $pasien->update($validatedData);

        // Kembalikan ke halaman Pasien
        return redirect('/pasien')->with('success', 'Data pasien berhasil diubah!');
    }

    // Method untuk menghapus pasien
    public function destroy(Request $request)
    {
        Pasien::destroy($request->id);

        return redirect('/pasien')->with('success', 'Data pasien berhasil dihapus!');
    }
}