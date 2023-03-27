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
				<div class = "alert alert-info" style="background-color: #728c69; color: white; font-weight: bold;">Reservasi Check Out</div>

				<!-- Button tambah data kamar -->
				<a class = "btn btn-success" href = "TambahRSVRuangan"><i class = "glyphicon glyphicon-plus"></i> Tambah Data Reservasi ruangan</a>
				<br />
				<br />

				<!-- Tabel data kamar -->
				<table id = "table" class = "table table-bordered" style="background-color: white;">
					<thead>
						<tr>
							<th>Id Pesan</th>
							<th>Tanggal Pesan</th>
							<th>Id Tamu</th>
							<th>Nama Ruangan</th>
							<th>Id Karyawan</th>
							<th>Ubah Data</th>
						</tr>
					</thead>
					<tbody>
					<?php
					 foreach($data['reservasi'] as $reservasi):?>	
						<tr>
							<td><?=$reservasi['id_pesan'];?></td>
							<td><?=$reservasi['tgl_pesan'];?></td>
							<td><?=$reservasi['id_tamu'];?></td>
							<td><?=$reservasi['nama_ruangan'];?></td>
							<td><?=$reservasi['id_karyawan'];?></td>
							<td>
								<a href="EditReservasiRuangan/<?=$reservasi['id_pesan'] ?>" class="badge badge-primary">edit</a>
								<a href="ReservasiRuangan/hapus/<?= $reservasi['id_pesan']; ?>" class="badge badge-primary" onclick="return confirm('Yakin ingin menghapus data tersebut?')">hapus</a>
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