
@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4><b>Medicine's Information
                        <a href="{{ url('add-med') }}" class="btn btn-outline-success float-end"><b>Add Medicine</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Disease</th>
                                <th>Details</th>
                                <th>Discount</th>
                                <th>Price(BDT)</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($med as $item)
                            <tr>
                                <td><b>{{ $item->id }}</td>
                                <td><b>{{ $item->name }}</b></td>
                                <td>{{ $item->disease }}</td>
                                <td>{{ $item->details }}</td>
                                <td style="color:brown"><b>{{ $item->discount }} %</td>
                                <td><b>{{ $item->price }} BDT</td>
                                <td>
                                   <b> <a href="{{ url('edit-med/'.$item->id) }}" class="btn btn-primary btn-sm"><b>Edit</a>
                                    <td>
                                    <a href="{{ url('delete-med/'.$item->id) }}" class="btn btn-danger btn-sm"><b>Delete</a>
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
