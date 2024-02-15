<?php 

$gambarBgx = "assets/img/ft 12.png";

$gambarBg = "assets/img//hero-bg.png";
$gambarOkss = "assets/img/ft15.jpg";
?>


<style>
.testing2 {
  margin-top: 370px;
}
#hero3 {
    background-image: url("<?php echo $gambarOkss; ?>");
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 95vh;
  }

#hero2 {
    background-image: url("<?php echo $gambarBg; ?>");
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 95vh;
  }
#hero1 {
    background-image: url("<?php echo $gambarBgx; ?>");
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 95vh;
  }

  p{
    font-size:20px;
  }

  .responsive-text {
    position: relative;
    z-index: 1;
    color: transparent;
    -webkit-background-clip: text;
    background-clip: text;
  }



  @media (max-width: 768px) {
    #hero1 {
      background-size: contain;
      height: 35vh;
    }
    
      .testing2 {
    margin-top: 25px;
  }
    .testing1{
      margin-top: -90px;
    }
    #hero2 {
      background-size: contain;
      height: 35vh;
    }
    #hero3 {
      background-size: contain;
      height: 35vh;
    }

  .pepe{
    margin-top: -450px;
  }
    p {
        font-size: 18px; /* Mengurangi ukuran font untuk layar yang lebih kecil */
    }



    .hero-content h1{
        font-size: 18px;
    }
    .hero-content h3{
        font-size: 16px;
    }
  }
</style>