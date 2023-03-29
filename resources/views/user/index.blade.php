@extends('./layouts.app')


@section('content')
<div class="wrapper d-flex align-items-stretch">
    @include('layouts.sidebarAdmin')
    <div class="container">



    <div class="row">
        <div class="col col-md-4">
          <button type="button" class="btn btn-gradient-info  " >
            <a class="nav-link" href="{{route('user.create')}}">      
              <i class="mdi mdi-account-plus "></i> 
            </a>
          </button>
        </div>
    </div>



<div class="row">
<div class="col col-lg-12 col-sm-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h1 >Users informations</h1>
        
        <table class="table table-striped">
          <thead class="text-center">
            <tr>
              <th>
                Number
              </th>
              <th>
                UserName
              </th>
              <th>
                Email
              </th>
              <th>
                Role
              </th>
              <th>
                Actions
              </th>
            </tr>
          </thead>
          <tbody class="text-center">
            @foreach ($users as  $user)
            <tr>
                                    
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->role}}</td>
             
              <td class="d-flex justify-content-center align-items-center">
                  {{-- <a href="{{ route('user.show', $user->id) }}"
                       class="btn btn-sm btn-primary">
                       Show   
                  </a> --}}
                  <a href="{{route('user.edit',$user->id)}}"
                      class="btn btn-sm btn-warning mx-2">
                        
                      <i class="mdi mdi-file-check btn-icon-append"></i> 
                 </a>
                 
              <form action="{{ route('user.destroy', $user->id) }}" method="Post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger " value="{{$user->id}}" onclick="return confirm('are you sure you want to delete this data ?')"><i class="mdi mdi-account-remove"></i> </button>
              </form> 
                  
              </td>

          </tr>
            @endforeach
          </tbody>
        </table>
        <div class="d-flex">
            {{ $users->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
    </div>
</div>

@endsection

