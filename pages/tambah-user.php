<?php
if (isset($_POST['kirim'])) {
  // ambil semua inputan dari user
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $level = $_POST['level'];

  // buat query untuk menambahkan
  $query = "insert into tb_users values (NULL, '$user', sha1('$pass'), '$level')";

  // eksekusi ke database
  $result = mysqli_query($db, $query);

  // jika berhasil maka ....
  if ($result) {
    print "<h3>User berhasil ditambahkan</h3>";
  } else {
    print "<h3>Terjadi kesalahan</h3>";
  }
}
?>
<div class="row">
  <div class="col-md-6">
    <div class="card mt-3">
      <div class="card-header">
        <h3>Tambah User</h3>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="mb-3">
            <label for="exampleInputUsername1" class="form-label">Username</label>
            <input type="username" name="username" class="form-control" id="exampleInputUsername1" required autofocus>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Level</label>
            <select class="form-select" name="level" required>
              <option># Pilih Level #</option>
              <option value="peserta">Peserta</option>
              <option value="admin">Admin</option>
            </select>
          </div>
          <button type="submit" name="kirim" class="btn btn-dark">Simpan</button>
          <a href="?nav=user" class="btn btn-danger">kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>