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
                            <input type="text" name="name" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Password</label>
                            <input type="text" name="code" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Phone Number</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                       
                        <div class="form-group mb-3">
                            <label for="">NID</label>
                            <input type="number" name="nid" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Gender</label>
                            <!--<input type="text" name="gender" class="form-control">-->
							<select name="gender"class="form-control" data-bs-toggle="dropdown">
							<option value="" disabled selected> --- Select a Gender --- </option>
							<option value="Male" >Male</option>
							<option value="Female" >Female</option>
                            <option value="Others" >Others</option>
							</select>
                        </div>
						<div class="form-group mb-3">
                            <label for="">Age</label>
                            <input type="number" name="age" class="form-control">
                        </div>
						<div class="form-group mb-3">
                            <label for="">Educational Background</b></label>
                            <input type="text" name="edu" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                       
                     
                        <div align= "right">
                        <button type="submit" class="btn btn-outline-success"><b>Register</button>
						</div>
                        <br>
                        <div align= "right">
                        <button type="submit" class="btn btn-outline-primary"><b>Login</button>
						</div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>