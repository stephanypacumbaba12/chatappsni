<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name', 
        'email', 
        'phone',
        'address',
        'university',
        'degree',
        'edu_start_date',
        'edu_end_date',
        'company',                
        'position',
        'work_start_date',
        'work_end_date',
        'responsibilities'
    ];
}