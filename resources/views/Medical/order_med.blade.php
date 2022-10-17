

@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 style="color: brown"><b>Order Medicine</b>
                    <a href="{{ url('cust_med') }}" class="btn btn-outline-danger float-end"><b>Medicine Lists</b></a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('order-med/'.$order_med->id) }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="form-group mb-3">
                            <label for=""><b>Customer's Name:</b></label>
                            
                            <input type="text" name="cname" value="
                            @foreach ($uname as $item)
                            {{ $item->name }} 
                            @endforeach" class="form-control" >
                            @error('cname')
                            <span class="text-danger"><b> {{$message}} </b></span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for=""><b>Customer's E-mail:</b></label>
                            <input type="text" name="email" value="{{session()->get('email')}}" class="form-control" readonly>
                            @error('email')
                            <span class="text-danger"><b> {{$message}} </b></span>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label for=""><b>Customer's Address:</b></label>
                            <input type="text" name="address" value="{{$order_med->address}}" class="form-control">
                            @error('address')
                            <span class="text-danger"><b> {{$message}} </b></span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for=""><b>Customer's phone:</b></label>
                            <input type="number" name="phone" value="{{$order_med->phone}}" class="form-control">
                            @error('phone')
                            <span class="text-danger"><b> {{$message}}</b> </span>
                            @enderror
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
                            <label for=""><b>Medicine's Details:</b></label>
                            <label>{{$order_med->details}}</label>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""><b>Medicine's Price:</b></label>
                            <input type="text" name="price" value="{{$order_med->price}}" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for=""><b>Number of Medicines:</b></label>&nbsp;
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
                        
                        <div class="form-group mb-3 ">
                            <label for=""><b>Payment Method:</b></label>
                            <br><br><input  type="radio" name="payment" value="Cash" >
                            <label> Cash &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <input type="button" class="btn btn-outline-dark"  value="Online Payment">
                            @error('payment')
                            &nbsp; <span class="text-danger"><b> {{$message}}</b> </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-outline-primary" ><b>Order Medicines</b></button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

