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
                  <h4 class="card-title">Daftar Tempat Destinasi Wisata</h4>
                  <hr>


                 <form class="form-signin" action="<?php echo base_url().'Admin/destinations_spesifik/'?>" method="post"  enctype="multipart/form-data">  

                             <div class="select">

        <select name="data_kategori" onchange="this.form.submit()">
<option value="ALL" selected disabled> Pilih Kategori
</option>

<?php
  for ($h = 0; $h < count($data_kategori); $h++){
  $temp=$data_kategori[$h]['id'];
  echo "<option value=\"$temp\"";
  echo ">".$data_kategori[$h]['title']."</option>";

}

?>
</select>        
</div>
</form>
                  <a href="<?php echo base_url().'admin/tambah_destinations'?>"> <button type="button" id="btn-tambah" class="btn btn-success btn-rounded btn-fw" style="margin: 1%;float: right;">
            <span class="ti-plus" ></span>  Tambah Data</button></a>


            
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th class="text-center">NO</th>
        
      <th>FOTO</th>
      <th>NAMA DESTINASI WISATA</th>
    
      
      <!-- <th>UPDATE AT</th>
       --><th class="text-center"><span class="ti-settings"></span></th>
  
                        </tr>
                      </thead>
                      <tbody>
                       <?php
        $no = 1;
    foreach($data as $data){
    ?>
      <tr>
        <td class="align-middle text-center"><?php echo $no; ?></td>
       
        <td class="align-middle"><a href="<?php echo '#detil'.$no;?>"><img src="<?php echo $base_url.'upload/destinations/'.$data['photo']; ?>" ></a></td>
           <td class="align-middle"> <a href="<?php echo '#detil'.$no;?>"><?php echo $data['title']; ?></a></td>
     
        
        <!-- <td class="align-middle"><?php echo $data->updated_at; ?></td>
         --><td class="align-middle text-center">

          <a  href="<?php echo '#detil'.$no;?>" data-id="<?php echo $data['id']; ?>"  class="btn btn-info btn-form-ubah" style="color: white;"><span class="ti-eye"></span> lihat</a>

          <a href="<?php echo base_url().'admin/edit_destinations/'.$data['id']?>" data-id="<?php echo $data['id']; ?>"  class="btn btn-warning btn-form-ubah" style="color: white;"><span class="ti-pencil"></span>ubah</a>

        
          <a href="<?php echo base_url().'admin/delete_destinations/'.$data['id']?>" onclick="return confirm('Are you sure delete?')" class="btn btn-danger btn-alert-hapus"><span class="ti-trash"></span>hapus</a>
        </td>
      </tr>
    

<div data-ml-modal id="<?php echo 'detil'.$no;?>">
  <a href="#!" class="modal-overlay"></a>
  <div class="modal-dialog modal-dialog-lg">
    <a href="#!" class="modal-close">&times;</a>
    <h3><?php echo $data['title']; ?></h3>
    <div class="modal-content newspaper">
      <div class="card">
                <div class="card-body">
                     <div class="form-group" style="text-align: center;">
                      <img  src="<?php echo $base_url.'upload/destinations/'.$data['photo']; ?>" style="max-width: 100%;
    height: auto;
    width: auto\9; 
    float: center;
    text-align: center;
    " >
     </div>
                    <div class="row">
                      <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Jam Buka</label>
                      <input type="text" class="form-control" disabled value="<?php echo $data['opening_hours']; ?>">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputUsername1">Kordinat Garis Lintang</label>
                      <input type="text" class="form-control" disabled value="<?php echo $data['latitude']; ?>">
                    </div>
                      
                    </div>
                      <div class="col-sm">
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Jam Tutup</label>
                      <input type="text" class="form-control" disabled value="<?php echo $data['closing_hours']; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsername1">Kordinat Garis Bujur</label>
                      <input type="text" class="form-control" disabled value="<?php echo $data['longitude']; ?>">
                    </div>
                    </div>
                    </div>
                      
                    <div class="form-group">
                      <label for="exampleInputUsername1">Deskripsi</label>
                      <textarea readonly class="form-control" rows="5" ><?php echo $data['description']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Alamat</label>
                      <input type="text" class="form-control" disabled value="<?php echo $data['address']; ?>">
                    </div>
                    <a href="<?php echo base_url().'admin/edit_destinations/'.$data['id']?>" data-id="<?php echo $data['id']; ?>"  class="btn btn-warning btn-form-ubah" style="color: white;"><span class="ti-pencil"></span>ubah</a>
          <a href="<?php echo base_url().'admin/delete_destinations/'.$data['id']?>" onclick="return confirm('Are you sure delete?')" class="btn btn-danger btn-alert-hapus"><span class="ti-trash"></span>hapus</a>
                </div>
              </div>
    </div>
  </div>
</div>


    <?php
      $no++; // Tambah 1 setiap kali looping
    
    }
    ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


<!-- BATAS ISI -->
</div>
</div>
</div>




<?php $this->load->view('admin/admin_footer');?>