<ul class="nav navbar-nav navbar-right">
                        <li class="dropdown submenu">
                            <a href="<?php echo base_url().'home'?>">Home</a>
                            
                        </li>

                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ekonomi Kreatif</a>
                            <ul class="dropdown-menu other_dropdwn">
                                <li><a href="<?php echo base_url().'produk' ?>">Daftar Anggota</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="<?php echo base_url().'berita' ?>">Berita</a>
                        </li>
                        <li class="dropdown submenu">
                            <?php #######DESTINATIONS-CATEGORIES
        $url = $this->API.'destination-categories';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data_destination_categories=$response['data'];
        ?>

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Destinasi Wisata</a> <ul class="dropdown-menu other_dropdwn">
                           
                             <?php
               for ($h = 0; $h < count($data_destination_categories); $h++){
?>
  <li><a href="<?php echo base_url().'destinasi/index_/'.$data_destination_categories[$h]['id']?>"><?php echo $data_destination_categories[$h]['title'] ?></a></li>

                    <?}
                    ?>
                     </ul>
                        </li>
                        <li><a href="<?php echo base_url().'event' ?>">Event</a></li>
                       <!--  <li><a href="<?php echo base_url().'gallery' ?>">Galeri</a></li> -->
                      
                    </ul>