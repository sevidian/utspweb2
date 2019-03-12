<?php
    include 'koneksi1.php';

    $id = $_GET['id_post'];

    mysqli_query($db,"delete from post where id_post='$id'");

    header("location:home.php");
?>