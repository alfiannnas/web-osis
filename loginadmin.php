<?php

$host="localhost";
$user="resq1481_osis";
$password="kodokjakarta123@";
$db="resq1481_osis";

session_start();

$koneksi=mysqli_connect($host,$user,$password,$db);

if($koneksi===false)
{
	die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=mysqli_real_escape_string($koneksi, $_POST["username"]);
	$password=mysqli_real_escape_string($koneksi, $_POST["password"]);

    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM `users` WHERE username='$username' AND password='$password'");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        header("location:admin.php");
    }
    else{
        header("location:loginadmin.php?pesan=gagal");
    }
}

?>




<!DOCTYPE html>
<html lang="en">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:ital,wght@0,600;1,400&display=swap");
    /*Login User*/
    .position-logo {
      margin-left: 80px;
      margin-top: 20px;
      margin-bottom: 100px;
    }
    .bg-image-login {
      background-image: url("bg-login.png");
      background-repeat: no-repeat;
      background-position: 650px -1px;
      overflow-y: hidden;
    }

    .form-control {
      height: 50px;
      width: -20px;
    }
    .container-judul {
      height: 30px;
      width: 1000px;
      position: block;
    }
    .judul-sikap {
      font-family: "Montserrat", sans-serif;
      font-size: 60px;
      line-height: 0.9;
      font-weight: 700;
      margin-left: 120px;
    }
    .container-deskripsi {
      height: 30px;
      width: 1000px;
      position: sticky;
    }
    .judul-deskripsi {
      font-family: "Montserrat", sans-serif;
      font-size: 25px;
      margin-left: 120px;
      color: #797979;
    }
    .wrap-login100 {
      width: 25%;
      margin-left: 120px;
      padding-top: 160px;
      background: #fff;
      flex-wrap: wrap;
      align-items: stretch;
    }
    .btn-color {
      background-color: #0e1c36;
      color: #fff;
    }

    #NIK::placeholder {
      color: #797979;
    }

    #password::placeholder {
      color: #797979;
    }

    a {
      text-decoration: none;
    }

    @media only screen and (max-width: 576px) {
      .position-logo {
        margin-left: 0px;
        margin-top: 20px;
        margin-bottom: 100px;
      }
      .bg-image-login {
        background-color: #a168fe;
      }
      #bg {
        height: 300px;
        background-image: url("mobile.png");
        background-size: 400px;
        background-position: 0px 70px;
        background-repeat: no-repeat;
      }
      .radius {
        height: 100%;
        width: 100%;
        margin-top: -100px;
        padding-top: 40px;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
        background-color: #ffffff;
        position: absolute;
      }
      .form-control {
        height: 50px;
        width: -20px;
      }
      .container-judul {
        height: 20px;
        margin-left: -80px;
        width: 450px;
      }
      .judul-sikap {
        font-family: "Montserrat", sans-serif;
        font-size: 25px;
        line-height: 0.9;
        font-weight: 700;
      }
      .container-deskripsi {
        height: 30px;
        width: 1000px;
      }
      .judul-deskripsi {
        font-family: "Montserrat", sans-serif;
        font-size: 15px;
        color: #797979;
      }
      .wrap-login100 {
        width: 75%;
        margin: auto;
        padding-top: 40px;
        background: #fff;
        flex-wrap: wrap;
        align-items: stretch;
      }
      .btn-color {
        background-color: #0e1c36;
        color: #fff;
      }

      #NIK::placeholder {
        color: #797979;
      }

      #password::placeholder {
        color: #797979;
      }

      a {
        text-decoration: none;
      }
    }
  </style>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login User</title>
    <link rel="icon" href="logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  </head>
  <body class="bg-image-login">
    <div class="position-logo" id="bg">
    </div>
    <div class="radius">
      <div class="container-judul mb-5" style="max-width: 900px">
        <div class="judul-sikap">OSIM MAS MUALLIMIN UNIVA MEDAN</div>
        <div class="judul-deskripsi mt-3">"Be Smart With Al-Qur'an"</div>
        <div class="judul-deskripsi">"BERSAMA, BISA, JAYA"</div>
      </div>
      <div class="wrap-login100" style="margin-top: 75px">
      <form method="post" class="">
    <div class="mb-3">
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Username" />
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary px-5 mb-5 w-100">LOGIN</button>
    </div>
</form>

      </div>
    </div>
  </body>
</html>
