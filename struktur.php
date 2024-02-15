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
$struktur1= "assets/img/ft 18.jpg";
$a19 = "assets/img/19.jpg";
$a20 = "assets/img/20.jpg";
$a21 = "assets/img/21.jpg";
$a22 = "assets/img/22.jpg";
$a23 = "assets/img/23.jpg";
$a24 = "assets/img/24.jpg";
$a25 = "assets/img/25.jpg";

$a26 = "assets/img/26.jpg";
$a27 = "assets/img/27.jpg";
$a28 = "assets/img/28.jpg";
$a29 = "assets/img/29.jpg";
$a30 = "assets/img/30.jpg";
$a31 = "assets/img/31.jpg";
$a32 = "assets/img/32.jpg";

$a33 = "assets/img/33.jpg";
$a34 = "assets/img/34.jpg";
$a35 = "assets/img/35.jpg";
$a36 = "assets/img/36.jpg";
$a37 = "assets/img/37.jpg";
$a38 = "assets/img/38.jpg";
$a39 = "assets/img/39.jpg";
$a40 = "assets/img/40.jpg";
$a41 = "assets/img/41.jpg";
$a42 = "assets/img/42.jpg";


$a43 = "assets/img/43.jpg";
$a44 = "assets/img/44.jpg";
$a45 = "assets/img/45.jpg";
$a46 = "assets/img/46.jpg";
$a47 = "assets/img/47.jpg";
$a48 = "assets/img/48.jpg";

$a49 = "assets/img/49.jpg";
$a50 = "assets/img/50.jpg";
$a51 = "assets/img/51.jpg";
$a52 = "assets/img/52.jpg";
$a53 = "assets/img/53.jpg";
$a54 = "assets/img/54.jpg";
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
    <link rel="icon" href="<?php echo $school ?>">
    <link rel="stylesheet" href="style.css" />
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
    <div class="d-flex justify-content-center mt-5">
        <h2> Struktur OSIM MAS MUALLIMAN</h2>
    </div>
</div>
<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $struktur1;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3" >Iryuha Tantawi, MA</h4>
        <p style="margin-top: -10px;"style="margin-top: -10px;">
        Kepala Madrasah Aliyah Muallimin Univa Medan
        </p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a19;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3" >Anwar Syukri Harahap, S.Si</h4>
        <p style="margin-top: -10px;"style="margin-top: -10px;">
        Pembina OSIM MAS MUALLIMIN UNIVA MEDAN
        </p>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid mt-5">
    <div class="d-flex justify-content-center">
        <h2>Pengurus Inti OSIM</h2>
    </div>
</div>
<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a20;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Ahmad Fatih</h4>
        <p style="margin-top: -10px;">Ketua OSIM MAS MUALLIMIN</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a21;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">M. Azka Harahap</h4>
        <p style="margin-top: -10px;">Wakil Ketua Osim Mas Muallimin</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a22;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Siti Nurmala</h4>
        <p style="margin-top: -10px;">Sekretaris Osim Mas Muallimin</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a23;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Zahra Fadilah</h4>
        <p style="margin-top: -10px;">Wakil Sekretaris Osim Mas Muallimin</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a24;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Ade Irma Suriani Siregar</h4>
        <p style="margin-top: -10px;">Bendahara Osim Mas Muallimin</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a25;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Shofiyatul Fadhilah</h4>
        <p style="margin-top: -10px;">Wakil Bendahara Mas Muallimin</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt-5">
    <div class="d-flex justify-content-center">
        <h2>Koordinator Bidang Humas</h2>
    </div>
</div>

<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-2">
      <div class="text-center">
        <img src="<?php echo $a26;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Farida Syahnum</h4>
        <p style="margin-top: -10px;">Bidang Humas</p>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <img src="<?php echo $a27;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Khairina Nasution</h4>
        <p style="margin-top: -10px;">Bidang Humas</p>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <img src="<?php echo $a28;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Fauziyatul Fitrah</h4>
        <p style="margin-top: -10px;">Bidang Humas</p>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <img src="<?php echo $a29;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Siti Fatimatuzzahra</h4>
        <p style="margin-top: -10px;">Bidang Humas</p>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <img src="<?php echo $a30;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Abdullah Affandi</h4>
        <p style="margin-top: -10px;">Bidang Humas</p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a31;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Fahmi Rasyid Siddiq</h4>
        <p style="margin-top: -10px;">Bidang Humas</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a32;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Nurul Akbar Hasibuan</h4>
        <p style="margin-top: -10px;">Bidang Humas</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt-5">
    <div class="d-flex justify-content-center">
        <h2>Koordinator Bidang Keagamaan</h2>
    </div>
