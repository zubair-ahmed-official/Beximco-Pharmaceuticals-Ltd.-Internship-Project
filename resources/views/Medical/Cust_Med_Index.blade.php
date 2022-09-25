
@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Medicine's Information
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <th>Disease</th>
                                <th>Details</th>
                                <th>Price(BDT) </th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cust_med as $item)
                            <tr>
                               
                                <td><b>{{ $item->name }}</td>
                                <td>{{ $item->disease }}</td>
                                <td>{{ $item->details }}</td>
                                <td><b>{{ $item->price }} BDT</td>
                                <td>
                                    <a href="{{ url('order-med/'.$item->id) }}" class="btn btn-outline-success btn-sm"><b> Order </a>
                                <td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
