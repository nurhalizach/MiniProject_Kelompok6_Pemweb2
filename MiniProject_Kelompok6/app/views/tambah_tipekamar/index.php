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
        <h2 align="center">Tambah Tipe Kamar</h2><br>
        <form class="form" action="<?=BASEURL?>/Tipe_Kamar/tambah" method="post">
            <label for="nama">Nama</label><br>
            <input type="text" class="form-control" id="nama_tipe" name="nama_tipe" autocomplete="off" required><br><br>
            <label for="fasilitas">Fasilitas</label><br>
            <input type="text" class="form-control" id="fasilitas" name="fasilitas" autocomplete="off"><br><br>
            <input type="submit" style="background-color: #142e54; color: white;" value="Tambah">
        </form>
    <div>
</body>
</html>

<!-- Modal
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Tipe Kamar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="<?= BASEURL; ?>/tipe_kamar/tambah" method="post">
                <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama_tipe" name="nama_tipe" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label for="fasilitas">Fasilitas</label>
                    <input type="text" class="form-control" id="fasilitas" name="fasilitas" autocomplete="off">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
      </div>
    </div>
  </div>
</div> -->