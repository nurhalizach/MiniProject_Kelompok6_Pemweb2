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
				<div class = "alert alert-info" style="background-color: #728c69; color: white; font-weight: bold;">Daftar Kamar</div>

				<!-- Button tambah data kamar -->
				<a class = "btn btn-success" href = "TambahKamar"><i class = "glyphicon glyphicon-plus"></i> Tambah Data Kamar</a>
				<br />
				<br />

				<!-- Tabel data kamar -->
				<table id = "table" class = "table table-bordered" style="background-color: white;">
					<thead>
						<tr>
							<th>Id Kamar</th>
							<th>Tipe Kamar</th>
							<th>Keterangan</th>
							<th>Ubah Data</th>
						</tr>
					</thead>
					<tbody>
					<?php
					 foreach($data['kamar'] as $kamar):?>	
						<tr>
							<td><?=$kamar['id_kamar'];?></td>
							<td><?=$kamar['nama_tipe'];?></td>
							<td><?=$kamar['keterangan'];?></td>
							<td>
								<a href="EditKamar/<?=$kamar['id_kamar'] ?>" class="badge badge-primary">edit</a>
								<a href="<?=BASEURL?>/kamar/hapus/<?= $kamar['id_kamar']; ?>" class="badge badge-primary" onclick="return confirm('Yakin ingin menghapus data tersebut?')">hapus</a>
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