<div class = "container-fluid">
    <div class = "panel panel-default" >
        <div class = "panel-body">
            <div class = "alert alert-info">Transaksi / Tipe Kamar</div>
            <a class = "btn btn-success" href = "TambahTipe"><i class = "glyphicon glyphicon-plus"></i> Tambah Data Kamar</a>
            <!-- <button type="button" class="btn btn-success tombolTambahData">
            Tambah Data Tipe Kamar
            </button> -->
            <br />
            <br />
            <table id = "table" class = "table table-bordered">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Fasilitas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach( $data['tipe'] as $tipe ) :{
                ?>	
                    <tr>
                        <td><?= $tipe['id_tipe']; ?></td>
                        <td><?= $tipe['nama_tipe']; ?></td>
                        <td><?= $tipe['fasilitas']; ?></td>
                        <td><center><a class = "btn btn-warning" href ="EditTipe/<?= $tipe['id_tipe']; ?>"><i class = "glyphicon glyphicon-edit"></i> Edit</a> <a class = "btn btn-danger" href ="Tipe_Kamar/hapus/<?= $tipe['id_tipe']; ?>"><i class = "glyphicon glyphicon-remove"></i> Delete</a></center></td>
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
<!-- 
Modal 
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

<!-- 
 Modal
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Tipe Kamar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/tipe_kamar/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="fasilitas">Fasilitas</label>
            <input type="number" class="form-control" id="fasilitas" name="fasilitas" autocomplete="off">
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div> -->