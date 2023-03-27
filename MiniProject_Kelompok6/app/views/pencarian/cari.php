<!DOCTYPE html>
<html lang = "en">
	<head>
    <title>Halaman <?= $data['judul']; ?></title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/style.css" >
	</head>
<body>
  <nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
      <div  class = "container-fluid">
          <div class = "navbar-header">
            <a class="navbar-brand" href="<?= BASEURL; ?>">Online Hotel Reservation</a>
          </div>
          <ul class = "nav navbar-nav pull-right ">
              <li class = "dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i></a>
                  <ul class="dropdown-menu">
                      <li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
                  </ul>
              </li>
          </ul>
      </div>
  </nav>
  <div class="container-fluid" id="navbarNavAltMarkup">
    <ul class="nav nav-pills">
      <li><a class="nav-item nav-link" href="#">Cek <span class="sr-only">(current)</span></a></li>
      <li><a class="nav-item nav-link" href="javascript:window.history.go(-1);">Keluar</a></li>
    </ul>
  </div>
  <br />

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
        </div>
      </div>
  </div>
</nav> -->
<div class = "container-fluid">
    <div class = "panel panel-default">
        <div class = "panel-body">
            <div class = "alert alert-info">Reservasi</div>
            <table id = "table" class = "table table-bordered">
                <thead>
                    <tr>
                        <th>ID Pesan</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Jumlah</th>
                        <th>ID Tamu</th>
                        <th>ID Kamar</th>
                        <th>ID Ruangan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach( $data['rsv'] as $rsv ) :{
                ?>	
                    <tr>
                        <td><?= $rsv['id_pesan']; ?></td>
                        <td><?= $rsv['tgl_checkin']; ?></td>
                        <td><?= $rsv['tgl_checkout']; ?></td>
                        <td><?= $rsv['jumlah_orang']; ?></td>
                        <td><?= $rsv['id_tamu']; ?></td>
                        <td><?= $rsv['id_kamar']; ?></td>
                        <td><?= $rsv['id_ruangan']; ?></td>
                    </tr>
                <?php
                    }
                ?>	
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br />
<br />
<div style="margin-left:85%;" class = "navbar fixed-bottom bg-body-tertiary">
    <label>&copy; Copyright Kelompok 6 </label>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- <script src="<?= BASEURL; ?>/js/bootstrap.js" type = "text/javascript"></script>
<script src="<?= BASEURL; ?>/js/script.js" type = "text/javascript"></script> -->
<!-- <script type = "text/javascript">
$(function() {

$('.tombolTambahData').on('click', function() {
    $('#formModalLabel').html('Tambah Data Tipe Kamar');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('#nama').val('');
    $('#fasilitas').val('');
    $('#id').val('');
});


$('.tampilModalUbah').on('click', function() {
    
    $('#formModalLabel').html('Ubah Data Tipe Kamar');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/MiniProjek_Kelompok6/public/tipe_kamar/ubah');

    const id = $(this).data('id');
    
    $.ajax({
        url: 'http://localhost/MiniProjek_Kelompok6/public/tipe_kamar/getubah',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data) {
            $('#nama').val(data.nama);
            $('#fasilitas').val(data.nrp);
            $('#id').val(data.id);
        }
    });
    
});

});</script> -->
</body>
</html>
<!-- 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
</body>
</html> -->