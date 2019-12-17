<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
      MENU
      </button>
    </div><!-- /.container-fluid -->
  </nav>    <div class="container-fluid main-container">
      <div class="col-md-2 sidebar">
        <div class="row">
  <!-- uncomment code for absolute positioning tweek see top comment in css -->
  <div class="absolute-wrapper"> </div>
  <!-- Menu -->
  <div class="side-menu">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Main Menu -->
      <div class="side-menu-container">
        <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url().'admin/events'?>" class="active">Events</a></li>
      <li><a href="<?php echo base_url().'admin/slides'?>" >Slides</a></li>
      <li><a href="<?php echo base_url().'admin/news'?>">News</a></li>
      <li><a href="<?php echo base_url().'admin/partners'?>">Partners</a></li>
      <li><a href="<?php echo base_url().'admin/galleries'?>">Galleries</a></li>
      <li><a href="<?php echo base_url().'admin/photos_gallery'?>">Photos-gallery</a></li>
      <li><a href="<?php echo base_url().'admin/destination_categories'?>">Destination-categories</a></li>
      <li><a href="<?php echo base_url().'admin/destinations'?>">Destinations</a></li>
      <li><a href="<?php echo base_url().'admin/creative_economies'?>">Creative-economies</a></li>
      <li><a href="<?php echo base_url().'admin/creative_economies_categories'?>">Creative-economies-categories</a></li><li><a href="<?php echo base_url().'admin/profile'?>">Profile</a></li>
      <li><a href="<?php echo base_url().'login/logout'?>">Logout</a></li>

        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

  </div>
</div>      </div>
      <div class="col-md-10 content">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin destinations</title>
  <!-- Load File bootstrap.min.css yang ada difolder css -->
  <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
  .align-middle{
    vertical-align: middle !important;
  }
  </style>
    <script>
    var base_url = '<?= base_url() ?>' // Buat variabel base_url agar bisa di akses di semua file js
    </script>
</head>
<body>
    <div class="well">
        <h2 style="margin-top: 0;">Data destinations</h2>
    </div>


    <div id="view" style="margin: 10px 20px;">
    <div class="table-responsive">
      <form class="form-signin" action="<?php echo base_url().'Admin/put_destinations/'.$data->id ?>" method="post"  enctype="multipart/form-data">
            <table>

  <table class="table table-bordered">
    <tr>
      <th>DESTINATION CATEGORY</th>
      <th>TITLE</th>
      <th>DESCRIPTION</th>
      <th>ADDRESS</th>
      <th>PHOTO</th>
      
      
    </tr>


      <tr>
        
                    <!-- Membuat sebuah textbox text yang akan digunakan untuk form ubah -->
                    <td>
<select name="destination_id" required>
<?php
               for ($h = 0; $h < count($data_destination_category ->data); $h++){
  $temp=$data_destination_category->data[$h]->id;
  echo "<option value=\"$temp\"";
  echo ($data->destination_category_id==$data_destination_category ->data[$h]->id) ? "selected='selected'":"";
  echo ">".$data_destination_category ->data[$h]->title."</option>";

}

