
@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(134, 45, 45)"> <b>My Orders</b>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Customer's Name</th>
                                <th>Address</th>
                                <th>Phone</th> 
                                <th>Email</th> 
                                <th>Medicine</th>
                                <th>Price(BDT)</th>
                                <th>Disease</th>
                                <th>Number</th>
                                <th>Total Price</th>
                                <th>Payment</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                                <td><b>{{ $item->cname }}</b></td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }} BDT</td>
                                <td>{{ $item->disease }}</td>
                                <td>{{ $item->num }}</td>
                                <td>{{ $item->tprice }} BDT</td>
                                <td>{{ $item->payment }} </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
               
            </div>
        </div>
    </div>
</div>


@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(255, 0, 0)"> <b>My Delivered Orders</b>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Customer's Name</th>
                                <th>Address</th>
                                <th>Phone</th> 
                                <th>Email</th> 
                                <th>Medicine</th>
                                <th>Price(BDT)</th>
                                <th>Disease</th>
                                <th>Number</th>
                                <th>Total Price</th>
                                <th>Payment</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($del as $item)
                            <tr>
                                <td><b>{{ $item->cname }}</b></td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }} BDT</td>
                                <td>{{ $item->disease }}</td>
                                <td>{{ $item->num }}</td>
                                <td>{{ $item->tprice }} BDT</td>
                                <td>{{ $item->payment }} </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
               
            </div>
        </div>
    </div>
</div>



