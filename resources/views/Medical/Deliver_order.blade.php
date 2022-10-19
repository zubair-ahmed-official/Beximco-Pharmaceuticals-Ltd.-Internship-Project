

@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(230, 92, 0)"> <b>Deliver the Order</b>
                    <a href="{{ url('med') }}" class="btn btn-outline-danger float-end"><b>Lists</b></a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('deliver-order/'.$order_med->id) }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="form-group mb-3">
                            <label for=""><b>Customer's Name:</b></label>
                            <input type="text" name="cname" value="{{$order_med->cname}}" class="form-control" readonly>                         
                        </div>

                        <div class="form-group mb-3">
                            <label for=""><b>Customer's Address:</b></label>
                            <input type="text" name="address" value="{{$order_med->address}}" class="form-control" readonly>                           
                        </div>
                        <div class="form-group mb-3">
                            <label for=""><b>Customer's phone:</b></label>
                            <input type="text" name="phone" value="{{$order_med->phone}}" class="form-control" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for=""><b>Customer's Email:</b></label>
                            <input type="text" name="email" value="{{$order_med->email}}" class="form-control" readonly>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for=""><b>Medicine's Name:</b></label>
                            <input type="text" name="name" value="{{$order_med->name}}" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""><b>Medicine's Disease:</b></label>
                            <input type="text" name="disease" value="{{$order_med->disease}}" class="form-control" readonly>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for=""><b>Medicine's Price:</b></label>
                            <input type="text" name="price" value="{{$order_med->price}}" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""><b>Number of Medicines:</b></label>&nbsp;
                            <input type="text" name="num" value="{{$order_med->num}}" class="form-control" readonly>
                            
                        </div>
                        
                        <div class="form-group mb-3 ">
                            <label for=""><b>Payment Method:</b></label>
                            <input type="text" name="payment" value="{{$order_med->payment}}" class="form-control" readonly>
                        </div>
                        
                        <div class="form-group mb-3 float-end">
                            <button type="submit" class="btn btn-primary"><b>Deliver</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

