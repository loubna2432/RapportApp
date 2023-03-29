
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js" integrity="sha512-ju6u+4bPX50JQmgU97YOGAXmRMrD9as4LE05PdC3qycsGQmjGlfm041azyB1VfCXpkpt1i9gqXCT6XuxhBJtKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script> --}}
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
  
</head>
<body>

  <div  class="modal fade ajax-modal" id="addServiceModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="addServiceForm">
      
    <div class="modal-dialog" >
      <div class="modal-content">
            <div class="modal-header">
              
                <h2 id="exampleModalLabel"> Neuveau service</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            
            <div class="col-md-12">
                <div class="form-group row">
                  <label class="col-sm-5 col-form-label">Nom de sérvice</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="service"  placeholder="Service..." name='nomService' />
                  </div>
                  <span id="nameError" class="text-danger error_message"></span>
                </div>
               
              </div>
           
        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-icon-text add_srv " id='save'>
                        <i class="mdi mdi-file-check btn-icon-prepend "></i>
                        Enregistrer
                        
                      </button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                
                </div>
            
      </div>
    </div>
  </form>
  </div>
 
  
</body>
</html>




  
 
