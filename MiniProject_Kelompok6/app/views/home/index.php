<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css" >
        <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css" >
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

		
		.form_book {
			background: #fff;
			/* margin-top: -104px; */
			/* padding: 30px 8px 0px 60px; */
			/* border-radius: 40px 40px 0px 0px; */
		}

		.form_book .date {
			color: #7e7e7e;
			font-weight: bold;
			font-size: 15px;
			text-transform: uppercase;
			padding-left: 17px;
		}

		.book_n {
			border: inherit;
			border-radius: 20px;
			background-color: #eeeeee;
			width: 100%;
			font-size: 16px;
			height: auto;
			line-height: normal;
			padding: 10px 20px;
			-webkit-appearance: none !important;
		}


		.book_btn {
			font-size: 17px;
			background-color: #c2ccc5;
			color: #fff;
			font-weight: 500;
			padding: 5px 0px;
			width: 100%;
			max-width: 161px;
			text-align: center;
			display: inline-block;
			transition: ease-in all 0.5s;
			border-radius: 10px;
			margin-top: 33px;
		}

		.book_btn:hover {
			background-color:  #EAE6DF;
			color: #fff;
			transition: ease-in all 0.5s;
			border-radius: 25px
		}

		.book_n:hover {
			background-color:  #EAE6DF;
			transition: ease-in all 0.5s;
			border-radius: 45px
		}


		</style>
	</head>
<body>
	<nav style="background-color: #c2ccc5;" class = "navbar navbar-default">
		<div  class = "container-fluid" >
			<div class = "navbar-header">
				<a class = "navbar-brand">Hotel Online Reservation</a>
			</div>
		</div>
	</nav>	
	<ul id = "menu">
		<li><a href = "#" style="color: #7f6244;">Home</a></li> |
		<li><a href = "<?=BASEURL?>/ContactUs" style="color: #7f6244;">About us</a></li> |
		<li><a href = "<?=BASEURL?>/AboutUs" style="color: #7f6244;">Contact us</a></li> |
		<li><a href = "gallery.php" style="color: #7f6244;">Gallery</a></li> |
		<li><a href = "Login" style="color: #7f6244;">Admin</a></li> |
	</ul>
	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
		<li data-target="#myCarousel" data-slide-to="5"></li>
		<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		<div class="item active">
			<img src="img/a.jpg" alt="Los Angeles" style="width:100%; height:450px;">
		</div>
		<div class="item">
			<img src="img/b.jpg" alt="Chicago" style="width:100%; height:450px;">
		</div>
		<div class="item">
			<img src="img/c.jpg" alt="New york" style="width:100%; height:450px;">
		</div>
		<div class="item">
			<img src="img/d.jpg" alt="New york" style="width:100%; height:450px;">
		</div>
		<div class="item">
			<img src="img/e.jpg" alt="New york" style="width:100%; height:450px;">
		</div>
		<div class="item">
			<img src="img/f.jpg" alt="New york" style="width:100%; height:450px;">
		</div>
		<div class="item">
			<img src="img/g.jpg" alt="New york" style="width:100%; height:450px;">
		</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="container">
		<div class="panel panel-default">
			<div class = "panel-body">
				<div class="row">
					<div class="col-md-12">
						<form class="form_book" action="home/cari" method="post">
							<div class="row">
							<div class="col-md-3">
								<label class="date">Check In</label>
								<input class="book_n"  type="date" autocomplete="off">
							</div>
							<div class="col-md-3">
								<label class="date">Check Out</label>
								<input class="book_n"  type="date" autocomplete="off">
							</div>
							<div class="col-md-3">
								<label class="date">Kode</label>
								<input class="book_n" placeholder="Kode anda" type="number" name="keyword" id="keyword" autocomplete="off">
							</div>
							<div class="col-md-3">
								<button class="book_btn" type="submit" id="tombolCari" >Cek Reservasi</button>
							</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br />
	<div style = "text-align:center;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Copyright Kelompok 6 </label>
	</div>
</body>
</html>