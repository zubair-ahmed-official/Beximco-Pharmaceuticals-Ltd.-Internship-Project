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
                    Authenticate Password</b>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('check_password') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""><b>E-Mail</label>
                            <input type="text" name="email" class="form-control">
                            @error('email')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Current Password</label>
                            <input type="text" name="code" class="form-control">
                            @error('code')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        
                       
                        </div>
                        <div>
                        <div class="form-group mb-3">
                        
                        <button type="submit" class="btn btn-success float-end"><b>Check</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>