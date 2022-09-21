<?php 
$conn =mysqli_connect("127.0.0.1", "root", "passwd48", "DB_PKL_KPPN_cam");

if(isset($_FILES["webcam"]["tmp_name"])){
    $tmpName = $_FILES["webcam"]["tmp_name"];
    $imageName = date("Y.m.d") . " - " . date("h.i.sa") . ' .jpeg';
    move_uploaded_file($tmpName, 'img/' .$imageName);

    
    date_default_timezone_set("Asia/Bangkok");
    $date = date("Y/m/d") . " & " . date("H:i:s");
    $query = "INSERT INTO tbl_image VALUES('','$date','$imageName')";
    mysqli_query($conn, $query);
}