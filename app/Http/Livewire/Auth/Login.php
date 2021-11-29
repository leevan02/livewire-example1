<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $form = [
        'email'   => '',
        'password'=> '',
    ];

    public function submit()
    {
        $this->validate([
            'form.email'    => 'required|email',
            'form.password' => 'required',
        ]);

        if(\Auth::guard('student')->attempt($this->form)){
            // session()->flash('message', "You are Login successful.");
            return redirect(url('student'));

    }else{
        session()->flash('error', 'email and password are wrong.');
    }
    if(\Auth::guard('teacher')->attempt($this->form)){
        // session()->flash('message', "You are Login successful.");
        return redirect(route('teacher'));

}else{
    session()->flash('error', 'email and password are wrong.');
}
    }

    public function render()
    {
        return view('livewire.auth.login');
    }

 

    
    

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
       
    }

}
