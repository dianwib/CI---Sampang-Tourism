<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, hrink-to-fit=yes">

    <title>SampangTourism</title>

    <?php $this->load->view('home/menuatas_ser');?>

 <!-- MENU -->
    <section class="featured_works row" data-stellar-background-ratio="0.3" style="margin-top: 7.9%; background-color: rgb(253, 245, 8);">
        <div class="tittle wow fadeInUp"style="margin-top: 7.9%; ">
         <!--    <h2 style="text-transform: capitalize;">layanan</h2>
          -->   <!-- <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
        </div>
<style type="text/css">

<?php include 'menu_tengah.css'; ?>

    /* centered columns styles */
.row-centered {
text-align:center;
}
.col-centered {
display:inline-block;
float:none;

/* reset the text-align */
/* inline-block space fix */
margin-right:-4px;
}
</style>

<!--         <div class="featured_gallery row-centered">
            
<div class="col-md-3 col-sm-3 col-xs-6 gallery_iner p0 col-centered">
 -->                <!-- <img style="object-fit: cover;

  width: 100px;
  height: 100px;" src=<?php echo base_url().'images/menuicon.png'?>> -->
  
  <div class="jenis-container">
    <div class="jenis hover"><a href="<?php echo base_url().'event' ?>"><img style="

  width: 100%;
  height: 100%;" src=<?php echo base_url().'images/menuicon.png'?>></a></div>
  </div>

  <div class="jenis-container">
    <div class="jenis hover"><a href="<?php echo base_url().'berita' ?>"><img style="

  width: 100%;
  height: 100%;" src=<?php echo base_url().'images/menuicon.png'?>></a></div>
  </div>
  <div class="jenis-container">
    <div class="jenis hover"><a href="<?php echo base_url().'berita' ?>"><img style="

  width: 100%;
  height: 100%;" src=<?php echo base_url().'images/menuicon.png'?>></a></div>
  </div>

  <div class="jenis-container">
    <div class="jenis hover"><a href="<?php echo base_url().'produk' ?>"><img style="

  width: 100%;
  height: 100%;" src=<?php echo base_url().'images/menuicon.png'?>></a></div>
  </div>
  

  <div class="jenis-container">
    <div class="jenis hover"><a href="<?php echo base_url().'event' ?>"><img style="

  width: 100%;
  height: 100%;" src=<?php echo base_url().'images/menuicon.png'?>></a></div>
  </div>

  <div class="jenis-container">
    <div class="jenis hover"><a href="<?php echo base_url().'berita' ?>"><img style="

  width: 100%;
  height: 100%;" src=<?php echo base_url().'images/menuicon.png'?>></a></div>
  </div>
  <div class="jenis-container">
    <div class="jenis hover"><a href="<?php echo base_url().'berita' ?>"><img style="

  width: 100%;
  height: 100%;" src=<?php echo base_url().'images/menuicon.png'?>></a></div>
  </div>

  <div class="jenis-container">
    <div class="jenis hover"><a href="<?php echo base_url().'produk' ?>"><img style="

  width: 100%;
  height: 100%;" src=<?php echo base_url().'images/menuicon.png'?>></a></div>
  </div>

<!--             </div>


        </div>
 -->
    </section>
 
    <!-- End Our Featured Works Area -->
<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Lobster&display=swap);
</style>
    <!-- EVENT -->
    <section class="featured_works row" data-stellar-background-ratio="0.3" style=" background-color: rgb(8, 231, 253);">
        <div class="tittle wow fadeInUp">
            <h2 style="text-transform: capitalize;font-family: 'Lobster',cursive; font-size: 6vh; ">Sampang in Action</h2>
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

               <?php include 'event_home.php'; ?>
   <script type="text/javascript">
       var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });
   </script>

        </div>
    </section>

    <!-- End Our Featured Works Area -->

   
 <!-- EVENT -->
    <section class="featured_works row" data-stellar-background-ratio="0.3" style=" background-color: rgb(253, 231, 253);">
        <div class="tittle wow fadeInUp">
            <h2 style="text-transform: capitalize;font-family: 'Lobster',cursive; font-size: 6vh; ">Wisata</h2>
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
            
           <?php include 'wisata_home.php'; ?>
   
        </div>
    </section>

    <!-- End Our Featured Works Area -->


<!-- BERITA-->
    <section class="latest_blog_area" style="background-color:  rgb(2, 219, 241);">

 <div class="tittle wow fadeInUp">
                <h2 style="text-transform: capitalize;font-family: 'Lobster',cursive; font-size: 6vh; ">Berita Terbaru</h2>
             <!--    <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
             --></div>
            <div class="row latest_blog"> 
           <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-12 row-centered">
                <div class="news-slider11 row-centered">
     

<?php
               for ($h = 0; $h < count($data_news); $h++){
?>
<div class="post-slide11">
             <div class="post-img">
             <span class="over-layer"></span>
              <img src=<?php echo $base_url.'/images/news/'.$data_news[$h]['picture']?>>
              </div>
              <h3 class="post-title">
               <a href="<?php echo $base_url.'berita/detil/'.$data_news[$h]['id'];?>"><?php echo $data_news[$h]['title'];?></a>
               </h3>
    <span class="post-date"><i class="fa fa-calendar"></i> <?php echo substr( $data_news[$h]['created_at'],0,10);?></span>
    
            
           </div>
  

<?
}
?>

                </div>
            </div>

<a href="<?php echo base_url().'index.php/berita' ?>">
 <button style=style="text-transform: capitalize;font-family: 'Lobster',cursive; font-size: 3vh; " class="btn btn-primary">LIHAT SEMUA BERITA</button>
</a>
        </div>
    </div>
   </div> 
        </section>


   <?php $this->load->view('home/menubawah_ser');?>