<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject_choice extends Model
{
    use HasFactory;

    
    protected $table='subject_choices';

    protected $fillable = 
    [
    'subject_choice'];
    
// 
//     public function teacher()
//     {
//         return $this->belongsTo(Teacher::class);
//     }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
