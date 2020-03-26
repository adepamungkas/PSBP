<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login | Administrator</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fontawesome.min.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br>
        <!-- insert data login -->
        <div class="container" style="width:350px">
            <div class="card">
                <div class="card-header bg-success text-white">Login Administrator</div>
                <div class="card-body">
                    <form action="<?php echo base_url('login/cek_login'); ?>" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control form-control-sm" name="username" placeholder="Masukan Username">
                            <?php echo form_error('username') ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-sm" name="password" placeholder="Masukan Password">
                            <?php echo form_error('password') ?>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                        <a href="<?php echo base_url('web'); ?>" class="btn btn-danger btn-block">Batal</a>
                    </form>
                </div>
            </div>
    </body>
</html>
