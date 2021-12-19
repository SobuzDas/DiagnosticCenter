<!doctype html>
<html lang="en">
    
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

    <link rel="stylesheet" type="text/css"  href="{{ asset('web/css/style.css') }}">

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
      <a class="nav-link" href="{{url('addtest') }}">Add-Tests</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="">Report</a>
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
    <a class="btn btn-danger" href="{{ url('logout') }}">Logout</a>

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
    <h2>Create Test</h2>
    <form action="{{ url('tstore')}}" method="post">
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
         <a href="{{ url('test') }}" text-decoration:none class="btn btn-info">All Tests</a> 
        </div>
    </form>
    </div>




    
@include('admin.includes.script')

</body>
</html>
