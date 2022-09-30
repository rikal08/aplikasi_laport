<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'kd',
        'name',
        'alamat',
        'telepon',
        'id_mapel',
        'email',
        'password',
        'level',
    ];
}
