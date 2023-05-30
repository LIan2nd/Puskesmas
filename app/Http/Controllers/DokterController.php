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
        dokter::create([
            // 'Field dari table' => Nilai yang ingin diisi
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'tlp' => $request->telp,
            'alamat' => $request->alamat
        ]);

        return redirect('/dokter');

    }
}