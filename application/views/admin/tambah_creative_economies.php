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
                  <h4 class="card-title">Tambah Anggota Ekonomi Kreatif</h4>
                  <hr>


                 <form class="form-signin" action="<?php echo base_url().'Admin/post_creative_economies' ?>" method="post" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Anggota / Gerai</label>
                      <input type="text" name="title" required class="form-control" required >
                    </div>
                     <div class="form-group">
                      <label for="exampleInputName1">Nama Pemilik</label>
                    <input type="text" class="form-control" name="contact_person" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Koordinat Garis Bujur / Latitude</label>
                    <input type="text" class="form-control" name="latitude" required></div>
<div class="form-group">
                      <label for="exampleInputName1">Deskripsi</label>
                 <textarea name="description" required rows="5"  class="form-control" ></textarea></div>

                    </div>
                    <div class="col-sm">
                   
                    <div class="form-group">
                      <label for="exampleInputEmail3">Jenis Kategori Ekonomi Kreatif</label>
                     <select name="economies_id" class="form-control" required>
                  <?php
                  foreach($data as $data){
                  ?>
    
                <option value="<?php echo $data['id']; ?>"><?php echo $data['title']; ?></option>

              
              <?php }?>
               </select>

                    </div>
<div class="form-group">
                      <label for="exampleInputName1">Nomor Telepon Pemilik</label>
                    <input type="number" class="form-control" name="contact_number"  required>
                      </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Koordinat Garis Lintang / Longitude</label>
                   <input type="text" class="form-control" name="longitude"  required></div>
                    <div class="form-group">
                      <label for="exampleInputName1">Alamat</label>
                   <textarea name="address" required rows="5"  class="form-control" ></textarea></div>
</div>
</div>


                   
                    <div class="form-group">
                      <label>Foto</label>
                      <input required type="file" id="picture" name="picture" required="" accept="image/*" class="form-control">
              
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