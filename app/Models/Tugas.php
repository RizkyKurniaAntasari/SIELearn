<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas'; // pastikan nama tabel sama dengan database

    protected $fillable = [
        'judul',
        'deskripsi',
        'deadline',
        'file',
        'kelas_id',
        'dosen_id'
    ];

    /*
    |--------------------------------------------------------------------------
    | RELASI
    |--------------------------------------------------------------------------
    */

    // Tugas dimiliki oleh satu kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    // Tugas diberikan oleh satu dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    // Relasi ke pengumpulan tugas (jika nanti kamu pakai)
    public function submissions()
    {
        return $this->hasMany(TugasSubmit::class);
    }
}
