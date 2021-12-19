<!doctype html>
<html lang="en">
    <head>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 
  </head>
<style>
     fieldset.custom-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow: 0px 0px 0px 0px #000;
    box-shadow: 0px 0px 0px 0px #000;
}

legend.custom-border {
    width: auto;
    padding: 0 10px;
    border-bottom: none;
}
</style>    
</head>
  <body>

  <div class="container">
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
  </div>

  <div class="container">
    <h2>Tests</h2> 
    <!-- <table class="table table-success table-striped">
        <thead>
        
        <th>NAME</th>
        <th>COST</th>
        <th>ACTIONS</th>
        </thead>
        <tbody>
            @if($tests)
            @foreach($tests as $t)
            <tr>
            <td>{{ $t->testname }}</td>
            <td>{{ $t->testcost }}</td> 
            <td>
                    </div>
                        
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3" class="text-center">No Data Found</td>
      </tr>
      @endif
      </tbody>
    </table> -->
    <div class="container">

      
        <!-- <h4>Info</h4> -->
        <div class="row">
            <div class="col-md-6">
             <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                <fieldset class="custom-border">
                    <legend class="custom-border">Patient Information</legend>
                       
                    
                            <div class="form-group">
                              
                                <input type="text" value="{{ session('username')}}" name="name" class="form-control" disabled>
                            </div>
                           
                            <form action="">
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control" disabled>
                            </div>
                            <form action="">
                            <div class="form-group">
                                <input placeholder="Phone Number" type="text" name="" id="" class="form-control" disabled>
                            </div>
                            <form action="">
                            <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            </div>
                        
                    </fieldset>
                    <!-- <fieldset class="custom-border">
                    <legend class="custom-border">Select Test</legend>
                    <select class="form-control" name="" id="">
                        <option value="">Select Test</Select>
                       
                    </select>

                    </fieldset> -->
                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName"> choose test</label>
                                        <select name="testname" class="form-control">
                                            <option selected>Choose...</option>
                                            @foreach($tests as $t)
                                                <option value="{{$t->id}}">{{ $t->testname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                </form>
            </div>
            <div class="col-md-6">


            </div>
        </div>
        
    </div>


</div>

@include('patient.includes.script')


</body>
</html>