
	<html>
	@include('Medical.bootstrap')
	<body>
	<br>
	<div >
	<!--<h2 style="color:green" align="center"><b>Welcome <a href ="{{url('profile')}}" style="text-decoration:none; color:green">{{Session::get('email')}}</a></h2><br>
-->
	
	<h2 style="color:green" align="center">Welcome <a href ="{{url('profile')}}" style="text-decoration:none; color:green">
	@foreach ($uname as $item)
	{{ $item->name }}
	@endforeach
	</a></h2>
	<br>

	<h3 style="color: brown" align="center"><b>Customers Panel</h3>
	<br>
	<table align="center" class="container table table-striped"  border="4">
    <tr><td></td><td></td></tr>
    <td align="center"> <b> List of Medicines </td>
	<td align="center"><a href ="cust_med"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>

	<td align="center"> <b> All Categories of Disease</td>
	<td align="center"><a href ="cust_dis"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>

	<tr>
	<td align="center"><b> Doctor's Appointment</td>
	<td align="center"><a href ="doctor_appointment"><input type="button" class="btn btn btn-success" style="width: 70px"  value="Show"> </a></td>
	</tr>

    <tr>
	<td align="center"> <b> Events</td>
	<td align="center"><a href =""><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>

	<tr>
	<td align="center"><b> Add Questions</td>
	<td align="center"><a href =""><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>
	
	<tr><td></td><td></td></tr>
	
	</table>
	</div>
	<br>
	<br>
	<br>
	</body>
	</html>