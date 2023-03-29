@extends('./layouts.app')


@section('content')
<div class="wrapper d-flex align-items-stretch">
    @include('layouts.sidebarAdmin')
    <div class="container">
    

<div class="row rowForm  bg-secondary ">
    <div class="col-md-6 grid-margin stretch-card mt-4 ">
     
        <div class="card">
          <div class="card-body">
            <div class="row mb-4">
              <div class="col col-mg-3">
            <button type="button" class="btn btn-gradient-info btn-icon-text mt-4" >
              <a class="nav-link" href="{{route('user.index')}}">
                <span class="menu-title"><- Back</span>
              
              </a>
            </button>
          </div>
            </div>
            <h4 class="card-title">Information de profil</h4>
           
            <form class="forms-sample" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">           
                @csrf

              <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"  placeholder="name" name='name' value="{{ old('name') }}" >
                </div>
              </div>
               @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
                @enderror

              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name='email' value="{{ old('email') }}">
                </div>
              </div>
              @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
                @enderror

              <div class="form-group row ">
                <label for="role" class="col-sm-3 col-form-label">Role</label>
                <div class="col-sm-9">
                  <select class="form-select select @error('role') is-invalid @enderror" id="role"   name='role' >
                      <option value="2">Directeur</option>
                      <option value="3">ChefService</option>
                      <option value="4">Fonctionnaire</option>
                   
                  </select>
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
              <button type="reset" class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
</div>
    </div>
</div>
</div>


@endsection