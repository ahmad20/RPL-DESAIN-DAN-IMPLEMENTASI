<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Siswa extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable =[
        'name',
        'email',
        'password',
        'phone_number',
        'id_konsultasi'

    ];
}
