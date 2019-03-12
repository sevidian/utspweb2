
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Daftar Mahasiswa SI 2A</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-color: lightblue">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><b>SELAMAT DATANG</a>
        </div>
      </b>
    </a>
  </div>
</div>
<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="admin"){
  header('location:../manager.php');
    // die("Anda bukan manager");
    //jika bukan admin jangan lanjut
}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h3>Edit Data</h3>
    <br><br>
    <?php
        include 'koneksi1.php';
        $id = $_GET['id_post'];
        $data = mysqli_query($db,"select * from post where id_post='$id'");
        while($d = mysqli_fetch_array($data)) {
    ?>
    <form action="update.php" method="post">
        <table align="center">
            <tr>
                <td><b>NAMA : </b></td>
                <td>
                    <input type="hidden" name="id_post" value="<?php echo $d['id_post'] ;?>">
                    <input type="text" name="nama" value="<?php echo $d['nama'] ;?>">
                </td>
            </tr>
            <tr>
                <td><b>NIM : </b></td>
                <td><input type="nim" name="nim" value="<?php echo $d['nim'] ;?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan">
                <br><a href="home.php">Batal</a>
                </td>
            </tr>
        </table>
    </form>
            <?php
        }
        ?>
</body>
</html>