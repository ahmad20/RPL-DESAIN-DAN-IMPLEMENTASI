<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticable
{
    use HasFactory;
    use Notifiable;

    protected $guard = 'siswa';

    protected $guarded =[
        'id_siswa'
    ];
}
