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
$koneksi = mysqli_connect("localhost", "root", "", "db_osis");

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
    <link rel="icon" href="<?php echo $school ?>">
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Include Poppins font -->
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid" style="width: 1500px;">
    <!-- Logo di sebelah kiri -->
    <a href="home.php" class="navbar-brand text-light">
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
        <h4 class="mt-5">OSIM Inti</h4>
    </div>
</div>
  <div class="container-fluid">
    <div class="d-flex justify-content-center">
    <img src="<?php echo $a5;?>" alt="Foto" class="rounded img-fluid" style="width: 600px; height: 300px; object-fit: cover;">
    </div>    
  </div>
  
  <div class="container-fluid" style="width:95%">
    <h3 class="mt-4">Penjelasan Singkat</h3>
    <p>Osim inti adalah salah satu bagian dalam organisasi osim, yang mana osim inti bertugas untuk mengatur dan mengawasi jalannya organisasi, serta juga mengatur dan mengawasi sekbid sekbid yang ada di dalam osim, osim inti terdiri dari struktural osim yaitu :
</p>
  </div>

  <div class="container-fluid mb-5" style="width:95%">
    <p>
    A. Ketua osim : harus menjadi sosok yang dapat memimpin anggota osim mas muallimin dengan baik, bertanggung jawab terhadap tugas yang di berikan, serta mengatur serta mengawasi jalannya sekbid ataupun organisasi.
</p>
<p>
B. Wakil ketua osim : di pilih bersamaan dengan ketua osim, wakil ketua osim harus siap membantu ketua osim dalam menjalankan tugas nya dan juga harus siap menggantikan tugas ketua osim tatkala ketua osim memiliki sebuah halangan dalam menjalankan tugasnya semisal sakit atau yang lainnya.
</p>
<p>
C. Sekretaris osim : membantu kepala badan dalam menjalankan dan melaksanakan rumusan rencana program dan kegiatan, mengkoordinasikan, monitoring, urusan surat menyurat dan pelaksanaan Serta evaluasi dan pelaporan.
</p>
<p>
D. Wakil sekretaris osim : membantu setiap pekerjaan sekretaris osim di saat melakukan pekerjaan nya.
</p>
<p>
E. Bendahara osim : menyimpan, membayarkan, menatausahakan dan mempertanggung jawabkan segala hal keuangan dalam osim.
</p>
<p>
F. Wakil bendahara osim : membantu setiap pekerjaan bendahara osim di saat melakukan pekerjaan nya.
</p>

  </div>

    <footer>
    <div class="footer-content mt-4">
    <h3>Contact Us</h3>
        <p>Instagram : @Osim_aliyahmuallimin</p>
        <p style="margin-left: 40px;">@aliyahmuallimin</p>
        <p>Jl. Willem Iskandar No. 7 B Medan-Sumatera Utara, Indonesia</p>
        <h6>Managed by KoorBid IT OSIM MAN 1 Medan</h6>
        


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
