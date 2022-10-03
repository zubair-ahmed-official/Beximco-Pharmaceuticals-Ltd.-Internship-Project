
@include('Medical.bootstrap')

<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:purple"> <b>Disease's Information</b>
                    <a href="{{ url('cust_index_medis') }}" class="btn btn-outline-success float-end"><b>Index Disease</b></a></h4>
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Medicine</th>
                                <th>Details</th>  
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dis as $item)
                            <tr>
                                <td><b>{{ $item->name }}</b></td>
                                <td>{{ $item->medicine }}</td>
                                <td>{{ $item->details }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