?>
</select>
</td>
              <td><input type="text" name="title" required class="title-value" value="<?php echo $data->title; ?>">
              </td><td><textarea name="description" required rows="5" cols="35" class="content-value" ><?php echo $data->description; ?></textarea>
              </td><td><textarea name="address" required rows="5" cols="35" class="content-value" ><?php echo $data->address; ?></textarea>
              </td><td><img src="<?=base_url().'images/destinations/'.$data->photo; ?>" height="200">
              <input class="picture-value" type="file" id="picture" name="picture"  accept="image/*">
                <input type="hidden" name="temp_picture" value="<?php echo $data->photo ?>">
                <td><input type="hidden" name="updated_at" required class="title-value" value="<?php echo $data->updated_at; ?>">
              <td><input type="hidden" name="created_at" required class="title-value" value="<?php echo $data->created_at; ?>">
              
        </td>
      </tr>

 </table> 
   <table class="table table-bordered">
    <tr>
     
      <th>OPENING HOURS</th>
      <th>CLOSING HOURS</th>
      <th>LATITUDE</th>
      <th>LONGITUDE</th>
      
    </tr>

      <tr><td><select name ="opening_hours">
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
<select name ="opening_minute">
<?php
for ($m = 0; $m < 60; $m++){
  echo "<option value=\"$m\"";
  echo ($menit==$m) ? "selected='selected'":"";
  echo ">".$m."</option>";

}
?>
</select>
              </td>
              <td><select name ="closing_hours">
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
<select name ="closing_minute">
<?php
for ($m = 0; $m < 60; $m++)
  {
  echo "<option value=\"$m\"";
  echo ($menit==$m) ? "selected='selected'":"";
  echo ">".$m."</option>";

}
?>
</select>

              </td>
              <td><input type="text" class="title-value" name="latitude" value="<?php echo $data->latitude; ?>" required>
              </td>
              <td><input type="text" class="title-value" name="longitude" value="<?php echo $data->longitude; ?>" required>
              </td>
            </tr>
          </table>

<input style="background-color: #e44c65 " type="submit" class="btn btn-primary" value=" &nbsp Ubah &nbsp"></form>
      </div></div></body>
</html>







    </div>

    <style type="text/css">
      h1.page-header {
    margin-top: -5px;
}

.sidebar {
  padding-left: 0;
}

.main-container { 
  background: #FFF;
  padding-top: 15px;
  margin-top: -20px;
}

.footer {
  width: 100%;
}  

:focus {
  outline: none;
}

