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
        <h2 align="center">Edit Data Reservasi Kamar</h2><br>
        <form class="form" action="<?=BASEURL;?>/ReservasiKamar/edit" method="post">
            <table>
                <tr>
                    <td><label for="id_pesan">Id Pesan</label></td>
                    <td><input type="number" name="id_pesan" readonly value="<?=$data['reservasi']['id_pesan']?>"><br></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="tgl_checkin">Tanggal Check In </label></td>
                    <td><input type="text" name="tgl_checkin" value="<?=$data['reservasi']['tgl_checkin']?>"><br></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="tgl_checkout">Tanggal Check Out </label></td>
                    <td><input type="text" name="tgl_checkout" value="<?=$data['reservasi']['tgl_checkout']?>"><br></td>
                    <td></td>
                </tr>
                <tr>
                    <td><label for="jumlah_orang">Jumlah Orang </label></td>
                    <td><input type="text" name="jumlah_orang" value="<?=$data['reservasi']['jumlah_orang']?>"><br></td>
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
                    <td><label for="id_kamar">Id Kamar</label></td>
                    <td>
                        <select id="id_kamar" name="id_kamar" value="<?=$data['reservasi']['id_kamar']?>">
                            <option value=101>101</option>
                            <option value=102>102</option>
                            <option value=106>106</option>
                            <option value=109>109</option>
                            <option value=110>110</option>
                            <option value=113>113</option>
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