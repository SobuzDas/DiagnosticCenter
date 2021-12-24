<!doctype html>
<html lang="en">
    
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <!-- <link rel="stylesheet" type="text/css"  href="{{ asset('web/css/style.css') }}"> -->

    <title>Homepage</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg mynav">
<a class="navbar-brand" href="{{url('adashboard')}}">Diagnostic Center</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
  <ul class="navbar-nav ">
<div class="collapse navbar-collapse" id="navbarNavDropdown">
      
    <li class="nav-item">
      <a class="nav-link" href="{{url('addtest')}}">Add-Tests</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('test')}}">All Test</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('allpatient')}}">Patient</a>
    </li>

    

    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
    <li class="nav-item">
    <a class="btn btn-danger" href="{{ url('/') }}">Logout</a>

    </li>


  </ul>
</div>
</nav>

@if(Session::has('msg'))
    <div class="alert alert-success">
    <strong>{{ Session::get('msg') }}</strong>
    </div>
    @endif
  <div class="container">
   
    <form action="{{url('tstore')}}" method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="">Test Name</label>
            <input type="text" class="form-control" name="testname" id="">
        </div>
        <div class="form-group">
            <label for="">Test Cost</label>
            <input type="number" class="form-control" name="testcost" id="">
        </div><br><br>
        <div class="form-group">
         <button type="submit" class="btn btn-primary">Add</button><br><br>
         
        </div>
    </form>
    </div>




    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
