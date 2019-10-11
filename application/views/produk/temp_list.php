<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr><th>ID</th><th>NAMA</th><th>HARGA</th><th></th></tr>
  
<?php
/*$url="http://sip6ikmsampang.info/produk-anggota";
$json = file_get_contents($url);
$data = json_decode($json);
$dataproduk=$data->data;
*/#echo $data->data;
if (is_array($dataproduk) || is_object($dataproduk))
{
    foreach ($dataproduk as $kontak) {
      # code...
      #echo $dataproduk;
  
        echo "<tr>
              <td>$kontak->id_user</td>
              <td>$kontak->nama</td>
              <td>$kontak->harga</td>
              </tr>";
    }
  }
    ?>
</table>