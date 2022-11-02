@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
            <div class="card-header">
                    <h4 style="color:navy"><b>
                    <a href="{{ url('med') }}" class="btn btn-outline-danger float-end"><b>Medicine Lists</b></a>
                    Add Medicine
                </b></h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('add-med') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for=""><b>Medicine's Name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                            @error('name')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine for the Diseases</label>
                            <input type="text" name="disease" value="{{old('disease')}}" class="form-control">
                            @error('disease')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Details</label>
                            <input type="text" name="details" value="{{old('details')}}" class="form-control">
                            @error('details')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Discount (%)</label>
                            <input type="number" name="discount" value="{{old('discount')}}" class="form-control">
                            @error('discount')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Actual Price (BDT)</label>
                            <input type="number" name="price" value="{{old('price')}}" class="form-control" 
                            placeholder="Price Without Discount">
                            @error('price')
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