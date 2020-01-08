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
  <title>Destinasi Wisata</title>
  
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
                  <h4 class="card-title">Tambah Tempat Destinasi Wisata</h4>
                  <hr>


                 <form class="form-signin" action="<?php echo base_url().'Admin/post_destinations' ?>" method="post" enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Tempat Destinasi</label>
                      <input type="text" name="title" required class="form-control" required >
                    </div>
                      <div class="form-group" style="width: 50%;">
                      <label for="exampleInputName1">Jam - Menit Buka</label>
                      <div class="row">
                    <div class="col-sm">
                      <select name ="opening_hours"  class="form-control">
<?php
for ($h = 0; $h < 24; $h++) printf("<option value=\"$h\"" . (!$h ? " selected" : "") . ">%02d</option>", $h);
?>
</select>
</div>
 <div class="col-sm">
<select name ="opening_minute" class="form-control">
<?php
for ($m = 0; $m < 60; $m++) printf("<option value=\"$m\"" . (!$m ? " selected" : "") . ">%02d</option>", $m);
?>
</select>
                    </div>
                  </div>
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
                      <label for="exampleInputEmail3">Jenis Kategori Destinasi Wisata</label>
                     <select name="destination_id" class="form-control" required>
                  <?php
                  foreach($data as $data){
                  ?>
    
                <option value="<?php echo $data['id']; ?>"><?php echo $data['title']; ?></option>

              
              <?php }?>
               </select>

                    </div>
<div class="form-group" style="width: 50%;">
                      <label for="exampleInputName1">Jam - Menit Tutup</label>
                      <div class="row">
                    <div class="col-sm">
                      <select name ="closing_hours"  class="form-control">
<?php
for ($h = 0; $h < 24; $h++) printf("<option value=\"$h\"" . (!$h ? " selected" : "") . ">%02d</option>", $h);
?>
</select>
</div>
 <div class="col-sm">
<select name ="closing_minute" class="form-control">
<?php
for ($m = 0; $m < 60; $m++) printf("<option value=\"$m\"" . (!$m ? " selected" : "") . ">%02d</option>", $m);
?>
</select>
                    </div>
                  </div>
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
                      <input required class="form-control" type="file" id="picture" name="picture" required="" accept="image/*">
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