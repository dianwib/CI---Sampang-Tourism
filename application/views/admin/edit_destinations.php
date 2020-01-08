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
                  <h4 class="card-title">Edit Destinasi Wisata : <?php echo $data->title; ?></h4>
                  <hr>


                 <form class="form-signin" action="<?php echo base_url().'Admin/put_destinations/'.$data->id ?>" method="post"  enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Tempat Destinasi</label>
                      <input type="text" name="title" required class="form-control" value="<?php echo $data->title; ?>">
                    </div>
                     <div class="form-group" style="width: 50%;">
                      <label for="exampleInputName1">Jam - Menit Buka</label>
                      <div class="row">
                    <div class="col-sm">
                      <select name ="opening_hours"  class="form-control">
<?php
$jam= substr($data->opening_hours, 0,2);
$menit=substr($data->opening_hours, 3,5);
for ($h = 0; $h < 24; $h++){
  echo "<option value=\"$h\"";
  echo ($jam==$h) ? "selected='selected'":"";
  echo ">".$h."</option>";

}
?>
</select>
</div>
<div class="col-sm">
                    
<select name ="opening_minute" class="form-control">
<?php
for ($m = 0; $m < 60; $m++){
  echo "<option value=\"$m\"";
  echo ($menit==$m) ? "selected='selected'":"";
  echo ">".$m."</option>";

}
?>
</select>
</div>
</div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Koordinat Garis Bujur / Latitude</label>
                    <input type="text" class="form-control" name="latitude" value="<?php echo $data->latitude; ?>" required></div>
<div class="form-group">
                      <label for="exampleInputName1">Deskripsi</label>
                 <textarea name="description" required rows="5"  class="form-control" ><?php echo $data->description; ?></textarea></div>




                    </div>
                    <div class="col-sm">
                   
                    <div class="form-group">
                      <label for="exampleInputEmail3">Jenis Kategori Destinasi Wisata</label>
                      <select name="destination_id" class="form-control" required>
<?php
               for ($h = 0; $h < count($data_destination_category ->data); $h++){
  $temp=$data_destination_category->data[$h]->id;
  echo "<option value=\"$temp\"";
  echo ($data->destination_category_id==$data_destination_category ->data[$h]->id) ? "selected='selected'":"";
  echo ">".$data_destination_category ->data[$h]->title."</option>";

}

?>
</select>
                    </div>

                    <div class="form-group" style="width: 50%;" >
                      <label for="exampleInputName1">Jam - Menit Tutup</label>
                       <div class="row">
                    <div class="col-sm">
                    <select name ="closing_hours" class="form-control">
                      <?php
$jam= substr($data->closing_hours, 0,2);
$menit=substr($data->closing_hours, 3,5);
for ($h = 0; $h < 24; $h++){
  echo "<option value=\"$h\"";
  echo ($jam==$h) ? "selected='selected'":"";
  echo ">".$h."</option>";

}
?>
</select>
</div>
                    <div class="col-sm">
<select name ="closing_minute" class="form-control">
<?php
for ($m = 0; $m < 60; $m++)
  {
  echo "<option value=\"$m\"";
  echo ($menit==$m) ? "selected='selected'":"";
  echo ">".$m."</option>";

}
?>
</select>
</div>
</div>
</div>
                    <div class="form-group">
                      <label for="exampleInputName1">Koordinat Garis Lintang / Longitude</label>
                   <input type="text" class="form-control" name="longitude" value="<?php echo $data->longitude; ?>" required></div>
                    <div class="form-group">
                      <label for="exampleInputName1">Alamat</label>
                   <textarea name="address" required rows="5"  class="form-control" ><?php echo $data->address; ?></textarea></div>
</div>
</div>


                   
                    <div class="form-group">
                      <label>Foto</label><br>
                      <img src="<?php echo $base_url.'upload/destinations/'.$data->photo; ?>" height="200">
              <input  type="file" class="form-control" type="file" id="picture" name="picture"  accept="image/*">
                <input type="hidden" name="temp_picture" value="<?php echo $data->photo ?>">
                    </div>

                    <!-- DIHIDEN KARENA PENTING -->
                    <input type="hidden" name="updated_at" required class="title-value" value="<?php echo $data->updated_at; ?>">
              <input type="hidden" name="created_at" required class="title-value" value="<?php echo $data->created_at; ?>">
              

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