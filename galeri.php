<?php
$gambarBg = "assets/img/ft15.jpg";
$gambarBiru = "bg-biru.png";
$gambarOrang = "assets/img/foto 3.jpg";
$gambarOke = "assets/img/ft 16.jpg";
$gambarOKB = "assets/img/ft17.jpg";
$logoBrand = "assets/img/logo-brand.png";
$guide = "assets/img/guide.png";
$gambarOrang1 = "assets/img/gambar1.jpg";
$gambarOrang2 = "assets/img/gambar2.jpg";
$gambarOrang3 = "assets/img/gambar3.jpg";
$gambarOrang4 = "assets/img/gambar4.jpg";
$gambarOrang5 = "assets/img/gambar5.jpg";
$gambarOrang6 = "assets/img/gambar6.jpg";
$gallery1 = "assets/img/ft 61.jpg";
$gallery2 = "assets/img/ft 62.jpg";
$gallery3 = "assets/img/ft 63.jpg";
$gallery4 = "assets/img/ft 64.jpg";
$gallery5 = "assets/img/ft 65.jpg";
$gallery6 = "assets/img/ft 66.jpg";
$gallery7 = "assets/img/ft 67.jpg";
$gallery8 = "assets/img/ft 68.jpg";
$gallery9 = "assets/img/ft 69.jpg";
$gallery10 = "assets/img/ft 70.jpg";
$gallery11 = "assets/img/ft 71.jpg";
$gallery12 = "assets/img/ft 72.jpg";
$gallery13 = "assets/img/ft 73.jpg";
$gallery14 = "assets/img/ft 74.jpg";
$gallery15 = "assets/img/ft 75.jpg";
$gallery16 = "assets/img/ft 76.jpg";
$gallery17 = "assets/img/ft 77.jpg";
$gallery18 = "assets/img/ft 78.jpg";
$gallery19 = "assets/img/ft 79.jpg";
$gallery20 = "assets/img/ft 80.jpg";
$gallery21 = "assets/img/ft 81.jpg";
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
        <!-- Include Splide CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.0/dist/css/splide.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">

    <!-- Include Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.0/dist/js/splide.min.js"></script>

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

<div class="d-flex justify-content-center">
        <h3 class="mt-5">Gallery of OSIM</h3>
        

            </div>
            <div class="d-flex justify-content-center">
            <p>Sebuah foto-foto kecil yang penuh makna dan kenangan</p>
        

            </div>
          

<div class="wrapper-splide">
    <div class="splide slide-container">
        <div class="splide__track">
            <ul class="splide__list card-wrapper">
                <li class="splide__slide card">
                    <div class="image-content">
                        <div class="card-image">
                            <img src="<?php echo $gambarOrang1; ?>" alt="" class="card-img">
                        </div>
                    </div>
                
                </li>
                <li class="splide__slide card">
                    <div class="image-content">
                        <div class="card-image">
                            <img src="<?php echo $gambarOrang2; ?>" alt="" class="card-img">
                        </div>
                    </div>
                
                </li>
                <li class="splide__slide card">
                    <div class="image-content">
                        <div class="card-image">
                            <img src="<?php echo $gambarOrang3; ?>" alt="" class="card-img">
                        </div>
                    </div>
     
                </li>
                <li class="splide__slide card">
                    <div class="image-content">
                        <div class="card-image">
                            <img src="<?php echo $gambarOrang4; ?>" alt="" class="card-img">
                        </div>
                    </div>
                </li>
                <li class="splide__slide card">
                    <div class="image-content">
                        <div class="card-image">
                            <img src="<?php echo $gambarOrang5; ?>" alt="" class="card-img">
                        </div>
                    </div>
                </li>
                <li class="splide__slide card">
                    <div class="image-content">
                        <div class="card-image">
                            <img src="<?php echo $gambarOrang6; ?>" alt="" class="card-img">
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev" aria-label="Previous">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="splide__arrow splide__arrow--next" aria-label="Next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="d-flex justify-content-center">

    <h4 class="margin-atas mb-3">
"Tinggallah dalam Memori: Potret-potret Berarti yang Penuh Kenangan"</h4>
    </div>
</div>
<div class="gallery" id="gallery">
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery1; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery2; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery3; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery4; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery5; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery6; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery7; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery8; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery9; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery10; ?>"alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery11; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery12; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src=""<?php echo $gallery13; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery14; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery15; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery16; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery17; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery18; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery19; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery20; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery21; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery1; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery2; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery5; ?>" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="<?php echo $gallery7; ?>" alt=""></div>
        </div>
    </div>

    <footer>
    <div class="footer-content mt-4">
    <h3>Contact Us</h3>
          <p>Instagram : @Osim_aliyahmuallimin</p>
        <p style="margin-left: 40px;">@aliyahmuallimin</p>
        <p>Jl. Sisingamangaraja No.Km. 5, RW.5, Harjosari I, Kec. Medan Amplas, Kota Medan, Sumatera Utara 20147</p>
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
<script>
document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide', {
        type: 'loop',
        fixedWidth: 400,
        perPage: 1,
        gap:10,
        autoplay: true,
        interval: 1500, // Adjust the interval (in milliseconds) for autoplay
        pauseOnHover: false,
        resetProgress: true,
    }).mount();
});
</script>
    <script>
        var gallery = document.querySelector('#gallery');
var getVal = function (elem, style) { return parseInt(window.getComputedStyle(elem).getPropertyValue(style)); };
var getHeight = function (item) { return item.querySelector('.content').getBoundingClientRect().height; };
var resizeAll = function () {
    var altura = getVal(gallery, 'grid-auto-rows');
    var gap = getVal(gallery, 'grid-row-gap');
    gallery.querySelectorAll('.gallery-item').forEach(function (item) {
        var el = item;
        el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
    });
};
gallery.querySelectorAll('img').forEach(function (item) {
    item.classList.add('byebye');
    if (item.complete) {
        console.log(item.src);
    }
    else {
        item.addEventListener('load', function () {
            var altura = getVal(gallery, 'grid-auto-rows');
            var gap = getVal(gallery, 'grid-row-gap');
            var gitem = item.parentElement.parentElement;
            gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
            item.classList.remove('byebye');
        });
    }
});
window.addEventListener('resize', resizeAll);
gallery.querySelectorAll('.gallery-item').forEach(function (item) {
    item.addEventListener('click', function () {        
        item.classList.toggle('full');        
    });
});

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
