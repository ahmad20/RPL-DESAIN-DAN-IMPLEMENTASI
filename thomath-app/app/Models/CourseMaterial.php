<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseMaterial extends Model
{
    use HasFactory;
    public $table = 'course_material';
    protected $primaryKey = 'id_course_material';
    protected $fillable =['slide', 'video', 'tugas', 'kuis', 'referensi'];
}
