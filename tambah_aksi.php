<?php
    include 'koneksi1.php';

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $tanggal = date("Y-m-d H:i:s");
  
    $sql = "INSERT INTO post VALUES('','$nama','$nim','$tanggal')";
mysqli_query($db,$sql);
	date (format,datetime);
    header("location:home.php");
?>