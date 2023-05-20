<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;

    public static function getAll()
    {
        return [
            ['nama' => 'Alfian', 'spesialis' => 'Gigi', 'telp' => '086187319090', 'alamat' => 'Bogor'],
            ['nama' => 'Saskia', 'spesialis' => 'jantung', 'telp' => '086187319090', 'alamat' => 'Depok'],
            ['nama' => 'Aqilla', 'spesialis' => 'Gigi', 'telp' => '086187319090', 'alamat' => 'Padang']
        ];
    }
}