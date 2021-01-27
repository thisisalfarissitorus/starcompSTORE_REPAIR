<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>STARCOMP Repair</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/bootstrap.min.css');?>">
      <!-- style css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/style.css');?>">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/responsive.css');?>">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url('assets/sock_bs/images/fevicon.png');?>" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/jquery.mCustomScrollbar.min.css');?>">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/font-awesome.css');?>">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/owl.carousel.min.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/css/owl.theme.default.min.css');?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/sock_bs/js/jquery.fancybox.min.css');?>" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
      <body class="main-layout">
      <!-- loader  -->
      
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo base_url('assets/sock_bs/images/loading.gif');?>" alt="#" /></div>
      </div>


<?php
      include('application/views/store/sidebar/index.php');
    ?>


      <header class="section">
         <!-- header inner -->
         <div class="header bg-primary">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="<?php echo base_url('assets/sock_bs/images/STARCOMP22.png');?>" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li> <a href="<?php echo site_url('store/Store_main')?>">Home</a> </li>
                                 <li><a href="<?php echo site_url('store/Store_produk/')?>">Produk</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <br><br><br>

      <div class="clothes_main section ">
          <div class="container-fluid jumbotron bg-warning">
            <h1 align="center" style="color: white;">STARCOMP REPAIR</h1>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="sport_product">
                     <figure><img src="<?php echo base_url('assets/img/kerusakan/ASUS1215P LCD.jpg');?>" alt="img"/></figure>
                  </div>
                </div>


                <!-- CONTENT OF DETAILS -->
            <div class="Repair">
                <div class="form-group">
                  <label for="Topik Kerusakan"><b style="color: white;">Topik Kerusakan : </b></label><br>
                        <input type="text" name="topik_kerusakan" placeholder="topik kerusakan">
                  </div>
                  
                  <div class="form-group">
                        <label for="tgl_konsul"><b style="color: white;">Tgl Konsultasi :</b></label><br>
                        <input type="date" name="tgl_konsul">
                  </div>
                  <div class="form-group">
                     <label for="gambar"><b style="color: white;">gambar kerusakan :</b></label><br>
                     <input type="file" name="gambar">
                  </div>

                  <div class="form-group">
                        <label for="deskripsi"><b style="color: white;">Deskripsi : </b></label><br>
                        <textarea name="dskrps_kerusakan" rows="3" required></textarea>                     
                  </div>


                  <a href="<?php echo base_url('assets/tandaterima.pdf');?>" class="btn btn-dark">Buat tanda Terima</a>
                  <a href="<?php echo site_url('store/Store_main/')?>" class="btn btn-danger">Kembali</a>


             </div>
           </div>                  
         </div>
       </div>
      </div>

      <div id="footer" class="Address layout_padding">
       <div class="container">
          <div class="row">
             <div class="col-sm-12">
               <div class="titlepage">
                  <div class="main">
                     <h1 class="address_text">Alamat</h1>
                  </div>
               </div>
             </div>
          </div>
               <div class="address_2">
                  <div class="row">
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="<?php echo base_url('assets/sock_bs/images/map-icon.png');?>" /></span>
                          <span style="margin-top: 10px;">Kec. Grati, Kab. Pasuruan, Provinsi Jawa Timur</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="<?php echo base_url('assets/sock_bs/images/phone-icon.png');?>" /></span>
                          <span style="margin-top: 21px;">+62 85336474484</span></div>
                     </div>
                     <div class="col-sm-12 col-md-12 col-lg-4">
                       <div class="site_info">
                          <span class="info_icon"><img src="<?php echo base_url('assets/sock_bs/images/email-icon.png');?>" /></span>
                          <span style="margin-top: 21px;">russely12alvarov@gmail.com</span></div>
                     </div>
                     </div> 
                  </div>
               </div>
       </div>
    </div>

      <!-- end Contact Us-->
      <!-- footer start-->
      <div id="plant" class="footer layout_padding">
         <div class="container">
            <p>© 2021 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
         </div>
      </div>
            

      <!-- Javascript files-->
      <script src="<?php echo base_url('assets/sock_bs/js/jquery.min.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/popper.min.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/bootstrap.bundle.min.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/jquery-3.0.0.min.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/plugin.js');?>"></script>
      <!-- sidebar -->
      <script src="<?php echo base_url('assets/sock_bs/js/jquery.mCustomScrollbar.concat.min.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/custom.js');?>"></script>
      <!-- javascript --> 
      <script src="<?php echo base_url('assets/sock_bs/js/owl.carousel.js');?>"></script>
      <script src="<?php echo base_url('assets/sock_bs/js/jquery.fancybox.min.js');?>"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 

   </body>
   </html>