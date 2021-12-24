<!doctype html>
            <html lang="en">
                <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    
    <div class="invoice-box">
@foreach($data as $row)
        <table class="table" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td>Test Name</td>
                    <td>Staus</td>
                </tr>
            </thead>
            <tbody>
                <tr class="item">
                    <td>{{ $row->tname }}</td>
                    <td>@if($row->status == 1)
                        <button class="btn btn-primary">Paid</button>
                        @else
                        <button  class="btn btn-warning">Please Complete Your Paymnet First</button>   
                        @endif
                    </td>
                </tr>
            </tbody>   
        </table>            
@endforeach                 
                                        
                            
                        
                          
                            
                        
                    
                    

</div>

</body>
</html>