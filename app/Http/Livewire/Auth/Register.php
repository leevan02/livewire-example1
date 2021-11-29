<?php

namespace App\Http\Livewire\Auth;

use App\Models\Student;
use App\Models\Teacher;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{  
    public $name,$email,$dob,$gender,$role_as,$password,$confirmPassword;
    public $error;
    public function render()
    {
        return view('livewire.auth.register');
    }

    
    public function registerStore()
    {
        $validatedDate = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'dob' => 'required|date',
            'gender' => 'required',
            'role_as' => 'required',
            'password' => 'required|min:8|same:confirmPassword',
            'confirmPassword' => 'required'
        ]);

        $this->password = Hash::make($this->password); 

        if($this->role_as=='student')
        {

           $student= Student::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password, 'dob' => $this->dob, 'gender' => $this->gender, 'role_as' => $this->role_as]);
             if($student){
                 return redirect()->url('student.student');
             }
             else{
                 return $this->error="something went wrong";
             }      
        }
        if($this->role_as=='teacher')
        {
           $teacher= Teacher::create(['name' => $this->name, 'email' => $this->email,'password' => $this->password, 'dob' => $this->dob, 'gender' => $this->gender, 'role_as' => $this->role_as]);
            if($teacher){
                return redirect()->url('teacher.teacher');
            }
            else{
                return $this->error="something went wrong";
            }      
        }
        // dd('here');

        

    }
}
