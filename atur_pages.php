<?php
if($_GET['nav'] == "home" || empty($_GET['nav'])) {
  include('./pages/dashboard.php');
}
else if($_GET['nav'] == "sign-out") {
  session_destroy();
  header("Location: /");
}
else if($_GET['nav'] == "presensi") {
  include('./pages/presensi.php');
}
else if($_GET['nav'] == "peserta") {
  if($_SESSION['level'] == 'admin') {
    include('./pages/peserta.php');
  } else {
    header("Location: /");
  }
}
else if($_GET['nav'] == "tambah-peserta") {
  if($_SESSION['level'] == 'admin') {
    include('./pages/tambah-peserta.php');
  } else {
    header("Location: /");
  }
}
else if($_GET['nav'] == "tambah-user") {
  if($_SESSION['level'] == 'admin') {
    include('./pages/tambah-user.php');
  } else {
    header("Location: /");
  }
}