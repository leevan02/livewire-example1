<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject_choice extends Model
{
    use HasFactory;

    
    protected $table='subject_choices';

    protected $fillable = 
    [
    'subjectName'];
    
// 
//     public function teacher()
//     {
//         return $this->belongsTo(Teacher::class);
//     }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    

    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
