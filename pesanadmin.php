<?php
$gambarSrc = "assets/img/smkgolden.png";
$gambarBg = "assets/img//hero-bg.jpg";
$gambar1= "assets/img/1.jpg";
$gambar2= "assets/img/2.jpg";
$gambar3= "assets/img/3.jpg";
$gambar4= "assets/img/4.jpg";
?>
<?php
session_start();

// Jika pengguna belum login, arahkan kembali ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: loginadmin.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>E-Learning</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" />
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet" />
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="style1.css" rel="stylesheet" />
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

    <!-- Include Splide CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.0/dist/css/splide.min.css">

<!-- Include Splide JS -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.0/dist/js/splide.min.js"></script>

  </head>

  <body>
    <div class="wrapper">
      <nav id="sidebar" class="active">
        <div class="sidebar-header bg-primary">
          <img src="<?php echo $gambarSrc; ?>" width="45" alt="logo" class="app-logo" />
        </div>
        <ul class="list-unstyled components text-secondary">
          <li>
            <a href="admin.php"><i class="fas fa-home"></i> Home</a>
            <a href="pesanadmin.php"><i class="fas fa-inbox"></i></i> Pesan Aspirasi</a>
   
          </li>
        </ul>
      </nav>
      <div id="body" class="active">
        <!-- navbar navigation component -->
        <nav class="navbar navbar-expand-lg navbar-white bg-primary">
          <button type="button" id="sidebarCollapse" class="btn btn-light"><i class="fas fa-bars"></i><span></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <div class="nav-dropdown">
                  <a href="" id="nav2" class="nav-item nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user"></i> <span>Admin</span> <i style="font-size: 0.8em" class="fas fa-caret-down"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                    <ul class="nav-list">
                      <li>
                        <a href="logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
            <div class="position-absolute top-50 start-50 translate-middle">
              <span class="text-white">OSIM MAS MUALLIMIN UNIVA MEDAN</span>
            </div>
          </div>
        </nav>


        <h1>Pesan Aspirasi</h1>
        <?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "resq1481_osis", "kodokjakarta123@", "resq1481_osis");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data pesan dari tabel pesan
$sql = "SELECT * FROM pesan";
$result = mysqli_query($koneksi, $sql);

// Tampilkan data pesan dalam tabel
echo "<table border='1'>";
echo "<tr><th>Nama</th><th>Pesan</th></tr>";

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["nama"] . "</td>";
        echo "<td>" . $row["pesan"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>Tidak ada pesan.</td></tr>";
}

echo "</table>";

// Tutup koneksi database
mysqli_close($koneksi);
?>


   

    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
    


  </body>
  
</html>



