<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8" />
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
	<link rel = "stylesheet" type = "text/css" href = "<?=BASEURL?>/css/bootstrap.css " />
	<link rel = "stylesheet" type = "text/css" href = "<?=BASEURL?>/css/style.css" />
    <style>
        .form_cont {
            border: 2px solid grey;
            border-radius: 5px;
            background-color: #c2ccc5;
            width: 500px;
            height: 450px;
            padding: 25px;
            margin-top: 5px;
            margin-left: 30%;
            color: black;
        }

        .form {
            padding-left: 45px;
        }
    </style>
</head>
<body>
    <nav class = "navbar navbar-default" style="background-color: #c2ccc5;">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" style="margin: 10px; font-weight: bold; font-size: 25px; color: black;">
				Hotel Online Reservation</a>
			</div>
		</div>
	</nav><br>
    <div class="form_cont">
        <h2 align="center">Tambah Data Tamu</h2><br>
        <form class="form" action="<?=BASEURL?>/Tamu/tambah" method="post">
            <label for="noktp">NO KTP :</label><br>
            <input type="text" name="noktp" placeholder="Masukkan No KTP"><br>
            <label for="nama">Nama :</label><br>
            <input type="text" name="nama" placeholder="Masukkan nama"><br>
            <label for="alamat">Alamat :</label><br>
            <input type="text" name="alamat" placeholder="Masukkan alamat"><br>
            <label for="notelp">Nomor Telepon :</label><br>
            <input type="text" name="notelp" placeholder="Masukkan nomor telpon"><br><br>
            <input type="submit" style="background-color: #142e54; color: white;" value="Tambah">
        </form>
    <div>
</body>
</html>