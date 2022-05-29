<?php

namespace App\Models;

use App\Models\Siswa;
use App\Models\Pengajar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    public $table = 'course';
    protected $primaryKey = 'id_course';
    protected $fillable =[
        'name',
        'description',
        'created_by',
        'course_material'
    ];
    public function pengajar(){
        return $this->belongsTo(Pengajar::class, 'created_by');
    }
    public function siswa(){
        // return $this->belongsToMany(Siswa::class, 'course_siswa');
        return $this->belongsToMany(Siswa::class);
    }
    public function coursematerial(){
    return $this->belongsTo(CourseMaterial::class, 'course_material');
    }
}
