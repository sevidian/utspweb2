<?php
    include 'koneksi1.php';

    $id = $_POST['id_post'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
  $tanggal = date("Y-m-d H:i:s");
 
    mysqli_query($db,"update post set nama='$nama',nim='$nim',tanggal='$tanggal' where id_post='$id'");

    header("location:home.php");
?>