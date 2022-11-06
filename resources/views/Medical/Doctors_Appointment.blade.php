
@include('Medical.bootstrap')
<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(204, 0, 0)"><b>Doctor's Information</b>
                    <a href="{{ url('My_Appointments') }}" class="btn btn-outline-primary btn-md float-end"><b> My Appointments </a></h4> 
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
                                <th>Doctor's Payment</th>
                            
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
                                <td>{{ $item->doctors_payment }} BDT</td>
                                <td><a href="{{ url('book_doctor_appointment/'.$item->id) }}" 
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
