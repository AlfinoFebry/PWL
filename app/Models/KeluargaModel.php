<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    protected $table = 'keluarga';

    protected $fillable = [
        'nama_keluarga',
        'status'
    ];
}
