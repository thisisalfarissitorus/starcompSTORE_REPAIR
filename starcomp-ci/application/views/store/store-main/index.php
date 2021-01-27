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
      <title>STARCOMP STORE</title>
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
   <?php
   require_once 'application/views/store/sidebar/index.php';
?>

   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="<?php echo base_url('assets/sock_bs/images/loading.gif');?>" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="section">
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="<?php echo site_url('store/Store_main')?>"><img src="<?php echo base_url('assets/sock_bs/images/STARCOMP22.png');?>" alt="#"></a> </div>
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
      
      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Selamat Datang <strong class="color">di STARCOMP STORE</strong></h1>
                              <p>Disini menjual berbagai macam peralatan komputer, mulai dari Keyboard, Mouse, hingga peralatan alat tulis kantor seperti pencil dan lain-lain.</p>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="<?php echo base_url('assets/img/produk/VOTRE_KEYBOARD.jpeg');?>" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </section>
      <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black"> Produk-Produk</strong> Kami</h2>
                     <span>Produk-produk yang kami sediakan selalu restok dan kami membeli dari toko yang sangat terpercaya.</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="clothes_main section ">
          <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <?php 
                        foreach ($produk as $produk) {
                  ?>
                  <div class="sport_product" style="padding-right: 3px;">
                     <figure><img src="<?php echo base_url('assets/img/produk/'. $produk->namafileproduk);?>" alt="img" height="300" width="300"/></figure>
                    <h3> Rp<strong class="price_text"><?php echo $produk->hrg_produk; ?></strong></h3>
                     <h4><?php echo $produk->nm_produk; ?></h4>
                     <h5>Stok produk : <?php echo $produk->stok_produk;?></h5>
                     <a href="<?php echo site_url('store/Store_keranjang');?>" class="btn btn-primary" name="order" >Order now</a></i>
                     <a href="<?php echo site_url('store/Store_main/detail_produk/'.$produk->id_produk);?>" class="btn btn-danger">View detail</a>
                  </div>
               </div>
               <?php
            }
               ?>
   
            </div>
           </div>
      </div>
      <!-- end plant -->
      <!--about -->
      <div class="section about ">
         <div class="container">
             <div class="row">
                <div class="col-12">
                    <div class="titlepage">
                     <h2><strong class="black"> Tentang</strong>  STARCOMP</h2>
                     <span>STARCOMP adalah Perusahaan yang bergerak dalam penjualan produk peralatan komputer dan peralatan tulis kantor dan bergerak dalam jasa reparasi komputer, pengetikan, fotokopi, dan pencetakan dokumen.</span>
                  </div>
                </div>
             </div>
         </div>
      </div>




      <!-- end Our  Clients -->
      <!-- start Contact Us-->

      <div id="plant" class="contact_us layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                    <h2><strong class="black"> Hubungi</strong>  Kami</h2>
                     <span style="text-align: center;">Anda dapat menghubungi kami melalu nomor telepon, email atau dapat datang ke Toko Kami pada alamat di bawah ini</span>
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