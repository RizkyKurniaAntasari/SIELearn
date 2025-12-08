<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'nim',
        'email',
        'no_hp',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'kelas_id',
        'foto',
        'status',
    ];
}
