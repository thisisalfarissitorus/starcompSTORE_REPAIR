<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo form_open(site_url('login'));
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Admin STARCOMP</title>
	<!-- BOOTSTRAP STYLES-->
   <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url('assets/js/morris/morris-0.4.3.min.css')?>" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body style="background: red;">
  <div class="jumbotron container"
  style="background-color: #940d06; 
  margin-top: 3em;
  border-color: white;
  border-style: ridge;
  ">
    <center>
      <img src="<?php echo base_url('assets/img/newmore.jpg')?>" width="700" height="200"/></center>
    <h1 style="text-align: center; color: white;">Login Admin STARCOMP</h1>
  <div class="row">
    <form>
        <div class="form-group">
              <input type="username" class="form-control" id="username" placeholder="username" autofocus maxlength="15" required>
        </div>

        <div class="form-group">

              <input type="password" class="form-control" id="password" placeholder="Password" maxlength="20" required>
            <p style="color: white; text-transform: lowercase;">
              <input type="checkbox" onclick="showPassword()">Tampilkan Password
            </p>
            <script type="text/javascript">
              //script untuk menampilkan password
              function showPassword() {
                var x = document.getElementById("password");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                  x.type = "password";
                }
              }
            </script>

        </div>
        <center>
        <a class="btn btn-primary" href="<?php echo site_url('login/login_action');?>"><b>Log In</b></a>
        <a class="btn btn-warning" href="<?php echo site_url('login/refresh');?>"><b>Reset halaman</b></a>
      </center>
  </form>
  </div>
  <?php echo form_close(); ?>
</div>

      <script src="<?php echo base_url('assets/js/jquery-1.10.2.js')?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/js/jquery.metisMenu.js')?>"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url('assets/js/morris/raphael-2.1.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/morris/morris.js')?>"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>
    
   
</body>
</html>
