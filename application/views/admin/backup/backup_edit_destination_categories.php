<div class="wrapper">
  <nav>
    <header>
      <span></span>
      Admin
      <a></a>
    </header>

    <ul>
      <li><span>Navigation</span></li>
      <li><a href="<?php echo base_url().'admin/events'?>" >Events</a></li>
      <li><a href="<?php echo base_url().'admin/slides'?>" >Slides</a></li>
      <li><a href="<?php echo base_url().'admin/news'?>">News</a></li>
      <li><a href="<?php echo base_url().'admin/partners'?>">Partners</a></li>
      <li><a href="<?php echo base_url().'admin/galleries'?>">Galleries</a></li>
      <li><a href="<?php echo base_url().'admin/photos_gallery'?>">Photos-gallery</a></li>
      <li><a href="<?php echo base_url().'admin/destination_categories'?>" class="active">Destination-categories</a></li>
      <li><a href="<?php echo base_url().'admin/destinations'?>">Destinations</a></li>
      <li><a href="<?php echo base_url().'admin/creative_economies'?>">Creative-economies</a></li>
      <li><a href="<?php echo base_url().'admin/creative_economies_categories'?>">Creative-economies-categories</a></li><li><a href="<?php echo base_url().'admin/profile'?>">Profile</a></li>
      <li><a href="<?php echo base_url().'login/logout'?>">Logout</a></li>
    </ul>

  </nav>

  <main>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin destination_categories</title>
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
        <h2 style="margin-top: 0;">Data destination_categories</h2>
    </div>


    <div id="view" style="margin: 10px 20px;">
    <div class="table-responsive">
      <form class="form-signin" action="<?php echo base_url().'Admin/put_destination_categories/'.$data->id ?>" method="post"  enctype="multipart/form-data">
            <table>

  <table class="table table-bordered">
    <tr>
      <th>TITLE</th>
      <th>ORDER</th>
      <th>PICTURE</th>
    </tr>

      <tr>
        
                    <!-- Membuat sebuah textbox text yang akan digunakan untuk form ubah -->
              <td><input type="text" name="title" required class="title-value" value="<?php echo $data->title; ?>">
                <td><input type="text" name="order" required class="title-value" value="<?php echo $data->order; ?>">
              
              </td><td><img src="<?=base_url().'images/destination_categories/'.$data->icon; ?>" height="200">
              <input class="picture-value" type="file" id="picture" name="picture"  accept="image/*">
                <input type="hidden" name="temp_picture" value="<?php echo $data->icon ?>">
                <td><input type="hidden" name="updated_at" required class="title-value" value="<?php echo $data->updated_at; ?>">
              <td><input type="hidden" name="created_at" required class="title-value" value="<?php echo $data->created_at; ?>">
              
        </td>
      </tr>

   </table>  <input style="background-color: #e44c65 " type="submit" class="btn btn-primary" value=" &nbsp Ubah &nbsp"></form>
      </div></div></body>
</html>




  </main>

</div>



<style type="text/css">
@import "compass/css3";

@import url('https://fonts.googleapis.com/css?family=Open+Sans');
@import url('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');

$color: #404040;
$color-d: darken($color, 5%);
$color-l: lighten($color, 7.5%);

*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

*:before {
  content: '';
  display: block;
  /*position: absolute;*/
}

*:after {
  content: '';
  display: block;
  position: absolute;
}

html, body {
  height: 100%;
}

body {
  font: 15px/1 'Open Sans', sans-serif;
  color: #777;
}

a {
  cursor: pointer;
}

ul {
  list-style: none;
}

.wrapper {
  display: flex;
  min-height: 100%;
}

nav {
  width: 200px;
  background-color: rgba(0,0,0,0.9);
}

nav header {
  position: relative;
  height: 80px;
  padding: 20px 0 0 15px;
  font-size: 16px;
  color: #fff;
  background: rgba(0,0,0,1);
}

nav header span {
  position: relative;
  display: inline-block;
  width: 36px;
  height: 36px;
  margin: 0 10px 0 0;
  vertical-align: middle;
  border: 1px solid #fff;
}

nav header span:before {
  content: '\f007';
  font: normal 20px fontawesome;
  top: 7px;
  left: 9px;
}

nav header a:before {
  content: '\f08b';
  font: normal 20px fontawesome;
  top: 28px;
  right: 15px;
}

nav ul span {
  display: block;
  padding: 15px;
  color: rgba(255,255,255,0.5);
  text-transform: uppercase;
  border-bottom: 1px solid $color-d;
}

nav ul a {
  position: relative;
  display: block;
  padding: 15px 15px 17px 10px;
  color: #fff;
  border-bottom: 1px solid $color-d;
}

nav ul a:hover,
nav ul a.active {
  background: rgba(0,0,0,0.9);
}

nav ul a:before {
  font: normal 16px fontawesome;
  top: 15px;
  left: 18px;
}


main {
  flex: 1;
  padding: 25px;
  background: #f5f5f5;
}

main h1 {
  height: 80px;
  margin: -25px -25px 25px -25px;
  padding: 0 25px;
  line-height: 76px;
  font-size: 24px;
  font-weight: 400;
  background: #ddd;
}

.flex-grid {
  display: flex;
}

.flex-grid > div {
  flex: 1;
  margin: 0 20px 20px 0;
  padding: 15px;
  border: 1px solid #ddd;
  background: #fff;
}

.flex-grid > div:last-child {
  margin-right: 0;
}

.flex-grid h2 {
  margin: -15px -15px 15px -15px;
  padding: 12px 15px;
  font-size: 14px;
  font-weight: 400;
  border-bottom: 1px solid #ddd;
}

.flex-grid li {
  position: relative;
  margin: 0 0 10px;
  padding: 0 0 0 25px;
}

.flex-grid li:before {
  content: '\f00c';
  font: normal 16px fontawesome;
  top: 0;
  left: 0;
  color: #999;
}

/*
** Media Queries
***********************************************************/

@media (max-width: 1000px) { 

  .flex-grid {
    flex-direction: column;
  }

  .flex-grid > div {
    margin-right: 0;
  }

} 
</style>