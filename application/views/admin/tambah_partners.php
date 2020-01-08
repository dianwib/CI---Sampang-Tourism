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
  <title>Partner</title>
  
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
                  <h4 class="card-title">Tambah Partner</h4>
                  <hr>


                 <form class="form-signin" action="<?php echo base_url().'Admin/post_partners' ?>" method="post" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama / Instansi Partner</label>
                      <input type="text" name="name" required class="form-control" required >
                    </div>
                    </div>
                     <div class="col-sm">
                   
                    <div class="form-group">
                      <label>Logo Partner</label>
                      <input required class="form-control" type="file" id="picture" name="picture" required="" accept="image/*">
                    </div>

                  </div>
                </div>

                    <div class="form-group">
                      <label for="exampleInputName1">URL / Link Website Partner</label>
                 <input type="text" class="form-control" name="url" required></div>



                   
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