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
    <h2>Edit Test</h2>
    @if(Session::has('msg'))
    <div class="alert alert-success">
    <strong>{{ Session::get('msg') }}</strong>
    </div>
    @endif
    

    <form action="{{ url('/update-test/'.$tests->id)}}" method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="">Test Name</label>
            <input type="text" class="form-control" name="testname" value="{{ $tests->testname }}">
        </div>
        <div class="form-group">
            <label for="">Test Cost</label>
            <input type="text" class="form-control" name="testcost" value="{{ $tests->testcost }}">
        </div>
        <div class="form-group">
         <button type="submit" class="btn btn-primary">Update</button><br><br>
         <a href="{{ url('test') }}" text-decoration:none class="btn btn-info">All Tests</a> 
        </div>
    </form>
    </div>


    @include('admin.includes.script')

</body>
</html>