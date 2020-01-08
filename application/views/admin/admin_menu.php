<ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'admin/dashboard'?>">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ekonomi" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-id-badge menu-icon"></i>
              <span class="menu-title">Ekonomi Kreatif</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ekonomi">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url().'admin/creative_economies'?>">Anggota Ekonomi Kreatif</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url().'admin/creative_economies_categories'?>">Kategori Ekonomi Kreatif</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'admin/profile'?>">
              <i class="ti-book menu-icon"></i>
              <span class="menu-title">Profil Sampang</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'admin/partners'?>">
              <i class="ti-link menu-icon"></i>
              <span class="menu-title">Partner</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'admin/news'?>">
              <i class="ti-comment-alt menu-icon"></i>
              <span class="menu-title">Berita</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'admin/slides'?>">
              <i class="ti-layers menu-icon"></i>
              <span class="menu-title">Slider</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#galeri" aria-expanded="false" aria-controls="auth">
              <i class="ti-gallery menu-icon"></i>
              <span class="menu-title">Galeri</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="galeri">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url().'admin/galleries'?>"> Kategori Galeri</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url().'admin/photos_gallery'?>">Galeri Foto</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'admin/events'?>">
              <i class="ti-calendar menu-icon"></i>
              <span class="menu-title">Event</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#wisata" aria-expanded="false" aria-controls="auth">
              <i class="ti-direction-alt menu-icon"></i>
              <span class="menu-title">Destinasi Wisata</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="wisata">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url().'admin/destination_categories'?>">Kategori Wisata</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url().'admin/destinations'?>">Daftar Wisata</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'admin/data_publik'?>">
              <i class="ti-files menu-icon"></i>
              <span class="menu-title">Data Publik</span>
            </a>
          </li>
        </ul>