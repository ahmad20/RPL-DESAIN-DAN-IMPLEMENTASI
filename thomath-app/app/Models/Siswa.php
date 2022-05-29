<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
    public function course(){
        return $this->belongsToMany(Course::class);
    }
}
