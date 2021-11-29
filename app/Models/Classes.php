<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    use HasFactory;
    
    protected $table='classes';

    protected $fillable = 
    [
      'className',
      'teacherId',
      'courseId',
      'scheduleId',


    ];
    
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    
}
