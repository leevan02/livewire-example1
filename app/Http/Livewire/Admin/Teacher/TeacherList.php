<?php

namespace App\Http\Livewire\Admin\Teacher;

use App\Models\Classes;
use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Validator;

class TeacherList extends Component
{use WithPagination;


    public $state=[];

    public $items=[];


    public $ShowEditModel = false;

    public $teacherBeingRemoved = null;

    public $teacher;


    public $classModel = false;
    
    public $classBeingRemoved = null;

    public $class;


        // <------ADD NEW Teacher Model---->

    public function addNew()
    {
        $this->ShowEditModel;
        $this->state=[];
      $this->dispatchBrowserEvent('show-form');

    }


            // <------upload  NEW Teacher Model to database---->

    public function CreateTeacher()
    { 
        $validatedData= Validator::make($this->state, [
             
            'name' => 'required',
            'dob' => 'required',

            'email' => 'required|email',
            'status' => 'required',


            'password'   => 'required|confirmed'
        ]
       )->validate();

         
         $validatedData['password']=bcrypt($validatedData['password']);
         
            Teacher::create($validatedData);
  
            session()->flash('message','Successfully Added');

            $this->dispatchBrowserEvent('hide-form');

      
    }

            // <------EDIT Teacher Model---->

    public function edit(Teacher $teacher)
    {
        $this->ShowEditModel =true;

        $this->teacher = $teacher;

        $this->state= $teacher->toArray();
        // dd($user->toArray());
        $this->dispatchBrowserEvent('show-form');
    

    }

                // <------UPDATE Teacher Model---->

                public function update()
                {
                    $validatedData= Validator::make($this->state, [
             
                        'name' => 'required',
                        
                        'dob' => 'required',
    
                        'email' => 'required|email|unique:teachers,email,'.$this->teacher->id,
                        'status' => 'required',

                        'password'   => 'sometimes'|'confirmed'
                    ]
             )->validate();


             if(!empty(($validatedData['password'])))
         {
                      $validatedData['password']=bcrypt($validatedData['password']);

         }
      
           $this->teacher->update($validatedData);
      
                session()->flash('message','Updated successfully');
    
                $this->dispatchBrowserEvent('hide-form');
                }


                // <------confirmDelete------>

                public function ConfirmDelete($teacherId)
                {
                    $this->teacherBeingRemoved=$teacherId;
                    $this->dispatchBrowserEvent('confirm-delete-model');

                    

                }



                public function deleteTeacher()
                {
                    $teacher=Teacher::findOrFail($this->teacherBeingRemoved);

                    $teacher->delete();

                    $this->dispatchBrowserEvent('hide-delete-form');


                }

            // <------RETURN VIEW OF---->

    public function render()
    {
        $teachers=Teacher::latest()->paginate(10);

        return view('livewire.admin.teacher.teacher-list',
    ['teachers'=>$teachers]);
    }






// 
//     public function addClass()
//     {
//         $this->classModel;
//         $this->items=[];
//       $this->dispatchBrowserEvent('show-class-form');
//     }
// 
//     public function createClass()
//     {
//         
//         $validatedData= Validator::make($this->items, [
//              
//             'className' => 'required',
//             'teacherId' => 'required',
// 
//             'courseId' => 'required',
//             'scheduleId' => 'required',
// 
// 
// 
//         ]
//        )->validate();
// 
//          
//          
//             Classes::create($validatedData);
//   
//             session()->flash('message','Successfully Added');
// 
//             $this->dispatchBrowserEvent('hide-class-form');
//     }
// 
// 
// 
// 
//     public function editClass(Classes $class)
//     {
//         $this->ShowEditClassModel =true;
// 
//         $this->class = $class;
// 
//         $this->items= $class->toArray();
//         // dd($user->toArray());
//         $this->dispatchBrowserEvent('show-class-form');
//     
// 
//     }
// 
// 
// 
// 
//     public function updateClass()
//     {
//         $validatedData= Validator::make($this->state, [
//  
//             'className' => 'required',
//             'teacherId' => 'required',
// 
//             'courseId' => 'required',
//             'scheduleId' => 'required',
//         ]
//         )->validate();
// 
// 
// 
// 
//         $this->class->update($validatedData);
// 
//       session()->flash('message','Updated successfully');
// 
//       $this->dispatchBrowserEvent('hide-class-form');
//     }
// 
// 
// 
//     public function ConfirmClassDelete($classId)
//     {
//         $this->classBeingRemoved=$classId;
//         $this->dispatchBrowserEvent('confirm-class-delete-model');
// 
//         
// 
//     }
// 
// 
// 
//     public function deleteClassTeacher()
//     {
//         $class=Classes::findOrFail($this->classBeingRemoved);
// 
//         $class->delete();
// 
//         $this->dispatchBrowserEvent('hide-class-delete-form');
// 
// 
//     }

    
}
