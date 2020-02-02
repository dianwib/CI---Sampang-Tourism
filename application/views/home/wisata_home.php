<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans);
@import url(https://fonts.googleapis.com/css?family=Montserrat:700);
h1 {
  text-align: center;
  font-family: Montserrat,sans-serif;
  color: #333;
}

.accordion {
  width: 100%;
  max-width: 1080px;
  height: 250px;
  overflow: hidden;
  margin: 0px auto;
}
.accordion ul {
  width: 100%;
  display: table;
  table-layout: fixed;
  margin: 0;
  padding: 0;
}
.accordion ul li {
  display: table-cell;
  vertical-align: bottom;
  position: relative;
  width: 16.666%;
  height: 250px;
  background-repeat: no-repeat;
  background-position: center center;
  transition: all 500ms ease;
}
.accordion ul li div {
  display: block;
  overflow: hidden;
  width: 100%;
}
.accordion ul li div span {
  display: block;
  width: 100%;
  height: 250px;
  overflow: hidden;
  position: absolute;
}
.accordion ul li div a {
  display: block;
  height: 250px;
  width: 100%;
  position: relative;
  z-index: 3;
  vertical-align: bottom;
  padding: 15px 20px;
  box-sizing: border-box;
  color: #fff;
  text-decoration: none;
  font-family: Open Sans, sans-serif;
  transition: all 200ms ease;
}
.accordion ul li div a * {
  opacity: 0;
  margin: 0;
  width: 100%;
  text-overflow: ellipsis;
  position: relative;
  z-index: 5;
  white-space: nowrap;
  overflow: hidden;
  -webkit-transform: translateX(-20px);
  transform: translateX(-20px);
  -webkit-transition: all 400ms ease;
  transition: all 400ms ease;
}
.accordion ul li div a h2 {
  font-family: Montserrat,sans-serif;
  text-overflow: clip;
  font-size: 24px;
  text-transform: uppercase;
  margin-bottom: 2px;
  top: 160px;
}
.accordion ul li div a p {
  top: 160px;
  font-size: 13.5px;
}
.accordion ul:hover li {
  width: 10%;
}
.accordion ul:hover li:hover {
  width: 60%;
}
.accordion ul:hover li:hover a {
  background: rgba(0, 0, 0, 0.3);
}
.accordion ul:hover li:hover a * {
  opacity: 1;
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

@media screen and (max-width: 600px) {
  body {
    margin: 0;
  }

  .accordion {
    height: auto;
  }
  .accordion ul li, .accordion ul li:hover, .accordion ul:hover li, .accordion ul:hover li:hover {
    position: relative;
    display: table;
    table-layout: fixed;
    width: 100%;
    -webkit-transition: none;
    transition: none;
  }
  .accordion ul li div, .accordion ul li span, .accordion ul li:hover div, .accordion ul li:hover span, .accordion ul:hover li div, .accordion ul:hover li span, .accordion ul:hover li:hover div, .accordion ul:hover li:hover span {
    display: table-cell;
    width: 100%;
    vertical-align: bottom;
  }
}
.about {
  text-align: center;
  font-family: 'Open Sans', sans-serif;
  font-size: 12px;
  color: #666;
}
.about a {
  color: blue;
  text-decoration: none;
}
.about a:hover {
  text-decoration: underline;
}
</style>
<div class="accordion">
  <ul>
    
<?php
               for ($h = 0; $h < count($data_destinations); $h++){
?>



    <li>
      <div>
        <span>
          
              <img style="max-width: none; box-shadow: 4px 2px 20px 1px rgba(15, 76, 117, 0.35) " src=<?php echo $base_url.'/upload/destinations/'.$data_destinations[$h]['photo']?>>
        </span>
        <a href="<?php echo base_url(). 'destinasi/detil/'.$data_destinations[$h]['id']?>">
          <h2 style="text-transform: capitalize;font-family: 'Lobster',cursive;"><?php echo $data_destinations[$h]['title']?></h2>
          <!-- <p><?php echo $data_destinations[$h]['address']?></p> -->
        </a>
      </div>
    </li>
 
<?
}
?>   
  </ul>
</div>