.side-menu {
  position: relative;
  width: 100%;
  height: 100%;
  background-color: #f8f8f8;
  border-right: 1px solid #e7e7e7;
}
.side-menu .navbar {
  border: none;
}
.side-menu .navbar-header {
  width: 100%;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav .active a {
  background-color: transparent;
  margin-right: -1px;
  border-right: 5px solid #e7e7e7;
}
.side-menu .navbar-nav li {
  display: block;
  width: 100%;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu .navbar-nav li a {
  padding: 15px;
}
.side-menu .navbar-nav li a .glyphicon {
  padding-right: 10px;
}
.side-menu #dropdown {
  border: 0;
  margin-bottom: 0;
  border-radius: 0;
  background-color: transparent;
  box-shadow: none;
}
.side-menu #dropdown .caret {
  float: right;
  margin: 9px 5px 0;
}
.side-menu #dropdown .indicator {
  float: right;
}
.side-menu #dropdown > a {
  border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body {
  padding: 0;
  background-color: #f3f3f3;
}
.side-menu #dropdown .panel-body .navbar-nav {
  width: 100%;
}
.side-menu #dropdown .panel-body .navbar-nav li {
  padding-left: 15px;
  border-bottom: 1px solid #e7e7e7;
}
.side-menu #dropdown .panel-body .navbar-nav li:last-child {
  border-bottom: none;
}
.side-menu #dropdown .panel-body .panel > a {
  margin-left: -20px;
  padding-left: 35px;
}
.side-menu #dropdown .panel-body .panel-body {
  margin-left: -15px;
}
.side-menu #dropdown .panel-body .panel-body li {
  padding-left: 30px;
}
.side-menu #dropdown .panel-body .panel-body li:last-child {
  border-bottom: 1px solid #e7e7e7;
}
.side-menu #search-trigger {
  background-color: #f3f3f3;
  border: 0;
  border-radius: 0;
  position: absolute;
  top: 0;
  right: 0;
  padding: 15px 18px;
}
.side-menu .brand-name-wrapper {
  min-height: 50px;
}
.side-menu .brand-name-wrapper .navbar-brand {
  display: block;
}
.side-menu #search {
  position: relative;
  z-index: 1000;
}
.side-menu #search .panel-body {
  padding: 0;
}
.side-menu #search .panel-body .navbar-form {
  padding: 0;
  padding-right: 50px;
  width: 100%;
  margin: 0;
  position: relative;
  border-top: 1px solid #e7e7e7;
}
.side-menu #search .panel-body .navbar-form .form-group {
  width: 100%;
  position: relative;
}
.side-menu #search .panel-body .navbar-form input {
  border: 0;
  border-radius: 0;
  box-shadow: none;
  width: 100%;
  height: 50px;
}
.side-menu #search .panel-body .navbar-form .btn {
  position: absolute;
  right: 0;
  top: 0;
  border: 0;
  border-radius: 0;
  background-color: #f3f3f3;
  padding: 15px 18px;
}
/* Main body section */
.side-body {
  margin-left: 310px;
}
/* small screen */
@media (max-width: 768px) {
  .side-menu {
    position: relative;
    width: 100%;
    height: 0;
    border-right: 0;
  }

  .side-menu .navbar {
    z-index: 999;
    position: relative;
    height: 0;
    min-height: 0;
    background-color:none !important;
    border-color: none !important;
  }
  .side-menu .brand-name-wrapper .navbar-brand {
    display: inline-block;
  }
  /* Slide in animation */
  @-moz-keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @-webkit-keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @keyframes slidein {
    0% {
      left: -300px;
    }
    100% {
      left: 10px;
    }
  }
  @-moz-keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  @-webkit-keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  @keyframes slideout {
    0% {
      left: 0;
    }
    100% {
      left: -300px;
    }
  }
  /* Slide side menu*/
  /* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
  .side-menu-container > .navbar-nav.slide-in {
    -moz-animation: slidein 300ms forwards;
    -o-animation: slidein 300ms forwards;
    -webkit-animation: slidein 300ms forwards;
    animation: slidein 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  .side-menu-container > .navbar-nav {
    /* Add position:absolute for scrollable menu -> see top comment */
    position: fixed;
    left: -300px;
    width: 300px;
    top: 43px;
    height: 100%;
    border-right: 1px solid #e7e7e7;
    background-color: #f8f8f8;
    overflow: auto;
    -moz-animation: slideout 300ms forwards;
    -o-animation: slideout 300ms forwards;
    -webkit-animation: slideout 300ms forwards;
    animation: slideout 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  @-moz-keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @-webkit-keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @keyframes bodyslidein {
    0% {
      left: 0;
    }
    100% {
      left: 300px;
    }
  }
  @-moz-keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  @-webkit-keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  @keyframes bodyslideout {
    0% {
      left: 300px;
    }
    100% {
      left: 0;
    }
  }
  /* Slide side body*/
  .side-body {
    margin-left: 5px;
    margin-top: 70px;
    position: relative;
    -moz-animation: bodyslideout 300ms forwards;
    -o-animation: bodyslideout 300ms forwards;
    -webkit-animation: bodyslideout 300ms forwards;
    animation: bodyslideout 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  .body-slide-in {
    -moz-animation: bodyslidein 300ms forwards;
    -o-animation: bodyslidein 300ms forwards;
    -webkit-animation: bodyslidein 300ms forwards;
    animation: bodyslidein 300ms forwards;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
  }
  /* Hamburger */
  .navbar-toggle-sidebar {
    border: 0;
    float: left;
    padding: 18px;
    margin: 0;
    border-radius: 0;
    background-color: #f3f3f3;
  }
  /* Search */
  #search .panel-body .navbar-form {
    border-bottom: 0;
  }
  #search .panel-body .navbar-form .form-group {
    margin: 0;
  }
  .side-menu .navbar-header {
    /* this is probably redundant */
    position: fixed;
    z-index: 3;
    background-color: #f8f8f8;
  }
  /* Dropdown tweek */
  #dropdown .panel-body .navbar-nav {
    margin: 0;
  }
}
    </style>
    <script type="text/javascript">
      $(function () {
    $('.navbar-toggle-sidebar').click(function () {
      $('.navbar-nav').toggleClass('slide-in');
      $('.side-body').toggleClass('body-slide-in');
      $('#search').removeClass('in').addClass('collapse').slideUp(200);
    });

    $('#search-trigger').click(function () {
      $('.navbar-nav').removeClass('slide-in');
      $('.side-body').removeClass('body-slide-in');
      $('.search-input').focus();
    });
  });
    </script>