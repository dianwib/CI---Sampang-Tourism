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
  <title>Data Publik</title>
  
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
                  <h4 class="card-title">Tambah Data Publik</h4>
                  <hr>


                <form class="form-signin" action="<?php echo base_url().'Admin/post_data_publik' ?>" method="post" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Data </label>
                      <input type="text" class="form-control" name="title" required>
                    </div>

                  
                
                     
                  </div>
                    <div class="col-sm">
                  
                  <div class="form-group">
                      <label>Upload File</label>
                      <input required class="form-control" type="file" id="icon" name="picture" required>
                    </div>
                    </div>
  
                  
                    
    
</div>

 <div class="form-group">
                      <label for="exampleInputName1">Deskripsi Data</label>
                     <textarea name="description" required rows="7"  class="form-control" ></textarea></div>

                   
                    <!-- DIHIDEN KARENA PENTING -->
                    <input type="hidden" name="updated_at" required class="form-control" >
              <input type="hidden" name="created_at" required class="form-control" >
              

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