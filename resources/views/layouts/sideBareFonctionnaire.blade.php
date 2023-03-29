<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="wrapper d-flex align-items-stretch">
 
    <nav id="sidebar" class="active">
        <h1><a href="index.html" class="logo">M.</a></h1>
<ul class="list-unstyled components mb-5">
  <li>
    <button type="button" id="sidebarCollapse" class="btn btn-primary">
      <i class="fa fa-bars"></i>
      <span class="sr-only">Toggle Menu</span>
    </button>
  </li>
  <li class="active">
    <a href="{{route('fonctionnaireDash')}}"><span class="fa fa-home"></span> Home</a>
  </li>
 
  <li>
    <a href="{{route('RemplirRapport')}}"><i class="mdi mdi-briefcase-check"></i> Remplir rapport</a>
  </li>
 
 
</ul>

{{-- <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
</button> --}}

<div>
    <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
            </p>
</div>
</nav>







 {{-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div href="#" class="nav-link ">
        <span class="admin">
        Admin     </span>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link" href="{{route('user.index')}}">
        <span class="menu-title">Users</span>
        <i class="mdi mdi-account-settings-variant menu-icon"></i>
        
      </a>
    </li>
    <li class="nav-item">
      
      <a class="nav-link" href="#">
        <span class="menu-title">Employee</span>
        <i class="mdi mdi-briefcase-check menu-icon"></i>
      </a> 
  </li>

  <li class="nav-item">
    <a class="nav-link" href="#">
      <span class="menu-title">Sérvices</span>
      <i class="mdi mdi-account-settings-variant menu-icon"></i>
      
    </a>
  </li>
   
   
   
  
  </ul>
</nav> --}}
