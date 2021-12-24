<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    
</head>
<body>
<nav class="navbar navbar-expand-lg mynav">


<a class="navbar-brand" href="{{url('/')}}">Diagnostic Center</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
  <ul class="navbar-nav ">
<div class="collapse navbar-collapse" id="navbarNavDropdown">
   
    <li class="nav-item ">
      <a class="nav-link" href="{{ url('plogin') }}" >
        Login
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="{{ url('registration') }}">Registration</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>


  </ul>
</div>
</nav>


    <h1>Registration</h1>
    <div class="container text-left">
        @if(Session::has('msg'))
        <div class="alert alert-success form-group col-6" role="alert">
            <strong>{{ Session::get('msg') }}</strong>
        </div>
        @endif

<form action="{{ url('store')}}" method="post">
        {{ csrf_field() }}

        <div class="form-group col-6">
            <label for=""><b>Name</b></label>
            <input type="text" class="form-control" id="" name="name" value="{{ old ('name') }}" required placeholder="Enter Name">
            @if($errors->has ('name'))
            <span class="err">{{ $errors -> first('name') }}</span>
            @endif
            <br>
            <label for=""><b>Email</b></label>
            <input type="email" class="form-control" id="" name="email" value="{{ old ('email') }}" required placeholder="Enter Email">
            @if($errors->has ('email'))
            <span class="err">{{ $errors -> first('email') }}</span>
            @endif
            <br><br>
            <label for=""><b>Password</b></label>
            <input type="password" class="form-control" id="" name="password" value="{{ old ('password') }}" required placeholder="Enter Password">
            @if($errors->has ('password'))
            <span class="err">{{ $errors -> first('password') }}</span>
            @endif
            <br><br>
            
            <label for=""><b>address</b></label>
            <input type="text" class="form-control" id="" name="address" value="{{ old ('address') }}" required placeholder="Enter address">
            @if($errors->has ('address'))
                <span class="err">{{ $errors -> first('address') }}</span>
                @endif
                <br><br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label"><b>Birth date</b></label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" required value="{{ old ('birth_date') }}" name="birth_date">
                </div>
                @if($errors->has ('birth date'))
                <span class="err">{{ $errors -> first('Birth Date') }}</span>
                @endif
            </div><br><br>


            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0"><b>Gender</b></legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" required name="gender" value="male">
                            <label class="form-check-label">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="female">
                            <label class="form-check-label">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="female">
                            <label class="form-check-label">
                                Other
                            </label>
                        </div>
                    </div>
                    @if($errors->has ('gender'))
                    <span class="err">{{ $errors -> first('gender') }}</span>
                    @endif

                </div>
            </fieldset>
        </div><br><br>

        <div class="form-group">
            <button type="submit" class="btn btn-outline-info"> Submit</button>
        </div>
    </form><br><br>

   
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>