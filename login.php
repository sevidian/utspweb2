
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
   if(isset($_SESSION['login'])) {
   header('location:beranda.php'); }
   require_once("koneksi1.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="style2.css">
	<form action="proseslogin.php" method="post">
</head>
<body>


	<div class="box">
		<h2>Login</h2>
	<form>
		<div class="inputBox">
		<input type="text" name="username" required=""> 
		<label> Username</label>
		</div>
		<div class="inputBox">
		<input type="password" name="password" required=""> 
		<label>Password</label>
		</div>
		<!-- <div class="inputBox">
		<label>remeber me</label>
		<input type="checkbox" name="remeber"> 
		</div> -->
		<input type="submit" name="submit" value="Submit">
		<button> <a href="daftar.php">Register</a></button>
	
	</form>
	</div>
	
</body>
</html>