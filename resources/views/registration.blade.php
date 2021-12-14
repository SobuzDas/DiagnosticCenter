<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <h1>Registration</h1>
    <div class="container text-left">
        <h2>Create new employee</h2><br>
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

    <a class="btn btn-outline-primary" href="{{ url('/') }}">Go To Home...</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>