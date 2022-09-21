<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<div style="margin-top:70px;"></div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</head>
<body>
    <div class="d-inline-block bg-primary fixed-top">
	<table align="center" style="background-color:rgb(240, 240, 240); width:100%; height:5%;">
		<tr>
			<td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="font-size: 85%; text-decoration:none;" href=""><b>ABOUT</b></a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="font-size: 85%; text-decoration:none" href=""><b>PRODUCTS</b></a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="font-size: 85%; text-decoration:none" href=""><b>INVESTORS</b></a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="font-size: 85%; text-decoration:none" href=""><b>HEALTH</b></a>
			</td>
			<td align="left">
				<p  style="font-size: 200%; color: rgb(0, 64, 128)"><b>Beximco Pharmaceuticals Ltd.</b></p>
			</td>
			<td align="left">
               
                <a style="font-size: 85%; text-decoration:none" href=""><b>CAREER</b></a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a style="font-size: 85%; text-decoration:none" href=""><b>CONTACT US</b></a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;<a style="font-size: 85%;" href="" class="btn btn-outline-success" data-toggle="modal" data-target="#myModal">
                <b>LOGIN</b></a>&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
			</td>
		</tr>
        </table>
    </div>
  
  <div id="slide1" class="carousel slide" data-ride="carousel">
  
  <ol class="carousel-indicators">
  <li class="active" data-target="#slide1" data-slide-to="0"></li>
  <li data-target="#slide1" data-slide-to="1"></li>
  <li data-target="#slide1" data-slide-to="2"></li>
  
  </ol>
  

  <div class="carousel-inner" role="listbox">
  <div class="carousel-item active">
  <img src="Beximco.png" style="height: 600px; width:1500px" class="d-block img-fluid" alt="First Slide">
  <div class="carousel-caption"></div>
  </div>
  
  <div class="carousel-item">
  <img src="2.jpg" style="height: 600px" class="d-block img-fluid" alt="Second Slide">
  <div class="carousel-caption"></div>
  </div>
  
  <div class="carousel-item">
  <img src="3.jpg" style="height: 600px; width:1800px" class="d-block img-fluid" alt="Third Slide">
  <div class="carousel-caption"></div>
  </div>
  </div>
  
  <a href="#slide1" class="carousel-control-prev" data-slide="prev">
  <span class="carousel-control-prev-icon"></span></a>
  <a href="#slide1" class="carousel-control-next" data-slide="next">
  <span class="carousel-control-next-icon"></span></a>
  </div>
  </div>
  <br><br>
  <div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
  <div class="modal-content">
  <div class="modal-header">
  <h4 class="modal-title"><b> Choose your position </h4>
  <button class="close" data-dismiss="modal">&times;</button>
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="modal-body">
  
  <h3><a href ="/main"> <button class="btn btn-outline-dark" style="width: 770px "> <b> Login as a Customer </button></a></h3>
  <br>
  <h3><a href ="/admin_login"><button class="btn btn-outline-dark" style="width: 770px "><b>Login as an Admin</button></h3>
  <br>
  <h3><a href ="/manager_login"><button class="btn btn-outline-dark" style="width: 770px "><b>Login as a Manager</button></h3>
  <br>
  <h3><a href ="/salesman_login"><button class="btn btn-outline-dark" style="width: 770px "><b>Login as a Salesman</button></h3>
  <br>
   
  </div>
  
  </div>
  </div>
  </div>
  
  <script>
  $('.carousel').carousel({ interval:3000 });
  $('[data-toggle = "tooltip"]').tooltip();
  
  </script>
  