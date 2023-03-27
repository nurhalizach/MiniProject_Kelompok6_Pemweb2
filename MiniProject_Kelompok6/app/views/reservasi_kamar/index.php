<!DOCTYPE html>
<html lang = "en">
<head>
	<style>
	</style>
</head>
<body>
	<div class = "container-fluid">
		<div class = "panel panel-default" style="background-color: #c2ccc5 ;">
			<div class = "panel-body">
				<div class = "alert alert-info" style="background-color: #728c69; color: white; font-weight: bold;">Reservasi Check In</div>

				<!-- Button tambah data kamar -->
				<a class = "btn btn-success" href = "TambahRSVKamar"><i class = "glyphicon glyphicon-plus"></i> Tambah Data Reservasi Kamar</a>
				<br />
				<br />

				<!-- Tabel data kamar -->
				<table id = "table" class = "table table-bordered" style="background-color: white;">
					<thead>
						<tr>
							<th>Id Pesan</th>
							<th>Tanggal Check In</th>
							<th>Tanggal Check Out</th>
							<th>Jumlah Orang</th>
							<th>Id_tamu</th>
							<th>Id_kamar</th>
							<th>Id_karyawan</th>
							<th>Ubah Data</th>
						</tr>
					</thead>
					<tbody>
					<?php
					 foreach($data['reservasi'] as $reservasi):?>	
						<tr>
							<td><?=$reservasi['id_pesan'];?></td>
							<td><?=$reservasi['tgl_checkin'];?></td>
							<td><?=$reservasi['tgl_checkout'];?></td>
							<td><?=$reservasi['jumlah_orang'];?></td>
							<td><?=$reservasi['id_tamu'];?></td>
							<td><?=$reservasi['id_kamar'];?></td>
							<td><?=$reservasi['id_karyawan'];?></td>
							<td>
								<a href="EditReservasiKamar/<?=$reservasi['id_pesan'] ?>" class="badge badge-primary">edit</a>
								<a href="ReservasiKamar/hapus/<?= $reservasi['id_pesan']; ?>" class="badge badge-primary" onclick="return confirm('Yakin ingin menghapus data tersebut?')">hapus</a>
							</td>
						</tr>
					<?php
					 endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br>
	<br>