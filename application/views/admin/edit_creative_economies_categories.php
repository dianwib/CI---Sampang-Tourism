<!DOCTYPE html>
<html lang="en">
<style>
<?php include 'css_select.css'; ?>
<?php include 'css_modal.css'; ?>
</style>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Ekonomi Kreatif</title>
  
     <?php $this->load->view('admin/admin_navbaratas');?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <?php $this->load->view('admin/admin_menu');?>
      </nav>


    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <!-- BATAS ISI -->


 <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Kategori Ekonomi Kreatif : <?php echo $data->title; ?></h4>
                  <hr>


                 <form class="form-signin" action="<?php echo base_url().'Admin/put_creative_economies_categories/'.$data->id ?>" method="post"  enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Jenis Kategori Ekonomi Kreatif</label>
                      <input type="text" name="title" required class="form-control" value="<?php echo $data->title; ?>">
                    </div>
                    




                    </div>
                    <div class="col-sm">
                   
<div class="form-group">
                      <label for="exampleInputName1">Urutan</label>
                    <input type="number" name="order" required class="form-control" value="<?php echo $data->order; ?>">
                      </div>

                    
</div>
</div>


                   
                    <div class="form-group">
                      <label>Ikon Kategori</label>
                      <input type="file" name="img[]" class="file-upload-default"><br>
                      <img src="<?php echo $base_url.'upload/creative-economy-categories/'.$data->icon; ?>" height="200">
              <input class="form-control" type="file" id="picture" name="picture"  accept="image/*">
                <input type="hidden" class="form-control" name="temp_picture" value="<?php echo $data->icon ?>">
              </div>
                
                    <!-- DIHIDEN KARENA PENTING -->
                    <input type="hidden" name="updated_at" required class="form-control" value="<?php echo $data->updated_at; ?>">
              <input type="hidden" name="created_at" required class="form-control" value="<?php echo $data->created_at; ?>">
              

                    <button type="submit" class="btn btn-primary mr-2">Ubah</button>
                     <a href="javascript:history.go(-1)"><input type="button" class="btn btn-light" value=" Batal"></a>
                  </form>
                </div>
              </div>

            </div>


<!-- BATAS ISI -->
</div>
</div>
</div>
</div>




<?php $this->load->view('admin/admin_footer');?>