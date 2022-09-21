<?php
if (isset($_POST['kirim'])) {
  // ambil semua inputan dari peserta
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $sekolah = $_POST['sekolah'];
  $seksi = $_POST['seksi'];
  $id_user = $_POST['user'];
  $id = $_GET['id'];

  // buat query untuk menambahkan
  $query = "update tb_peserta set NIS='$nis', nama='$nama', seksi='$seksi', id_user=$id_user, sekolah='$sekolah'
            where id=$id";

  // eksekusi ke database
  $result = mysqli_query($db, $query);

  // jika berhasil maka ....
  if ($result) {
    print "<h3>Peserta berhasil diperbaharui</h3>";
  } else {
    print "<h3>Terjadi kesalahan</h3>";
  }
}


$get_id = $_GET['id'];
$query = mysqli_query($db, "select * from tb_peserta where id=$get_id");
$data = mysqli_fetch_assoc($query);
?>
<div class="row">
  <div class="col-md-6">
    <div class="card mt-3">
      <div class="card-header">
        <h3>
          Ubah Peserta: <?=$data['nama']?>
        </h3>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="mb-3">
            <label for="exampleInputNis1" class="form-label">Nis</label>
            <input type="nis" name="nis" value="<?=$data['NIS']?>" class="form-control" id="exampleInputNis1" required autofocus>
          </div>
          <div class="mb-3">
            <label for="exampleInputNama1" class="form-label">Nama</label>
            <input type="nama" name="nama" value="<?=$data['nama']?>" class="form-control" id="exampleInputNama1" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputSekolah1" class="form-label">Sekolah</label>
            <input type="sekolah" name="sekolah" value="<?=$data['sekolah']?>" class="form-control" id="exampleInputSekolah1" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Seksi: <?=$data['seksi']?></label>
            <select class="form-select" name="seksi" required>
              <option value=""># Pilih Seksi #</option>
              <option value="subbagian umum">Subbagian Umum</option>
              <option value="pencairan dana">Pencairan Dana</option>
              <option value="vera">Vera</option>
              <option value="bank">Bank</option>
              <option value="mski">Mski</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">User: <?=$data['id_user']?></label>
            <select name="user" class="form-select" required>
              <option value=""># Pilih User #</option>
              <?php
              $query = mysqli_query($db, "select * from tb_users"); 
              while($row = mysqli_fetch_array($query)) {?>
              <option value="<?=$row['id']?>"><?=$row['id'] . ' - ' .$row['username']?></option>
              <?php }?>
            </select>
          </div>
          <button type="submit" name="kirim" class="btn btn-dark">Simpan</button>
          <a href="?nav=peserta" class="btn btn-danger">kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>
