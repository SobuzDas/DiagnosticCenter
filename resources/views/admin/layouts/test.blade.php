<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <!-- <link rel="stylesheet" type="text/css"  href="{{ asset('web/css/style.css') }}"> -->
</head>
  <body>

  <div class="container">

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
  
  </div>

  <div class="container">
    <h2>Tests</h2>

    @if(Session::has('msg'))
        <div class="alert alert-danger">
        <strong>{{ Session::get('msg') }}</strong>
        </div>
        @endif

    <table class="table table-success table-striped">
        <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>COST</th>
        <th>ACTIONS</th>
        </thead>
        <tbody>
            @if($tests)
            @foreach($tests as $t)
            <tr>
            <td>{{ $t->id }}</td>
            <td>{{ $t->testname }}</td>
            <td>{{ $t->testcost }}</td> 
            <td>
                <a href="{{ url('/edit-test/'.$t->id)}}"class="btn btn-warning btn-sm">Update</a>
                <a href=""class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{ $t->id }}" >Delete</a> 

                <div class="modal fade" id="myModal{{ $t->id }}" role="dialog">
                            <div class="modal-dialog">
                            
                            Modal content -->
                            <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Delete Confirmation</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                               
                                </div>
                                <div class="modal-body">
                                <p>Are you sure you want to delete <b> {{ $t->testname }}? </b> </p>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="{{ URL::to('/delete-test/'.$t->id)}}" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                            
                            </div>
                        </div>
            </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3" class="text-center">No Data Found</td>
      </tr>
      @endif
      </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>