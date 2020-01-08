<!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url().'assets_admin/vendors/ti-icons/css/themify-icons.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets_admin/vendors/base/vendor.bundle.base.css'?>">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url().'assets_admin/css/style.css'?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url().'assets_admin/images/favicon.png'?>" />
</head>

<body>
  <div class="container-scroller"><nav class="navbar bg-custom-2 col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="<?php echo base_url().'admin/dashboard'?>"><img src="<?php echo base_url().'assets_admin/images/logo.svg'?>" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo base_url().'admin/dashboard'?>"><img src="<?php echo base_url().'assets_admin/images/logo-mini.svg'?>" alt="logo"/></a>
      </div>
      
      <div class="navbar-menu-wrapper  d-flex align-items-center justify-content-end">
        <button style="color:  #248afd;" class="navbar-toggler navbar-toggler align-self-center " type="button" data-toggle="minimize">
          <span class="ti-view-list" style=" background-color: #fff;"></span>
        </button>
        
              
              <a class="dropdown-item" href="<?php echo base_url().'login/logout'?>">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
        <button style="color: #248afd; " class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-view-list" style=" background-color: #fff;"></span>
        </button>
      </div>
    </nav>