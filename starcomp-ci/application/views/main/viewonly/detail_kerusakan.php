<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STARCOMP ADMIN : DETAIL KERUSAKAN</title>
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
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="<?php echo site_url('Welcome/index')?>">STARCOMP ADMIN</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : <?php echo date("F j, Y, g:i a");?> &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?php echo base_url('assets/img/find_user.png')?>" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a href="<?php echo site_url('Welcome/index')?>">Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Welcome/kerusakan')?>">Kerusakan</a>
                    </li>
                    <li>
                        <a  href="<?php echo site_url('Welcome/users')?>">Pelanggan </a>
                    </li>
                           <li  >
                        <a   href="<?php echo site_url('Welcome/pembayaran')?>"> Pembayaran</a>
                    </li>   
                      <li  >
                        <a  href="<?php echo site_url('Welcome/pemesanan')?>">Pemesanan</a>
                    </li>
                    <li  >
                        <a  href="<?php echo site_url('Welcome/produk')?>">Produk </a>
                    </li>

                    <li>
                      <a href="<?php echo site_url('Welcome/perbaikan')?>">Perbaikan</a>
                    </li>                                  
                    
                                       
                     <li>
                        <a href="#">Edit Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('Welcome/ganti_produk');?>">Edit Produk</a>
                            </li>
                           <!-- <li>
                                <a href="#">Second Level Link</a>
                            </li>
                        -->
                           <!-- <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        -->
                        </ul>
                      </li>  
                       <li>
                        <a href="#">Tambah Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('Welcome/tambah_produk');?>">Tambah Produk</a>
                            </li>
                        </ul>
                  <li  >
                        <a  href="<?php echo site_url('Welcome/blank')?>">Blank Page</a>
                    </li>   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <!-- ISI CONTENT MULAI DI SINI-->
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Detail kerusakan</h2>   
                        <h5>Memunculkan detail keluhan kerusakan komputer pelanggan STARCOMP Store & Repair</h5>
                       
                    </div>
                </div>
          <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <form>
                    <div class="form-group">
                        <label for="id_kerusakan">ID Kerusakan : </label>
                        <input type="id_kerusakan" class="form-control" id="id_kerusakan" placeholder="ID Kerusakan" disabled>
                    </div>

                <div class="form-group">
                        <label for="topik_kerusakan">Topik Kerusakan : </label>
                        <input type="topik_kerusakan" class="form-control" id="topik_kerusakan" placeholder="Topik Kerusakan">
                    </div>

                    <div class="form-group">
                        <label for="tgl_konsul">Tanggal konsultasi :</label>
                        <input type="date" class="form-control" id="tgl_konsul" placeholder="Tanggal konsultasi" readonly>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="username" class="form-control" id="username" placeholder="username">
                    </div>

                    <div class="form-group">
                        <label for="gmbr">Gambar kerusakan</label>
                    <input id="gmbr" name="gmbr" multiple="" type="file" /> 
                    </div>

                     <div class="form-group">
                        <label for="deskripsi_kerusakan">Deskripsi kerusakan : </label>
                        <textarea class="form-control" id="deskripsi_kerusakan" placeholder="Deskripsi kerusakan" rows="3"></textarea>
                    </div>
                </form>

                </div>
            </div>

                <!-- /. ROW  -->
                
                <!-- /. ROW  -->
        </div>
               
    </div>
        
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
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
