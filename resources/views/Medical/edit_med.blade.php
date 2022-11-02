

@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 style="color:brown"><b>Edit & Update Medicine</b>
                    <a href="{{ url('med') }}" class="btn btn-outline-danger float-end"><b>Medicine Lists</b></a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-med/'.$med->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for=""><b>Medicine's Name</label>
                            <input type="text" name="name" value="{{$med->name}}" class="form-control">
                            @error('name')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Disease</label>
                            <input type="text" name="disease" value="{{$med->disease}}" class="form-control">
                            @error('disease')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Details</label>
                            <input type="text" name="details" value="{{$med->details}}" class="form-control">
                            @error('details')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Discount (%)</label>
                            <input type="number" name="discount" value="{{$med->discount}}" class="form-control">
                            @error('discount')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Price (BDT)</label>
                            <input type="text" name="price" value="{{$med->price}}" class="form-control">
                            @error('price')
                            <span class="text-danger"> {{$message}} </span>
                            @enderror
                        </div>
                        
                        
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Medicine's Information</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

