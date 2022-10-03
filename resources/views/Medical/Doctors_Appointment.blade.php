
@include('Medical.bootstrap')
<div class="container p-1">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Doctor's Information</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Bio</th>
                                <th></th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                            <tr>
                                
                                <td><b>{{ $item->name }}</b></td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->department }}</td>
                                <td>{{ $item->bio }}</td>
                                <td><a href="{{ url('') }}" 
                                class="btn btn-outline-success float-end"> <b>Appointment </a></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
