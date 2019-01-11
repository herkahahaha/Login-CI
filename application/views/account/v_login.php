<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Halaman Login</title>
  </head>
  <body>
    <h2 class="display-2 text-center">Mari Masuk!!</h2>
    <?php
    //cetak jika ada notif
    if($this->session->flashdata('sukses')){
        echo '<p class="warning" style="margin:10px 20px;">'.$this->session->flashdata('sukses').'</p>';
    }
    ?>
<!-- ========================================================================== -->
    <div class="row">
        <div class="container text-center col-md-4 col-sm-6 col-xs-6 mt-5" >
                <div class="border bg-light " >
                    <?php echo form_open ('login'); ?>
                    <p class="pl-1" >Username:</p>
                    <p class="col-md-10 offset-md-1"><input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>"/></p>
                    <p><?php echo form_error('username'); ?></p>
                
                    <!-- ============================================================================= -->
                    <p class="pl-1" >Password:</p>
                    <p class="col-md-10 offset-md-1"><input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>"/></p>
                    <p><?php echo form_error('password'); ?> </p>
                    
                    
                    <p class="col-md-10 offset-md-1"><input type="submit" class="btn btn-primary" name="btnSubmit" value="Login"/></p>
                </div>
                <?php echo form_close(); ?>
                
                <p>
                    Kembali ke Beranda, silahkan klik <br>
                    <?php echo anchor (site_url().'/beranda','disini...'); ?>
                </p>
            </div>
    </div>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>