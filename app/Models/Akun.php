<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = "akun";
    protected $fillable = [
        'id_pelanggan',
        'id_pegawai',
        'username',
        'password',
        'level',
    ];

}