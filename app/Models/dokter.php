<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';

    protected $fillable = ['nama', 'spesialis', 'tlp', 'alamat'];
}