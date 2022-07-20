<?php 
$session        = \Config\Services::session($config);
use App\Models\User_model;
$model          = new User_model();
$user_login     = $model->detail($session->get('id_user'));
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url() ?>" target="_blank">
    <center>
  	<img src="<?php echo base_url() ?>/assets/images/logo-javawebmedia-2020 - Copy.png" class="img img-fluid logo-admin" style="max-height: 40px; width: auto;">
  </center>
  </a>
 <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>-->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <button class="btn btn-danger btn-sm">
      <li class="nav-item active">
      <a href="<?php echo base_url('admin/dasbor') ?>">Dasbor <span class="sr-only"></span></a>
      </li>
      </button>
        <button class="btn btn-danger btn-sm">
      <li class="nav-item">

        <a class="nav-link" href="<?php echo base_url('admin/berita') ?>">Artikel</a>
      </li>
      </button>
        <button class="btn btn-danger btn-sm">
      <li class="nav-item">

        <a class="nav-link" href="<?php echo base_url('admin/kategori') ?>">Kategori Artikel</a>
      </li>
      </button>
        <button class="btn btn-danger btn-sm">
      <li class="nav-item">

        <a class="nav-link" href="<?php echo base_url('admin/user') ?>">Pengguna</a>
      </li>
      </button>
      
        <button class="btn btn-danger btn-sm">
      <li class="nav-item">
        <a class="nav-link text-success" href="<?php echo base_url('admin/dasbor/akun') ?>"><?php echo $user_login['nama'] ?> (<?php echo $user_login['akses_level'] ?>)</a> 
      </li>
    </button>

        <button class="btn btn-danger btn-sm">
      <li class="nav-item">
        <a class="nav-link text-warning" href="<?php echo base_url('login/logout') ?>">Logout</a>
      </li>
    </button>

    </ul>
  </div>
</nav>
<div class="container inner-content">
  <div>
    <div class="col-md-12">
      
   