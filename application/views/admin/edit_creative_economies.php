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
                  <h4 class="card-title">Edit Anggota Ekonomi Kreatif : <?php echo $data->title; ?></h4>
                  <hr>


                 <form class="form-signin" action="<?php echo base_url().'Admin/put_creative_economies/'.$data->id ?>" method="post"  enctype="multipart/form-data">

                  <div class="row">
                    <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Anggota / Gerai</label>
                      <input type="text" name="title" required class="form-control" value="<?php echo $data->title; ?>">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputName1">Nama Pemilik</label>
                    <input type="text" class="form-control" name="contact_person" value="<?php echo $data->contact_person; ?>" required>
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
                      <label for="exampleInputEmail3">Jenis Kategori Ekonomi Kreatif</label>
                      <select name="economies_id" class="form-control" required>
<?php
               for ($h = 0; $h < count($data_economy_category ->data); $h++){
  $temp=$data_economy_category->data[$h]->id;
  echo "<option value=\"$temp\"";
  echo ($data->creative_economy_category_id==$data_economy_category ->data[$h]->id) ? "selected='selected'":"";
  echo ">".$data_economy_category ->data[$h]->title."</option>";

}

?>
</select>
                    </div>
<div class="form-group">
                      <label for="exampleInputName1">Nomor Telepon Pemilik</label>
                    <input type="number" class="form-control" name="contact_number" value="<?php echo $data->contact_number; ?>" required>
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
                      <img src="<?php echo $base_url .'/upload/creative-economies/'.$data->photo; ?>" height="200">
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