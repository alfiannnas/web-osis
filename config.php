<?php
$server = "localhost";
$user = "resq1481_osis";
$pass = "kodokjakarta123@";
$database = "resq1481_osis";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>