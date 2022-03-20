<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $fillable = [
        'pasien_no_mr', 
        'penanggung_jawab_id', 
        'department_tujuan', 
        'cara_bayar_id', 
        'cara_datang', 
        'keluhan', 
        'created_by'
    ];

}
