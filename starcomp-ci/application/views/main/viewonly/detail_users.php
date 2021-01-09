<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo form_open(site_url('Users/detail/'.$user->id_user));
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STARCOMP ADMIN : DETAIL PELANGGAN</title>
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
font-size: 16px;"> Last access : <?php echo date("F j, Y, g:i a");?> &nbsp; <a href="<?php echo site_url('Login/logout');?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?php echo base_url('assets/img/find_user.png')?>" class="user-image img-responsive"/>
                    </li>
                
                    <li>
                        <a  href="<?php echo site_url('Dashboard')?>"> Dashboard</a>
                    </li>
                     <li>
                        <a  href="<?php echo site_url('Kerusakan')?>"></i> Kerusakan</a>
                    </li>
                    <li>
                        <a  href="<?php echo site_url('Users')?>">Pelanggan </a>
                    </li>
                           <li>
                        <a   href="<?php echo site_url('Pembayaran')?>">Pembayaran</a>
                    </li>   
                      <li  >
                        <a  href="<?php echo site_url('Pemesanan')?>">Pemesanan</a>
                    </li>
                    <li  >
                        <a  href="<?php echo site_url('Produk')?>"> Produk </a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('Perbaikan')?>">Perbaikan</a>
                    </li>                                     
                    
                                       
                     <li>
                        <a href="#">Edit Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Edit Produk</a>
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
                                <a href="<?php echo site_url('Produk/tambah_produk');?>">Tambah Produk</a>
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
                     <h2>Detail pelanggan <?php echo $user->id_user; ?></h2>   
                        <h5>Memunculkan detail pelanggan aplikasi STARCOMP Store & Repair</h5>
                       
                    </div>
                </div>
          <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <form>
                    <div class="form-group">
                        <label for="id_user">ID User : </label>
                        <input type="id_user" class="form-control" id="id_user" placeholder="ID User" disabled value="<?php echo $user->id_user; ?>">
                    </div>

                <div class="form-group">
                        <label for="nm_produk">Nama Depan : </label>
                        <input type="nm_depan" class="form-control" id="nm_depan" placeholder="Nama depan" value="<?php echo $user->nama_depan; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nm_belakang">Nama belakang :</label>
                        <input type="nm_belakang" class="form-control" id="nm_belakang" placeholder="Nama belakang" value="<?php echo $user->nama_belakang; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="kota_lahir">Kota lahir :</label>
                        <input type="kota_lahir" class="form-control" id="kota_lahir" placeholder="Kota lahir" value="<?php echo $user->kota_lahir; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal lahir :</label>
                        <input readonly type="date" class="form-control" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $user->tgl_lahir; ?>">
                    </div>

                     <div class="form-group">
                        <label for="jns_kelamin">Jenis kelamin :</label>
                        <input readonly type="jns_kelamin" class="form-control" id="jns_kelamin" placeholder="Jenis Kelamin" value="<?php echo $user->jns_kelamin; ?>">
                    </div>

                     <div class="form-group">
                        <label for="no_telp">Nomor telepon : </label>
                        <input readonly type="no_telp" class="form-control" id="no_telp" placeholder="Nomor Telepon" value="<?php echo $user->no_telp; ?>">
                    </div>


                <div class="form-group">
                        <label for="email">Alamat email : </label>
                        <input type="email" class="form-control" id="email" placeholder="alamat email" value="<?php echo $user->email; ?>" readonly>
                    </div>


                <div class="form-group">
                        <label for="username">Username : </label>
                        <input type="username" class="form-control" id="username" placeholder="Username" value="<?php echo $user->username; ?>" readonly>
                    </div>


                <div class="form-group">
                        <label for="password">Password : </label>
                        <input type="password" class="form-control" id="password" placeholder="password" value="<?php echo $user->password; ?>" readonly>
                    </div>


                    <div class="form-group">
                        <label for="foto_profil">Foto Profil :</label><br />
                    <img src="<?php echo base_url('assets/img/users/'.$user->namafile.'');?>">
                    </div>

                     <div class="form-group">
                        <label for="hak_akses">Hak Akses :</label>
                        <input type="hak_akses" class="form-control" id="hak_akses" placeholder="Hak Akses" value="<?php echo $user->hak_akses; ?>" readonly>
                    </div>

                    <a href="<?php echo site_url('Users') ;?>" class="btn btn-primary">Kembali ke halaman Pelanggan</a>
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
