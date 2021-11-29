<?php

namespace App\Http\Livewire\Admin\Schedule;

use Livewire\Component;
use App\Models\Schedule;
use Livewire\WithPagination;
use App\Models\Subject_choice;
use Illuminate\Support\Facades\Validator;

class ScheduleList extends Component
{
    use WithPagination;


    public $state=[];

    public $ShowEditModel = false;

    public $ScheduleBeingRemoved = null;

    public $schedule;

      // <------ADD NEW USER Model---->

      public function addNew()
      {
          $this->ShowEditModel;
          $this->state=[];
        $this->dispatchBrowserEvent('show-form');
  
      }
  
  
              // <------upload  NEW USER Model to database---->
  
      public function CreateSchedule()
      { 
          $validatedData= Validator::make($this->state, [
               
              'courseId' => 'required',
              'startTime' => 'required',
              'endTime' => 'required',
  
              'classDate' => 'required',
  
              
          ]
         )->validate();
  
           
           
           
              Schedule::create($validatedData);
    
              session()->flash('message','Successfully Added');
  
              $this->dispatchBrowserEvent('hide-form');
  
        
      }
  
              // <------EDIT USER Model---->
  
      public function edit(Schedule $schedule)
      {
          $this->ShowEditModel =true;
  
          $this->schedule = $schedule;
  
          $this->state= $schedule->toArray();
          // dd($user->toArray());
          $this->dispatchBrowserEvent('show-form');
      
  
      }
  
                  // <------UPDATE USER Model---->
  
                  public function update()
                  {
                    $validatedData= Validator::make($this->state, [
               
                        'courseId' => 'required',
                        'startTime' => 'required',
                        'endTime' => 'required',
            
                        'classDate' => 'required',
            
                        
                    ]
                   )->validate();
  
  
        
                     $this->schedule->update($validatedData);
        
                  session()->flash('message','Updated successfully');
      
                  $this->dispatchBrowserEvent('hide-form');
                  }
  
  
                  // <------confirmDelete------>
  
                  public function ConfirmDelete($scheduleId)
                  {
                      $this->ScheduleBeingRemoved=$userId;
                      $this->dispatchBrowserEvent('confirm-delete-model');
  
                      
  
                  }
  
  
  
                  public function deleteSchedule()
                  {
                      $schedule=Subject_choice::findOrFail($this->ScheduleBeingRemoved);
  
                      $schedule->delete();
  
                      $this->dispatchBrowserEvent('hide-delete-form');
  
  
                  }
  
              // <------RETURN VIEW OF---->
    public function render()
    {
        return view('livewire.admin.schedule.schedule-list',['schedules'=>$schedules=Schedule::all()
                                                            
                                                             ,'courses'=>$courses=Subject_choice::all()]);
    }
}
