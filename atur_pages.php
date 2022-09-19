<?php
if($_GET['nav'] == "home") {
  include('./pages/dashboard.php');
}
else if($_GET['nav'] == "presensi") {
  include('./pages/presensi.php');
}
else if($_GET['nav'] == "peserta") {
  include('./pages/peserta.php');
}
else if($_GET['nav'] == "tambah-peserta") {
  include('./pages/tambah-peserta.php');
}