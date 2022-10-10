@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
            <div class="card-header">
                    <h4 style="color: brown"><b>
                    <a href="{{ url('doctors') }}" class="btn btn-outline-primary float-end"><b>Doctor's Lists</b></a>
                    Add Doctor</b>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-doctors') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""><b>Doctor's Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Phone Number</label>
                            <input type="text" name="phone" class="form-control">
                            @error('phone')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Email</label>
                            <input type="text" name="email" class="form-control">
                            @error('email')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Department</label>
                            <input type="text" name="department" class="form-control">
                            @error('department')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Bio</label>
                            <input type="text" name="bio" class="form-control">
                            @error('bio')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for=""> Doctor's Joining Date</label>
                            <input type="text" name="joining_date" class="form-control">
                            @error('joining_date')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                       
                        </div>
                        <div>
                        <div class="form-group mb-3">
                        
                        <button type="submit" class="btn btn-success float-end"><b>Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>