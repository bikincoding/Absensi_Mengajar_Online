<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;

    // Define the table name
    protected $table = 'classes';

    protected $fillable = [
        'class_name',
        'class_level',
        'status',
    ];
}