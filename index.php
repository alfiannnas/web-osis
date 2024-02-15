<?php
$gambarBg = "assets/img//hero-bg.png";
$gambarBiru = "bg-biru.png";
$gambarOrang = "assets/img/3.jpg";
$logoBrand = "assets/img/logo-brand.png";
$guide = "assets/img/guide.png";
$paint = "assets/img/paint.png";
$a11 = "assets/img/ft 11.png";
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


<div id="hero2" class="hero-container">
  <div class="container testing2">
    <div class="hero-content d-flex flex-column justify-content-center align-items-center">
      <h1 class="text-light">OSIM MAS MUALLIMIN UNIVA MEDAN</h1>
      <h1 class="text-light">BE SMART WITH AL-QUR'AN, BERSAMA BISA JAYA</h1>
      <div class="kenalan mt-3">
        <button onclick="location.href='#tentang-kami'">Kenalan Yuk</button>
      </div>
    </div>
  </div>
</div>


<div id="tentang-kami" class="judul mt-5">
    <div class="container-fluid">
        
  <h2 class="testing1">Tentang Kami</h2>
    </div>
</div>
    <div class="container-fluid mt-5 yuk">

    <div class="row">
  <div class="col-md-6 order-md-2">
    <!-- Image -->
    <div class="gambar">
  <img src="<?php echo $gambarOrang ?>" class="img-fluid gambar-orang" style="width: 600px;">
</div>

  </div>
  <div class="col-md-6 order-md-1">
    <!-- Content -->
    <div class="teks ok">
     <p>Dengan bangga, kami mempersembahkan Organisasi Siswa Intra Madrasah (OSIM) sebagai inti dari semangat dan kehidupan siswa di Madrasah Aliyah MUALLIMIN. OSIM sebagai wadah untuk sekumpulan orang yang bekerja sama secara rasional serta sistematis yang terpimpin atau terkendali untuk mencapai tujuan tertentu. Sebagai Organisasi Siswa Intra Madrasah (OSIM) di Madrasah Aliyah Muallimin Univa Medan tidak hanya sebuah konsep melainkan representasi nyata dari segala ketetapan wewenang dan tanggung jawab untuk berkerja sama secara efektif dalam mencapai tujuan dikalangan siswa.
 </p>     
    </div>
  </div>
</div>

</div>
  <img src="<?php echo $gambarBiru ?>" class="img-fluid" alt="Responsive Image" style="width: 2200px">
  <div class="judul judul-ok">
        <h2>Kata Sambutan</h2>
      </div>
      <div class="video d-flex justify-content-center">
  <iframe width="420" height="315" src="https://www.youtube.com/embed/vhqnpD1rD2Q?si=JEvmt8Rx_BYu1kwV" frameborder="0" allowfullscreen></iframe>
    
</div>
<div class="d-flex justify-content-center mt-4">
  <h3>Iryuha Tantawi, MA</h3>
</div>
<div class="d-flex justify-content-center text-center">
  <h3>Kepala Madrasah Aliyah Mualimin Univa Medan</h3>
</div>
<img src="<?php echo $gambarBiru ?>" class="img-fluid" alt="Responsive Image" style="width: 2200px">
 
