<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
        'student_id',
        'room_name',
        'teacher_name',
        'teacher_id',
        'office_room',
        'date',
        'start_time',
        'end_time',
        'duration',
        'student_score'  
    ];
}
