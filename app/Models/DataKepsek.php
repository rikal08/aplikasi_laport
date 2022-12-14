<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKepsek extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'kd',
        'name',
        'alamat',
        'telepon',
        'email',
        'password',
        'level',
    ];
}
