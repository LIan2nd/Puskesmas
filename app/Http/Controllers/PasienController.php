<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = pasien::getAll();
        return view('pasien.index', [
            'pasiens' => $pasiens
        ]);
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        dd($request->all());

    }
}