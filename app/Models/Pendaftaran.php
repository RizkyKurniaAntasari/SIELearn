<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'kelas',
        'status'
    ];
}
