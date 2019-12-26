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
  <title>Galeri Foto</title>
  
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
                  <h4 class="card-title">Tambah Galeri Foto</h4>
                  <hr>


                 <form class="form-signin" action="<?php echo base_url().'Admin/post_photos_gallery' ?>" method="post" enctype="multipart/form-data">

                  
                   
                    <div class="form-group">
                      <label>Galeri Foto</label>
                      <input required class="form-control" type="file" id="picture" name="picture" required="" accept="image/*">
                    </div>

                   <div class="form-group">
                      <label for="exampleInputEmail3">Jenis Kategori Galeri</label>
                     <select name="gallery_id" class="form-control" required>
                  <?php
                  foreach($data as $data){
                  ?>
    
                <option value="<?php echo $data['id']; ?>"><?php echo $data['title']; ?></option>

              
              <?php }?>
               </select>
             </div>


                   
                    <!-- DIHIDEN KARENA PENTING -->
                    <input type="hidden" name="updated_at" required class="title-value" >
              <input type="hidden" name="created_at" required class="title-value" >
              

                    <button type="submit" class="btn btn-primary mr-2">Tambah</button>
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