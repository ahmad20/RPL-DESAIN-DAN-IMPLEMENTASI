<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Konsultasi extends Authenticatable
{
    use HasFactory;
    protected $table = 'konsultasi';
    protected $primaryKey = 'id_konsultasi';
    protected $fillable = [
        'email',
        'topik',
        'tahun',
        'tanggal',
        'deskripsi'
    ];
}
