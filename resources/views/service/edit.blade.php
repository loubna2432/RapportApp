<div class="  modal fade" id="#editService" tabindex="-1" aria-labelledby="editServicelLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
              
                <h2> Neuveau utilisateur</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="forms-sample" action="{{route('user.update',$user->id)}}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf

              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"  placeholder="name" name='name' value="{{ $user->name }}" >
                </div>
              </div>
               @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
                @enderror

              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name='email' value="{{ $user->email }}">
                </div>
              </div>
              @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
                @enderror

              <div class="form-group row ">
                <label for="role" class="col-sm-3 col-form-label">Role</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" placeholder="Role d'utilisateur.." name='role' value="{{ $user->role }}">
                </div>
              </div>
              @error('role')
              <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name='password' >
                </div>
              </div>
              @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
                @enderror

              
              
        
              <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
      </div>
    </div>
</div>