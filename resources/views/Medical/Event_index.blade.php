
@include('Medical.bootstrap')
<div class="">
    <div class="row">
        <div class="col-md-12">
        @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(45, 45, 134)"><b>Upcoming Events</b>
                    </h4>
                    <h6 style="color:rgb(134, 45, 45)">Please, call our hotline number to register for events.</h6>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Event's Name</th>
                                <th>Event's Date</th>
                                <th>Details</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($event as $item)
                            <tr>
                                <td><b>{{ $item->id }}</b></td>
                                <td><b>{{ $item->event_name }}</b></td>
                                <td>{{ $item->event_date }}</td>
                                <td>{{ $item->details }}</td>
                                
                               

                                @if(Session::has('aname'))
                                <td>
                                    <a href="{{ url('edit-event/'.$item->id) }}" class="btn btn-secondary btn-sm"><b>Edit</b></a>
                                </td> 
                                
                                <td>
                                    <a href="{{ url('delete-event/'.$item->id) }}" class="btn btn-outline-danger btn-sm"><b>Delete</b></a>
                                </td>  
                                                            
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
