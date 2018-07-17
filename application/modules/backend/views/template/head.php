<?php $this->load->view('kepala'); ?>

<!-- ############ LAYOUT START-->

<!-- aside -->
<div id="aside" class="app-aside fade nav-dropdown black">
  <!-- fluid app aside -->
  <div class="navside dk" data-layout="column">
    <div class="navbar no-radius">
      <!-- brand -->
      <a href="index.html" class="navbar-brand">
       <img src="<?php echo base_url('assets/logo/logo-esdm.png');?>" alt=".">
       <span class="hidden-folded inline">Biro Hukum</span>
     </a> 
     <!-- / brand -->
   </div>
   <div data-flex class="hide-scroll">
    <nav class="scroll nav-stacked nav-stacked-rounded nav-color">

      <ul class="nav" data-ui-nav>
        <li class="nav-header hidden-folded">
          <span class="text-xs">Main</span>
        </li>
        <li>
          <a href="<?php echo site_url('backend/dashboard/') ?>" class="b-danger">
            <span class="nav-icon text-white no-fade">
              <i class="ion-filing"></i>
            </span>
            <span class="nav-text">Dashboard</span>
          </a>
        </li> 

        <li>
          <a href="<?php echo site_url('backend/dokumen/') ?>"> 
            <span class="nav-icon">
              <i class="ion-filing"></i>
            </span>
            <span class="nav-text">Dokumen</span>
          </a>

              <!-- <a>
                <span class="nav-caret">
                  <i class="fa fa-caret-down"></i>
                </span>
                <span class="nav-icon">
                  <i class="ion-filing"></i>
                </span>
                <span class="nav-text">Master</span>
              </a>
              <ul class="nav-sub">
                <li>
                  <a href="<?php echo site_url('backend/dokumen/') ?>" >
                    <span class="nav-text">Dokumen</span>
                  </a>
                </li> 


              </ul> -->
            </li>

            <li class="nav-header hidden-folded m-t">
              <span class="text-xs">Database</span>
            </li>  

            <li>
              <a href="<?php echo site_url('backend/database/master/') ?>"> 
                <span class="nav-icon">
                  <i class="fa fa-book"></i>
                </span>
                <span class="nav-text">List Data</span>
              </a>
            </li>


            
            <li class="nav-header hidden-folded m-t">
              <span class="text-xs">Manajemen Pengguna</span>
            </li>  


            <li>
              <a href="<?php echo site_url('backend/dashboard/') ?>" class="">
                <span class="nav-icon text-white no-fade">
                  <i class="fa fa-user"></i>
                </span>
                <span class="nav-text">Pengguna</span>
              </a>
            </li>  
            <li>
              <a href="<?php echo site_url('backend/dashboard/') ?>" class="">
                <span class="nav-icon text-white no-fade">
                  <i class="fa fa-group"></i>
                </span>
                <span class="nav-text">Hak Akses</span>
              </a>
            </li>  
            <!-- <li>
              <a href="<?php echo site_url('backend/dashboard/') ?>" class="">
                <span class="nav-icon text-white no-fade">
                  <i class="fa fa-user"></i>
                </span>
                <span class="nav-text"></span>
              </a>
            </li> -->  

          </ul>
        </nav>
      </div> 
    </div>
  </div>
  <!-- / -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
      <div class="navbar" data-pjax>
        <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
          <i class="ion-navicon"></i>
        </a>
        <div class="navbar-item pull-left h5" id="pageTitle"><?php echo @$title; ?></div>
        <!-- nabar right -->
        <ul class="nav navbar-nav pull-right"> 
          <li class="nav-item dropdown pos-stc-xs">
                    <a class="nav-link clear" data-toggle="dropdown" aria-expanded="false">
                      <i class="ion-android-notifications-none w-24"></i>
                      <span class="label up p-a-0 danger"></span>
                    </a>
                    <!-- dropdown -->
                    <div class="dropdown-menu pull-right w-xl animated fadeIn no-bg no-border no-shadow">
                        <div class="scrollable" style="max-height: 220px">
                          <ul class="list-group list-group-gap m-a-0">
                            <li class="list-group-item dark-white box-shadow-z0 b">
                              <span class="pull-left m-r">
                                <img src="https://pbs.twimg.com/profile_images/537640914689093633/38jBPuAv_400x400.jpeg" alt="..." class="w-40 img-circle">
                              </span>
                              <span class="clear block">
                                <a href="" class="text-primary">Lutfi F H</a> , Mengirim Dokumen <a href="#" class="text-primary">Keputusan Menteri</a> kepada anda<br>
                                <small class="text-muted">1 hari yang lalu</small>
                              </span>
                            </li>
                            <li class="list-group-item dark-white box-shadow-z0 b">
                              <span class="pull-left m-r">
                                <img src="https://pbs.twimg.com/profile_images/537640914689093633/38jBPuAv_400x400.jpeg" alt="..." class="w-40 img-circle">
                              </span>
                              <span class="clear block">
                                Dokumen  <a href="#" class="text-primary">Keputusan Menteri</a> anda berhasil di submit ke <a href="" class="text-primary">Atasan Anda</a><br>
                                <small class="text-muted">1 hari yang lalu</small>
                              </span>
                            </li>
                            <li class="list-group-item dark-white text-color box-shadow-z0 b">
                              <span class="pull-left m-r">
                                <img src="https://pbs.twimg.com/profile_images/537640914689093633/38jBPuAv_400x400.jpeg" alt="..." class="w-40 img-circle">
                              </span>
                              <span class="clear block">
                                Dokumen  <a href="#" class="text-primary">Keputusan Menteri</a> anda berhasil di submit ke <a href="" class="text-primary">Atasan Anda</a><br> 
                              </span>
                            </li>
                          </ul>
                        </div>
                    </div>
                    <!-- / dropdown -->
                  </li>

          <li class="nav-item dropdown">
            <a class="nav-link clear" data-toggle="dropdown">
              <?php echo @$name; ?>
              <span class="avatar w-32">
                <img src="<?php echo base_url('assetnew/images/a2.jpg');?>" class="w-full rounded" alt="...">
              </span>
            </a>
            <div class="dropdown-menu w dropdown-menu-scale pull-right">

              <a class="dropdown-item" href="<?php echo site_url('backend/auth/logout?true') ?>">Sign out</a>
            </div>
          </li>
        </ul>
        <!-- / navbar right -->
      </div>
    </div> 
    <div class="app-body">

      <!-- ############ PAGE START-->
      <?php isset($contents) ? $this->load->view($contents) : 'belum diload'; ?>
      <!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->



  <!-- ############ LAYOUT END-->
</div>


<?php $this->load->view('footer'); ?>
