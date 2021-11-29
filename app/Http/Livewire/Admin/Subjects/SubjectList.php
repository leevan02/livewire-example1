<?php

namespace App\Http\Livewire\Admin\Subjects;

use Livewire\Component;
use App\Models\Subject_choice;

class SubjectList extends Component
{
   public $subjectId, $subjectName;

   
   public $isOpen = 0;



    public function render()
    {    
         $subjects=Subject_choice::all();
        return view('livewire.admin.subjects.subject-list',compact('subjects'));
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }


    private function resetInputFields(){
        $this->subjectId = '';

        $this->subjectName = '';
      
    }


    public function store()
    {
        $this->validate([
            'subjectName' => 'required',
            
        ]);
   
        Subject_choice::updateOrCreate(['id' => $this->subjectId], [
            'subjectName' => $this->subjectName,
        ]);
  
        session()->flash('message', 
            $this->subjectId ? 'Post Updated Successfully.' : 'Post Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $subject = Subject_choice::findOrFail($id);
        $this->subjectId = $id;
        $this->subjectName = $subject->subjectName;
    
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
