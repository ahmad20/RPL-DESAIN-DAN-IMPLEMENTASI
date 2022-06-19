<?php

namespace App\Models;

use App\Models\Siswa;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class WaliMurid extends Authenticatable
{
    use Notifiable;
    //HasApiTokens, HasFactory, 
    protected $table = 'wali_murid';
    protected $primaryKey = 'id_wali_murid';

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
        'id_konsultasi',
        'id_siswa'
    ];
    public function siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
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
