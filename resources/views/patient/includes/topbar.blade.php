<nav class="navbar navbar-expand-lg mynav">


<a class="navbar-brand" href="{{url ('pdashboard')}}">Diagnostic Center</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
  <ul class="navbar-nav ">
<div class="collapse navbar-collapse" id="navbarNavDropdown">
    
    <li class="nav-item">
      <a class="nav-link" href="#">Features</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('ptest')}}">Tests</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="">Report</a>
    </li>

    

    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
    <li class="nav-item">
    <a class="btn btn-danger" href="{{ url('logout')}}">Logout</a>

    </li>


  </ul>
</div>
</nav>