<?php
defined('BASEPATH') OR exit('No direct script access allowed');

echo form_open(site_url('Users/detail/'.$produk->id_produk));
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STARCOMP ADMIN : DETAIL PRODUK</title>
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
                        <a  href="<?php echo site_url('Dashboard')?>"> Dashboard</a>
                    </li>
                     <li>
                        <a  href="<?php echo site_url('Kerusakan')?>"></i> Kerusakan</a>
                    </li>
                    <li>
                        <a  href="<?php echo site_url('Users')?>">Pelanggan </a>
                    </li>
                           <li  >
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
                     <h2>Detail produk <?php echo $produk->nm_produk; ?></h2>   
                        <h5>Memunculkan detail produk dari ID <?php echo $produk->id_produk; ?></h5>
                       
                    </div>
                </div>
          <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <form>
                    <div class="form-group">
                        <label for="id_produk">ID Produk : </label>
                        <input readonly type="id_produk" class="form-control" id="id_produk" placeholder="ID produk" value="<?php echo $produk->id_produk; ?>">
                    </div>

                <div class="form-group">
                        <label for="nm_produk">Nama Produk : </label>
                        <input type="nm_produk" class="form-control" id="nm_produk" placeholder="Nama produk" value="<?php echo $produk->nm_produk; ?>">
                    </div>

                    <div class="form-group">
                        <label for="id_kategori">ID Kategori :</label>
                        <input type="id_kategori" class="form-control" id="id_kategori" placeholder="model" value="<?php echo $produk->id_kategori; ?>">
                    </div>

                    <div class="form-group">
                        <label for="nm_kategori">Nama Kategori :</label>
                        <input type="nm_kategori" class="form-control" id="nm_kategori" placeholder="Nama kategori" value="<?php echo $produk->nm_kategori; ?>">
                    </div>

                    <div class="form-group">
                        <label for="merk">Merk :</label>
                        <input type="merk" class="form-control" id="merk" placeholder="Merk" value="<?php echo $produk->merk; ?>">
                    </div>

                     <div class="form-group">
                        <label for="stok_produk">Stok Produk :</label>
                        <input type="stok_produk" class="form-control" id="stok_produk" placeholder="Stok produk" value="<?php echo $produk->stok_produk; ?>">
                    </div>

                     <div class="form-group">
                        <label for="hrg_produk">Harga Produk : </label>
                        <input type="hrg_produk" class="form-control" id="hrg_produk" placeholder="Harga produk" value="<?php echo "Rp.".$produk->hrg_produk; ?>">
                    </div>


                    <div class="form-group">
                        <label for="gambar">Gambar:</label>
                        <br>
                    <img src="<?php echo base_url('assets/img/produk/'.$produk->namafileproduk.'');?>" height="500px" width="700px" />
                    </div>

                     <div class="form-group">
                        <label for="deskripsi">Deskripsi :</label>
                        <textarea id="deskripsi" class="form-control" placeholder="Deskripsi" readonly>
                            <?php echo $produk->deskripsi; ?>
                        </textarea>
                    </div>
                    <a class="btn btn-primary" href="<?php echo site_url('Produk');?>">Kembali ke halaman Produk</a>
                    <a href="<?php echo site_url('produk/ganti_produk/'.$produk->id_produk)?>" class="btn btn-warning">Edit produk</a> 

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
