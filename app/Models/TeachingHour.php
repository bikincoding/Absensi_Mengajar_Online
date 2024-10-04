<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeachingHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'teaching_hour_name',
        'status',
    ];
}