<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="admin"){
  header('location:manager.php');
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
          <a class="navbar-brand" href="#"><b>Selamat Datang,<?php echo $username;?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="beranda.php">Kembali</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 col-md-1 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="home.php">POST</a></li>
           
            <li><a href="logout.php" onclick="javascript: return confirm('Anda yakin ingin keluar ?')">LOGOUT</a></li>
          </ul>
        </div>
        <div class="col-sm-8 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">POST</h1>
           <div class="kol2">
            <a name="tabel" class="tabela">
                <h3>Data Mahasiswa</h3>
                <a href="tambah.php"><input type="button" value="Tambah"></a>

                <br><br>
                <table align="center" rules="all" border="1">
                    <tr> 
                        <th><center>No</center></th>
                        <th><center>NAMA</center></th>
                        <th><center>NIM</center></th> 
                        <th><center>Terakhir Diupdate</center></th>     
                        <th><center>AKSI</center></th>
                    </tr>

                    <?php
                        include "koneksi1.php";
                        $no = 1;
                        $data = mysqli_query($db,"select * from post");
                        while($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['nim']; ?></td>
                         <td><?php echo $d['tanggal']; ?></td>

  
                      <td><a href="edit.php?id_post=<?php echo $d['id_post']; ?>"><input type="button" value="Edit" title="Edit"></a>
                            <a href="hapus.php?id_post=<?php echo $d['id_post']; ?>" onclick="javascript: return confirm('Anda yakin ingin dihapus ?')"><input type="button" value="Delete" title="Hapus"  class="del"></a> </td>

                    </tr>
                    <?php
                }
                ?>
                </table>
                <p><span style="color: red">Note : Setiap NIM diawali angka 0</span></p>
            </a>
            </div>
            </div>
         
          <div class="table-responsive">
          
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
  </body>
</html>
