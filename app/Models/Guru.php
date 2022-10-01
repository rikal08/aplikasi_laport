<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $fillable = [
        'id_guru',
        'name',
        'id_mapel',
        'id_extra',
        'alamat',
        'telepon',
        'email',
        'password',
    ];

    public $timestamps = false;
}
