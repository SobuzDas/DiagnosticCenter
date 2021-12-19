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
    <h2>Tests</h2>

    @if(Session::has('msg'))
        <div class="alert alert-danger">
        <strong>{{ Session::get('msg') }}</strong>
        </div>
        @endif

 
    <a href="{{ url('addtest') }}" text-decoration:none class="btn btn-info">Create New Test</a><br><br>
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

@include('admin.includes.script')


</body>
</html>