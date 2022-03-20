<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'resep';
    protected $fillable = [
        'obat_id', 
        'isi',
        'dokter_id',
        'perawatan_id',
        'pasien_no_mr'
    ];

}
