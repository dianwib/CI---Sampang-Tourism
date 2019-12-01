<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, hrink-to-fit=yes">
    <title>Topbuilder Construction Template</title>

    <!-- Favicon -->
<link rel="icon" href="<?php echo base_url().'images/favicon.png'?>" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url().'css/bootstrap.min.css'?>" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="<?php echo base_url().'vendors/animate/animate.css'?>" rel="stylesheet">
    <!-- Icon CSS-->
  <link rel="stylesheet" href="<?php echo base_url().'vendors/font-awesome/css/font-awesome.min.css'?>">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="<?php echo base_url().'vendors/camera-slider/camera.css'?>">
    <!-- Owlcarousel CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'vendors/owl_carousel/owl.carousel.css'?>" media="all">

    <!--Theme Styles CSS-->
  <link rel="stylesheet" href="<?php echo base_url().'css/style.css'?>" >

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js'?>"></script>
    <script src="js/respond.min.js'?>"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div> 

  <!-- Top Header_Area -->
  <!-- End Top Header_Area -->

  <!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand"  href="<?php echo base_url().'home'?>"><img src="<?php echo base_url().'images/logo.png'?>"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                         <?php $this->load->view('home/menu');?>
    
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
  <!-- End Header_Area -->
    <!-- Slider area -->
       <section class="slider_area row m0">
       
<div class="slideshowContainer">
  
<!-- Replace the image 'src' with the images in your project.
Javascript is set up so that you can add as many images as you like, but make sure that you match the number of 'circle' span elements (below) to the number of images -->
   <?php
               for ($h = 0; $h < count($data_slides); $h++){
?>
<img class="imageSlides" src=<?php echo base_url().'images/slides/'.$data_slides[$h]['picture']?>>
  

<?
}
?>

  
<!-- I would recommend to replace these 'span' elements with 'img' files
for each the left and right arrow that fits your project, and size accordingly.
I've shown 'span' elements because I didn't want to upload files. -->
  <span id ="leftArrow" class="slideshowArrow">&#8249;</span>
  <span id ="rightArrow" class="slideshowArrow">&#8250;</span>
  
  <div class="slideshowCircles">
<!-- Filled 'dot' class is set to first image in slideshow, and then via Javascript the filled 'dot' class follows the current image.
Make sure you match the number of these 'circle' span elements to the number of images in your slideshow. -->
    <span class="circle dot"></span>
    <span class="circle"></span>
    <span class="circle"></span>
 
    <span class="circle"></span>
  </div>
  
</div>

</section>
 <!-- Our Latest Blog Area -->
    
    
 <section class="featured_works row" data-stellar-background-ratio="0.3">
        <div class="tittle wow fadeInUp">
            <h2>Event</h2>
            <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
        </div>

<style type="text/css">
    /* centered columns styles */
.row-centered {
text-align:center;
}
.col-centered {
display:inline-block;
float:none;
/* reset the text-align */
text-align:left;
/* inline-block space fix */
margin-right:-4px;
}
</style>

        <div class="featured_gallery row-centered">
            <?php
               for ($h = 0; $h < count($data_events); $h++){
?>
<div class="col-md-3 col-sm-3 col-xs-6 gallery_iner p0 col-centered">
                <img style="object-fit: cover;width: 300px;height: 337px;" src=<?php echo base_url().'images/events/'.$data_events[$h]['picture']?>>
                <div class="gallery_hover">
                    <h4><?php echo $data_events[$h]['title']?></h4>
                    <a href="<?php echo base_url().'event/detil/'.$data_events[$h]['id'];?>">Lihat Event</a>
                </div>
   
        </div>  
<? }
    ?>
           
        </div>
    </section>
       <!-- End Our Featured Works Area -->

    
    <!-- End Our Latest Blog Area -->

    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Partner Kita</h2>
                
            </div>
            <div class="partners">
                                  <?php
               for ($h = 0; $h < count($data_partners); $h++){
?>
<div class="item"><img src=<?php echo base_url().'images/partners/'.$data_partners[$h]['picture']?>></div>
  

<?
}
?>

            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->

    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <img  src="<?php echo base_url().'images/logo.png'?>"?>>
                     <p>Tentang aplikasi ......</p>


                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Fitur Lain</h2>
                    <ul class="quick_link">
                        <li><a href="#"><i class="fa fa-chevron-right"></i>Ebook</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Mobile App</h2>
                    <a href="#">
      
                     <img width="70%" height ="70%" src="<?php echo base_url().'images/google_play.png'?>"></a>
         
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>CONTACT US</h2>
                    <address>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@thethemspro.com</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+880 123 456 789</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Sector # 10, Road # 05, Plot # 31, Uttara, Dhaka 1230 </span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2019 All rights reserved ||
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="<?php echo base_url().'js/jquery-1.12.0.min.js'?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
    <!-- Animate JS -->
    <script src="<?php echo base_url().'vendors/animate/wow.min.js'?>"></script>
    <!-- Camera Slider -->
    <script src="<?php echo base_url().'vendors/camera-slider/jquery.easing.1.3.js'?>"></script>
    <script src="<?php echo base_url().'vendors/camera-slider/camera.min.js'?>"></script>
    <!-- Isotope JS -->
    <script src="<?php echo base_url().'vendors/isotope/imagesloaded.pkgd.min.js'?>"></script>
    <script src="<?php echo base_url().'vendors/isotope/isotope.pkgd.min.js'?>"></script>
    <!-- Progress JS -->
    <script src="<?php echo base_url().'vendors/Counter-Up/jquery.counterup.min.js'?>"></script>
    <script src="<?php echo base_url().'vendors/Counter-Up/waypoints.min.js'?>"></script>
    <!-- Owlcarousel JS -->
    <script src="<?php echo base_url().'vendors/owl_carousel/owl.carousel.min.js'?>"></script>
    <!-- Stellar JS -->
    <script src="<?php echo base_url().'vendors/stellar/jquery.stellar.js'?>"></script>
    <!-- Theme JS -->
    <script src="<?php echo base_url().'js/theme.js'?>"></script>
</body>
</html>
