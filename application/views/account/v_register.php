<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- html -->
<!DOCTYPE html>
<html class="col-auto">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Pendaftaran Akun</title>
    <style>
    
    </style>
</head>
<body>
    
    <h2 class="text-center">Pendaftaran Akun</h2>
    <div class="row">
        <div class="container col-md-4 col-sm-6 col-xs-6 mt-5" >
            <div class="border bg-light " >
                <?php echo form_open ('register'); ?>
                <p class="w-50 p-3">Nama</p>
                <p class="col-sm-10"><input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>"/></p>
                <p><?php echo form_error('name'); ?> </p>

                <p class="w-50 p-3">Username</p>
                <p class="col-sm-10"><input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>"/></p>
                <p><?php echo form_error('username'); ?> </p>

                <p class="w-50 p-3">Email</p>
                <p class="col-sm-10"><input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>"/></p>
                <p><?php echo form_error('email'); ?> </p>

                <p class="w-50 p-3">Password</p>
                <p class="col-sm-10"><input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>"/></p>
                <p><?php echo form_error('password'); ?> </p>
                
                <p class="w-50 p-3">Password Confirm:</p>
                <p class="col-sm-10"><input type="password" class="form-control" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/></p>
                <p><?php echo form_error('password_conf'); ?> </p>

                <p class="col-sm-10"><input type="submit" class="btn btn-dark " name="btnSubmit" value="daftar"/></p>
                <?php echo form_close(); ?>
                <p class="text-center">
                    Kembali ke Beranda, silahkan klik
                    <?php echo anchor (site_url().'/beranda','disini...'); ?>
                </p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>