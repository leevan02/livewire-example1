<?php

namespace App\Http\Livewire;

use App\Models\Classes;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\Schedule;
use Livewire\WithPagination;
use App\Models\Subject_choice;
use Illuminate\Support\Facades\Validator;


class ClassList extends Component
{

    use WithPagination;



    public $state=[];

    public $ShowEditModel = false;

    public $classesBeingRemoved = null;

    public $classes;



        // <------ADD NEW USER Model---->

    public function addNew()
    {
        $this->ShowEditModel;
        $this->state=[];
      $this->dispatchBrowserEvent('show-form');

    }






    public function mount()
    {
        $this->courses=Course::all();
        if($this->courseId !='')
        {
            $this->teachers=User::where('course_id',$this->courseId)->where('Role_as','teacher')->get();
        }
        else{
            $this->teachers=[];
        }
    }
   public function updatedCourseId()
      {
          if($this->courseId !='')
          {
              $this->teachers=User::where('course_id',$this->courseId)->where('Role_as','teacher')->get();
          }
          else{
              $this->teachers=[];
          }
     }


     
            // <------upload  NEW USER Model to database---->

    public function CreateClasses()
    { 
      
 
        $validatedData= Validator::make($this->state, [
                         
                        'className' => 'required',
                        'teacherId' => 'required',
            
                        'courseId' => 'required',
                        'scheduleId' => 'required',

            
            
            
                    ]
                   )->validate();
            
                     
                     
                        Classes::create($validatedData);
         
           

            session()->flash('message','Successfully Added');

            $this->dispatchBrowserEvent('hide-form');

      
    }

            // <------EDIT USER Model---->

    public function edit(Classes $classes)
    {
        $this->ShowEditModel =true;

        $this->classes = $classes;

        $this->items= $classes->toArray();
        // dd($user->toArray());
        $this->dispatchBrowserEvent('show-form');
    

    }

                // <------UPDATE USER Model---->

                public function update()
                {
                    $validatedData= Validator::make($this->state, [
             
                        'classes' => 'required',
                        
                    ]
             )->validate();


           $this->classes->update($validatedData);
      
                session()->flash('message','Updated successfully');
    
                $this->dispatchBrowserEvent('hide-form');
                }


                // <------confirmDelete------>

                public function ConfirmDelete($classesId)
                {
                    $this->classesBeingRemoved=$classesId;
                    $this->dispatchBrowserEvent('confirm-delete-model');

                    

                }



                public function deleteclasses()
                {
                    $classes=Classes::findOrFail($this->classesBeingRemoved);

                    $classes->delete();

                    $this->dispatchBrowserEvent('hide-delete-form');


                }


    public function render()
    {
       $classItems=Classes::all();

        $teacher=Teacher::all();

        $subject=Subject_choice::all();

        $schedule=Schedule::all();
        return view('livewire.class-list',['classItems'=>$classItems,
                                           'teacher'=>$teacher,
                                           'subject'=>$subject,
                                           'schedule'=>$schedule]);
    }
}
