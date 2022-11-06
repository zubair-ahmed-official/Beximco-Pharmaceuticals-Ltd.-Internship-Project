
@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:navy"> <b>My Doctors Appointments</b>
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
                                <th>Doctor's Email</th> 
                                <th>Doctor's Department</th>
                                <th>Number of People</th>
                                <th>Appointment Time</th>
                                <th>Doctor's Payment</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                                <td><b>{{ $item->cname }}</b></td>
                                <td hidden>{{ $item->p_email }}</td>
                                <td>{{ $item->name }}</td>
                                <td>0{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->department }}</td>
                                <td>{{ $item->no_of_people }}</td>
                                <td>{{ $item->avt }}</td>
                                
                                <td>{{ $item->doctors_payment }} </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
               
            </div>
        </div>
    </div>
</div>


