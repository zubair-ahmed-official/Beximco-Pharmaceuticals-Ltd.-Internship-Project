

@include('Medical.bootstrap')
<div class="container p-4">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4 style="color:rgb(0, 51, 102)"><b>Book Doctor's Appointment</b>
                    <a href="{{ url('doctor_appointment') }}" class="btn btn-success float-end"><b>Doctor's Lists</b></a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('book_doctor_appointment/'.$student->id) }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="form-group mb-3" hidden>
                            <label for="">Customer's Name:</label>
                            <input type="text" name="name" value="{{$student->name}}" class="form-control" readonly>
                        </div>

                        <div class="form-group mb-3">
                            <label for=""><b>Doctor's Name:</label>
                            <input type="text" name="name" value="{{$student->name}}" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Phone Number:</label>
                            <input type="text" name="phone" value="{{$student->phone}}" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Email:</label>
                            <input type="text" name="email" value="{{$student->email}}" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Department:</label>
                            <input type="text" name="department" value="{{$student->department}}" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Doctor's Bio:</label>
                            <input type="text" name="bio" value="{{$student->bio}}" class="form-control" readonly>
                        </div>
                        <div class="form-group mb-3">
                           
                            <label for="">Number of People: </label>
                            <select name="num" > 
                            <option selected disabled >--Number--</option>
                            <?php for($i=1;$i<=7;$i++)
                            if($i == true)
                            echo "<option selected>$i</option>"; 
                            else 
                                echo "<option>$i</option>"; 
                            ?>
                            </select> 
                        </div>
                        <div class="form-group mb-3">
                            <p for="">Doctor's Appointment Time: </b></p>
                            <p for="">Saturday to Thursday</p>
                            <p for="">10:30pm to 2:30pm</p>
                            <p for="">6:30pm to 11:30pm</p>
                            
                        </div>

                        
                        
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-outline-primary float-end"><b>Book Doctor's Appointment</b></button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

