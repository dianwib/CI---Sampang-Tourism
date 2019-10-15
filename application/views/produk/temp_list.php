<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dinas ???</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/open-iconic-bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css'?>">
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.carousel.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.theme.default.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.css'?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/aos.css'?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/ionicons.min.css'?>">
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/flaticon.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/icomoon.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>">
  </head>
  <body>
    <div class="bg-top navbar-light">
      <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch">
          <div class="col-md-4 d-flex align-items-center py-4">
            <a class="navbar-brand" href="index.html">Dinas ???</a>
          </div>
          <div class="col-lg-8 d-block">
        </div>
      </div>
    </div>
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar"  >
      <div class="container d-flex align-items-center" >
       
        <div class="collapse navbar-collapse" id="ftco-nav" >
         <?php $this->load->view('home/menu');?>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image:url(<?php echo base_url().'assets/images/bg_1.jpg);'?>">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(<?php echo base_url().'assets/images/bg_2.jpg);'?>">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          
        </div>
        </div>
      </div>

            <div class="slider-item" style="background-image:url(<?php echo base_url().'assets/images/bg_3.jpg);'?>">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(<?php echo base_url().'assets/images/bg_5.jpg);'?>">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          
        </div>
        </div>
      </div>

    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">PRODUK ANGGOTA</h2>
<!--             <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> -->
          </div>
        </div>
        <div class="row">
         <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Nama Toko

      </th>
      <th class="th-sm">Harga

      </th>
      <th class="th-sm">Outlet


      </th>
    </tr>
  </thead>
<?php

if (is_array($dataproduk) || is_object($dataproduk))
{
    foreach ($dataproduk as $kontak) {
        echo "<tr>
              <td>$kontak->nama</td>
              <td>$kontak->harga</td>
              <td>$kontak->outlet</td>
              </tr>";
    }
  }
    ?>
</table>

        </div>
      </div>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Dinas ???</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Sosial Media</h2>
              
              
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Youtube</h2>
              <!-- <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Projects</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul> -->
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Mobile App</h2>
              <div class="block-21 mb-4 d-flex">
                <a href="#">
                <img width="100%" height ="100%" src=<?php echo base_url().'assets/images/google_play.png'?>></a>
              </div>
             
            </div>
            <!-- <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div> -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <!-- This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery-migrate-3.0.1.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/popper.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.easing.1.3.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.waypoints.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.stellar.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/owl.carousel.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/aos.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.animateNumber.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/scrollax.min.js'?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url().'assets/js/google-map.js'?>"></script>
  <script src="<?php echo base_url().'assets/js/main.js'?>"></script>
    
  </body>
</html>