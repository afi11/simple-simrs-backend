<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $fillable = [
        'no_mr', 'panggilan', 'nama', 'tanggal_lahir', 'gender','telepon', 'alamat', 'nik', 'created_by_user', 'updated_by_user'
    ];

}
