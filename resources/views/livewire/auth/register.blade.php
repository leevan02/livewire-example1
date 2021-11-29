<div class="row">
  <div class="col-md-12">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
      @if ($error)
          <div class="alert alert-danger">
              {{ $error}}
          </div>
      @endif
  </div>
</div>
<form>
  <div class="row">
      <div class="col-md-12">
          <div class="form-group">
              <label>Name :</label>
              <input type="text" wire:model="name" class="form-control">
              @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
          </div>
      </div>


      <div class="col-md-12">
          <div class="form-group">
              <label>Email :</label>
              <input type="email" wire:model="email" class="form-control">
              @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
          </div>
      </div>











      <div class="row">
        <div class="col-md-6 mb-4">

          <div class="form-outline datepicker">
            <input
              wire:model="dob" type="date"
              class="form-control"
              id="exampleDatepicker1"
            />
            <label for="exampleDatepicker1" class="form-label">D.O.B</label>
            @error('dob') <span class="text-danger error">{{ $message }}</span>@enderror

          </div>

        </div>
        <div class="col-md-6 mb-4">

          <select wire:model="gender" class="select">
            <option value="1" disabled>Gender</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
            <option value="other">Other</option>
          </select>
          @error('gender') <span class="text-danger error">{{ $message }}</span>@enderror

        </div>

      </div>

      <div class="mb-4">

        <select wire:model="role_as" class="select">
          <option  disabled>Role Has</option>
          <option value="teacher">teacher</option>
          <option value="student">student</option>
         
        </select>
        @error('role_as') <span class="text-danger error">{{ $message }}</span>@enderror

      </div>

      <div class="col-md-12">
          <div class="form-group">
              <label>Password :</label>
              <input type="password" wire:model="password" class="form-control">
              @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
          </div>
      </div>

      <div class="form-outline mb-4">
        <input wire:model="confirmPassword" type="password" id="form3Example1q" class="form-control" />
        <label class="form-label" for="form3Example1q">confrim Password</label>
        @error('confirmPassword') <span class="text-danger error">{{ $message }}</span>@enderror

      </div>











     
      <div class="col-md-12 text-center">
          <button class="btn text-white btn-success" wire:click.prevent="registerStore">Register</button>
      </div>
      <div class="col-md-12">
          <a class="text-primary" href="{{ url('login') }}" ><strong>Login</strong></a>
      </div>
  </div>
</form>





