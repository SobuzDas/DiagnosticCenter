<!doctype html>
<html lang="en">
    <head>
@include('admin.includes.head')
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
    <h2>Patient</h2>


 
   
    <table class="table table-success table-striped">
        <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ADDRESS</th>
        <th>BIRTH-DATE</th>
        <th>GENDER</th>
        </thead>
        <tbody>
            @if($patients)
            @foreach($patients as $p)
            <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->address }}</td>
            <td>{{ $p->birth_date }}</td>
            <td>{{ $p->gender }}</td>
            
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

@include('admin.includes.script')


</body>
</html>