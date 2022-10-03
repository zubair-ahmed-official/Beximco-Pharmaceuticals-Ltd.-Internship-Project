
@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Customer's Orders
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
                                <th>Price(BDT)</th>
                                <th>Medicine</th>
                                <th>Disease</th>
                                <th>Number</th>
                                <th>Total Price</th>
                                <th>Payment</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->cname }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->price }} BDT</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->disease }}</td>
                                <td>{{ $item->num }}</td>
                                <td>{{ $item->tprice }} BDT</td>
                                <td>{{ $item->payment }} </td>
                                <td>
                                    <a href="{{ url('edit-order/'.$item->id) }}" class="btn btn-outline-primary btn-sm"><b>Edit</b></a>
                                    <td>
                                    <a href="{{ url('delete-order/'.$item->id) }}" class="btn btn-outline-danger btn-sm"><b>Delete</b></a>
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
