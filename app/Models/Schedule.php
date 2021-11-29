<?php

namespace App\Models;

use App\Models\Classes;
use App\Models\Subject_choice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;
    protected $table='schedules';

    protected $fillable = 
    [
      'classDate',
      'startTime',
      'courseId',
      'endTime',


    ];
    
    

    public function course()
    {
        return $this->belongsTo(Subject_choice::class);
    }
    
    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
}
