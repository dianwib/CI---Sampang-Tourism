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
                  <h4 class="card-title">Daftar Data Publik</h4>
                  <hr>

                  <!-- WAJIB GANTI -->
                
                  <a href="<?php echo base_url().'admin/tambah_data_publik'?>"> <button type="button" id="btn-tambah" class="btn btn-success btn-rounded btn-fw" style="margin: 1%;float: right;">
            <span class="ti-plus" ></span>  Tambah Data</button></a>


            
                  <div class="table-responsive">
                    <table class="table table-hover" style="margin: 0 auto;">
                      <thead>
                        <tr>
                          <th class="text-center">NO</th>
        
      <th>NAMA DATA</th>
    
      
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
       
        
           <td class="align-middle"> <a href="<?php echo '#detil'.$no;?>"><?php echo $data['title']; ?></a></td>
     
        
        <!-- <td class="align-middle"><?php echo $data->updated_at; ?></td>
         --><td class="align-middle text-center">

          <a target="_blank" href="<?php echo $data['url']?>" data-id="<?php echo $data['id']; ?>"  class="btn btn-secondary btn-form-ubah" style="color: white;" ><span class="ti-save"></span> unduh</a>

          <a  href="<?php echo '#detil'.$no;?>" data-id="<?php echo $data['id']; ?>"  class="btn btn-info btn-form-ubah" style="color: white;"><span class="ti-eye"></span> lihat</a>

          <a href="<?php echo base_url().'admin/edit_data_publik/'.$data['id']?>" data-id="<?php echo $data['id']; ?>"  class="btn btn-warning btn-form-ubah" style="color: white;"><span class="ti-pencil"></span>ubah</a>

        
          <a href="<?php echo base_url().'admin/delete_data_publik/'.$data['id']?>" onclick="return confirm('Are you sure delete?')" class="btn btn-danger btn-alert-hapus"><span class="ti-trash"></span>hapus</a>
        </td>
      </tr>
    

<div data-ml-modal id="<?php echo 'detil'.$no;?>">
  <a href="#!" class="modal-overlay"></a>
  <div class="modal-dialog modal-dialog-lg">
    <a href="#!" class="modal-close">&times;</a>
    <h3>Data : <?php echo $data['title']; ?></h3>
    <div class="modal-content newspaper">
      <div class="card">
                <div class="card-body">
                     
                 
                 <div class="form-group">
                      <label for="exampleInputEmail1">URL / Link File</label>
                      <input type="text" class="form-control" disabled value="<?php echo $data['url']; ?>">
                    </div>
                  
                 <div class="form-group">
                      <label for="exampleInputUsername1">Deskripsi Data</label>
                      <textarea readonly class="form-control" rows="5" ><?php echo $data['description']; ?></textarea>
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" disabled value="<?php echo $data['created_at']; ?>">
                    </div>
                    <a href="<?php echo base_url().'admin/edit_data_publik/'.$data['id']?>" data-id="<?php echo $data['id']; ?>"  class="btn btn-warning btn-form-ubah" style="color: white;"><span class="ti-pencil"></span>ubah</a>
          <a href="<?php echo base_url().'admin/delete_data_publik/'.$data['id']?>" onclick="return confirm('Are you sure delete?')" class="btn btn-danger btn-alert-hapus"><span class="ti-trash"></span>hapus</a>
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