<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestPaper extends Model
{
    use HasFactory;
    protected $table = 'test_paper';
    protected $primaryKey = 'id_test_paper';
    protected $fillable =[
        'name',
        'due_date',
        'id_course'
    ];
}
