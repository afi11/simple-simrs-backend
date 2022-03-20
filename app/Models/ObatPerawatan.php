<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ObatPerawatan extends Model
{
    protected $table = 'obat_perawatan';
    protected $fillable = [
        'obat_id', 
        'perawatan_id',
    ];

}
