<?php

namespace App\Models;

use App\Models\Classes;
use App\Models\pnumber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $table='students';

    protected $fillable = 
    [
    'fname','lname','email','password','dob','class_id','subject_choice_id'];

    
      /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at' ,
    'updated_at',
    'password' 
    ];
    

    public function phone_number()
    {
        return $this->hasMany(pnumber::class);
    }

    public function classes()
    {
        return $this->hasMany(Classes::class);
    }


}
