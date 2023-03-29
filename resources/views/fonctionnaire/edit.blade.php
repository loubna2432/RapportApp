@extends('layouts.app')



@section('content')
<div class="wrapper d-flex align-items-stretch">
    @include('layouts.sidebarAdmin')
    <div class="container">

@if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <div class="row bg-secondary p-4">
<div class="col-12 grid-margin ">
    <div class="card">
      <div class="card-body">
        <form class="forms-sample" action="{{route('fonctionnaire.update',$fonctionnaire->id)}}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
          <p class="card-description">
            Personal info
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('nom') is-invalid @enderror" id="Nom"  placeholder="nom..." name='nom' value="{{ $fonctionnaire->nom }}" />
                </div>
              </div>
              @error('CIN')
            <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Prénom</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control  @error('prenom') is-invalid @enderror" id="Prenom"  placeholder="prenom..." name='prenom' value="{{ $fonctionnaire->prenom }}" />
                </div>
              </div>
              @error('prenom')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
           
          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">CIN</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control @error('CIN') is-invalid @enderror" id="CIN"  placeholder="CIN..." name='CIN' value="{{ $fonctionnaire->CIN }}" />
                  </div>
                </div>
                @error('CIN')
              <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              

              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"  placeholder="Email..." name='email' value="{{ $fonctionnaire->email }}"  />
                  </div>
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
             
              
          </div>
          <div class="row">
            
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Grade</label>
                  <div class="col-sm-9">
                      <select class="form-select select @error('grade') is-invalid @enderror" id="grade"   name='grade' >
                        
                        
                        <option value="{{$fonctionnaire->grade}}" {{$fonctionnaire->grade? 'selected':''}}>
                          {{$fonctionnaire->grade}}
                          </option>
                          <option>fonctionnaire</option>
                       
                      </select>
                  </div>
              </div>
                  @error('grade')
                <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
                
        
            
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Télephon</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('telephon') is-invalid @enderror" id="telephon"  placeholder="Telephon..." name='telephon' value="{{ $fonctionnaire->telephon }}" />
                </div>
              </div>
                @error('telephon')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            </div>
         
          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">N° SOM</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control  @error('N_SOM') is-invalid @enderror" id="N_SOM"  placeholder="N_SOM..." name='N_SOM' value="{{ $fonctionnaire->N_SOM }}" />
                  </div>
                </div>
                @error('N_SOM')
              <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Statue</label>
                  <div class="col-sm-5">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input @error('statue') is-invalid @enderror" name="statue" id="statue" value="{{ $fonctionnaire->statue }}">
                        Fonctionnaire
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input @error('statue') is-invalid @enderror" name="statue" id="statue" value="{{ $fonctionnaire->statue }}">
                        Chef service
                      </label>
                    </div>
                  </div>
                </div>
                @error('statue')
                <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
          </div>

          <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Service</label>
                    <div class="col-sm-9">
                        <select class="form-select select @error('service') is-invalid @enderror" id="service"   name='service' >
                          
                          @foreach($services as $item)
                          <option value="{{$item->id}}" {{$fonctionnaire->services_id==$item->id? 'selected':''}}>
                            {{$item->nomService}}
                            </option>
                          @endforeach
                        </select>
                    </div>
                </div>
                    @error('service')
                  <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>


          <div class="row">
            <div class="col-md-4">
          <button type="submit" class="btn btn-gradient-primary m-3">Enregistrer</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
        </div>
    </div>
</div>
@endsection