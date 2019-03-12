<?php
session_start();


   require_once("koneksi1.php");
   $username = $_POST['username'];
   $pass = md5($_POST['password']);
   $usia = $_POST['usia'];
   $nim = $_POST['nim'];
   $jurusan = $_POST['jurusan'];
   $biografi = $_POST['biografi'];
   $gender = $_POST['gender'];
   $website = $_POST['website'];
   $email = $_POST['email'];
   $level=$_POST['level'];
   // $pass_md5=md5($pass);
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
     }else if($_POST["kode"] != $_SESSION["kode_cap"] OR $_POST["kode"] == "")
{ 
//bila captcha yang dimasukkan salah
echo"<div align='center'>kode captcha salah <a href='daftar.php'>Back</a></div>";
}

      else {
       $data = "INSERT INTO user VALUES (NULL, '$username', '$pass', '$usia', '$nim', '$jurusan', '$biografi', '$gender', '$website', '$email', '$level')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>

<!-- <?php
//periksa code captcha yang dimasukkan
// session_start();
// if($_POST["kode"] != $_SESSION["kode_cap"] OR $_POST["kode"] == "")
// { 
// //bila captcha yang dimasukkan salah
// echo"Kode salah... <a href='index.php'>Kembali</a>";
// }
// else{
// //bila captcha yang dimasukkan benar  
// //tulis script eksekusi lainnya di sini//
// echo"Kode BENAR";
// $nama   = $_POST['nama'] ;
// $alamat   = $_POST['alamat'] ;
// $email    = $_POST['email'] ;
// echo"<br/>nama : $nama
//      <br/>alamat: $alamat
//    <br/>email : $email";
//akhir script

?> -->