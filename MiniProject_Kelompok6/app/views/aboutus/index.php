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
		<li><a href = "#" style="color: #7f6244;">About us</a></li> |
		<li><a href = "<?=BASEURL?>/ContactUs" style="color: #7f6244;">Contact us</a></li> |
		<li><a href = "<?=BASEURL?>/Gallery" style="color: #7f6244;">Gallery</a></li> |
	</ul>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>ABOUT US</h3></strong>
				<p style = "position:relative; float:left; width:850px;">Hotel memperkenalkan keseimbangan nostalgia dan gaya kontemporer yang terkenal, menangkap keanggunan, kemewahan, dan dekadensi asli Selatannya. Ubin Machuca membentuk pola geometris yang keren di lorong. Lantai kayu keras hotel kontras dengan perabotan dan fasilitas modern di suite yang dramatis. Gaya hidup Hotel menawarkan kepada para tamu indulgensi sensorik terbaik: perlengkapan mandi organik yang menenangkan, resep pusaka, dan privasi serta ketenangan yang tak tertandingi.</p>
				<img style = "float:right;" src = "img/about.jpg" width = "250px" height = "250px" />
				<br style = "clear:both;" />
				<br />
				<br />
				<hr style = "border:1px dotted #000;" />
				<br />
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "img/1.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Standard</h4></center>
					<center><label>Small Size Bed</label></center>
				</div>
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "img/2.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Extra Bed</h4></center>
				</div>
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "img/3.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Superior</h4></center>
					<center><label>1 Medium Size Bed</label></center>
				</div>
				<br style = "clear:both;"/>
				<br />
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "img/4.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Super Deluxe</h4></center>
					<center><label>2 Medium Size Bed</label></center>
				</div>
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "img/5.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Suit</h4></center>
					<center><label>Matrimonial</label></center>
				</div>
				<div style = "float:left; margin-left:40px; width:300px; height:300px; ">
					<center><img src = "img/6.jpg" width = "250px" height = "250px"  style = "margin-top:5px;"/></center>
					<center><h4 style = "color:rgba(0, 255, 0, 1);">Executive Suite</h4></center>
					<center><label>Matrimonial</label></center>
				</div>
				<br style = "clear:both;"/>
				<br />
				<br />
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