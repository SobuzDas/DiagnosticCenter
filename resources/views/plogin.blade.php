<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Patient Login Form</title>
</head>
<body>

<nav class="navbar navbar-expand-lg mynav">


  <a class="navbar-brand" href="{{url('/')}}">Diagnostic Center</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <ul class="navbar-nav ">
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
     
      <li class="nav-item ">
        <a class="nav-link" href="{{ url('plogin') }}" >
          Login
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{ url('registration') }}">Registration</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>


    </ul>
  </div>
</nav>

<div class="container">
        <div class="card card-container">
        
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>


            <form action="{{ url('pstore') }}" method="post" class="form-signin">

            {{ csrf_field() }}

                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password" required><br><br>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Log in</button>
            </form>
        
            @if(Session::has('err_msg'))
        <div class="alert alert-danger form-group col-8" role="alert">
            <strong>{{ Session::get('err_msg') }}</strong>
        </div>
        @endif
        <br><br>
        <!-- <a class="btn btn-outline-warning" href="{{ url('registration') }}">Register</a><br> -->
        
        
        </div>

       
    </div>


    



<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>    
</body>
</html>