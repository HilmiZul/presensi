<?php
include('DB_CONNECTION.php');
ob_start();
// error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./components/header.html')?>
</head>

<body class="sb-nav-fixed">
  
  <?php 
  if(empty($_SESSION['user'])) {
    include('./pages/signin.php');
  } else {
    include('./app.php');
  } ?>
  
  <?php include('./components/js.html')?>
</body>

</html>