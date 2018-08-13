<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo @$title; ?></title>

  <link href="<?php echo base_url('assetnew/robust.css');?>" rel="stylesheet">

  <style type="text/css">
  .pt-8, .py-8 {
    padding-top: 4.5rem !important;
  }
  .mb-6, .my-6 {
    margin-bottom: -2.5rem !important;
  }
  .pt-6, .py-6 {
    padding-top: 1.5rem !important;
}
.intro-content {
    z-index: 2;
    position: relative;
    margin-bottom: -100px;
}
</style>
<style type="text/css">
  .modal-dialog {
  position: relative;
  width: auto;
  max-width: 600px;
  margin: 10px;
} 
.modal-lg {
  max-width: 900px;
}
@media (min-width: 768px) {
  .modal-dialog {
    margin: 30px auto;
  }
}
@media (min-width: 320px) {
  .modal-sm {
    margin-right: auto;
    margin-left: auto;
  }
}
@media (min-width: 620px) {
  .modal-dialog {
    margin-right: auto;
    margin-left: auto;
  }
  .modal-lg {
    margin-right: 10px;
    margin-left: 10px;
  }
}
@media (min-width: 920px) {
  .modal-lg {
    margin-right: auto;
    margin-left: auto;
  }
}
</style>
</head>
<body>

  <nav class="navbar navbar-lg navbar-expand-lg navbar-transparant navbar-dark navbar-absolute w-100">
    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url() ?>"><img src="<?php echo base_url('logo-esdm-kuning.png');?>" width="70px"> Kementerian ESDM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" href='#modal-id'>Tentang Rannah Hukum</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('backend/perancang');?>" target="_blank">Data Perancang PUU</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" href='#modal-id'>Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="intro py-8 bg-primary position-relative text-white">
    <div class="bg-overlay-primary">
      <img src="<?php echo base_url('background.png');?>" class="img-fluid img-cover" alt="Robust UI Kit" />
    </div>
    <div class="intro-content mt-5">
      <div class="container">
        <div class="row" style="padding-top: -100px;">
          <div class="col-md-6 align-self-center">
            <center><h1 class="">Selamat Datang di <br> Rannah Hukum </h1>
              <h4>Rancang Bangun Naskah Hukum</h4>
            </center>
            <p class="mb-4" style="text-align: justify;">Rannah Hukum merupakan Aplikasi Perancangan Produk Hukum yang dikembangkan oleh Biro Hukum Kementerian Energi dan Sumber Daya Mineral sebagai fasilitas yang dapat digunakan untuk mewujudkan Produk Hukum secara efektif, efisien dan sesuai dengan teknik penyusunan peraturan perundang-undangan.</p>
          </div><!-- /.col-md-6 -->
          <div class="col-md-5 ml-auto">
            <div class="card">
              <?php 
              echo @$message;
              echo form_error('username', '<div class="alert alert-danger">', '</div>');
              echo form_error('password', '<div class="alert alert-danger">', '</div>');
              ?>
              <div class="card-body text-dark">
                <form action="<?php echo site_url('backend/auth/proses');?>" method="POST">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                  </div> 
                  <button type="submit" class="btn btn-success btn-block btn-lg mb-2">Masuk</button>
                  <br>
                  <a href="<?php echo site_url('front/landing/') ?>" class="btn btn-default btn-block mb-2">Mode Tamu</a>
                </form>
              </div>
            </div>
          </div><!-- /.col-md-6 -->
        </div>
      </div>
    </div>
  </div>

  <main class="main" role="main">  

    <div class="py-6 bg-white">
      <div class="container">

        <div class="row mb-6">
          <center><h6>Link Terkait </h6></center>
        </div>

        
        <div class="modal fade" id="modal-id">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title">Tentang Rannah Hukum</h6>
              </div>
              <div class="modal-body">
                <img src="<?php echo base_url('assetnew/tentang-rannah.png');?>" width="100%">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-primary btn-default" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-3">
            <div class="media">
              <div class="icon mr-3">
                <img src="<?php echo base_url('logo-esdm-kuning.png');?>" width="70px">
              </div>
              <div class="media-body">
                <br>
                <h3 class="h6"><a href="https://www.esdm.go.id/" target="_blank">Kementerian ESDM</a> </h3>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="media">
              <div class="icon mr-3 bg-warning">
                <img src="<?php echo base_url('JDIH-logo.jpg');?>" width="100px" style="margin-bottom: 20px">
              </div>
              <div class="media-body">
                <br>
                <h3 class="h6"><a href="http://jdih.esdm.go.id/?page=home" target="_blank">JDIH</a></h3>
              </div>
            </div>
          </div> 
          <div class="col-md-3">
            <div class="media">
              <div class="icon mr-3 bg-success">
                <img src="<?php echo base_url('logo-esdm-kuning.png');?>" width="70px" >
              </div>
              <div class="media-body">
                <br>
                <h3 class="h6"><a href="#">SIMOLEG</a></h3>
              </div>
            </div>
          </div>
          <div class="row md-3">
            <div class="media">
              <div class="icon mr-3 bg-success">
                <img src="<?php echo base_url('sipekalogin.png');?>" width="70px">
              </div>
              <div class="media-body">
                <br>
                <h3 class="h6"><a href="http://sipeka.esdm.go.id/" target="_blank">SIPEKA</a></h3>
              </div>
            </div>
          </div> 
        </div><!-- /.row -->
      </div><!-- /.row -->


    </div>
  </div> 

  <div class="modal fade" id="modal-id">
   <div class="modal-dialog">
     <div class="modal-content"> 
       <div class="modal-body">

        <center>

          <img src="<?php echo base_url('logo-esdm-kuning.png') ?>" width="100px">
          <br><br>

          <p>KEMENTERIAN ENERGI DAN SUMBER DAYA MINERAL </p>
          <p>JL. MEDAN MERDEKA SELATAN NO. 18 </p>
          <p>JAKARTA PUSAT 10110 </p>
          <p>TELP. 021 3804242 FAX. 021 3507210</p>
          <p>EMAIL: <a href="mailto:regulasiesdm@esdm.go.id?subject=dariwebsiterannah">regulasiesdm@esdm.go.id</a> dan <a href="mailto:birohukum-sjh2@esdm.go.id?subject=dariwebsiterannah">birohukum-sjh2@esdm.go.id</a></p>

        </center>

      </div>
      <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button> 
     </div>
   </div>
 </div>
</div>

</main> 
<script src="https://robust.bootlab.io/dist/js/bundle.js"></script>
</body>
</html>
