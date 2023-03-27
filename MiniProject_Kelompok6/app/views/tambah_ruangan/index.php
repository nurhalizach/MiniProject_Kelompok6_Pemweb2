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
            height: 390px;
            padding: 30px;
            margin-top: 20px;
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
        <h3 align="center">Tambah Data Kamar</h3>
        <form class="form" action="ruangan/tambah" method="post">
            <label for="nama_ruangan">Nama Ruangan: </label><br>
                <input type="text" id="nama_ruangan" name="nama_ruangan"><br>
                <label for="fasilitas">Fasilitas: </label><br>
                <input type="text" id="fasilitas" name="fasilitas"><br>
                <label for="status">Status :</label><br>
                <select id="status" name="status">
                    <option value="Kosong">Kosong</option>
                    <option value="Terisi">Terisi</option>
                </select><br>
            <input type="submit" style="background-color: #142e54; color: white;" value="Tambah">
        </form>
    <div>
</body>
</html>