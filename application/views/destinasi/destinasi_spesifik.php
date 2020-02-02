<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, hrink-to-fit=yes">
    <title><?php echo $data_destination_categories['title']?></title>

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
    <!-- <div class="preloader"></div> 
 -->
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
                if ($data_slides[$h]['is_visible']==true){
?>
<img class="imageSlides" src=<?php echo $base_url.'upload/slides/'.$data_slides[$h]['picture']?>>
  

<?
}}
?>
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Lobster&display=swap);
.item-1 {
   /* position: absolute;*/
  
  display: block;
    top: 2em;
  text-align: center;
  color: #fff;
  padding: 2%;
  opacity: 0.7;
  /*background-color: rgba(0,0,0,0.1);
 */ font-size: 6.5vw;
  margin-right: auto;
  margin-left: auto;

    animation-duration: 5s;
    animation-timing-function: ease-in-out;
   /* animation-iteration-count: infinite;*/
}

.item-1{
    animation-name: anim-1;
}


@keyframes anim-1 {
 from{
    transform: translate3d(0,20,0);
    opacity: 0.1;
 }
 to{
    transform: translate3d(0,0,0);
    opacity: 0.7;
 }

</style>
 <div style="padding-top: 15%; opacity: 0.6;">
 <p style="text-align: center;margin-left: auto;margin-right: auto; font-family: 'Lobster',cursive;" class="item-1"><?php echo $data_destination_categories['title']?></p>
     
 </div>
 


  
<!-- I would recommend to replace these 'span' elements with 'img' files
for each the left and right arrow that fits your project, and size accordingly.
I've shown 'span' elements because I didn't want to upload files. -->
  <span id ="leftArrow" class="slideshowArrow">&#8249;</span>
  <span id ="rightArrow" class="slideshowArrow">&#8250;</span>
  
  <div class="slideshowCircles" style="visibility: hidden;">
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
    

    <section class="featured_works row" data-stellar-background-ratio="0.3" style="margin-top: 7%; background-color: rgb(239,206,47);" >
        <div class="tittle wow fadeInUp">
           <!--  <h2>Event</h2> -->
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

<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans);
@import url(https://fonts.googleapis.com/css?family=Montserrat:700);
h1 {
  text-align: center;
  font-family: Montserrat,sans-serif;
  color: #333;
}

.accordion {
  width: 100%;
  max-width: 1080px;
  height: 250px;
  overflow: hidden;
  margin: 0px auto;
}
.accordion ul {
  width: 100%;
  display: table;
  table-layout: fixed;
  margin: 0;
  padding: 0;
}
.accordion ul li {
  display: table-cell;
  vertical-align: bottom;
  position: relative;
  width: 16.666%;
  height: 250px;
  background-repeat: no-repeat;
  background-position: center center;
  transition: all 500ms ease;
}
.accordion ul li div {
  display: block;
  overflow: hidden;
  width: 100%;
}
.accordion ul li div span {
  display: block;
  width: 100%;
  height: 250px;
  overflow: hidden;
  position: absolute;
}
.accordion ul li div a {
  display: block;
  height: 250px;
  width: 100%;
  position: relative;
  z-index: 3;
  vertical-align: bottom;
  padding: 15px 20px;
  box-sizing: border-box;
  color: #fff;
  text-decoration: none;
  font-family: Open Sans, sans-serif;
  transition: all 200ms ease;
}
.accordion ul li div a * {
  opacity: 0;
  margin: 0;
  width: 100%;
  text-overflow: ellipsis;
  position: relative;
  z-index: 5;
  white-space: nowrap;
  overflow: hidden;
  -webkit-transform: translateX(-20px);
  transform: translateX(-20px);
  -webkit-transition: all 400ms ease;
  transition: all 400ms ease;
}
.accordion ul li div a h2 {
  font-family: Montserrat,sans-serif;
  text-overflow: clip;
  font-size: 24px;
  text-transform: uppercase;
  margin-bottom: 2px;
  top: 160px;
}
.accordion ul li div a p {
  top: 160px;
  font-size: 13.5px;
}
.accordion ul:hover li {
  width: 10%;
}
.accordion ul:hover li:hover {
  width: 60%;
}
.accordion ul:hover li:hover a {
  background: rgba(0, 0, 0, 0.3);
}
.accordion ul:hover li:hover a * {
  opacity: 1;
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

@media screen and (max-width: 600px) {
  body {
    margin: 0;
  }

  .accordion {
    height: auto;
  }
  .accordion ul li, .accordion ul li:hover, .accordion ul:hover li, .accordion ul:hover li:hover {
    position: relative;
    display: table;
    table-layout: fixed;
    width: 100%;
    -webkit-transition: none;
    transition: none;
  }
  .accordion ul li div, .accordion ul li span, .accordion ul li:hover div, .accordion ul li:hover span, .accordion ul:hover li div, .accordion ul:hover li span, .accordion ul:hover li:hover div, .accordion ul:hover li:hover span {
    display: table-cell;
    width: 100%;
    vertical-align: bottom;
  }
}
.about {
  text-align: center;
  font-family: 'Open Sans', sans-serif;
  font-size: 12px;
  color: #666;
}
.about a {
  color: blue;
  text-decoration: none;
}
.about a:hover {
  text-decoration: underline;
}
</style>

        <div class="featured_gallery row-centered">
          

<div class="accordion">
  <ul>
    
  <?php
               for ($h = 0; $h < count($data_destinations); $h++){
                if ($data_destinations[$h]['destination_category_id']==$kategori){
?>

    <li>
      <div>
        <span>
          
              <img style="max-width: none; box-shadow: 4px 2px 20px 1px rgba(15, 76, 117, 0.35) " src=<?php echo $base_url.'/upload/destinations/'.$data_destinations[$h]['photo']?>>
        </span>
        <a href="<?php echo base_url(). 'destinasi/detil/'.$data_destinations[$h]['id']?>">
          <h2 style="text-transform: capitalize;font-family: 'Lobster',cursive;"><?php echo $data_destinations[$h]['title']?></h2>
          <!-- <p><?php echo $data_destinations[$h]['address']?></p> -->
        </a>
      </div>
    </li>

<? }}
    ?>
  </ul>
</div>

           
        </div>
    </section>
 

    
    <!-- End Our Latest Blog Area -->

  
    <!-- End Our Latest Blog Area -->

    <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Lobster&display=swap);
</style>
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2 style="text-transform: capitalize;font-family: 'Lobster',cursive; font-size: 6vh; ">Partner</h2>
                
            </div>
            <div class="partners">
                  <?php
               for ($h = 0; $h < count($data_partners); $h++){
?>
<div class="item"><img src=<?php echo $base_url.'upload/partners/'.$data_partners[$h]['picture']?>></div>
  

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
                <div class="col-md-6 footer_about">
                    <img src="<?php echo base_url().'images/logo.png'?>"?>
                     <p>Sampangtourism adalah website promosi pariwisata Kabupaten Sampang yang dikelola oleh Dinas Pemuda Olahraga Kebudayaan dan Pariwisata Kabupaten Sampang Madura.</p>

<!-- Start of WebFreeCounter Code -->
<a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=grxqfcc&nd=6&style=71" border="0" alt="hit counter"></a>
<!-- End of WebFreeCounter Code -->
                </div>
                <!-- <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Fitur Lain</h2>
                    <ul class="quick_link">
                        <li><a style="font: 400 14px/26px 'Oswald', sans-serif;" href="#"><i class="fa fa-chevron-right"></i>Ebook</a></li>
                    </ul>
                </div> -->
                <div class="col-md-3  footer_about">
                    <h2>Mobile APP</h2>
                    <a href="#">
      
                     <img width="70%" height ="70%" src="<?php echo base_url().'images/google_play.png'?>"></a>
         
                </div>
                <div class="col-md-3 footer_about">
                    <h2>CONTACT US</h2>
                    <address>
                        <ul class="my_address">
                            <li><a style="font: 400 14px/26px 'Oswald', sans-serif;" href="#"><i style="color: #fff;" class="fa fa-phone" aria-hidden="true"></i>(0323) 321059</a></li>
                            <li><a style="font: 400 14px/26px 'Oswald', sans-serif;" href="#"><i style="color: #fff;" class="fa fa-map-marker" aria-hidden="true"></i><span>Jl. Wahid Hasyim No.23, Rw. X, Gn. Sekar, Kec. Sampang, Kabupaten Sampang, Jawa Timur 69216</span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
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
