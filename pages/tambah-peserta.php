<?php
if (isset($_POST['kirim'])) {
  // ambil semua inputan dari peserta
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $sekolah = $_POST['sekolah'];
  $seksi = $_POST['seksi'];
  $id_user = $_POST['user'];

  // buat query untuk menambahkan
  $query = "insert into tb_peserta values (NULL, '$nis', '$nama', '$seksi', '$id_user', '$sekolah')";

  // eksekusi ke database
  $result = mysqli_query($db, $query);

  // jika berhasil maka ....
  if ($result) {
    print "<h3>Peserta berhasil ditambahkan</h3>";
  } else {
    print "<h3>Terjadi kesalahan</h3>";
  }
}
?>
<div class="row">
  <div class="col-md-6">
    <div class="card mt-3">
      <div class="card-header">
        <h3>
          Tambah Peserta
          <a href="?nav=peserta" class="btn btn-danger">kembali</a>
        </h3>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="mb-3">
            <label for="exampleInputNis1" class="form-label">Nis</label>
            <input type="nis" name="nis" class="form-control" id="exampleInputNis1" required autofocus>
          </div>
          <div class="mb-3">
            <label for="exampleInputNama1" class="form-label">Nama</label>
            <input type="nama" name="nama" class="form-control" id="exampleInputNama1" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputSekolah1" class="form-label">Sekolah</label>
            <input type="sekolah" name="sekolah" class="form-control" id="exampleInputSekolah1" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Seksi</label>
            <select class="form-select" name="seksi" required>
              <option># Pilih Seksi #</option>
              <option value="subbagian umum">Subbagian Umum</option>
              <option value="pencairan dana">Pencairan Dana</option>
              <option value="vera">Vera</option>
              <option value="bank">Bank</option>
              <option value="mski">Mski</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">User</label>
            <select name="user" class="form-select" required>
              <?php
              $query = mysqli_query($db, "select * from tb_users"); 
              while($row = mysqli_fetch_array($query)) {?>
              <option value="<?=$row['id']?>"><?=$row['username']?></option>
              <?php }?>
            </select>
          </div>
          <button type="submit" name="kirim" class="btn btn-dark">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
