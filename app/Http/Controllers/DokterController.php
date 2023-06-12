<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    //
    public function index()
    {
        $dokters = dokter::all();
        return view('admin.dokter.index', [
            'dokters' => $dokters
        ]);
    }

    public function create()
    {
        return view('admin.dokter.create');
    }

    public function store(Request $request)
    {

        // Melakukan Validasi data form
        $request->validate([
            'nama' => 'required | min:3',
            'spesialis' => 'required',
            'tlp' => 'required | numeric | digits_between:10,14',
            'alamat' => 'required | max:500'
        ]);

        dokter::create([
            // 'Field dari table' => Nilai yang ingin diisi
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'tlp' => $request->tlp,
            'alamat' => $request->alamat
        ]);

        return redirect('/dokter');

    }

    public function edit($id)
    {
        // Mendapatkan dokter berdasarkan id
        $dokter = Dokter::find($id);

        return view('admin.dokter.edit', [
            'dokter' => $dokter
        ]);
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required | min:3',
            'spesialis' => 'required',
            'tlp' => 'required | numeric | digits_between:10,14',
            'alamat' => 'required | max:500'
        ]);

        // Cari pasien yang akan diupdate
        $dokter = Dokter::find($id);
        $dokter->update($validatedData);

        // Kembalikan ke halaman Pasien
        return redirect('/dokter')->with('success', 'Data Dokter berhasil diubah!');
    }

    public function destroy(Request $request)
    {
        Dokter::destroy($request->id);

        return redirect('/dokter')->with('success', 'Data Dokter bernama berhasil dihapus!');
    }
}