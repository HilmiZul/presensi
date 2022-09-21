<?php
include("../DB_CONNECTION.php");
if (isset($_FILES["webcam"]["tmp_name"])) {
  session_start();
  $id_peserta = $_SESSION['id_peserta'];
  $tmpName = $_FILES["webcam"]["tmp_name"];
  $imageName = date("Y.m.d") . " - " . date("h.i.sa") . ' .jpeg';
  move_uploaded_file($tmpName, '../img/' . $imageName);


  date_default_timezone_set("Asia/Bangkok");
  $date = date("Y/m/d") . " & " . date("H:i:s");
  $query = "INSERT INTO tb_presensi VALUES(NULL, $id_peserta, '$date', 1, '$imageName')";
  mysqli_query($db, $query);
}
?>