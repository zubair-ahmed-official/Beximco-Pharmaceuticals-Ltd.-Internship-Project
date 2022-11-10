@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
            <div class="card-header">
                    <h4 style="color:brown"><b>
                    
                    Add Event
                </b></h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-notice') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""><b>Notice</label>
                            <input type="text" name="headline" value="{{old('headline')}}" class="form-control">
                            @error('headline')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="">Details</label>
                            <input type="text" name="details" value="{{old('details')}}" class="form-control">
                            @error('details')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        
                        
                        <div>
                        <div class="form-group mb-3 float-end">
                        
                        <button type="submit" class="btn btn-success"><b>Save</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>