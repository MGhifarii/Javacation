<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>/assets/images/icon-javawebmedia.png">
  <!-- CSS BOOTSTRAP -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css">
  <!-- CSS JAVA WEB MEDIA -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">
</head>
<body>
      <center>
  <div class="login">
    <p class="text-center">
      <a href="index.php"><img src="<?php echo base_url() ?>/assets/images/logo-javawebmedia-2020 - Copy.png" class="img img-fluid img-circle logo-javawebmedia"></a>
    </p>
    <hr>
    <h1 class="text-center">LOGIN</h1>
    <hr>
    <p>Masukkan username dan password Anda!</p>

<table border="1">
  <tr align="center">
    <td>
    <?php $session = \Config\Services::session($config);
if($session->getFlashdata('sukses')) { ?>
<p class="alert alert-success"><?php echo $session->getFlashdata('sukses'); ?></p>
<?php } ?>
    <?php 
    if(isset($error)){
      echo '<p class="alert alert-warning">'.$error.'</p>';
    }
    echo form_open(base_url('login')) ?>

    <div class="form-group">
      <input type="text" name="username" class="form-control" placeholder="Username" required>
    </div>
    <div class="form-group">
      <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group">
      <button class="btn btn-success btn-lg btn-block" type="submit" name="login">Login</button>
    </div>
    </td>
    </tr>
</table>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <?php echo form_close(); ?>
    <footer class="footer-javawebmedia">
      Web Design by <a href="https://Javacation.com" target="_blank">Javacation</a>
</center>
    </footer>
  </div>
</body>
</html>