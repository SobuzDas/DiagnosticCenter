<!doctype html>
<html lang="en">
  
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
      <a class="nav-link" href="{{url('ptest')}}">Tests</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ URL::to('/report')}}">Report</a>
    </li>

    

    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
    <li class="nav-item">
    <a class="btn btn-danger" href="{{ url('plogout')}}">Logout</a>

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

    <form action="{{url('/checkout')}}" method="post">
    {{ csrf_field() }}
        <!-- <h4>Info</h4> -->
        <div class="row">
            <div class="col-md-6">
             
             
                <fieldset class="custom-border">
                    <legend class="custom-border">Patient Information</legend>
                      <div class="form-group">
                          <input type="text" value="{{ session('username')}}" name="name" class="form-control" disabled>
                      </div>
                      <div class="form-group">
                          <input type="email" name="email" id="" value="{{ session('useremail')}}" class="form-control" disabled>
                      </div>
                    </fieldset>
                    <!-- <fieldset class="custom-border">
                    <legend class="custom-border">Select Test</legend>
                    <select class="form-control" name="" id="">
                        <option value="">Select Test</Select>
                       
                    </select>

                    </fieldset> -->
                    <!-- <div class="form-group"> -->
                    <fieldset class="custom-border">
                    <legend class="custom-border">choose test</legend>
                                        
                                        <select name="testname" id="test" class="form-control">
                                            <option selected>Choose...</option>
                                            @foreach($tests as $t)
                                                <option value="{{$t->id}}" data-cost="{{$t->testcost}}">{{ $t->testname }} </option>
                                                
                                            @endforeach
                                        </select>


                                        
                                        </fieldset>
                                        <fieldset class="custom-border">
                                        <legend class="custom-border">Payment</legend>

                                        <div class="form-group" id="advance_section">

                                       <input type="number" name="addpay" placeholder="Enter Payment" id="adv" class="form-control"><br>
                                       <button class="btn btn-success" id="btn_advance">Add Payment</button>
                                       </div>
                                       </fieldset>


                                       
            </div>

            <!-- table -->
              <div class="col-md-6">
                

    
          <table  class="table table-success table-striped">
          <thead>
            <th>#</th>
              <th>NAME</th>
              <th>COST</th>
            </thead>
            <tbody id ="bill"> 
            </tbody>
          </table>
          <button class="btn btn-primary" type="submit">Checkout</button>
 <!-- <table  class="table table-success table-striped">
<thead> 

  <th><input name="advance" type="number"></th>
  <th><input type="submit" class="btn btn-info"></th>
</thead>


</table> -->




<!-- new table end -->


            </div>
            
        </div>
        </form>
        
    </div>


</div><br>

@include('patient.includes.script')


<script>
  $(document).ready(function(){
    
    var selected = [];
    var global_total = 0;
    $("#test").change(function(){
      $("#bill").html("");
       var test_id = $('#test').val();
       var test_name = $('#test option:selected').text();
       var test_cost = $('#test option:selected').data('cost');
       var exist = selected.some(el => el.id === test_id);
       if(!exist){
         
       var obj = {id: test_id, tname: test_name, cost: test_cost};
      selected.push(obj);
    }

      var len = selected.length;
      var total = 0;
     
      for(i=0; i<len; i++) {
        var j= i+1;
        var str = ' <tr>\
          <td>'+j+'</td>\
          <td><input type="text" value="'+selected[i].tname+'" name="tname[]" hidden>'+ selected[i].tname+'</td>\
          <td><input type="number" value="'+selected[i].cost+'" name="cost[]" hidden>'+ selected[i].cost+'</td> \
          </tr>';
          $('#bill').append(str);
          total = total + selected[i].cost;
      }
      global_total = total;
      var str2 = '<tr><td colspan="2"> Total</td><td><b>'+total+'</b></td></tr>';
      $('#bill').append(str2);
    });

    $("#btn_advance").click(function(e){
      e.preventDefault();
      var advance = $("#adv").val();
      var payable = global_total - advance;
      var str3 = '<tr><td colspan="2"> Total After Payment</td><td><b>'+payable+'</b></td></tr>';
      $('#bill').append(str3);
    });
  });
</script>

</body>
</html>