<?php
defined('BASEPATH') OR exit('No direct script access allowed');


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STARCOMP ADMIN</title>
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
                <a class="navbar-brand" href="<?php echo site_url('Dashboard')?>">STARCOMP ADMIN</a> 
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
                        <a class="active-menu"  href="<?php echo site_url('Dashboard')?>"> Dashboard</a>
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
        <!-- CONTENTS -->
        <!-- ISI CONTENT MULAI DI SINI -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>SELAMAT DATANG, ADMIN</h2>   
                        <h5>
                        Halaman Dashboard memunculkan berbagai macam data-data pembelian hingga pelanggan
                        tanpa pengubahan data apapun.
                    </h5>

                    <!-- TABEL PRODUK -->
                    <div class="panel-heading">
                             <b>Daftar Produk Pelanggan Star Computer</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Produk</th>
                                            <th>Nama Produk</th>
                                            <th>ID Kategori</th>
                                            <th>Nama Kategori</th>
                                            <th>Merk</th>
                                            <th>Stok Produk</th>
                                            <th>Harga Produk</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeU">
                                            <?php 
                                            $no = 1;
                                            foreach ($produk as $produk) {
                                                //penangan error
                                                if (!$produk) {
                                                   $error = $this->load->view('errors/blank');
                                                }
                                            ?>
                                            <td><?php echo $no ;?></td>
                                            <td><?php echo $produk->id_produk?></td>
                                            <td><?php echo $produk->nm_produk; ?></td>
                                            <td><?php echo $produk->id_kategori;?></td>
                                            <td><?php echo $produk->nm_kategori;?></td>
                                            <td><?php echo $produk->merk;?></td>
                                            <td><?php echo $produk->stok_produk;?></td>
                                            <td><?php echo "Rp.".$produk->hrg_produk;?></td>
                                            <td><b>
                                                <?php
                                                    if ($produk->stok_produk == 0) {
                                                        echo "HABIS";
                                                    } else {
                                                        echo "MASIH TERSEDIA";
                                                    }
                                                ?>
                                            </b></td>
                                        </tr>
                                        <?php $no++; }?>

                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>

                     <div class="panel panel-default">
                        <div class="panel-heading">
                             <b>Daftar Pengguna STARCOMP Store & Repair</b>
                        </div>
                    <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID User</th>
                                            <th>Nama depan</th>
                                            <th>Nama belakang</th>
                                            <th>Kota lahir</th>
                                            <th>Tgl Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Nomor telepon</th>
                                            <th>E-mail</th>
                                            <th>Username</th>
                                            <th>Hak akses</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeU">
                                            <?php
                                            $no = 1;
                                            foreach ($user as $user) {
                                            ?>
                                           <td><?php echo $no;?></td>
                                           <td><?php echo $user->id_user; ?></td>
                                           <td><?php echo $user->nama_depan; ?></td>
                                           <td><?php echo $user->nama_belakang; ?></td>
                                           <td><?php echo $user->kota_lahir; ?></td>
                                           <td><?php echo $user->tgl_lahir; ?></td>
                                           <td><?php echo $user->jns_kelamin; ?></td>
                                           <td><?php echo $user->no_telp; ?></td>
                                           <td><?php echo $user->email; ?></td>
                                           <td><?php echo $user->username; ?></td>
                                           <td><?php echo $user->hak_akses; ?><td>
                                        <?php $no++; }?>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>

                     <div class="panel panel-default">
                        <div class="panel-heading">
                             <b>Daftar Keluhan Kerusakan Komputer Pelanggan</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ID Kerusakan</th>
                                            <th>Topik Kerusakan</th>
                                            <th>ID User</th>
                                            <th>Username</th>
                                            <th>Tgl Konsultasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeU">
                                            <?php 
                                                $no = 1;
                                                foreach ($kerusakan as $kerusakan) {
                                            ?>
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $kerusakan->id_kerusakan; ?></td>
                                            <td><?php echo $kerusakan->topik_kerusakan; ?></td>
                                            <td><?php echo $kerusakan->id_user; ?></td>
                                            <td><?php echo $kerusakan->username; ?></td>
                                            <td><?php echo $kerusakan->tgl_konsul?></td>
                                        </tr>
                                        <?php 
                                        $no++;
                                    }
                                        ?>

                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>



                    <!--END OF DASHBOARD MAIN PART -->
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
