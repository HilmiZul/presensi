<?php
// HAPUS DISINI. GAPAPA YANG PENTING KEHAPUS 😅
$id = $_GET['hapus'];
if (!empty($id)) {
  $result = mysqli_query($db, "delete from tb_users where id=$id");
  if ($result) {
    print "<div class='alert alert-success'>Data user berhasil dihapus</div>";
  } else {
    print "<div class='alert alert-danger'>Terjadi kesalahan</div>";
  }
}
?>
<div class="row">
  <div class="col-md-12">
    <div class="card mb-4 mt-4">
      <div class="card-header">
        <h4>
          Semua User
          <a href="?nav=tambah-user" class="btn btn-dark">Tambah</a>
        </h4>
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover" id="datatablesSimple">
          <thead>
            <tr>
              <th>#</th>
              <th>USERNAME</th>
              <th>LEVEL</th>
              <th>HAPUS</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = mysqli_query($db, "select * from tb_users");
            while ($row = mysqli_fetch_array($query)) { ?>
              <tr>
                <td><?= $row['id'] ?></td>
                <td>
                  <a href="?nav=ubah-user&id=<?= $row['id'] ?>">
                    <?= $row['username'] ?>
                  </a>
                </td>
                <td><?= $row['level'] ?></td>
                <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus-<?= $row['id'] ?>"><i class="fas fa-trash"></i></button></td>
                <div class="modal fade" id="hapus-<?= $row['id'] ?>">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3>Hapus?</h3>
                      </div>
                      <div class="modal-body">
                        Yakin mau hapus ini? 😥
                      </div>
                      <div class="modal-footer">
                        <a href="#" data-bs-dismiss="modal" class="btn btn-dark">GA!</a>
                        <a href="?nav=user&hapus=<?= $row['id'] ?>" class="btn btn-outline-danger">Yakin</a>
                      </div>
                    </div>
                  </div>
                </div>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>