<nav class="navbar navbar-expand-lg mynav">


<a class="navbar-brand" href="#">Diagnostic Center</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
  <ul class="navbar-nav ">
<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <li class="nav-item active">
      <a class="nav-link" href="{{url ('pdashboard')}}">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Features</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="reportlist.php">Tests</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">Report</a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Lab
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">Lab Automation</a>
        <a class="dropdown-item" href="#">Laboratory</a>
        <a class="dropdown-item" href="#">Gallery</a>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
    <li class="nav-item">
    <a class="btn btn-danger" href="{{ url('logout') }}">Logout</a>

    </li>


  </ul>
</div>
</nav>