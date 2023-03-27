<div class = "container-fluid">
		<div class = "panel panel-default" style="background-color: #c2ccc5 ;">
			<div class = "panel-body">
				<div class = "alert alert-info" style="background-color: #728c69; color: white; font-weight: bold;">Daftar Resepsionis</div>

				<a class = "btn btn-success" href = "TambahResepsionis"><i class = "glyphicon glyphicon-plus"></i> Tambah Data Resepsionis</a>
				<br />
				<br />

				<table id = "table" class = "table table-bordered" style="background-color: white;">
					<thead>
						<tr>
							<th>Username</th>
							<th>Password</th>
							<th>Nama</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        <?php foreach($data['resepsionis'] as $resepsionis) : ?>
                            <tr>
                                <td><?= $resepsionis['username'];?></td>
                                <td><?= $resepsionis['password'];?></td>
                                <td><?= $resepsionis['nama'];?></td>
                                <td><center> <a class = "btn btn-success" href = "EditResepsionis/<?=$resepsionis['id_karyawan']; ?>" ><i class = "glyphicon glyphicon-edit"></i> Edit</a> 
								<a href="<?=BASEURL?>/resepsionis/hapus/<?= $resepsionis['id_karyawan']; ?>" class = "btn btn-danger" onclick="return confirm('Yakin ingin menghapus data tersebut?')"?><i class = "glyphicon glyphicon-remove">Hapus</i></a></center></td>
								</td>
							</tr>
                        <?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br>
	<br>
</body>
<script src = "<?= BASEURL; ?>/js/jquery.js"></script>
<script src = "<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src = "<?= BASEURL; ?>/js/jquery.dataTables.js"></script>
<script src = "<?= BASEURL; ?>/js/dataTables.bootstrap.js"></script>
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Apakah anda ingin menghapus data tersebut?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>

<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>	
</html>