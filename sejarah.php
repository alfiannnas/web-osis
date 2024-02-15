<?php
$gambarBg = "assets/img/ft15.jpg";
$gambarBiru = "bg-biru.png";
$gambarOrang = "assets/img/foto 3.jpg";
$gambarOke = "assets/img/ft 16.jpg";
$gambarOKB = "assets/img/ft17.jpg";
$logoBrand = "assets/img/logo-brand.png";
$guide = "assets/img/guide.png";
$school = "assets/img/school.svg";

?>
<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "resq1481_osis", "kodokjakarta123@", "resq1481_osis");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Ambil data gambar dari database
$query = "SELECT * FROM tb_images";
$result = mysqli_query($koneksi, $query);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>OSIM MAS MUALLIMAN</title>
    <link rel="stylesheet" href="style.css" />
    <?php include './styles.php'; ?>
    <link rel="icon" href="<?php echo $school ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Include Poppins font -->
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid" style="width: 1500px;">
    <!-- Logo di sebelah kiri -->
    <a href="index.php" class="navbar-brand text-light">
      <h5>
        <img src="<?php echo $logoBrand?>" alt="OSIM MAS MUALLIMIN Logo" height="auto" width="80vw" class="d-inline-block align-center">  
        OSIM MAS MUALLIMIN
      </h5>
    </a>

    <!-- Tombol Toggler untuk Responsive -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Konten navbar di sebelah kanan -->
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 200px">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="pusatinformasi.php" style="color: #87d6b0">Pusat Informasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sejarah.php" style="color: #87d6b0">Sejarah Kami</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #87d6b0"> Mengenal OSIM MAS MUALLIMIN UNIVA MEDAN </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="struktur.php">Struktur OSIM</a></li>
            <li><a class="dropdown-item" href="kontak.php">Kontak</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="galeri.php" style="color: #87d6b0">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="license.php" style="color: #87d6b0">License</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    
<div id="hero3" class="hero-container">
  <div class="container">
    <div class="hero-content">
      <div class="d-flex justify-content-center align-items-center flex-column" style="height: 100vh;">
             </div>
    </div>
  </div>
</div>
<img src="<?php echo $gambarBiru ?>" class="img-fluid judul-ok1" alt="Responsive Image" style="width: 2200px; margin-top: -190px">
  <div class="judul-ok d-flex justify-content-center">
        <h2>OSIM MAS MUALLIMIN UNIVA MEDAN dari tahun ke tahun</h2>

            </div>
            <div class="teks1">
        <p>OSIM MAS MUALLIMIN didirikan dengan tujuan memfasilitasi para siswa untuk menyalurkan aspirasinya, mengekspresikan kreativitasnya, dan berkontribusi untuk hal-hal yang positif juga mewujudkan generasi muda yang bertanggung jawab, dan berkualitas. Dan OSIM sebagai wadah siswa/siswi dalam berorganisasi secara tertata.</p>
 
        </div>
        <br>
        <br>
        <div class="d-flex justify-content-center mt-2 mb-2">
        <h2>Masa Kepengurusan OSIM MAS MUALLIMIN UNIVA MEDAN dari tahun ke tahun</h2>

            </div>
        <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-4">
    <!-- Card 2 -->
    <div class="card">
        <img src="<?php echo $gambarOke ?>" class="card-img-top h-100" alt="Logo Dakwah">
        
    </div>
    <h5 class="card-title card-margin">Masa Kepengurusan 2022/2023</h5>
</div>
    <div class="col-md-4">
    <!-- Card 2 -->
    <div class="card">
        <img src="<?php echo $gambarOKB?>" class="card-img-top h-100" alt="Logo Dakwah">
        
    </div>
    <h5 class="card-title card-margin">Masa Kepengurusan 2023/2024</h5>
</div>

  </div>


  
    

  </div>

</div>
<img src="<?php echo $gambarBiru ?>" class="img-fluid gambarss" alt="Responsive Image" style="width: 2200px;">
    <div class="judul judul-oke okes" style="margin-top:-450px;">
    <h2>Indikator Organisasi Ideal untuk Mewujudkan Siswa/siswi yang hebat dan berintegritas</h2>
    <p class="d-flex justify-content-center">Kami Memiliki 5 Indikator Organisasi Ideal untuk Perwujudan Siswa/siswi yang hebat dan berintegritas</p>
    </div>
    <img src="<?php echo $guide ?>" class="img-fluid okes" alt="Responsive Image" style="width: 2200px; margin-top:0px; margin-bottom: 150px;">
    <footer>
    <div class="footer-content mt-4">
    <h3>Contact Us</h3>
        <p>Instagram : @Osim_aliyahmuallimin</p>
        <p style="margin-left: 40px;">@aliyahmuallimin</p>
        <p>Jl. Sisingamangaraja No.Km. 5, RW.5, Harjosari I, Kec. Medan Amplas, Kota Medan, Sumatera Utara 20147</p>
        <h6>Managed by KoorBid Humas OSIM MAS MUALLIMIN UNIVA MEDAN</h6>
        

    </div>
    <p class="mt-5">©2024 Copyright</p>
</footer>
<script>
  // Ambil semua elemen menu dalam navigasi
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

  // Tambahkan event listener untuk setiap elemen menu
  navLinks.forEach(link => {
    link.addEventListener('mouseenter', function() {
      this.style.backgroundColor = '#0B53BE'; // Ganti warna latar belakang saat hover
      this.style.color = '#fff';
      this.style.borderRadius = '5px' // Ganti warna teks saat hover
    });

    link.addEventListener('mouseleave', function() {
      this.style.backgroundColor = ''; // Kembalikan warna latar belakang ke semula saat tidak dihover
      this.style.color = '#87d6b0'; // Kembalikan warna teks ke semula saat tidak dihover
    });
  });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
