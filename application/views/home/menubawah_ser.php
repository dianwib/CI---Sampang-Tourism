 <!-- Our Partners Area -->
 <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Lobster&display=swap);
</style>
    <section class="our_partners_area"  id="partners">
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
    <script src="js/jquery-1.12.0.min.js"></script>

<script  src="jquery.min.js"></script>
<script  src="slick/slick.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>