<div class="judul judul-ok">
        <h2>Visi & Misi</h2>
      </div>
      <div class="container-fluid mt-5">
  <div class="row d-flex justify-content-center">
    <!-- Visi Container -->
    <div class="col-md-3 order-md-1 ">
      <div class="header bg-primary text-center p-2 rounded-top">
        <h3 class="text-white">Visi</h3>
      </div>
      <div class="container bg-light p-3  rounded-bottom">
        <p>Menjadi sarana bagi Siswa dan Siswi untuk mengasah kreatifitas dan wadah untuk mengembangkan potensi Siswa dan Siswi yang ada, sehingga terwujud Siswa dan Siswi yang Religius, Cerdas, Berakhlakul Karimah, Berprestasi, Serta dapat menjaga nama baik Madrasah</p>
      </div>
    </div>
    <!-- Misi Container -->
    <div class="col-md-3 order-md-2">
      <div class="header bg-primary text-center p-2 rounded-top  misi-container">
        <h3 class="text-white">Misi</h3>
      </div>
      <div class="container bg-light p-3 mt-md-0  rounded-bottom">
        <p>- Mempererat serta menjalin silaturahmi dan ukhuwah islamiah kepada guru, siswa, dan masyarakat</p>
        <p>- Meninggakkan kesadaran dan kepedulian terhadap agama, lingkungan, dan pendidikan</p>
        <p>- Mengembangkan minat dan bakat Siswa dan Siswi melalui Ekstrakurikuler, serta mendukung dan berkerjasama terhadap seluruh Ekstrakurikuler</p>
        <p>- Memelihara serta meningkatkan prestasi madrasah dalam berbagai Aspek, baik akademik maupun non akademik</p>
      </div>
    </div>
  </div>
</div>

