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
            height: 430px;
            padding: 30px;
            margin-top: 10px;
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
        <h2 align="center">Edit Data Reservasi Ruangan</h2><br>
        <form class="form" action="<?=BASEURL;?>/ReservasiRuangan/edit" method="post">
            <table>
                <tr>
                    <td><label for="id_pesan">Id Pesan</label></td>
                    <td><input type="number" name="id_pesan" readonly value="<?=$data['reservasi']['id_pesan']?>"><br></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="tgl_pesan">Tanggal Pesan </label></td>
                    <td><input type="text" name="tgl_pesan" value="<?=$data['reservasi']['tgl_pesan']?>"><br></td>
                    <td></td>
                </tr>
                    <td><label for="id_tamu">Id Tamu</label></td>
                    <td>
                        <select id="id_tamu" name="id_tamu" value="<?=$data['reservasi']['id_tamu']?>">
                            <option value=402>402</option>
                            <option value=405>405</option>
                            <option value=406>406</option>
                            <option value=407>407</option>
                            <option value=408>408</option>
                            <option value=409>409</option>
                            <option value=410>410</option>
                            <option value=411>411</option>
                            <option value=412>412</option>
                        </select>
                    </td>
                    <td></td>
                <tr>
                    <td><label for="id_ruangan">Ruangan</label></td>
                    <td>
                        <select id="id_ruangan" name="id_ruangan" value="<?=$data['reservasi']['id_ruangan']?>">
                            <option value=501>Aula 1</option>
                            <option value=502>Aula 2</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="id_karyawan">Id Karyawan</label></td>
                    <td>
                        <select id="id_karyawan" name="id_karyawan" value="<?=$data['reservasi']['id_karyawan']?>">
                            <option value=301>Iif Alifah</option>
                            <option value=302>Ady Mutalib</option>
                        </select>
                    </td>
                    <td></td>
                </tr>
            </table><br>
            <input type="submit" style="background-color: #142e54; color: white;" value="Edit">
        </form>
    <div>
</body>
</html>