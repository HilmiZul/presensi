<div class="row">
  <div class="col-md-12">
    <div class="card mb-4 mt-4">
      <div class="card-header">
        <h4>
          Semua Peserta
          <a href="?nav=tambah-peserta" class="btn btn-dark">Tambah</a>
        </h4>
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover" id="datatablesSimple">
          <thead>
            <tr>
              <th>#</th>
              <th>NIS</th>
              <th>NAMA</th>
              <th>SEKSI</th>
              <th>ASAL SEKOLAH</th>
              <th>HAPUS</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          $query = mysqli_query($db, "select * from tb_peserta where seksi != 'ADMINISTRATOR'");
          while($row = mysqli_fetch_array($query)){?>
            <tr>
              <td><?=$row['id']?></td>
              <td><?=$row['NIS']?></td>
              <td><?=$row['nama']?></td>
              <td><?=$row['seksi']?></td>
              <td><?=$row['sekolah']?></td>
              <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>