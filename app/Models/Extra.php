<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    use HasFactory;

    protected $table = 'extrakulikuler';
    protected $guarded = ['id_extra'];
    public $timestamps = false;

    protected $primaryKey = 'id_extra';
}