</div>

<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a33;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Ridwan Al-Bukhori</h4>
        <p style="margin-top: -10px;">Bidang Keagamaan</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a34;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">M. Fathul Rizqi Armaini</h4>
        <p style="margin-top: -10px;">Bidang Keagamaan</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a35;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Desi Ayu Ramadhani</h4>
        <p style="margin-top: -10px;">Bidang Keagamaan</p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a36;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Nayla Farhana</h4>
        <p style="margin-top: -10px;">Bidang Keagamaan</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a37;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Inayatul Jalilah</h4>
        <p style="margin-top: -10px;">Bidang Keagamaan</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a38;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Syakira Adrika</h4>
        <p style="margin-top: -10px;">Bidang Keagamaan</p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt-5">
    <div class="d-flex justify-content-center">
        <h2>Koordinator Bidang Kominfo</h2>
    </div>
</div>
<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-2">
      <div class="text-center">
        <img src="<?php echo $a39;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Naya Harun</h4>
        <p style="margin-top: -10px;">Bidang Kominfo</p>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <img src="<?php echo $a40;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Radhiyatul Husna</h4>
        <p style="margin-top: -10px;">Bidang Kominfo</p>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <img src="<?php echo $a41;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Jaya Prima Batubara</h4>
        <p style="margin-top: -10px;">Bidang Kominfo</p>
      </div>
    </div>
    <div class="col-md-2">
      <div class="text-center">
        <img src="<?php echo $a42;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Rafi Praditya Hazmi</h4>
        <p style="margin-top: -10px;">Bidang Kominfo</p>
      </div>
    </div>

  </div>
</div>

<div class="container-fluid mt-5">
    <div class="d-flex justify-content-center">
        <h2>Koordinator Bidang Leadership</h2>
    </div>
</div>

<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a43;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">M. Baker Al-Hakim</h4>
        <p style="margin-top: -10px;">Bidang Leadership</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a44;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Muhammad Farhan</h4>
        <p style="margin-top: -10px;">Bidang Leadership</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a45;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Muhammad Fahri</h4>
        <p style="margin-top: -10px;">Bidang Leadership</p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a46;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Felsy Amalia Manik</h4>
        <p style="margin-top: -10px;">Bidang Leadership</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a47;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Fathin Najihah</h4>
        <p style="margin-top: -10px;">Bidang Leadership</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a48;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Faiz Ramadhan Al-Mubarak</h4>
        <p style="margin-top: -10px;">Bidang Leadership</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt-5">
    <div class="d-flex justify-content-center">
        <h2>Koordinator Bidang Kreativitas</h2>
    </div>
</div>
<div class="container-fluid mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a49;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Hadizhah Lubis</h4>
        <p style="margin-top: -10px;">Bidang Kreativitas</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a50;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Fariz El-Ghiyats</h4>
        <p style="margin-top: -10px;">Bidang Kreativitas</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a51;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Fanny Dzihni</h4>
        <p style="margin-top: -10px;">Bidang Kreativitas</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a52;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Azzahra Revita Putri</h4>
        <p style="margin-top: -10px;">Bidang Kreativitas</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a53;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">Intan Ailani</h4>
        <p style="margin-top: -10px;">Bidang Kreativitas</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <img src="<?php echo $a54;?>" alt="Foto" class="rounded-circle img-fluid" style="width: 300px; height: 300px; object-fit: cover;">
        <h4 class="mt-3">M. Fiqih Aulia</h4>
        <p style="margin-top: -10px;">Bidang Kreativitas</p>
      </div>
    </div>
  </div>
</div>


    <footer>
    <div class="footer-content mt-4">
    <h3>Contact Us</h3>
        <p>Instagram : @Osim_aliyahmuallimin</p>
        <p style="margin-left: 40px;">@aliyahmuallimin</p>
        <p>Jl. Sisingamangaraja No.Km. 5, RW.5, Harjosari I, Kec. Medan Amplas, Kota Medan, Sumatera Utara 20147</p>
        <h6>Managed by KoorBid Humas OSIM MAS MUALLIMIN UNIVA MEDAN</h6>
        

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
