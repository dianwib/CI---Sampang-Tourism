<!DOCTYPE html>
<html>
  <head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'css/bootstrap.min.css'?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?php echo base_url().'login/auth'?>" method="post">
            <h2 class="form-signin-heading">Please Log in</h2>
            <br><br>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
            </div>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
          </form>
        </div>
        </div> <!-- /container -->
 
 
  </body>
</html>