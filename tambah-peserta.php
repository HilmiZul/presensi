<?php
if (isset($_POST['kirim'])) {
  // ambil semua inputan dari peserta
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $sekolah = $_POST['sekolah'];
  $seksi = $_POST['seksi'];

  // buat query untuk menambahkan
  $query = "insert into tb_peserta values (NULL, '$nis', '$nama', '$sekolah', '$seksi')";

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
        <h3>Tambah Peserta</h3>
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
            <select class="form-select" name="level" required>
              <option># Pilih Seksi #</option>
              <option value="subbagian umum">Subbagian Umum</option>
              <option value="pencairan dana">Pencairan Dana</option>
              <option value="vera">Vera</option>
              <option value="bank">Bank</option>
              <option value="mski">Mski</option>
            </select>
          </div>
          <button type="submit" name="kirim" class="btn btn-dark">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
