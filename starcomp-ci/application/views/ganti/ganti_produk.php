<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STARCOMP ADMIN : GANTI PRODUK</title>
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
               <a class="navbar-brand" href="<?php echo site_url('Dashboard/')?>">STARCOMP ADMIN</a> 
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
                        <a href="<?php echo site_url('Dashboard')?>"> Dashboard</a>
                    </li>
                     <li>
                        <a  href="<?php echo site_url('kerusakan')?>"></i> Kerusakan</a>
                    </li>
                    <li>
                        <a  href="<?php echo site_url('users')?>">Pelanggan </a>
                    </li>
                           <li  >
                        <a   href="<?php echo site_url('pembayaran')?>">Pembayaran</a>
                    </li>   
                      <li  >
                        <a  href="<?php echo site_url('pemesanan')?>">Pemesanan</a>
                    </li>
                    <li  >
                        <a  href="<?php echo site_url('produk')?>"> Produk </a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('perbaikan')?>">Perbaikan</a>
                    </li>                                 
                    
                                       
                   <li>
                        <a class="active-menu" href="#">Edit Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active-menu" href="<?php echo site_url('Produk/ganti_produk');?>">Edit Produk</a>
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
                     <h2>Edit produk</h2>   
                        <h5>Mengganti data produk STARCOMP Store</h5>
                       
                    </div>
                </div>
          <!-- /. ROW  -->
                 <hr />

            <div class="row">
                <div class="col-md-12">
                    <?php
                echo form_open_multipart(site_url('produk/ganti_action/'. $produk->id_produk));
               ?>
                    <div class="form-group">
                        <label for="id_produk">ID Produk : </label>
                        <input type="text" class="form-control" name="id_produk" id="id_produk" placeholder="ID produk" value="<?php echo $produk->id_produk; ?>" readonly>
                    </div>

                <div class="form-group">
                        <label for="nm_produk">Nama Produk : </label>
                        <input type="text" class="form-control" id="nm_produk" name="nm_produk" placeholder="Nama produk" value="<?php echo $produk->nm_produk; ?>" maxlength="50" required>
                    </div>

                    <div class="form-group">
                        <label for="id_kategori">ID Kategori :</label>
                        <input type="text" class="form-control" id="id_kategori" name="id_kategori" placeholder="model" value="<?php echo $produk->id_kategori; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nm_kategori">Nama Kategori :</label>
                        <input type="text" class="form-control" id="nm_kategori" name="nm_kategori" placeholder="Nama kategori" value="<?php echo $produk->nm_kategori; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="merk">Merk :</label>
                        <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk" value="<?php echo $produk->merk; ?>" maxlength="20" required>
                    </div>

                     <div class="form-group">
                        <label for="stok_produk">Stok Produk :</label>
                        <input type="text" class="form-control" id="stok_produk" name="stok_produk" placeholder="Stok produk" value="<?php echo $produk->stok_produk; ?>" maxlength="3" required>
                    </div>

                     <div class="form-group">
                        <label for="hrg_produk">Harga Produk : </label>
                        <input type="text" class="form-control" id="hrg_produk" name="hrg_produk" placeholder="Harga produk" value="<?php echo $produk->hrg_produk; ?>" maxlength="7" required>
                    </div>


                    <div class="form-group">
                            <p> Gambar sebelumnya : </p>
                            <img src="<?php echo base_url('assets/img/produk/'.$produk->namafileproduk.'');?>" height="100px" width="100px" />
                            <br />
                            <br />
                        <label for="ganti-gambar">Ganti gambar :</label>
                        <input id="namafileproduk" name="namafileproduk" type="file" accept="image/jpeg, image/jpg, image/png" />
                    </div>

                     <div class="form-group">
                        <label for="deskripsi">Deskripsi :</label>
                       <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="<?php echo $produk->deskripsi; ?>" rows="7" maxlength="265" required><?php echo $produk->deskripsi; ?></textarea>
                    </div>

                   <button type="submit" class="btn-primary">Simpan perubahan</button>
                    <a class="btn btn-warning" href="#">Hapus Semua</a>
                <?php echo form_close(); ?>
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