<?php
$gambarBg = "assets/img/ft15.jpg";
$gambarBiru = "bg-biru.png";
$gambarOrang = "assets/img/foto 3.jpg";
$gambarOke = "assets/img/ft 16.jpg";
$gambarOKB = "assets/img/ft17.jpg";
$logoBrand = "assets/img/logo-brand.png";
$guide = "assets/img/guide.png";
$gambar1= "assets/img/1.jpg";
$gambar2= "assets/img/2.jpg";
$gambar3= "assets/img/3.jpg";
$gambar4= "assets/img/4.jpg";
$a5="assets/img/5.jpg";
$a6="assets/img/6.jpg";
$a7="assets/img/7.jpg";
$a8="assets/img/8.jpg";
$a9="assets/img/9.jpg";
$a10="assets/img/10.jpg";
$school = "assets/img/school.svg";

?>
<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "resq1481_osis", "kodokjakarta123@", "resq1481_osis");

include './styles.php';
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
<div class="container-fluid">
    <div class="d-flex justify-content-center">
        <h4 class="mt-5">Koordinator Bidang Humas</h4>
    </div>
</div>
  <div class="container-fluid">
    <div class="d-flex justify-content-center">
    <img src="<?php echo $a6;?>" alt="Foto" class="rounded img-fluid" style="width: 600px; height: 300px; object-fit: cover;">
    </div>    
  </div>
  
  <div class="container-fluid" style="width:95%">
    <h3 class="mt-4">Penjelasan Singkat</h3>
    <p>Sekbid Humas atau yang biasa disebut dengan Hubungan Masyarakat, Sekbid Humas di OSIM Mas Muallimin berperan pada bidang sosial. Sekbid Humas juga merupakan divisi yang bertanggung jawab guna melakukan interaksi langsung kepada siswa Mas Muallimin, penghubung komunikasi terkait siswa dengan guru di Mas Muallimin, Sekbid Humas juga yang menyebarkan segala informasi secara langsung kepada siswa Mas Muallimin dan memastikan bahwa segala informasi mengenai kegiatan yang dijalankan oleh Osim telah sampai kepada siswa di Mas Muallimin.
</p>
  </div>

  <div class="container-fluid mb-5" style="width:95%">
    <h3 class="mt-4">Fungsi</h3>
    <p>
    1. Membuat website untuk menjadi perantara keluh kesah antara siswa kepada guru maupun lingkungan sekolah.
</p>
<p>
2. Menjadi perantara sekbid lain ke siswa Mas Muallimin.
</p>
<p>
3. Menjadi pendamping siswa siswi berprestasi ketika menjalankan bakat nya dengan mengikuti lomba.
</p>
<p>
4. Menyebar kan segala flyer dan informasi terkait apapun secara langsung kepada siswa Mas Muallimin.
</p>
<p>
5. Setiap adanya pengutipan infak, humas yang mengutip nya secara langsung namun tetap kerja sama dengan sekbid agama.
</p>
<p>
6. Mencari informasi terkait perlombaan.
</p>
<p>
7. Membuat website khusus OSIM  yang bertujuan agar memperkenalkan Osim Mas Muallimin kepada siswa dan sekolah lainnya.
</p>
  </div>

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
  document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navbarTitle = document.querySelector('.navbar-brand');

    navLinks.forEach(link => {
      link.addEventListener('mouseenter', function() {
        this.style.backgroundColor = '#0B53BE'; // Ganti warna latar belakang saat hover
        this.style.color = '#fff'; // Ganti warna teks saat hover
        this.style.borderRadius = '5px'; // Tambahkan border-radius saat hover
      });

      link.addEventListener('mouseleave', function() {
        this.style.backgroundColor = ''; // Kembalikan warna latar belakang ke semula saat tidak dihover
        this.style.color = '#87d6b0'; // Kembalikan warna teks ke semula saat tidak dihover
      });
    });
  });
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
