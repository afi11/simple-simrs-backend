<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TindakanPerawatan extends Model
{
    protected $table = 'tindakan_perawatan';
    protected $fillable = [
        'tindakan_id', 
        'perawatan_id',
    ];

}
