

@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(153, 51, 51)"><b>Update Profile</b></h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('edit-profile/'.$reg->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""><b>Customer's Name</label>
                            <input type="text" name="name" value="{{$reg->name}}" class="form-control">
                        </div>
                       
                        <div class="form-group mb-3">
                            <label for="">Phone</label>
                            <input type="text" name="phone" value="{{$reg->phone}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">NID</label>
                            <input type="number" name="nid" value="{{$reg->nid}}" class="form-control">
                        </div> 
                        <div class="form-group mb-3">
                            <label for="">Address</label>
                            <input type="text" name="address" value="{{$reg->address}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Gender</label>
                            
                            <select name="gender"class="form-control" value="{{$reg->gender}}"  data-bs-toggle="dropdown">
							
							<option value="Male" >Male</option>
							<option value="Female" >Female</option>
                            <option value="Others" >Others</option>
							</select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Age</label>
                            <input type="number" name="age" value="{{$reg->age}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Education</label>
                            <input type="text" name="edu" value="{{$reg->edu}}" class="form-control">
                        </div>
                       
                        
                        <div class="form-group mb-3 float-end">
                            <button type="submit" class="btn btn-outline-primary"><b>Update Profile Information</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

