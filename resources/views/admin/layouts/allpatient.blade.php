<!doctype html>
<html lang="en">
    <head>
@include('admin.includes.head')
</head>
  <body>

  <div class="container">
  @include('admin.includes.topbar')
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