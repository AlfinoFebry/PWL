<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobiModel extends Model
{
    protected $table = 'hobi';

    protected $fillable = [
        'nama_hobi'
    ];
}
