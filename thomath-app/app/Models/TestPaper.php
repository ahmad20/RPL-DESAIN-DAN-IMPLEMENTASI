<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TestPaper extends Model
{
    use HasFactory;
    protected $table = 'test_paper';
    protected $primaryKey = 'id_test_paper';
    protected $fillable =[
        'due_date',
        'question',
        'id_course'
    ];
    public function course(){
        return $this->belongsTo(Course::class, 'id_course');
    }
}
