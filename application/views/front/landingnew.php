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
</head>
<body>

  <nav class="navbar navbar-lg navbar-expand-lg navbar-transparant navbar-dark navbar-absolute w-100">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('logo-esdm-kuning.png');?>" width="70px"> Kementerian ESDM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Panduan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.html">Data Perancang PUU</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.html">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="intro py-8 bg-primary position-relative text-white">
    <div class="bg-overlay-primary">
      <img src="https://robust.bootlab.io/img/photos/8.jpg" class="img-fluid img-cover" alt="Robust UI Kit" />
    </div>
    <div class="intro-content mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center">
            <center><h1 class="display-4 mb-3">Selamat Datang di Rannah Hukum </h1>
            <h1>Rancang Bangun Naskah Hukum</h1>
            </center>
            <p class="lead mb-4">Rannah Hukum merupakan Aplikasi Perancangan Produk Hukum yang dikembangkan oleh Biro Hukum Kementerian Energi dan Sumber Daya Mineral sebagai fasilitas yang dapat digunakan untuk mewujudkan Produk Hukum secara efektif, efisien dan sesuai dengan teknik penyusunan peraturan perundang-undangan.</p>
          </div><!-- /.col-md-6 -->
          <div class="col-md-5 ml-auto">
            <div class="card">
              <div class="card-body text-dark">
                <form action="<?php echo site_url('backend/auth/proses');?>" method="POST">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input type="email" class="form-control" id="username" name="username" placeholder="Masukan Username">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                  </div> 
                  <button type="submit" class="btn btn-success btn-block btn-lg mb-2">Masuk</button>
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
            <center><h2>Link Terkait </h2></center>
        </div>

        <div class="row mt-5">
          <div class="col-md-4">
            <div class="media">
              <div class="icon mr-3">
                <img src="<?php echo base_url('logo-esdm-kuning.png');?>" width="70px">
              </div>
              <div class="media-body">
                <br>
                <h3 class="h4">Kementerian ESDM </h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="media">
              <div class="icon mr-3 bg-warning">
                <img src="<?php echo base_url('JDIH-logo.jpg');?>" width="100px">
              </div>
              <div class="media-body">
                <br>
                <h3 class="h4">JDIH</h3>
              </div>
            </div>
          </div> 
           <div class="col-md-4">
            <div class="media">
              <div class="icon mr-3 bg-success">
                <img src="<?php echo base_url('logo-esdm-kuning.png');?>" width="70px">
              </div>
              <div class="media-body">
                <br>
                <h3 class="h4">SIMOLEG</h3>
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row mt-5">

         
          <div class="col-md-4">
            <div class="media">
              <div class="icon mr-3 bg-purple">
                <img src="<?php echo base_url('sipekalogin.png');?>" width="70px">
              </div>
              <div class="media-body">
                <h3 class="h4">SIPEKA</h3>
              </div>
            </div>
          </div> 
        </div><!-- /.row -->
      </div>
    </div> 
 
  </main> 
  <script src="https://robust.bootlab.io/dist/js/bundle.js"></script>
</body>
</html>
