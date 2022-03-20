<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class PenanggungJawab extends Model
{
    protected $table = 'penanggung_jawab';
    protected $fillable = [
        'id', 'nama', 'alamat', 'telepon', 'hubungan_pasien'
    ];

}
