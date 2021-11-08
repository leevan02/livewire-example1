<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use App\Models\Student;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class UsersList extends Component
{

    public $state=[];

    public $ShowEditModel = false;

    public $user;



        // <------ADD NEW USER Model---->

    public function addNew()
    {
        $this->ShowEditModel;
        $this->state=[];
      $this->dispatchBrowserEvent('show-form');

    }


            // <------upload  NEW USER Model to database---->

    public function CreateUser()
    { 
        $validatedData= Validator::make($this->state, [
             
                    'fname' => 'required',
                    'lname' => 'required',
                    'dob' => 'required',

                    'email' => 'required|email',

                    'password'   => 'required'|'confirmed'
                ]
         )->validate();

         
         $validatedData['password']=bcrypt($validatedData['password']);
         
            Student::create($validatedData);
  
            session()->flash('message','Successfully Added');

            $this->dispatchBrowserEvent('hide-form');

      
    }

            // <------EDIT USER Model---->

    public function edit(Student $user)
    {
        $this->ShowEditModel =true;

        $this->user = $user;

        $this->state= $user->toArray();
        // dd($user->toArray());
        $this->dispatchBrowserEvent('show-form');
    

    }

                // <------UPDATE USER Model---->

                public function update()
                {
                    $validatedData= Validator::make($this->state, [
             
                        'fname' => 'required',
                        'lname' => 'required',
                        'dob' => 'required',
    
                        'email' => 'required|email|unique:users,email,'.$this->user->id,
    
                        'password'   => 'sometimes'|'confirmed'
                    ]
             )->validate();


             if(!empty(($validatedData['password'])))
         {
                      $validatedData['password']=bcrypt($validatedData['password']);

         }
      
           $this->user->update($validatedData);
      
                session()->flash('message','Updated successfully');
    
                $this->dispatchBrowserEvent('hide-form');
                }


                // <------confirmDelete------>

                public function ConfirmDelete($userId)
                {
                    $this->UserBeingRemoved=$userId;
                    $this->dispatchBrowserEvent('confirm-delete-model');

                }


            // <------RETURN VIEW OF---->



    public function render()
    {
        $users=Student::latest()->paginate();
        return view('livewire.admin.users.users-list',[
            'users' => $users,
        ]);
    }
}
