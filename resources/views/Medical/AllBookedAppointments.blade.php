
@include('Medical.bootstrap')
<div class="container p-4">
@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:navy"> <b>All Booked Doctors Appointments</b>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Patient's Name</th>
                                <th hidden>Patient's Mail</th>
                                <th>Doctor's Name</th>
                                <th>Doctor's Phone Number</th>                      
                                <th>Doctor's Department</th>
                                <th>Number of People</th>
                                <th>Appointment Time</th>
                                <th>Doctor's Payment</th>
                                <th style="color:brown">Created Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                                <td><b>{{ $item->cname }}</b></td>
                                <td hidden>{{ $item->p_email }}</td>
                                <td>{{ $item->name }}</td>
                                <td>0{{ $item->phone }}</td>                               
                                <td>{{ $item->department }}</td>
                                <td>{{ $item->no_of_people }}</td>
                                <td>{{ $item->avt }}</td>
                                <td>{{ $item->doctors_payment }} </td>
                                <td>{{ $item->created_at }} </td>
                                <td>
                                    <a href="{{ url('delete_appointment/'.$item->id) }}" class="btn btn-outline-danger btn-sm"><b>Remove</b></a>
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


