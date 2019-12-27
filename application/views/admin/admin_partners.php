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
  <title> Partner</title>
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
                  <h4 class="card-title">Daftar Partner</h4>
                  <hr>


                 
                  <a href="<?php echo base_url().'admin/tambah_partners'?>"> <button type="button" id="btn-tambah" class="btn btn-success btn-rounded btn-fw" style="margin: 1%;float: right;">
            <span class="ti-plus" ></span>  Tambah Data</button></a>


            
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th class="text-center">NO</th>
        
      <th>LOGO PARTNER</th>
      <th>NAMA / INSTANSI PARTNER</th>
    
      
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
       
        <td class="align-middle"><a href="<?php echo '#detil'.$no;?>"><img src="<?=base_url().'images/partners/'.$data['picture']; ?>" ></a></td>
           <td class="align-middle"> <a href="<?php echo '#detil'.$no;?>"><?php echo $data['name']; ?></a></td>
     
        
        <!-- <td class="align-middle"><?php echo $data->updated_at; ?></td>
         --><td class="align-middle text-center">

          <a  href="<?php echo '#detil'.$no;?>" data-id="<?php echo $data['id']; ?>"  class="btn btn-info btn-form-ubah" style="color: white;"><span class="ti-eye"></span> lihat</a>

          <a href="<?php echo base_url().'admin/edit_partners/'.$data['id']?>" data-id="<?php echo $data['id']; ?>"  class="btn btn-warning btn-form-ubah" style="color: white;"><span class="ti-pencil"></span>ubah</a>

        
          <a href="<?php echo base_url().'admin/delete_partners/'.$data['id']?>" onclick="return confirm('Are you sure delete?')" class="btn btn-danger btn-alert-hapus"><span class="ti-trash"></span>hapus</a>
        </td>
      </tr>
    

<div data-ml-modal id="<?php echo 'detil'.$no;?>">
  <a href="#!" class="modal-overlay"></a>
  <div class="modal-dialog modal-dialog-lg">
    <a href="#!" class="modal-close">&times;</a>
    <h3><?php echo $data['name']; ?></h3>
    <div class="modal-content partnerspaper">
      <div class="card">
                <div class="card-body">
                   <div class="row">
                  <div class="col-sm">
                     <div class="form-group" style="text-align: center;">
                      <img  src="<?=base_url().'images/partners/'.$data['picture']; ?>" style="max-width: 100%;
    height: auto;
    width: auto\9; 
    float: center;
    text-align: center;
    " >
     </div>
   </div>
                  <div class="col-sm">
                      
                    <div class="form-group">
                      <label for="exampleInputUsername1">URL / Link Website Partner </label>
                      <input type="text" class="form-control" disabled value="<?php echo $data['url']; ?>">
                    </div>

                    <div class="form-group">
                      <input type="text" class="form-control" disabled value="<?php echo $data['created_at']; ?>">
                    </div>
                    </div>
                </div>
                    <a href="<?php echo base_url().'admin/edit_partners/'.$data['id']?>" data-id="<?php echo $data['id']; ?>"  class="btn btn-warning btn-form-ubah" style="color: white;"><span class="ti-pencil"></span>ubah</a>
          <a href="<?php echo base_url().'admin/delete_partners/'.$data['id']?>" onclick="return confirm('Are you sure delete?')" class="btn btn-danger btn-alert-hapus"><span class="ti-trash"></span>hapus</a>
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