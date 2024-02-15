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

    <div class="container-fluid mt-5">
   <div class="d-flex justify-content-center">
  <h2>Formulir Aspirasi</h2>
   </div>

</div>

<div class="container">
<div class="row d-flex justify-content-center mt-4">
    <div class="col-md-4">
      <div class="d-flex justify-content-center">
        
      <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 14 14"><path fill="#75b1ff" fill-rule="evenodd" d="M7 0c2.622 0 4.806 2.184 4.806 4.805c0 .856-.294 1.7-.705 2.464c-.413.768-.959 1.484-1.501 2.094a15.623 15.623 0 0 1-1.521 1.49a9.164 9.164 0 0 1-.546.433a2.894 2.894 0 0 1-.195.13a1.06 1.06 0 0 1-.174.083a.539.539 0 0 1-.405-.03a1.049 1.049 0 0 1-.098-.053a2.903 2.903 0 0 1-.196-.133a9.145 9.145 0 0 1-.545-.435A15.845 15.845 0 0 1 4.4 9.352c-.542-.612-1.088-1.33-1.5-2.095c-.411-.762-.706-1.603-.706-2.452C2.194 2.184 4.378 0 7 0m0 6.24a1.435 1.435 0 1 1 0-2.87a1.435 1.435 0 0 1 0 2.87m3.1 3.916c.184-.207.368-.424.55-.65h1.343c.2 0 .38.12.46.303l1.497 3.495a.5.5 0 0 1-.46.697H.51a.5.5 0 0 1-.46-.697l1.498-3.495a.5.5 0 0 1 .46-.303h1.355c.177.22.357.433.537.636c.662.746 1.33 1.376 1.85 1.821c.26.223.487.402.661.528c.086.063.165.116.232.157a.709.709 0 0 0 .189.09a.546.546 0 0 0 .414-.03c.04-.018.077-.04.11-.059a3.34 3.34 0 0 0 .231-.155c.174-.126.4-.304.661-.525c.52-.442 1.19-1.069 1.851-1.813Z" clip-rule="evenodd"/></svg>         </div>
      <p class="mt-4 text-center">Jl. Sisingamangaraja No.Km. 5, RW.5, Harjosari I, Kec. Medan Amplas, Kota Medan, Sumatera Utara 20147</p>
  
    </div>
    <div class="col-md-4">
      <div class="d-flex justify-content-center">
        
      <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 24 24"><path fill="#75b1ff" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 4l-8 5l-8-5V6l8 5l8-5z"/></svg>         </div>
      
      <p class="mt-4 text-center">osimmasmualliminuniva@gmail.com</p>
  
    </div>
    <div class="col-md-4">
      <div class="d-flex justify-content-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 14 14"><path fill="#75b1ff" fill-rule="evenodd" d="M5.049.276A7.006 7.006 0 0 0 .028 6.375h3.2a15.763 15.763 0 0 1 1.82-6.1ZM3.228 7.625h-3.2a7.006 7.006 0 0 0 5.02 6.1a15.763 15.763 0 0 1-1.82-6.1m3.424 6.367a14.477 14.477 0 0 1-2.17-6.367h5.035a14.477 14.477 0 0 1-2.17 6.367a7.163 7.163 0 0 1-.695 0m2.3-.268a7.006 7.006 0 0 0 5.02-6.099h-3.2a15.763 15.763 0 0 1-1.82 6.1Zm1.82-7.349h3.2a7.006 7.006 0 0 0-5.02-6.1a15.762 15.762 0 0 1 1.82 6.1M6.652.008a7.116 7.116 0 0 1 .696 0a14.477 14.477 0 0 1 2.169 6.367H4.483c.217-2.277.963-4.46 2.17-6.367Z" clip-rule="evenodd"/></svg>  

      </div>
   
      <div class="d-flex justify-content-center">
         <p class="mt-4 text-center">https://osimmasmuallimin.mydurable.com/</p>
  
    </div>
 
  </div>

</div>
</div>
<div class="container mt-5 d-flex justify-content-center align-items-center">
  <div class="card aspiration-card">
    <div class="card-body">
      <h5 class="card-title text-center">Form Aspirasi</h5>
      <form action="proses_form.php" method="POST">
  <!-- Input Nama -->
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda">
  </div>
  <!-- Input Pesan -->
  <div class="form-group mt-3">
    <label for="pesan">Pesan</label>
    <textarea class="form-control" id="pesan" name="pesan" rows="3" placeholder="Masukkan Pesan Anda"></textarea>
  </div>
  <!-- Tombol Kirim -->
  <button type="submit" class="btn btn-primary btn-block mt-4">Kirim</button>
</form>

    </div>
  </div>
</div>
<footer>
    <div class="footer-content mt-4">
        <h3>Contact Us</h3>
        <p>Instagram : @Isim_aliyahmuallimin
</p>
        <p>Instagram : @aliyahmuallimin</p>
        <p>Jl. Sisingamangaraja No.Km. 5, RW.5, Harjosari I, Kec. Medan Amplas, Kota Medan, Sumatera Utara 20147</p>
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
