<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <div class="d-inline-block bg-primary fixed-top">
	<table align="center" style="background-color:rgb(240, 240, 240); width:100%; height:5%;">
		<tr>
			<td>
				<p><b>&nbsp;&nbsp;&nbsp;&nbsp;Hotline Number:&nbsp;01985236951,&nbsp;01874136984</p>
			</td>
			<td>
				<p  style="font-size: 200%; color: rgb(0, 64, 128)"><b>Beximco Pharmaceuticals Ltd.</b></p>
			</td>
			<td align="right">
				@if(Session::has('email'))<a style="font-size: 85%;" href="{{url('/home')}}" class="btn btn-outline-success"><b>HOME</a>@endif
				&nbsp;&nbsp;
				@if(Session::has('email') || Session::has('aname'))<a href="{{route('logout')}}" style="font-size: 85%;" class="btn btn-outline-danger">
				<b>LOGOUT</a>@endif
				&nbsp;&nbsp;
				
			</td>
		</tr>
		<tr>
			<td colspan="4">
			</td>
			<td colspan="3">
			</td>
		</tr>
		<tr>
			<td colspan="4">
			</td>
			<td colspan="3">
			</td>
		</tr>
		
	</table>
	</div>
    <br> <br> <br>