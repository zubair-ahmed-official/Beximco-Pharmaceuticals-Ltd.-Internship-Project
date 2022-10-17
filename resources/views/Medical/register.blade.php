<head>
  <title>Beximco Pharmaceuticals Ltd.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
            <div class="card-header">
                    <h3 style="color:rgb(153, 0, 153)">
                    <b>Sign up</b>
                    </h3>
                </div>
                <div class="card-body">

                    <form action="{{ url('/register') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""><b>Name</label>
                            <input type="text" name="name"  value="{{old('name')}}" class="form-control">
                            @error('name')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
						<div class="form-group mb-3">
                            <label for="">Password</label>
                            <a href="#" data-toggle="popover" title="i. English uppercase characters (A to Z),
                            ii. English lowercase characters (a to z),
                            iii. Base 10 digits (0 to 9),
                            iv. Non-alphanumeric (For example: !, $, #, or %),
                            v. Unicode characters." style="text-decoration:none; color:navy">(Conditions)</a>
                            <input type="text" name="code"  value="{{old('code')}}" class="form-control">
                            
                            @error('code')
                            <span class="text-danger"> {{$message}}</span>
                            @enderror
                        </div>
						<div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" value="{{old('email')}}" class="form-control">
                            @error('email')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <input type="number" name="phone" value="{{old('phone')}}"  class="form-control">
                            @error('phone')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                       
                        <div class="form-group mb-3">
                            <label for="">NID</label>
                            <input type="number" name="nid" value="{{old('nid')}}"  class="form-control">
                            @error('nid')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" value="{{old('address')}}"  class="form-control">
                            @error('address')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Gender</label>
                            <!--<input type="text" name="gender" class="form-control">-->
							<select name="gender"class="form-control" value="{{old('gender')}}"  data-bs-toggle="dropdown">
							<option value="" disabled selected> --- Select a Gender --- </option>
							<option value="Male" >Male</option>
							<option value="Female" >Female</option>
                            <option value="Others" >Others</option>
							</select>
                            @error('gender')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
						<div class="form-group mb-3">
                            <label for="">Age</label>
                            <input type="number" name="age" value="{{old('age')}}"  class="form-control">
                            @error('age')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
						<div class="form-group mb-3">
                            <label for="">Educational Background</b></label>
                            <input type="text" name="edu" value="{{old('edu')}}" class="form-control">
                            @error('edu')
                            <span class="text-danger"><b> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                       
                        <div align= "right">
                        <button type="submit" class="btn btn-outline-success"><b>Register</button>
                        
						</div>
                        <br>
                        
                    </form>

                    <div align= "right">
                    <a href ="/main"><input type="button" class="btn btn-info" value="Login"></a>
					</div>

                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
    });
    </script>
</div>