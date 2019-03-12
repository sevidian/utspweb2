
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

  <body>

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
   if(isset($_SESSION['daftar'])) {
   header('Location:daftar.php'); }
?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #00b101;}
</style>
<form action="prosesdaftar.php" method="post">
  
</head>
<body  style="background-color: #e5e3e4 " style="color: blue">  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = $usiaErr = $nimErr = $biografiErr = $jurusanErr = "";
$username = $password = $passErr = $email = $gender = $biografi = $website = $nim = $jurusan = $usia = "";

date_default_timezone_set('Asia/Jakarta');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "username is required";
  } else {
    $username = test_input($_POST["username"]);
    // check if username only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["nim"])) {
    $nimErr = "NIM is required";
  } else {
    $nim = test_input($_POST["nim"]);
    if (!preg_match("/^[0-9 ]*$/",$nim)) {
      $nimErr = "Only Numbers allowed"; 
    }
  } 
  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $nim = test_input($_POST["password"]);
    if (!preg_match("/^[0-9 ]*$/",$password)) {
      $nimErr = "Only Numbers allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["jurusan"])) {
    $jurusanErr = "Please Select One";
  } else {
    $jurusan = test_input($_POST["jurusan"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["usia"])) {
    $usiaErr = "Age is required";
  } else {
    $usia = test_input($_POST["usia"]);
    if (!preg_match("/^[0-9 ]*$/",$usia)) {
      $usiaErr = "Only Numbers allowed"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $websiteErr = "Website is required";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["biografi"])) {
    $biografiErr = "Biografi is required";
  } else {
    $biografi = test_input($_POST["biografi"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2> Form Data </h2>
<p><span class="error">*wajib diisi</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<table width="50%" align="left" cellspacing="1" cellpadding="5">
  <tr>
   <td>Username</td>
   <td>:<input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $nameErr;?></span></td>
  </tr>
  <tr>
   <td>Password</td>
   <td>:<input type="password" name="password">
   <span class="error">* <?php echo $passErr;?> </span>
  </tr>
  <tr>
   <td>NIM</td>
   <td>:<input type="text" name="nim" value="<?php echo $nim;?>">
  <span class="error">* <?php echo $nimErr;?></span></td>
  </tr>
  <tr>
   <td>E-mail</td>
   <td>:<input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span></td>
  </tr>
  <tr>
   <td>Jurusan</td>
   <td>:<form action="/action_page.php">
  <select name="jurusan">
    <option value="">-Pilih Jurusan-</option>
     <option value="Sistem Informasi">Sistem Informasi</option>
     <option value="Sistem Komputer">Sistem Komputer</option>
     <option value="Teknik Informatika">Teknik Informatika</option>
  </select>
  <span class="error">* <?php echo $jurusanErr;?></span></td>
  </tr>
  <tr>
   <td>Jenis Kelamin</td>
   <td>:
  <input type="radio" name="gender" value="Laki - Laki">Laki-laki
  <input type="radio" name="gender" value="Perempuan">Perempuan
  <span class="error">* <?php echo $genderErr;?></span>
   </td>
  </tr>
  <tr>
   <td>Usia</td>
   <td>:<input type="text" name="usia" value="<?php echo $usia;?>">
  <span class="error">* <?php echo $usiaErr;?></span>
   </td>
  </tr>
  <tr>
   <td>Website</td>
   <td>:<input type="text" name="website" value="<?php echo $website;?>">
  <span class="error">* <?php echo $websiteErr;?></span></td>
  </tr>
  <tr>
   <td>Peran</td>
   <td>:<form action="/action_page.php">
  <select name="level">
    <option value="">-Pilih peran anda-</option>
     <option value="admin">admin</option>
     <option value="manager">manager</option>
  </select>
  <span class="error">* <?php echo $jurusanErr;?></span></td>
  </tr>
  <tr>
   <td>Biografi</td>
   <td>:<textarea name="biografi"><?php echo $biografi;?></textarea><span class="error">* <?php echo $biografiErr;?></span></td>
  </tr>
  <tr><td><img src="capcay.php"/> </td><td>: <input type="text" placeholder="masukan kode captcha" name="kode"/><span class="error">*</span></td>
  </tr>
  <tr>
   <td colspan="2"><input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">
   </td>
  </tr>

  <a href="login.php">Sudah punya akun?</a>
</table>

</form>
</body>
</html>