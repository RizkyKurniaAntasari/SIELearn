<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas'; 

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

    // Tugas milik satu kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    // Tugas dibuat oleh dosen
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }

    // Tugas memiliki banyak submission (pengumpulan)
    public function submissions()
    {
        return $this->hasMany(TugasSubmit::class, 'tugas_id');
    }
}