<img src="<?php echo $gambarBiru ?>" class="img-fluid" alt="Responsive Image" style="width: 2200px">
<div class="judul judul-ok">
        <h2>Seksi Bidang</h2>
      </div>
      <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-4">
      <!-- Card 2 -->
      <a href="inti.php" style="text-decoration:none;">
      <div class="card">
      <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" height="100" viewBox="0 0 32 32"><g fill="none"><path fill="#b4acbc" fill-rule="evenodd" d="M16 8.05A3.49 3.49 0 0 1 18.5 7h8c.743 0 1.39.404 1.734 1.003c.07.121.096.26.096.4v2.294L29 25.5a2.5 2.5 0 0 1-2.5 2.5h-21A2.5 2.5 0 0 1 3 25.5l.67-14.803V8.403c0-.14.026-.279.096-.4A1.999 1.999 0 0 1 5.5 7h8c.98 0 1.865.402 2.5 1.05" clip-rule="evenodd"/><path fill="#0074ba" d="M17.732 30H28.5c.83 0 1.501-.678 1.501-1.505V27.44c0-.827-.67-2.441-1.501-2.441h-25C2.671 25 2 26.614 2 27.441v1.064C2 29.332 2.67 30 3.501 30h10.767a2 2 0 0 0 3.464 0"/><path fill="#00a6ed" fill-rule="evenodd" d="M3.501 10H14v1h4v-1h10.499c.83 0 1.501.668 1.501 1.495v16c0 .827-.67 1.505-1.501 1.505H17.732a2 2 0 0 1-3.464 0H3.5c-.829 0-1.5-.668-1.5-1.495v-16.01C2 10.668 2.67 10 3.501 10M17.5 27.5a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0" clip-rule="evenodd"/><path fill="#b4acbc" d="M13 8H5.803a1.5 1.5 0 0 0-1.248.668L3 11v14.5A1.5 1.5 0 0 0 4.5 27h23a1.5 1.5 0 0 0 1.5-1.5V11l-1.555-2.332A1.5 1.5 0 0 0 26.197 8H19v3h-6z"/><path fill="#f3eef8" d="M5.5 8h8a2.5 2.5 0 0 1 2.5 2.5V27l-.447-.894A2 2 0 0 0 13.763 25H5.5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1m13 0h8a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1h-8.264a2 2 0 0 0-1.736 1.007V9c.456-.607 1.182-1 2-1"/></g></svg>
        <div class="card-body d-flex justify-content-center">
          <h5 class="card-title">Osim Inti</h5>
        </div>
      </div>
      </a>

    </div>
    <div class="col-md-4">
      <a href="humas.php" style="text-decoration:none;">
      <div class="card">
        <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" height="100px" viewBox="0 0 128 128"><path fill="#543930" d="M98.9 79.76c-1.25-2.27.34-4.58 3.06-7.44c4.31-4.54 9-15.07 4.64-25.76c.03-.06-.86-1.86-.83-1.92l-1.79-.09c-.57-.08-20.26-.12-39.97-.12s-39.4.04-39.97.12c0 0-2.65 1.95-2.63 2.01c-4.35 10.69.33 21.22 4.64 25.76c2.71 2.86 4.3 5.17 3.06 7.44c-1.21 2.21-4.81 2.53-4.81 2.53s.83 2.26 2.83 3.48c1.85 1.13 4.13 1.39 5.7 1.43c0 0 6.15 8.51 22.23 8.51h17.9c16.08 0 22.23-8.51 22.23-8.51c1.57-.04 3.85-.3 5.7-1.43c2-1.22 2.83-3.48 2.83-3.48s-3.61-.33-4.82-2.53"/><radialGradient id="notoStudent0" cx="99.638" cy="45.941" r="23.419" gradientTransform="matrix(1 0 0 .4912 -21.055 59.492)" gradientUnits="userSpaceOnUse"><stop offset=".728" stop-color="#6d4c41" stop-opacity="0"/><stop offset="1" stop-color="#6d4c41"/></radialGradient><path fill="url(#notoStudent0)" d="M63.99 95.7v-9.44L92.56 84l2.6 3.2s-6.15 8.51-22.23 8.51z"/><radialGradient id="notoStudent1" cx="76.573" cy="49.423" r="6.921" gradientTransform="matrix(-.9057 .4238 -.3144 -.6719 186.542 79.33)" gradientUnits="userSpaceOnUse"><stop offset=".663" stop-color="#6d4c41"/><stop offset="1" stop-color="#6d4c41" stop-opacity="0"/></radialGradient><path fill="url(#notoStudent1)" d="M95.1 83.07c-4.28-6.5 5.21-8.93 5.21-8.93l.01.01c-1.65 2.05-2.4 3.84-1.43 5.61c1.21 2.21 4.81 2.53 4.81 2.53s-4.91 4.36-8.6.78"/><radialGradient id="notoStudent2" cx="94.509" cy="69.002" r="30.399" gradientTransform="matrix(-.0746 -.9972 .8311 -.0622 33.418 157.536)" gradientUnits="userSpaceOnUse"><stop offset=".725" stop-color="#6d4c41" stop-opacity="0"/><stop offset="1" stop-color="#6d4c41"/></radialGradient><path fill="url(#notoStudent2)" d="M106.62 46.56c4.25 10.35-.22 21.01-4.41 25.51c-.57.62-3.01 3.01-3.57 4.92c0 0-9.54-13.31-12.39-21.13c-.57-1.58-1.1-3.2-1.17-4.88c-.05-1.26.14-2.76.87-3.83c.89-1.31 20.16-1.7 20.16-1.7c0 .01.51 1.11.51 1.11"/><radialGradient id="notoStudent3" cx="44.31" cy="69.002" r="30.399" gradientTransform="matrix(.0746 -.9972 -.8311 -.0622 98.35 107.477)" gradientUnits="userSpaceOnUse"><stop offset=".725" stop-color="#6d4c41" stop-opacity="0"/><stop offset="1" stop-color="#6d4c41"/></radialGradient><path fill="url(#notoStudent3)" d="M21.4 46.56c-4.25 10.35.22 21.01 4.41 25.51c.58.62 3.01 3.01 3.57 4.92c0 0 9.54-13.31 12.39-21.13c.58-1.58 1.1-3.2 1.17-4.88c.05-1.26-.14-2.76-.87-3.83c-.89-1.31-1.93-.96-3.44-.96c-2.88 0-15.49-.74-16.47-.74c.01.01-.76 1.11-.76 1.11"/><radialGradient id="notoStudent4" cx="49.439" cy="45.941" r="23.419" gradientTransform="matrix(-1 0 0 .4912 98.878 59.492)" gradientUnits="userSpaceOnUse"><stop offset=".728" stop-color="#6d4c41" stop-opacity="0"/><stop offset="1" stop-color="#6d4c41"/></radialGradient><path fill="url(#notoStudent4)" d="M64.03 95.7v-9.44L35.46 84l-2.6 3.2s6.15 8.51 22.23 8.51z"/><radialGradient id="notoStudent5" cx="26.374" cy="49.423" r="6.921" gradientTransform="matrix(.9057 .4238 .3144 -.6719 -13.052 100.605)" gradientUnits="userSpaceOnUse"><stop offset=".663" stop-color="#6d4c41"/><stop offset="1" stop-color="#6d4c41" stop-opacity="0"/></radialGradient><path fill="url(#notoStudent5)" d="M32.92 83.07c4.28-6.5-5.21-8.93-5.21-8.93l-.01.01c1.65 2.05 2.4 3.84 1.43 5.61c-1.21 2.21-4.81 2.53-4.81 2.53s4.91 4.36 8.6.78"/><path fill="#e59600" d="M73.78 112.04V89.25H54.21v22.79zm17.55-61.7H36.67c-5.89 0-10.71 5.13-10.71 11.41s4.82 11.41 10.71 11.41h54.65c5.89 0 10.71-5.14 10.71-11.41c.01-6.27-4.81-11.41-10.7-11.41"/><path fill="#ffca28" d="M64 10.98c-17.4 0-33.52 18.61-33.52 45.4c0 26.64 16.61 39.81 33.52 39.81s33.52-13.17 33.52-39.81c0-26.79-16.12-45.4-33.52-45.4"/><path fill="#6d4c41" d="M54.8 49.72c-.93-1.23-3.07-3.01-7.23-3.01s-6.31 1.79-7.23 3.01c-.41.54-.31 1.17-.02 1.55c.26.35 1.04.68 1.9.39s2.54-1.16 5.35-1.18c2.81.02 4.49.89 5.35 1.18c.86.29 1.64-.03 1.9-.39c.28-.37.39-1-.02-1.55m32.87 0c-.93-1.23-3.07-3.01-7.23-3.01s-6.31 1.79-7.23 3.01c-.41.54-.31 1.17-.02 1.55c.26.35 1.04.68 1.9.39s2.54-1.16 5.35-1.18c2.81.02 4.49.89 5.35 1.18c.86.29 1.64-.03 1.9-.39c.28-.37.39-1-.02-1.55"/><g fill="#404040"><ellipse cx="47.56" cy="58.72" rx="4.93" ry="5.1"/><ellipse cx="80.44" cy="58.72" rx="4.93" ry="5.1"/></g><path fill="#795548" d="M72.42 76.05c-3.18 1.89-13.63 1.89-16.81 0c-1.83-1.09-3.7.58-2.94 2.24c.75 1.63 6.44 5.42 11.37 5.42s10.55-3.79 11.3-5.42c.75-1.66-1.09-3.33-2.92-2.24"/><path fill="#e59600" d="M67.86 67.96c-.11-.04-.21-.07-.32-.08h-7.08c-.11.01-.22.04-.32.08c-.64.26-.99.92-.69 1.63c.3.71 1.71 2.69 4.55 2.69s4.25-1.99 4.55-2.69c.3-.7-.05-1.37-.69-1.63"/><path fill="#543930" d="M99.27 23.45c-.79-4.72-13.85-13.12-18.74-14.67c-13.24-4.19-21.85-2.49-26.47.03c-.96.52-7.17 3.97-11.51 1.5c-2.72-1.55-10.53 10.84-14.46 13.21c-4.59 2.77-4.19 7.81-3.49 9.77c-2.52 2.14-5.69 6.69-3.52 12.6c1.64 4.45 8.17 6.5 8.17 6.5c-.62 10.74 2.28 15.95 2.28 15.95s4.69-18.45 4.3-21.27c0 0 7.76-1.54 16.57-6.58c5.95-3.41 10.02-7.4 16.71-8.91c10.18-2.29 12.45 5.08 12.45 5.08s9.42-1.81 12.26 11.27c1.17 5.38 1.93 14.3 2.57 19.77c-.06-.48 3.24-6.33 3.86-12.33c.16-1.55 4.34-3.6 6.14-10.26c2.4-8.88-.24-18.5-7.12-21.66"/><radialGradient id="notoStudent6" cx="82.872" cy="84.536" r="33.876" gradientTransform="matrix(.3076 .9515 .706 -.2282 -2.303 -16.1)" gradientUnits="userSpaceOnUse"><stop offset=".699" stop-color="#6d4c41" stop-opacity="0"/><stop offset="1" stop-color="#6d4c41"/></radialGradient><path fill="url(#notoStudent6)" d="M106.4 45.1c-1.5 5.53-4.63 7.88-5.75 9.41c-1.54-9.37-1.3-18.27-12.71-28.81c0 0 2.29-.49 3.41-2.53c.87-1.59.54-3.57.54-3.57c.38.02.77.06 1.17.11c1.96.36 3.96 1.32 5.79 2.55c.22.42.36.82.42 1.19c6.88 3.15 9.53 12.77 7.13 21.65"/><radialGradient id="notoStudent7" cx="38.533" cy="84.7" r="16.886" gradientTransform="matrix(.9907 .1363 .1915 -1.3921 -15.859 155.958)" gradientUnits="userSpaceOnUse"><stop offset=".598" stop-color="#6d4c41" stop-opacity="0"/><stop offset="1" stop-color="#6d4c41"/></radialGradient><path fill="url(#notoStudent7)" d="M24.37 33.49c-2.37 2.1-5.56 6.79-3.21 12.61c1.77 4.39 8.09 6.29 8.09 6.29c0 .02 1.26.4 1.91.4l1.48-21.9c-3.03 0-5.94.91-7.82 2.22c.03.03-.46.35-.45.38"/><radialGradient id="notoStudent8" cx="37.086" cy="95.778" r="12.941" gradientTransform="matrix(-.9657 -.2598 -.2432 .9037 96.192 -44.696)" gradientUnits="userSpaceOnUse"><stop offset=".66" stop-color="#6d4c41" stop-opacity="0"/><stop offset="1" stop-color="#6d4c41"/></radialGradient><path fill="url(#notoStudent8)" d="M32.69 30.9v-.05c-3.03 0-5.93.91-7.82 2.21c0 .03-.15.14-.27.23v-.01c.01-.01.03-.02.04-.03c-.7-1.96-1.11-7 3.49-9.77c.44-.27.93-.66 1.46-1.15c1.22-.5 2.52-.79 3.72-.91c.35-.03.99-.08 1.18-.08l4.81.59z"/><path fill="#e8ad00" d="M116.67 53.3c-1.24 0-2.25.96-2.25 2.14v9.2c0 1.18 1.01 2.14 2.25 2.14s2.25-.96 2.25-2.14v-9.2c0-1.18-1.01-2.14-2.25-2.14m-4.5 0c-1.24 0-2.25.96-2.25 2.14v9.2c0 1.18 1.01 2.14 2.25 2.14s2.25-.96 2.25-2.14v-9.2c0-1.18-1.01-2.14-2.25-2.14"/><path fill="#ffca28" d="M114.42 53.3c-1.24 0-2.25.96-2.25 2.14v11.19c0 1.18 1.01 2.14 2.25 2.14s2.25-.96 2.25-2.14V55.44c0-1.18-1.01-2.14-2.25-2.14"/><ellipse cx="114.42" cy="52.07" fill="#ffca28" rx="2.76" ry="2.63"/><path fill="#504f4f" d="M114.42 52.04c-.55 0-1-.45-1-1v-38c0-.55.45-1 1-1s1 .45 1 1v38c0 .55-.45 1-1 1"/><linearGradient id="notoStudent9" x1="63.417" x2="63.417" y1="128.333" y2="99.693" gradientTransform="matrix(1 0 0 -1 0 128)" gradientUnits="userSpaceOnUse"><stop offset=".003" stop-color="#424242"/><stop offset=".472" stop-color="#353535"/><stop offset="1" stop-color="#212121"/></linearGradient><path fill="url(#notoStudent9)" d="M115.42 12c-30.83-7.75-52-8-52-8s-21.17.25-52 8v.77c0 1.33.87 2.5 2.14 2.87c3.72 1.1 11.47 3.34 16.53 4.36c0 0-1.11 1.71-2 3.52c0 0 9.95 5.92 35.33 8.48c25.38-2.56 35.85-8.55 35.85-8.55c-.88-1.81-1.98-3.45-1.98-3.45c4.5-.74 12.32-3.14 16.04-4.32c1.25-.4 2.09-1.55 2.09-2.86z"/><linearGradient id="notoStudenta" x1="63.417" x2="63.417" y1="128.167" y2="97.167" gradientTransform="matrix(1 0 0 -1 0 128)" gradientUnits="userSpaceOnUse"><stop offset=".003" stop-color="#616161"/><stop offset=".324" stop-color="#505050"/><stop offset=".955" stop-color="#242424"/><stop offset="1" stop-color="#212121"/></linearGradient><path fill="url(#notoStudenta)" d="M63.42 4s-21.17.25-52 8c0 0 35.41 9.67 52 9.38c16.59.29 52-9.38 52-9.38c-30.84-7.75-52-8-52-8"/><linearGradient id="notoStudentb" x1="13.309" x2="114.137" y1="110.001" y2="110.001" gradientTransform="matrix(1 0 0 -1 0 128)" gradientUnits="userSpaceOnUse"><stop offset=".001" stop-color="#bfbebe"/><stop offset=".3" stop-color="#212121" stop-opacity="0"/><stop offset=".7" stop-color="#212121" stop-opacity="0"/><stop offset="1" stop-color="#bfbebe"/></linearGradient><path fill="url(#notoStudentb)" d="M115.42 12c-30.83-7.75-52-8-52-8s-21.17.25-52 8v.77c0 1.33.87 2.5 2.14 2.87c3.72 1.1 11.47 3.34 16.53 4.36c0 0-1.11 1.71-2 3.52c0 0 9.95 5.92 35.33 8.48c25.38-2.56 35.85-8.55 35.85-8.55c-.88-1.81-1.98-3.45-1.98-3.45c4.5-.74 12.32-3.14 16.04-4.32c1.25-.4 2.09-1.55 2.09-2.86z" opacity="0.4"/><path fill="#212121" d="M114.5 120.99c0-14.61-21.75-21.54-40.72-23.1l-8.6 11.03c-.28.36-.72.58-1.18.58c-.46 0-.9-.21-1.18-.58L54.2 97.87c-10.55.81-40.71 4.75-40.71 23.12V124h101z"/><radialGradient id="notoStudentc" cx="64" cy="5.397" r="54.167" gradientTransform="matrix(1 0 0 -.5247 0 125.435)" gradientUnits="userSpaceOnUse"><stop offset=".598" stop-color="#212121"/><stop offset="1" stop-color="#616161"/></radialGradient><path fill="url(#notoStudentc)" d="M114.5 120.99c0-14.61-21.75-21.54-40.72-23.1l-8.6 11.03c-.28.36-.72.58-1.18.58c-.46 0-.9-.21-1.18-.58L54.2 97.87c-10.55.81-40.71 4.75-40.71 23.12V124h101z"/></svg>
        <div class="card-body d-flex justify-content-center">
          <h5 class="card-title">Bidang Humas</h5>
        </div>
      </div>
      </a>

    </div>

  </div>
  <div class="row justify-content-center">
  <div class="col-md-4">
    <a href="kominfo.php" style="text-decoration:none;">
    <div class="card card-hover">
      <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" height="100" viewBox="0 0 48 48"><path fill="#546e7a" d="M14 13H8v-1.8c0-.7.5-1.2 1.2-1.2h3.6c.7 0 1.2.5 1.2 1.2z"/><path fill="#5e35b1" d="M40 40H8c-2.2 0-4-1.8-4-4V22h40v14c0 2.2-1.8 4-4 4"/><path fill="#42257a" d="M12.7 22c-.4 1.3-.7 2.6-.7 4c0 6.6 5.4 12 12 12s12-5.4 12-12c0-1.4-.3-2.7-.7-4z"/><path fill="#78909c" d="M8 12h32c2.2 0 4 1.8 4 4v6H4v-6c0-2.2 1.8-4 4-4"/><path fill="#78909c" d="M33.9 13.1H14.2L17.6 8c.4-.6 1-.9 1.7-.9h9.6c.7 0 1.3.3 1.7.9z"/><path fill="#455a64" d="M35.3 22c-1.6-4.7-6.1-8-11.3-8s-9.7 3.3-11.3 8z"/><circle cx="24" cy="26" r="9" fill="#b388ff"/><path fill="#c7a7ff" d="M29 23c-1.2-1.4-3-2.2-4.8-2.2c-1.8 0-3.6.8-4.8 2.2c-.5.5-.4 1.3.1 1.8s1.3.4 1.8-.1c1.5-1.7 4.3-1.7 5.8 0c.3.3.6.4 1 .4c.3 0 .6-.1.9-.3c.4-.4.5-1.3 0-1.8"/><path fill="#dbe2e5" d="M36 15h5v4h-5z"/></svg>
        <div class="card-body d-flex justify-content-center">
          <h5 class="card-title">Bidang Kominfo</h5>
        </div>
      </div>
    </a>
      <!-- Card 4 -->

    </div>
    <div class="col-md-4">
      <!-- Card 4 -->
      <a href="keagamaan.php" style="text-decoration:none;">
      <div class="card">
      <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" height="100" viewBox="0 0 36 36"><path fill="#f4900c" d="M23 4.326c0 4.368-9.837 6.652-9.837 13.206c0 2.184 1.085 4.468 2.177 4.468h15.291c1.093 0 2.192-2.284 2.192-4.468C32.823 10.977 23 8.694 23 4.326"/><path fill="#ffd983" d="M35 33.815C35 35.022 34.711 36 32.815 36h-19.66C11.26 36 11 35.022 11 33.815V22.894c0-1.206.26-1.894 2.156-1.894h19.66c1.895 0 2.184.688 2.184 1.894z"/><path fill="#ffd983" d="M23 34a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1a2 2 0 0 1 2-2h18a2 2 0 0 1 2 2z"/><path fill="#662113" d="M26 29c0-3-1.896-5-3-5s-3 2-3 5v7h6zm-8 2.333c0-2-1.264-3.333-2-3.333s-2 1.333-2 3.333V36h4zm14 0c0-2-1.264-3.333-2-3.333s-2 1.333-2 3.333V36h4z"/><path fill="#ffd983" d="M9 34a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2z"/><path fill="#f4900c" d="M5.995.326c0 1.837-2.832 2.918-2.832 5.675c0 .919.312 2 .627 2h4.402c.314 0 .631-1.081.631-2c0-2.757-2.828-3.838-2.828-5.675"/><path fill="#ffac33" d="M10 12a1 1 0 0 1-1 1H3a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1m0-4a1 1 0 0 1-1 1H3a1 1 0 0 1 0-2h6a1 1 0 0 1 1 1"/></svg>
        <div class="card-body d-flex justify-content-center">
          <h5 class="card-title">Bidang Keagamaan</h5>
        </div>
      </div>
      </a>

    </div>
    

  </div>
  <div class="row justify-content-center">
  <div class="col-md-4">
    <a href="kreativitas.php" style="text-decoration:none;">
    <div class="card">
      <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" height="100" viewBox="0 0 14 14"><path fill="#22d883" fill-rule="evenodd" d="M4.35.577a7 7 0 0 1 9.381 4.085c.27.758.15 1.626-.315 2.282A2.526 2.526 0 0 1 11.37 8H9.5a1.5 1.5 0 0 0-.455 2.931c.55.205.935.702.972 1.286a1.43 1.43 0 0 1-1.01 1.524A6.8 6.8 0 0 1 7.129 14a7 7 0 0 1-3.636-1.021A7.055 7.055 0 0 1 .15 6.517a7.055 7.055 0 0 1 4.2-5.94M4.5 7a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3m6-3a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0m-6 6.5a1 1 0 1 0 0-2a1 1 0 0 0 0 2" clip-rule="evenodd"/></svg>
        <div class="card-body d-flex justify-content-center">
          <h5 class="card-title">Bidang Kreativitas</h5>
        </div>
      </div>
  </a>
      <!-- Card 4 -->

    </div>
    <div class="col-md-4">
  <!-- Card 4 -->
  <a href="leadership.php" style="text-decoration:none;">
    <div class="card">
      <svg class="mt-5" xmlns="http://www.w3.org/2000/svg" height="100" viewBox="0 0 24 24">
        <path fill="#75b1ff" d="M7.475 21Q5.2 21 3.6 19.4T2 15.525q0-2.15 1.438-3.713t3.587-1.737L3 2h7l2 4l2-4h7l-4 8.025q2.125.2 3.563 1.763T22 15.5q0 2.3-1.6 3.9T16.5 21q-.225 0-.462-.012t-.463-.063q1.375-.9 2.15-2.337T18.5 15.5q0-2.725-1.888-4.612T12 9q-2.725 0-4.612 1.888T5.5 15.5q0 1.7.7 3.2t2.2 2.225q-.225.05-.462.063T7.475 21M12 20q-1.875 0-3.187-1.312T7.5 15.5q0-1.875 1.313-3.187T12 11q1.875 0 3.188 1.313T16.5 15.5q0 1.875-1.312 3.188T12 20m-1.85-1.75l1.85-1.4l1.85 1.4l-.7-2.275L15 14.65h-2.275L12 12.25l-.725 2.4H9l1.85 1.325z"/>
      </svg>
      <div class="card-body d-flex justify-content-center">
        <h5 class="card-title">Bidang Leadership</h5>
      </div>
    </div>
  </a>
