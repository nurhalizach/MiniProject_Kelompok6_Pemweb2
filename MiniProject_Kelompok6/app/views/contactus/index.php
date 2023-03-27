<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<!-- <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" /> -->
        <style>
        .badge {
            margin-left: 3px;
        }


        #menu{
            list-style-type:none;
            font-size:18px;
        }

        #menu li{
            display:inline;
        }
        </style>
	</head>
<body>
	<nav style="background-color: #c2ccc5;" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Hotel Online Reservation</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu" style="color: #7f6244;">
		<li><a href = "<?=BASEURL?>/Home" style="color: #7f6244;">Home</a></li> |
		<li><a href = "<?=BASEURL?>/AboutUs" style="color: #7f6244;">About us</a></li> |
		<li><a href = "#" style="color: #7f6244;">Contact us</a></li> |
		<li><a href = "<?=BASEURL?>/Gallery" style="color: #7f6244;">Gallery</a></li> |
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>CONTACT US</h3></strong>
				<br />
				<br />
				<center><img src = "img/hotel.jpg" width = "300" height = "300" /></center>
				<br />
				<br />
				<center>
				<p>Contact No: +639999999999</p>
				<p>Email: rooms@hotel.com</p>
				</center>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:center;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright Kelompok 6 </label>
	</div>
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>