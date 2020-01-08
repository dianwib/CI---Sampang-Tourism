<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, hrink-to-fit=yes">
    <title>Ekonomi Kreatif</title>

<!-- Favicon -->
<link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />


     <link rel="stylesheet" type="text/css" href="slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>



    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
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

                    <a class="navbar-brand"  href="<?php echo base_url().'home'?>"><img src="images/logo.png"></a>
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
 <p style="text-align: center;margin-left: auto;margin-right: auto; font-family: 'Lobster',cursive;" class="item-1">Ekonomi Kreatif</p>
     
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
<!-- PRODUK -->
     <section class="latest_blog_area">
         <div class="tittle wow fadeInUp">
            <h2> </h2>
            <form class="form-signin" action="<?php echo base_url().'produk'?>" method="post"  enctype="multipart/form-data">
      <div class ="select" style="margin-left: auto;margin-right: auto;">
        <select  name="data_kategori" onchange="this.form.submit()">



<option value="" selected disabled>Pilih Kategori
</option>
<option value="ALL">Semua
</option>


<?php

for ($h = 0; $h < count($data_creative_economy_categories); $h++){
  $temp=$data_creative_economy_categories[$h]['id'];
  echo "<option value=\"$temp\"";
  echo ">".$data_creative_economy_categories[$h]['title']."</option>";

}

?>
</select>        
</form>
</div>
<style type="text/css">
    select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #0f4c75;
  background-image: none;
}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select */
.select {
  position: relative;
  display: flex;
  width: 13em;
  height: 3em;
  line-height: 3;
  background: #0f4c75;
  overflow: hidden;
  border-radius: .25em;
}
select {
  flex: 1;
   padding: 2px 2.5em;
  color: #fff;
  cursor: pointer;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 0 1em;
  background: #033a5f;
  cursor: pointer;
  pointer-events: none;
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
/* Transition */
.select:hover::after {
  color: #fff;
}

</style>

            <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
        </div>
            <div class="row latest_blog">
<div class="container" style="padding: 2%;background-color: #9cdcfb;">
        
        
        
        <div class="fx2">


            <?php 
if ($kategori=='ALL'){
for ($h = 0; $h < count($data_creative_economies); $h++)
{   ?>

  
            <a href="<?php echo 'produk/detil/'.$data_creative_economies[$h]['id']?>">
                <div class="item col4">
                    <img style="width: 35vw;height:23vw;" src="<?php echo $base_url.'/upload/creative-economies/'.$data_creative_economies[$h]['photo']?>" >
                    <h4 style="font-size: 1.5vw;"><?php echo $data_creative_economies[$h]['title']?></h4>
                    <p style="font-size: 1.2vw;"><i style="color: #fff;" class="fa fa-phone" aria-hidden="true"></i><?php echo $data_creative_economies[$h]['contact_number']?></p>
                </div>
            </a>
            
            
<? }}
 
else{
 for ($h = 0; $h < count($data_creative_economies); $h++)

{   

  if ($data_creative_economies[$h]['creative_economy_category_id']==$kategori){
?>

            <a href="<?php echo 'produk/detil/'.$data_creative_economies[$h]['id']?>">
                <div class="item col4">
                    <img style="width: 35vw;height:23vw;" src="<?php echo 'https://sampang-tourism.herokuapp.com/upload/creative-economies/'.$data_creative_economies[$h]['photo']?>" >
                    <h4 style="font-size: 1.5vw;"><?php echo $data_creative_economies[$h]['title']?></h4>
                    <p style="font-size: 1.2vw;"><i style="color: #fff;" class="fa fa-phone" aria-hidden="true"></i><?php echo $data_creative_economies[$h]['contact_number']?></p>
                </div>
            </a>
            
            
<? }}}
    ?>

  </div>
        </div> 
    </div>
</div>
    </section>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Rozha+One');
@import url('https://fonts.googleapis.com/css?family=Raleway|Rozha+One');

.col4 {width: 33.33333333%; float: left; position: relative;}
.transition {-webkit-transition: all .5s ease; -moz-transition: all .5s ease; -o-transition: all .5s ease;  transition: all .5s ease;}
.fx1 .item, .fx2 .item, .fx3 .item, .fx4 .item, .fx5 .item {margin: 10px 0;}

/* active on focus for accessibility tab navigation */


.fx2 .item {padding: 0;}
.fx2 .item img {padding: 0 !important; display: block; max-width: 100%; height: auto;filter: grayscale(0%);}
.fx2 a:hover .item img, .fx2 a:focus .item img {opacity: 0.69; -webkit-transform: scale(1.01); transform: scale(1.01);filter: grayscale(100%);}
.fx2 h4, .fx2 p, .fx2 span {-webkit-transition: all .5s ease; -moz-transition: all .5s ease; -o-transition: all .5s ease;  transition: all .5s ease;} 
.fx2 a .item h4 {font-family: 'Raleway', sans-serif; font-size: 16px; position: absolute; color:#fff; text-transform: uppercase; letter-spacing: 2px; position: absolute; top:42%; left:0; right:0; margin:0 auto; text-align: center; -webkit-filter: blur(5px); filter: blur(5px); opacity: 0;}
.fx2 a:hover .item h4, .fx2 a:focus .item h4 {-webkit-filter: blur(0px); filter: blur(0px); opacity: 1;}
.fx2 a .item p {font-family: 'Raleway', sans-serif; font-size: 8px; position: absolute; color:#fff; text-transform: uppercase; letter-spacing: 2px; position: absolute; top:53%; left:0; right:0; margin:0 auto; text-align: center; opacity: 0;}
.fx2 a:hover .item p, .fx2 a:focus .item p {opacity: 1;}

    </style>
    <!-- End Our Latest Blog Area -->

   

   <?php $this->load->view('home/menubawah_ser');?>