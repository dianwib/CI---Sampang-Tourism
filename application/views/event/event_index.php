<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, hrink-to-fit=yes">
    <title>Event</title>

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
 <p style="text-align: center;margin-left: auto;margin-right: auto; font-family: 'Lobster',cursive;" class="item-1">Events</p>
     
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

        <div class="featured_gallery row-centered">
            <?php
               for ($h = 0; $h < count($data_events); $h++){
?>
<div class="col-md-3 col-sm-3 col-xs-6 gallery_iner p0 col-centered" style="background:#f7d637;">
                <img style="object-fit: cover;width: 340px;height: 300px;" src="<?php echo $base_url.'upload/events/'.$data_events[$h]['picture']?>">
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

 

   <?php $this->load->view('home/menubawah_ser');?>
