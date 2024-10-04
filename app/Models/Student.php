<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'photo',
        'address',
        'student_phone',
        'father_name',
        'father_phone',
        'mother_name',
        'mother_phone'
    ];
}