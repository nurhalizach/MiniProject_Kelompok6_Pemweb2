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
	<ul id = "menu">
		<li><a href = "<?=BASEURL?>/Home" style="color: #7f6244;">Home</a></li> |
		<li><a href = "<?=BASEURL?>/AboutUs" style="color: #7f6244;">About us</a></li> |
		<li><a href = "<?=BASEURL?>/ContactUs" style="color: #7f6244;">Contact us</a></li> |
		<li><a href = "#" style="color: #7f6244;">Gallery</a></li> |
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>GALLERY</h3></strong>
				<br />
				<br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/1.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/2.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/3.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/4.jpg" width = "250" height = "250"/>
				</div>
				<br style = "clear:both;" />
				<br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/5.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/6.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/7.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/8.jpg" width = "250" height = "250"/>
				</div>
				<br style = "clear:both;" />
				<br />
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/9.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/10.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/11.jpg" width = "250" height = "250"/>
				</div>
				<div style = "float:left; width:250px; height:250px; margin-left:20px;">
					<img src = "img/gallery/12.jpg" width = "250" height = "250"/>
				</div>
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