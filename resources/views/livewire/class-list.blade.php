<div>

    <div class="container pt-4">
     <button wire:click.prevent="addNew" type="button" class="btn btn-primary" data-original-title="" title="">
                Add New Class
            </button>


          
          @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
         <strong><i class="fas fa-check-circle"></i> 
          {{session('message')}}</strong>  Check the table below .
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if ($classItems)

        <h1>hey</h1>
            
        
           
                @foreach ($classItems as $class)
            
        
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="card  order-card" style="background:linear-gradient(45deg,#FF5370,#ff869a)">
                                <div class="card-block">
                                    <h6 class="m-b-20">class Name</h6>
                                    <h2 class="text-right"><i class="fa fa-book f-left"></i><span>{{ $class->className }}</span></h2>
                                    <p class="m-b-0">Teacher: <span class="f-right">{{ $class->teacherId }}</span></p>
                                </div>

                                
                            </div>
                        </div>
                        @endforeach
                        @endif  

            </div>
            <


          -


 
             <!-- Add User Modal -->










 
  <!-- Modal -->
<div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog">     
                 <form autocomplete="off" wire:submit.prevent="CreateClasses">

                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                              @if ($ShowEditModel)
                              <span>Edit Class</span>
                              @else
                              <span>Add New Class</span>
                              @endif
                            
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">




                          <div class="mb-3">
                            <label for="className" class="form-label">Class Name</label>
                            <input wire:model.defer="state.className" type="text" class="form-control @error('className') is-invalid @enderror" id="className" aria-describedby="emailHelp">
                                  @error('className')
                              
                               <div class="invalid-feedback">
                                   {{$message}}
                               </div>
                              @enderror
                            </div>


                            <div class="mb-3">

                              <select wire:model.defer="state.teacherId" class="form-select" aria-label="Default select example">

                                <option selected>select Subject</option>
                                @foreach ($teacher as $items)
                                    
                               
                                <option value="{{ $items->id }}">{{ $items->name }}</option>
                             @endforeach
                              </select>
                              </div>
                 

                     
                          <div class="mb-3">

                              <select wire:model.defer="state.courseId" class="form-select" aria-label="Default select example">

                                <option selected>select Subject</option>
                                @foreach ($subject as $items)
                                    
                               
                                <option value="{{ $items->id }}">{{ $items->subjectName }}</option>
                             @endforeach
                              </select>
                              </div>
                     


                      <div class="mb-3">

                        <select wire:model.defer="state.scheduleId" class="form-select" aria-label="Default select example">

                          <option selected>select Subject</option>
                          @foreach ($schedule as $items)
                              
                         
                          <option value="{{ $items->id }}">{{ $items->courseId }}</option>
                       @endforeach
                        </select>
                        </div>
                

                     

                        </div>
                   
           
            

                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                      <button id="button1" type="submit" class="btn btn-primary">
                        
                        @if ($ShowEditModel)
                        <span>Save Changes</span>
                        @else
                        <span>Add New Class</span>
                        @endif

                      </button>
                      </div>

    </div>     
           </form>

    
  </div>
</div>
<!-- End Add User Modal -->






               <!-- Confirm Modal -->










  <!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog">     
             <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">

                  Delete class
                </h5>
              </div>

              <div class="modal-body">

                <h5 class="" id="">

                  Are you sure you want to delete this class ?
                </h5>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <button id="button1" type="button" wire:click.prevent="deleteclasses" class="btn btn-danger">Remove</button>
              </div>
             </div>

    </div>
  </div>
</div>
<!-- End confirmation Modal -->



          </div>
</div>
