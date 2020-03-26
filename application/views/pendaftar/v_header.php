<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Pendaftaran Siswa Baru</title>
		<!-- memanggil bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome.min.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- navigasi -->
		<nav class="navbar navbar-expand-sm bg-success navbar-dark sticky-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?php echo base_url().'login'?>">Website Pendaftaran Siswa Baru</a>
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url().'web'?>">Beranda<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url().'web/profil'?>">Profil</a>
              </li>
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Informasi & Pendaftaran
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="<?php echo base_url().'web/informasi'?>">Informasi</a>
                  <a class="dropdown-item" href="<?php echo site_url().'web/pendaftaran'?>">Pendaftaran</a>
                </div>
              </li>
							<li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url().'web/bantuan'?>">Bantuan</a>
              </li>
							<li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url().'web/kontak'?>">Kontak</a>
              </li>
            </ul>
          </div>
     
		</nav>
		<p>
		<!-- panel isi -->
