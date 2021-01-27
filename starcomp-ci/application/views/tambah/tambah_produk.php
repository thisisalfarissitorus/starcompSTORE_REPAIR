<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STARCOMP ADMIN : TAMBAH PRODUK</title>
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
                        <a class="active-menu" href="#">Tambah Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="active-menu" href="<?php echo site_url('Produk/tambah_produk');?>">Tambah Produk</a>
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
                     <h2>Tambah produk</h2>   
                        <h5>Memunculkan halaman untuk menambah data produk STARCOMP Store</h5>
                       
                    </div>
                </div>
          <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
               <?php
                echo form_open_multipart(site_url('produk/tambah_action'));
               ?>
                    <div class="form-group">
                        <label for="id_produk">ID Produk : </label><br />
                        <input type="text" class="form-control" id="id_produk" name="id_produk" placeholder="ID produk" maxlength="10" 
                        value="<?php set_value('id_produk');?>" required>

                        ID Produk terakhir adalah : 
                        <?php
                        $result = $this->produk_model->lastid();
                        foreach ($result as $produk) {
                            echo $produk->id_produk;
                        }

                        ?>
                    </div>

                <div class="form-group">
                        <label for="nm_produk">Nama Produk : </label>
                        <input type="text" class="form-control" id="nm_produk" name="nm_produk" placeholder="Nama produk" maxlength="50"
                        value="<?php echo set_value('nm_produk');?>" required>
                    </div>

                    <div class="form-group">
                        <label for="id_kategori">ID Kategori :</label>
                        <input type="text" class="form-control" id="id_kategori" name="id_kategori" placeholder="ID Kategori" maxlength="7"
                        value="<?php echo set_value('id_kategori');?>" required>
                    </div>

                    <div class="form-group">
                        <label for="nm_kategori">Nama Kategori :</label>
                        <input type="text" class="form-control" id="nm_kategori" name="nm_kategori" placeholder="Nama kategori" maxlength="30"
                        value="<?php echo set_value('nm_kategori');?>" required>
                    </div>

                    <div class="form-group">
                        <label for="merk">Merk :</label>
                        <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk" maxlength="20"
                        value="<?php echo set_value('merk');?>" required>
                    </div>

                     <div class="form-group">
                        <label for="stok_produk">Stok Produk :</label>
                        <input type="text" class="form-control" id="stok_produk" name="stok_produk" placeholder="Stok produk" maxlength="3"
                        value="<?php echo set_value('stok_produk');?>"required>
                    </div>

                     <div class="form-group">
                        <label for="hrg_produk">Harga Produk : </label>
                        <input type="text" class="form-control" id="hrg_produk" name="hrg_produk" placeholder="Harga produk" maxlength="7"
                        value="<?php echo set_value('hrg_produk');?>" required>
                    </div>


                    <div class="form-group">
                        <label for="gambar">Gambar:</label>
                    <input id="gambar_produk" name="gambar_produk" type="file" accept="image/jpeg, image/jpg, image/x-png"  required/> 
                    </div>

                     <div class="form-group">
                        <label for="deskripsi">Deskripsi :</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi"  maxlength="265" rows="9"
                        value="<?php echo set_value('deskripsi');?>" required>
                        </textarea>
                    </div>

                    <button type="submit" class="btn-primary">Tambah produk</button>
                    <!--<a href="<?php //echo site_url('Produk/tambah_action')?>"class="btn btn-primary">Tambah produk</a> -->

                    <a href="<?php site_url('Produk/tambah_produk_refresh'); ?>" class="btn btn-danger">Batal dan Bersihkan</a>
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
