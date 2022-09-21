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

<html>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif


	<!--<script src="JS/login.js">-->
		
	</script>
	<body>
		<fieldset>
			<form action="{{ route('check_salesman_login') }}" method="post">
            @csrf
				<table style="border-color:rgb(128, 0, 255)" align="center" border="4">
				<tr><td></td></tr>
				<tr><td></td></tr><tr><td></td></tr>
				<tr><td></td></tr><tr><td></td></tr>
				<tr><td></td></tr>
					<tr>
						<td colspan="2" align="center"><h3 style="color:rgb(128, 0, 255)"><b> &nbsp; Beximco Pharmaceuticals Ltd. &nbsp; <br></b></h3></td>
				</tr>			
				<tr>
					<td colspan="2" align="center"><h4 style="color:brown"><b> &nbsp; Salesman Login &nbsp; <br></b></h4></td>
				</tr>
				
					</tr>
					<tr>
						<td colspan="2" align="center"><img width="250px" heigth="150px" src="Beximco.png"/></td>
					</tr>
					
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					
					<tr> <td align="right"><b> User Name: </td>
						<td align="center"><input name="name"  placeholder="Username" type="text"><br>
                        @error('name')
                            <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </td>
					</tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr><tr><td></td></tr>
					<tr><td></td></tr>
					<tr><td></td></tr>
					<tr> <td align="right"> <b> &nbsp;&nbsp; Password/OTP: </td>
						<td align="center"><input name="code" placeholder="Password"  type="Password"> <br> 
                        @error('code')
                            <span class="text-danger"> {{$message}} </span>
                        @enderror
                    </td>
					</tr>
					<tr><td></td><td></td></tr>
					<br>
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					
					<tr>
						<td colspan="2" align="center"><a style="text-decoration:none; color: rgb(128, 0, 255)" 
						 href ="Forgot_Password.html">Forgot password? </a></td>
					</tr>	
					
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					
					<tr>
						<td colspan="2" align="center">
                        <button class= "btn btn-outline-success" type="submit"><b>Login</button>
				    </td>
					<br>
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					<tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
					</tr>
				</table >
			</form>
		</fieldset>
	</body>
</html>