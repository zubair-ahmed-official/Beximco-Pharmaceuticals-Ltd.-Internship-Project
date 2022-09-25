

@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Order Medicine
                    <a href="{{ url('med') }}" class="btn btn-outline-danger float-end">Lists</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('order-med/'.$order_med->id) }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="form-group mb-3">
                            <label for=""><b>Medicine's Name:</label>
                            <input type="text" name="name" value="{{$order_med->name}}" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Disease:</label>
                            <input type="text" name="disease" value="{{$order_med->disease}}" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Medicine's Details:</b></label>
                            <label>{{$order_med->details}}</label>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""><b>Medicine's Price:</label>
                            <input type="text" name="price" value="{{$order_med->price}}" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Number of Medicines:</label>&nbsp;
                            <select name="num" > 
                            <option selected disabled >--Number--</option>
                            <?php for($i=1;$i<=20;$i++)
                            if($i == true)
                            echo "<option selected>$i</option>"; 
                            else 
                                echo "<option>$i</option>"; 
                            ?>
                            </select> 
                        </div>
                        
                        
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Order Medicines</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

