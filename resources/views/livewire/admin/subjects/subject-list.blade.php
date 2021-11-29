<div class="container pt-4">
    
    <div class="card">
          @if (session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="flex">
                  <div>
                    <p class="text-sm">{{ session('message') }}</p>
                  </div>
                </div>
              </div>
          @endif
          <button wire:click="create()" class="btn btn-primary">Create New Post</button>
          @if($isOpen)
              @include('livewire.admin.subjects.create')
          @endif
          @if ($subjects)
            
            
         <div class="card-body">
          <table class="table table-hover">
              <thead>
                  <tr class="bg-gray-100">
                      <th scope="col">No.</th>
                      <th scope="col">subject</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($subjects as $item)
                  <tr>
                      <td scope="row">{{ $item->id }}</td>
                      <td class="">{{ $item->subjectName }}</td>
                      <td >
                      <button wire:click="edit({{ $item->id }})" class="btn btn-primary btn-just-icon btn-sm">Edit</button>
                          <button wire:click="delete({{ $item->id }})" class="btn btn-danger btn-just-icon btn-sm">Delete</button>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table> @endif
   
  </div>
</div>






