<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    // Hubungkan model ke table pasiens di database
    protected $table = 'pasiens';

    // Menyebutkan field yang boleh diisi;
    protected $fillable = ['nama', 'jk', 'tgl_lahir', 'alamat', 'tlp'];
}