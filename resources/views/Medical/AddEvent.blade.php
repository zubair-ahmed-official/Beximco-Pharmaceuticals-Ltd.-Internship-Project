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

                    <form action="{{ url('add-event') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""><b>Event's Name</label>
                            <input type="text" name="event_name" value="{{old('event_name')}}" class="form-control">
                            @error('event_name')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Event Date</label>
                            <input type="text" name="event_date" value="{{old('event_date')}}" class="form-control">
                            @error('event_date')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Event's Details</label>
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