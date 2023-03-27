<div class = "container-fluid">
		<div class = "panel panel-default" style="background-color: #c2ccc5 ;">
			<div class = "panel-body">
				<div class = "alert alert-info" style="background-color: #728c69; color: white; font-weight: bold;">Daftar Ruangan</div>

				<!-- Button tambah data ruangan -->
				<a class = "btn btn-success" href = "TambahRuangan"><i class = "glyphicon glyphicon-plus"></i> Tambah Data Ruangan</a>
				<br />
				<br />

				<!-- Tabel data ruangan -->
				<table id = "table" class = "table table-bordered" style="background-color: white;">
					<thead>
						<tr>
							<th>Nama Ruangan</th>
							<th>Status</th>
							<th>Fasilitas</th>
							<th>Action<O/th>
						</tr>
					</thead>
					<tbody>
                        <?php foreach($data['ruangan'] as $ruangan) : ?>
                            <tr>
                                <td><?= $ruangan['nama_ruangan'];?></td>
                                <td><?= $ruangan['status'];?></td>
                                <td><?= $ruangan['fasilitas'];?></td>
                                <td><center><a class = "btn btn-success" href = "EditRuangan/<?=$ruangan['id_ruangan']; ?>" ><i class = "glyphicon glyphicon-edit"></i> Edit</a> 
								<a href="<?=BASEURL?>/ruangan/hapus/<?= $ruangan['id_ruangan']; ?>" class = "btn btn-danger" onclick="return confirm('Yakin ingin menghapus data tersebut?')"?><i class = "glyphicon glyphicon-remove">Hapus</i></a></center></td>
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