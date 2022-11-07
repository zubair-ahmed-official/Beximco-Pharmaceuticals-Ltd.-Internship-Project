

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

                        <div class="form-group mb-3">
                            <label for=""><b>Patient's Name:</label>
                            <input type="text" name="cname" class="form-control" value="{{old('cname')}}">
                            @error('cname')
                            &nbsp; <span class="text-danger">{{$message}} </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="" hidden>Patient's E-mail:</label>
                            <input type="text" name="p_email" value="{{session()->get('email')}}" class="form-control" readonly hidden>
                            @error('p_email')
                            <span class="text-danger"><b> {{$message}} </b></span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Doctor's Name:</label>
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
                            <select name="no_of_people" > 
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
                            <p for="">Available Appointment Time: (Upcoming Days) </b></p>
                            <table class="table table-bordered">
                            
                            <tr><td><b>Sunday</b></td> <td><b>Monday</b></td> <td><b>Tuesday </b></td> <td><b>Wednesday</b></td>
                            <td><b>Thursday</b></td> <td><b>Saturday</b></td></tr>
                            

                            <tr><td><br><input type="radio" value="{{$student->name}} Sunday 7pm" name="avt"> 7:00 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Sunday 7:20pm" name="avt"> 7:20 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Monday 7pm" name="avt"> 7:00 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Monday 7:20pm" name="avt"> 7:20 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Tuesday 7pm" name="avt"> 7:00 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Tuesday 7:20pm" name="avt"> 7:20 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Wednesday 7pm" name="avt"> 7:00 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Wednesday 7:20pm" name="avt"> 7:20 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Thursday 7pm" name="avt"> 7:00 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Thursday 7:20pm" name="avt"> 7:20 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Saturday 7pm" name="avt"> 7:00 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Saturday 7:20pm" name="avt"> 7:20 pm  &nbsp;&nbsp;</td> </tr>

                            <tr><td><br><input type="radio" value=" {{$student->name}} Sunday 7:40pm" name="avt"> 7:40 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Sunday 8:00pm" name="avt"> 8:00 pm  &nbsp;&nbsp;  </td>
                            <td><br><input type="radio" value="{{$student->name}} Monday 7:40 pm" name="avt"> 7:40 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Monday 8:00 8:00 pm" name="avt"> 8:00 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Tuesday 7:40 pm" name="avt"> 7:40 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Tuesday 8:00 pm" name="avt"> 8:00 pm   &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Wednesday 7:40 pm" name="avt"> 7:40 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Wednesday 8:00 pm" name="avt"> 8:00 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Thursday 7:40 pm" name="avt"> 7:40 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Thursday 8:00 pm" name="avt"> 8:00 pm   &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Saturday 7:40 pm" name="avt"> 7:40 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Saturday 8:00 pm" name="avt"> 8:00 pm  &nbsp;&nbsp;</td> </tr>

                            <tr><td><br><input type="radio" value=" {{$student->name}} Sunday 8:20pm" name="avt"> 8:20 pm  &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Sunday 8:40 pm" name="avt"> 8:40 pm &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Monday 8:20 pm " name="avt"> 8:20 pm  &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Monday 8:40 pm" name="avt"> 8:40 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Tuesday 8:20 pm " name="avt"> 8:20 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Tuesday 8:40 pm" name="avt"> 8:40 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Wednesday 8:20 pm " name="avt"> 8:20 pm  &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Wednesday 8:40 pm" name="avt"> 8:40 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Thursday 8:20 pm " name="avt"> 8:20 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Thursday 8:40 pm" name="avt"> 8:40 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Saturday 8:20 pm " name="avt"> 8:20 pm  &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Saturday 8:40 pm" name="avt"> 8:40 pm  &nbsp;&nbsp;</td> </tr>

                            <tr><td><br><input type="radio" value=" {{$student->name}} Sunday 9:00 pm " name="avt"> 9:00 pm   &nbsp;&nbsp;   
                            <input type="radio" value=" {{$student->name}} Sunday  9:20 pm" name="avt"> 9:20 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Monday 9:00 pm" name="avt"> 9:00 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Monday 9:20 pm" name="avt"> 9:20 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Tuesday 9:00 pm" name="avt"> 9:00 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Tuesday 9:20 pm" name="avt"> 9:20 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Wednesday 9:00 pm" name="avt"> 9:00 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Wednesday 9:20 pm" name="avt"> 9:20 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Thursday 9:00 pm" name="avt"> 9:00 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Thursday 9:20 pm" name="avt"> 9:20 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Saturday 9:00 pm" name="avt"> 9:00 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Saturday 9:20 pm" name="avt"> 9:20 pm  &nbsp;&nbsp;</td> </tr>

                            <tr><td><br><input type="radio" value=" {{$student->name}} Sunday 9:40 pm" name="avt"> 9:40 pm &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Sunday 10:00 pm" name="avt"> 10:00 pm   &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Monday 9:40 pm " name="avt"> 9:40 pm  &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Monday 10:00 pm" name="avt"> 10:00 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Tuesday 9:40 pm " name="avt"> 9:40 pm  &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Tuesday 10:00 pm" name="avt"> 10:00 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Wednesday 9:40 pm " name="avt"> 9:40 pm  &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Wednesday 10:00 pm" name="avt"> 10:00 pm  &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Thursday 9:40 pm " name="avt"> 9:40 pm  &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Thursday 10:00 pm" name="avt"> 10:00 pm &nbsp;&nbsp;</td>
                            <td><br><input type="radio" value="{{$student->name}} Saturday 9:40 pm " name="avt"> 9:40 pm  &nbsp;&nbsp;
                            <input type="radio" value=" {{$student->name}} Saturday 10:00 pm" name="avt"> 10:00 pm  &nbsp;&nbsp;</td> </tr>
                            </table>
                            @error('avt')
                            &nbsp; <p class="text-danger"><b> {{$message}}</b> </p>
                            @enderror                        
                        </div>
                        <div class="form-group mb-3">
                            <label for=""><b>Doctor's Payment: </label>
                            <input type="text" name="doctors_payment" value="{{$student->doctors_payment}} BDT" class="form-control" readonly>
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

