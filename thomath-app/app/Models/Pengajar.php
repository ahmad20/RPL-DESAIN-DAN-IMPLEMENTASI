<?php

namespace App\Models;

use App\Models\Konsultasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengajar extends Authenticatable
{
    use Notifiable;
    //HasApiTokens, HasFactory, 
    protected $table = 'pengajar';
    protected $primaryKey = 'id_pengajar';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'id_konsultasi'
    ];
    public function konsultasi(){
        return $this->belongsTo(Konsultasi::class, 'id_konsultasi');
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
