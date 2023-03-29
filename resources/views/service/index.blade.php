@extends('layouts.app')
@section('content')
<div class="wrapper d-flex align-items-stretch">
    @include('layouts.sidebarAdmin')
    <div class="container">


    <div class="row headServc ">
      
        <div class="col col-md-4 divBtnSrv">
            <button type="button" class="btn btn-gradient-info btn-icon-text mt-4" data-bs-toggle="modal" data-bs-target="#addServiceModal">
            <a href='#' class="nav-link"><i class="mdi mdi-plus
              \f504"></i></a>                                                                              
            </button>
        </div>
        <div class='col col-md-6'>
          <img src="images/s2.jpg" class="imgSrvc"/>
  
      </div>
        
    </div>

    <div class="row">
        <div class="col col-lg-12 col-sm-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h1>Services informations</h1>
                
                <table class="table table-striped" id="tableService">
                  <thead class="text-center">
                    <tr>
                      <th>
                        N°
                      </th>
                      <th>
                        Intitulé
                      </th>
                    
                      <th>
                        Options
                      </th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach ($services as  $service)
                    <tr>
                                            
                      <td>{{$service->id}}</td>
                      <td>{{$service->nomService}}</td>
                      
                    
                      <td class="d-flex justify-content-center align-items-center">
                        
                          <a href="#"
                              class="btn btn-sm btn-warning mx-2 " data-bs-toggle="modal" data-bs-target="#editService">
                              <i class="mdi mdi-pen
                              \f4d9"></i>  
                        </a>
                        
                      <form action="{{ route('service.destroy', $service->id) }}" method="Post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger " value="{{$service->id}}" onclick="return confirm('are you sure you want to delete this data ?')" ><i class="mdi mdi-close-box
                            \f24d"></i>  </button>
                      </form> 
                          
                      </td>
        
                  </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="d-flex">
                    {{ $services->links() }}
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
    </div>
@endsection

{{-- @section('script')
@include('service.service_js') --}}

{{-- <script>
  $(document).ready(function(){
    $('body').on('click',"#show-service",function(){
      var serviceURL=$(this).data('url');
      $get(serviceURL,function(data){
        $('#modalShowService').modal('show');
      })
    })

  });

</script> --}}
@if(Session::has('success'))
<script>
toastr.success("!! Session::get('success)!!");
</script>
@endif

{{-- @endsection --}}


