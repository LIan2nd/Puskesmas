<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';

    protected $guarded = ['id'];

    public function pasiens()
    {
        return $this->hasMany(pasien::class);
    }
}