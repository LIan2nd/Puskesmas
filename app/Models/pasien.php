<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    public static function getAll()
    {
        return [
            ['nama' => 'Udin', 'jk' => 'l', 'Tgl_lahir' => '12/06/2002', 'alamat' => 'Bogor', 'telp' => '086187319090'],
            ['nama' => 'Elisabet', 'jk' => 'p', 'Tgl_lahir' => '08/04/2004', 'alamat' => 'Depok', 'telp' => '086187319090'],
            ['nama' => 'Anto', 'jk' => 'l', 'Tgl_lahir' => '12/012/2003', 'alamat' => 'Padang', 'telp' => '086187319090']
        ];
    }
}