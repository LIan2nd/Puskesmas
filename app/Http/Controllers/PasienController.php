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
            'pasiens' => $pasiens
        ]);
    }

    public function create()
    {
        return view('admin.pasien.create');
    }

    public function store(Request $request)
    {
        // Insert data ke table pasiens di database;
        pasien::create([
            // 'Field dari table' => Nilai yang ingin diisi
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'tlp' => $request->telp
        ]);

        return redirect('/pasien');

    }
}