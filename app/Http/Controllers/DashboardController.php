<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\pasien;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $dokters = dokter::all();
        $pasiens = pasien::all();
        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'dokters' => $dokters,
            'pasiens' => $pasiens
        ]);
    }
}