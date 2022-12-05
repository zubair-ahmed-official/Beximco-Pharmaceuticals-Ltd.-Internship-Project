
@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color: navy"> <b>All Customers  </b>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>NID</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Education</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reg as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->nid }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->gender}}</td>
                                <td>{{ $item->age}}</td>
                                <td>{{ $item->edu}}</td>
                                <td >
                                <img src="{{ asset('public/Image/'.$item->image) }}"
                                    style="height: 150px; width: 135px; background-color: white">
                                </td> 
                               <td>
                                    <a href="{{ url('delete-cust/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
