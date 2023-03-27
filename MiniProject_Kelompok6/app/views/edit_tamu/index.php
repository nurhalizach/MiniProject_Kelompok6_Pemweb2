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
            height: 380px;
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
        <h2 align="center">Edit Data Tamu</h2><br>
        <form class="form" action="<?=BASEURL?>/Tamu/edit" method="post">
            <table>
                <tr>
                    <td><label for="id_tamu">Id Tamu</label></td>
                    <td><input type="number" name="id_tamu" readonly value="<?=$data['tamu']['id_tamu']?>"><br></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="noktp">No KTP </label></td>
                    <td><input type="text" name="no_ktp" value="<?=$data['tamu']['no_ktp']?>"><br></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama </label></td>
                    <td><input type="text" name="nama" value="<?=$data['tamu']['nama']?>"><br></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat </label></td>
                    <td><input type="text" name="alamat" value="<?=$data['tamu']['alamat']?>"><br></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="notelp">No Telpon</label></td>
                    <td><input type="text" name="no_telp" value="<?=$data['tamu']['no_telp']?>"><br></td>
                    <td></td>
                </tr>
            </table><br>
            <input type="submit" style="background-color: #142e54; color: white;" value="Edit">
        </form>
    <div>
</body>
</html>