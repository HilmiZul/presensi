<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>Report Presensi</h3>
      <div class="table-responsive">
        <table class="table table-striped table-hover" id="datatablesSimple">
          <thead>
            <tr>
              <th>FOTO</th>
              <th>WAKTU</th>
              <th>KETERANGAN</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $q = "select a.*, b.* from tb_presensi a
          inner join tb_peserta b on a.id_peserta=b.id_peserta
          where b.id_peserta=".$_SESSION['id_peserta']."
          order by a.id desc";
            $query = mysqli_query($db, $q);
            while ($data = mysqli_fetch_array($query)) { ?>
              <tr>
                <td>
                  <img src="img/<?=$data['foto']?>" alt="foto" style="width:9rem">
                </td>
                <td><?=$data['waktu']?></td>
                <td>
                  <?php
                  if($data['keterangan'] == 1) print "Hadir";?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>