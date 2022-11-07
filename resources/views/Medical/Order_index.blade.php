
@include('Medical.bootstrap')
<div class="">
    <div class="row">
        <div class="col-md-12">
        @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(45, 45, 134)"><b>Customer's Orders</b>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Customer's Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Price(BDT)</th>
                                <th>Medicine</th>
                                <th>Disease</th>
                                <th>Number</th>
                                <th>Total Price</th>
                                <th>Payment</th>
                                <th style="color:brown">Created Time</th>
                                <th>Delete</th>
                                <th>Deliver</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $item)
                            <tr>
                                <td><b>{{ $item->id }}</b></td>
                                <td><b>{{ $item->cname }}</b></td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->price }} BDT</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->disease }}</td>
                                <td>{{ $item->num }}</td>
                                <td>{{ $item->tprice }} BDT</td>
                                <td>{{ $item->payment }} </td>
                                <td>{{ $item->created_at }} </td>
                                <td>
                                    <a href="{{ url('delete-order/'.$item->id) }}" class="btn btn-outline-danger btn-sm"><b>Delete</b></a>
                                </td>  
                                <td>
                                    <a href="{{ url('deliver-order/'.$item->id) }}" class="btn btn-secondary btn-sm"><b>Deliver</b></a>
                                </td>                             
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
