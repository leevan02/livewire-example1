<div>

    <div class="container pt-4">
     <button wire:click.prevent="addNew" type="button" class="btn btn-primary" data-original-title="" title="">
                Add Teacher
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
                        <th scope="col">Full Name</th>
                        <th scope="col">email</th>
                        <th scope="col">D.O.B</th>

                        <th scope="col">Phone number</th>
                        <th scope="col">Class</th>
                        
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($teachers as $teacher)
                        
                  
                        <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$teacher->name}}</td>
                         <td>{{$teacher->email}}</td>

                        <td>{{$teacher->dob}}</td>

                        <td>{{$teacher->pnumber_id}}</td>
                        <td> <button wire:click.prevent="ConfirmDelete({{$teacher->id}})" type="button" rel="tooltip" class="btn btn-primary btn-just-icon btn-sm" data-original-title="" title="">
                          <i class="material-icons">view classes</i>
                      </button></td>
                        



                        <td>{{$teacher->status}}</td>
                        <td>
                            <button wire:click.prevent="edit({{
                              
                                                $teacher
                              
                               }})" type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                            </button>
                            <button wire:click.prevent="ConfirmDelete({{$teacher->id}})" type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">Remove</i>
                            </button>
                        </td>
                            </tr>  
                      @endforeach
                  
                    </tbody>
                  </table>
            </div>
            <div class="card-footer">
              {{  $teachers->links()}}
            </div>
            


          



    </div>   
             <!-- Add User Modal -->










  <!-- Modal -->
<div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog">     
                   <form autocomplete="off" wire:submit.prevent="{{ $ShowEditModel ?  'update' : 'CreateTeacher' }}">

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
                            <label for="name" class="form-label">First Name</label>
                            <input wire:model.defer="state.name" type="text" class="form-control  @error('name') is-invalid @enderror" id="fname" aria-describedby="nameHelp ">
                        
                          @error('name')
                          
                           <div class="invalid-feedback">
                               {{$message}}
                           </div>
                          @enderror

                        </div>

                       

                      <div class="mb-3">
                        <label for="dob" class="form-label">D.O.B</label>
                        <input wire:model.defer="state.dob" type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" aria-describedby="emailHelp">
                              @error('dob')
                          
                           <div class="invalid-feedback">
                               {{$message}}
                           </div>
                          @enderror
                        </div>

                        <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input wire:model.defer="state.email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp">
                              @error('email')
                          
                           <div class="invalid-feedback">
                               {{$message}}
                           </div>
                          @enderror
                        </div>


                        <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>change status</option>
                          <option value="pending">pending</option>
                          <option value="active">active</option>
                         
                        </select>
                        </div>

                        <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input wire:model.defer="state.password" type="password" class="form-control @error('password') is-invalid @enderror" id="password">
                              @error('password')
                          
                           <div class="invalid-feedback">
                               {{$message}}
                           </div>
                          @enderror
                        </div>

                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Cofirm Password</label>
                            <input wire:model.defer="state.password_confirmation" type="password" class="form-control" id="confirm_password">
                        </div>
             
              
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
