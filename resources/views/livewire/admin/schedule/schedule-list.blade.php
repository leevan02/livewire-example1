<div>

    <div class="container pt-4">
     <button wire:click.prevent="addNew" type="button" class="btn btn-primary" data-original-title="" title="">
                Add Schedule
            </button>

        <div class="card">
          
          @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
         <strong><i class="fas fa-check-circle"></i> 
          {{session('message')}}</strong>  Check the table below .
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Courses</th>
                        <th scope="col">Class date</th>
                        <th scope="col">Start Time</th>

                        <th scope="col">End Time </th>
                       
                        
                       
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if ($schedules)
                            
                    @foreach ($schedules as $items)
                        
                  
                        <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$items->courseId}}</td>
                         <td>{{$items->classDate}}</td>

                        <td>{{$items->startTime}}</td>

                        <td>{{$items->endTime}}</td>
   
                        



                        
                        <td>
                            <button wire:click.prevent="edit({{ $items}})" type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                            </button>
                            <button wire:click.prevent="ConfirmDelete({{$items->id}})" type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">Remove</i>
                            </button>
                        </td>
                            </tr>  
                      @endforeach
                      @endif

                  
                    </tbody>
                  </table>
            </div>
            <div class="card-footer">
              {{-- {{  $items->links()}} --}}
            </div>
            


          



    </div>   
             <!-- Add User Modal -->










  <!-- Modal -->
<div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">     
                   <form autocomplete="off" wire:submit.prevent="{{ $ShowEditModel ?  'update' : 'CreateSchedule' }}">

                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                @if ($ShowEditModel)
                                <span>Edit teacher</span>
                                @else
                                <span>Add New Teacher</span>
                                @endif
                              
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>

                          <div class="modal-body">


                       
                            <div class="mb-3">

                                <select wire:model.defer="state.courseId" class="form-select" aria-label="Default select example">

                                  <option selected>select Subject</option>
                                  @foreach ($courses as $items)
                                      
                                 
                                  <option value="{{ $items->id }}">{{ $items->subjectName }}</option>
                               @endforeach
                                </select>
                                </div>
                        </div>

                       

                      <div class="mb-3">
                        <label for="dob" class="form-label">Class Due Date</label>
                        <input wire:model.defer="state.classDate" type="date" class="form-control @error('classDAte') is-invalid @enderror" id="dob" aria-describedby="emailHelp">
                              @error('classDate')
                          
                           <div class="invalid-feedback">
                               {{$message}}
                           </div>
                          @enderror
                        </div>

                        <div class="mb-3">
                        <label for="email" class="form-label">Start time</label>
                        <input wire:model.defer="state.startTime" type="time" class="form-control @error('startTime') is-invalid @enderror" id="email" aria-describedby="emailHelp">
                              @error('startTime')
                          
                           <div class="invalid-feedback">
                               {{$message}}
                           </div>
                          @enderror
                        </div>



                        <div class="mb-3">
                        <label for="password" class="form-label">End Time</label>
                        <input wire:model.defer="state.endTime" type="time" class="form-control @error('endTime') is-invalid @enderror" id="password">
                              @error('endTime')
                          
                           <div class="invalid-feedback">
                               {{$message}}
                           </div>
                          @enderror
                        </div>

                     
             
              

                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button id="button1" type="submit" class="btn btn-primary">
                          
                          @if ($ShowEditModel)
                          <span>Save Changes</span>
                          @else
                          <span>Add New Teacher</span>
                          @endif

                        </button>
                        </div>
      </div>              </form>

      </div>
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

                  Delete Teacher
                </h5>
              </div>

              <div class="modal-body">

                <h5 class="" id="">

                  Are you sure you want to delete this Teacher ?
                </h5>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <button id="button1" type="button" wire:click.prevent="deleteTeacher" class="btn btn-danger">Remove</button>
              </div>
             </div>
















    
<!-- End Add User Modal -->










    </div>
  </div>
</div>
<!-- End confirmation Modal -->



          </div>
</div>
