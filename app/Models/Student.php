<?php

namespace App\Models;

use App\Models\Classes;
use App\Models\pnumber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Student extends  Authenticatable
{
    use Notifiable;

    protected $guard='students';

    protected $fillable = 
    [
    'name','gender','email','password','dob','status'];

    
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