</div>

    

  </div>

</div>
<img src="<?php echo $gambarBiru ?>" class="img-fluid" alt="Responsive Image" style="width: 2200px">
<div class="judul judul-ok">
        <h2>Saran dan Pengaduan</h2>
        <div class="d-flex justify-content-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 24 24"><path fill="#75b1ff" d="M18.72 14.76c.35-.85.54-1.76.54-2.76c0-.72-.11-1.41-.3-2.05c-.65.15-1.33.23-2.04.23A9.07 9.07 0 0 1 9.5 6.34a9.21 9.21 0 0 1-4.73 4.88c-.04.25-.04.52-.04.78A7.27 7.27 0 0 0 12 19.27c1.05 0 2.06-.23 2.97-.64c.57 1.09.83 1.63.81 1.63c-1.64.55-2.91.82-3.78.82c-2.42 0-4.73-.95-6.43-2.66a9.03 9.03 0 0 1-2.24-3.69H2v-4.55h1.09a9.09 9.09 0 0 1 15.33-4.6a8.991 8.991 0 0 1 2.47 4.6H22v4.55h-.06L18.38 18l-5.3-.6v-1.67h4.83zm-9.45-2.99c.3 0 .59.12.8.34a1.136 1.136 0 0 1 0 1.6c-.21.21-.5.33-.8.33c-.63 0-1.14-.5-1.14-1.13c0-.63.51-1.14 1.14-1.14m5.45 0c.63 0 1.13.51 1.13 1.14c0 .63-.5 1.13-1.13 1.13c-.63 0-1.14-.5-1.14-1.13a1.14 1.14 0 0 1 1.14-1.14"/></svg>
     
        </div>
           <h5 class="d-flex justify-content-center">Berikan Saran dan Aspirasimu secara Anonim dengan mengisi formulir aspirasi dibawah.</h5>
        <h5 class="d-flex justify-content-center">#AspirasiMu adalah Inspirasi kami</h5>
        <div class="d-flex justify-content-center" style="margin-top:20px;">
  <a href="form.php" class="btn btn-primary rounded mb-5"><h4>Form Aspirasi</h4></a>
</div>
      </div>

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
