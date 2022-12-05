
	<html>
	@include('Medical.bootstrap')
	<body>
	<br>
	<div >
	<h2 style="color:green" align="center"><b>Welcome Admin </h2><br>
	<h3 style="color: brown" align="center"><b>Admin Panel</h3>
	<br>
	<table align="center" class="container table table-striped"  border="4">
	<tr><td></td><td></td></tr>
	

	<tr>
	<td align="center"> <b> Add Medicine</td>
	<td align="center"><a href ="add-med"><input type="button" class="btn btn btn-success" style="width: 70px" value="Add"> </a></td>
	</tr>
	<tr>
	<td align="center"> <b> All Medicines</td>
	<td align="center"><a href ="med"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>

	
	<tr>
	<td align="center"> <b> Add Disease</td>
	<td align="center"><a href ="add-dis"><input type="button" class="btn btn btn-success" style="width: 70px" value="Add"> </a></td>
	</tr>
	<tr>
	<td align="center"> <b> All Categories of Disease</td>
	<td align="center"><a href ="dis"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>

	<tr>
	<td align="center"> <b> Merge Medicines and Disease</td>
	<td align="center"><a href ="Med_Dis"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>

	<tr>
	<td align="center"> <b> All Customers</td>
	<td align="center"><a href ="index_cust"><input type="button" class="btn btn btn-success" style="width: 70px"  value="Show"> </a></td>
	</tr>
	<tr>
	<td align="center"> <b> Add Event</td>
	<td align="center"><a href ="add-event"><input type="button" class="btn btn btn-success" style="width: 70px" value="Add"> </a></td>
	</tr>
	<tr>
	<td align="center"> <b> All Events</td>
	<td align="center"><a href ="index_events"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>

	<tr>
	<td align="center"><b> Doctor's List</td>
	<td align="center"><a href ="doctors"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>

	<tr>
	<td align="center"><b> All Customer's Orders</td>
	<td align="center"><a href ="index_orders"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>

	<tr>
	<td align="center"><b> All Delivered Orders</td>
	<td align="center"><a href ="deliver_index"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>


	<tr>
	<td align="center"><b> All Doctor's Appointment</td>
	<td align="center"><a href ="doctor_appointment"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>

	<tr>
	<td align="center"><b> All Booked Doctor's Appointment</td>
	<td align="center"><a href ="All_Booked_Appointments"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>

	<tr>
	<td align="center"><b> Add Notice </td>
	<td align="center"><a href ="add-notice"><input type="button" class="btn btn btn-success" style="width: 70px" value="Add"> </a></td>
	</tr>


	<tr>
	<td align="center"><b> All Questions</td>
	<td align="center"><a href ="All_Questions"><input type="button" class="btn btn btn-success" style="width: 70px" value="Show"> </a></td>
	</tr>
	
	<tr><td></td><td></td></tr>
	
	</table>
	</div>
	<br>
	<br>
	<br>
	</body>
	</html>