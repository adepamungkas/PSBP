<head>
 <title>Dashboard Administrator</title>
 <!-- memanggil bootstrap -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome.min.css');?>" />
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.1.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
</head>
<body>
  <!-- navigasi Administrator-->
  <nav class="navbar navbar-expand-sm navbar-dark bg-info">
  <a class="navbar-brand" href="#">Selamat datang, <?php echo $this->session->userdata("nama"); ?> NU Talang Padang</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    </ul>
      <a class="btn btn-outline-light" href="<?php echo base_url('login/logout');?>">Logout</a>
  </div>
</nav>
  <!-- <?php echo $this->session->userdata("nama"); ?> -->
  <!-- <a class="button" href="<?php echo base_url('login/logout');?>">Logout</a> -->
</body>
</html>
