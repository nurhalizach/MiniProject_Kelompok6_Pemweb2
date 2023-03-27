<!DOCTYPE html>
<html lang = "en">
<head>

</head>
<body>
	<div class = "container-fluid">
		<div class = "panel panel-default" style="background-color: #c2ccc5 ;">
			<div class = "panel-body">
				<div class = "alert alert-info" style="background-color: #728c69; color: white; font-weight: bold;">Daftar Tamu</div>
				<!-- Button tambah kamar -->
				<a class = "btn btn-success" href="TambahTamu"><i class = "glyphicon glyphicon-plus"></i> Tambah Data Tamu</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered" style="background-color: white;">
					<thead>
						<tr>
							<th>Id_Tamu</th>
							<th>No KTP</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nomor Telpon</th>
							<th>Ubah Data</th>
						</tr>
					</thead>
					<tbody>
					<?php
					 foreach($data['tamu'] as $kamar):?>	
						<tr>
							<td><?=$kamar['id_tamu'];?></td>
							<td><?=$kamar['no_ktp'];?></td>
							<td><?=$kamar['nama'];?></td>
							<td><?=$kamar['alamat'];?></td>
							<td><?=$kamar['no_telp'];?></td>
							<td>
								<a href="EditTamu/<?= $kamar['id_tamu']; ?>" class="badge badge-primary">edit</a>
								<a href="<?=BASEURL?>/tamu/hapus/<?= $kamar['id_tamu']; ?>" class="badge badge-primary" onclick="return confirm('yakin?')">hapus</a>
							</td>
						</tr>
					<?php
					 endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br/>
	<br/>
	
</body>
</html>