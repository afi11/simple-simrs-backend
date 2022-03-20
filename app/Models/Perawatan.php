<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    protected $table = 'perawatan';
    protected $fillable = [
        'pasien_no_mr',
        'anamnesis',
        'pemeriksaan',
        'diagnosis',
        'tindakan_id',
        'daftar_obat_id',
        'observasi_klinis',
        'ringkasan_pulang',
        'check_in',
        'check_out',
        'cara_pulang',
        'status',
        'dokter_id',
        'perawat_id',
        'department_id',
        'icd'
    ];

}
