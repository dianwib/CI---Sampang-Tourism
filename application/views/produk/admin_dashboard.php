<style type="text/css">
  .dashboard{
color: #000;
transition: all .2s ease-in-out;
  }
  .dashboard:hover{
text-decoration: none;
color: #000;
transform: scale(1.08);
  }


  
</style>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard Admin</title>
  
     <?php $this->load->view('admin/admin_navbaratas');?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <?php $this->load->view('admin/admin_menu');?>
      </nav>



       <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <i class="ti-github icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i><h4 class="font-weight-bold mb-0"><?php echo base_url() ?></h4>
                </div>
                <div>
                    <button type="button" class="btn btn-dark btn-icon-text btn-rounded">
                      <i class="ti-clipboard btn-icon-prepend"></i><?php ini_set('date.timezone', 'Asia/Jakarta'); echo date_create()->format('Y-m-d'); ?>
                    </button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div  class="col-md-3 grid-margin stretch-card">
              <div class="card"><a class="dashboard" href="<?php echo base_url().'admin/events'?>">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left"> EVENT</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">  <?php echo  count($data_events);?>  
</h3>
                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <!-- <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div></a>
              </div>
            </div>
            <div  class="col-md-3 grid-margin stretch-card">
              <div class="card"><a class="dashboard" href="<?php echo base_url().'admin/news'?>">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left"> BERITA</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">  <?php echo  count($data_news);?>  
</h3>
                    <i class="ti-comment-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <!-- <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div></a>
              </div>
            </div>

            <div  class="col-md-3 grid-margin stretch-card">
              <div class="card"><a class="dashboard" href="<?php echo base_url().'admin/data_publik'?>">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left"> DATA PUBLIK</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">  <?php echo  count($data_downloads);?>  
</h3>
                    <i class="ti-files icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <!-- <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div></a>
              </div>
            </div>
           

            <div  class="col-md-3 grid-margin stretch-card">
              <div class="card"><a class="dashboard" href="<?php echo base_url().'admin/partners'?>">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left"> PARTNER</p>
                  <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">  <?php echo  count($data_partners);?>  
</h3>
                    <i class="ti-link icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                  </div>  
                  <!-- <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span></p> -->
                </div></a>
              </div>
            </div>

            <!-- KOLOM 2 -->

            <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body"><a class="dashboard" href="<?php echo base_url().'admin/destinations'?>">
                  <p class="card-title">DESTINASI WISATA</p>
                  <div class="row">
                    <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                      <div class="ml-xl-4">
                        <h1><?php echo  count($data_destinations);?>  </h1>
                        <h3 class="font-weight-light mb-xl-4">Tempat</h3>
                        <p class="text-muted mb-2 mb-xl-0">Terbagi menjadi beberapa kategori destinasi wisata</p>
                      </div>  
                    </div>
                    <div class="col-md-12 col-xl-9">
                      <div class="row">
                        <div class="col-md-6 mt-3 col-xl-5">
                          <canvas id="north-america-chart"></canvas>
                          <div id="north-america-legend"></div>
                        </div>
                        <div class="col-md-6 col-xl-7">
                          <div class="table-responsive mb-3 mb-md-0">
                            <table class="table table-borderless report-table">
                              
              <?php

               for ($h = 0; $h < count($data_destination_categories); $h++){

                $temp_kategori=$data_destination_categories[$h]['id'];
                $temp_total=0;
                                for ($hh = 0; $hh < count($data_destinations); $hh++){

                                if ($temp_kategori==$data_destinations[$hh]['destination_category_id']){
                                  $temp_total+=1;
                                }
                                }        
                                if ($temp_total==0){
                                  $hasil=0;
                                }
                                else{
                                $hasil=  ( $temp_total/count($data_destinations)  )* 100  ;
                                }

                ?>

                                  <tr>
                                <td class="text-muted"><?php echo $data_destination_categories[$h]['title'] ?></td>
                                <td class="w-100 px-0">
                                  <div class="progress progress-md mx-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100% " aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                  </div>
                                </td>
                
                                <td><h5 class="font-weight-bold mb-0"><?php echo $temp_total?></h5></td>
                              </tr>
                                               
                              <?
                              }
                              ?>
                              
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div></a>
                </div>
              </div>
            </div>
          </div>
<!-- 
          KOLOM KE3 -->


          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card"><a class="dashboard" href="<?php echo base_url().'admin/photos_gallery'?>">
                <div class="card-body">
                  <h4 class="card-title">GALERI FOTO</h4>
                  <div class="list-wrapper pt-2">
                    <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                     
<?php
               for ($h = 0; $h < count($data_photos_gallery); $h++){
?>
  <li>
                        <div class="form-check form-check-flat">
                          <label class="form-check-label">
                            <img style="object-fit: cover;width: 100px;height: 100px;" src=<?php echo base_url().'images/photos_gallery/'.$data_photos_gallery[$h]['photo']?>>
                          </label>
                        </div>
                      </li>

<? }
    ?>

                    

                    </ul>
                  </div>
                  
                </div></a>
              </div>
            </div>

 <div class="col-md-4 grid-margin stretch-card">
              <div class="card"><a class="dashboard" href="<?php echo base_url().'admin/slides'?>">
                <div class="card-body">
                  <h4 class="card-title">GAMBAR SLIDER</h4>
                  <div class="list-wrapper pt-2">
                    <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                     
<?php
               for ($h = 0; $h < count($data_slides); $h++){
?>
  <li>
                        <div class="form-check form-check-flat">
                          <label class="form-check-label">
                            <img style="object-fit: cover;width: 100px;height: 100px;" src=<?php echo base_url().'images/slides/'.$data_slides[$h]['picture']?>>
                          </label>
                        </div>
                      </li>

<? }
    ?>

                    

                    </ul>
                  </div>
                  
                </div></a>
              </div>
            </div>


            <div class="col-md-4 grid-margin stretch-card">
              <div class="card border-bottom-0"><a class="dashboard" href="<?php echo base_url().'admin/destinations'?>">
                <div class="card-body pb-0">
                  <p class="card-title">EKONOMI KREATIF</p>
                  <!-- <p class="text-muted font-weight-light">The argument in favor of using filler text goes something like this: If you use real content in the design process, anytime you reach a review</p> -->
                  <div class="d-flex flex-wrap mb-5">
                    <?php

               for ($h = 0; $h < count($data_creative_economy_categories); $h++){

                $temp_kategori=$data_creative_economy_categories[$h]['id'];
                $temp_total=0;
                                for ($hh = 0; $hh < count($data_creative_economies); $hh++){

                                if ($temp_kategori==$data_creative_economies[$hh]['creative_economy_category_id']){
                                  $temp_total+=1;
                                }
                                }        
                                ?>

                    <div class="mr-5 mt-3">
                      <p class="text-muted"><?php echo $data_destination_categories[$h]['title']?></p>
                      <h3><?php echo $temp_total?></h3>
                    </div>
                    <?
                  }

                    ?>
                  </div>
                </div></a>
                
              </div>
            </div>

          </div>

        </div>
        <!-- content-wrapper ends -->

<?php $this->load->view('admin/admin_footer');?>













