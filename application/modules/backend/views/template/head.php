<?php $this->load->view('kepala'); ?>

<!-- ############ LAYOUT START-->

<!-- aside -->
<?php if (@$sidbear=='no') { } else { ?>

<div id="aside" class="app-aside fade nav-dropdown black">
  <!-- fluid app aside -->
  <div class="navside dk" data-layout="column">
    <div class="navbar no-radius">
      <!-- brand -->
      <a href="#" class="navbar-brand">
       <img src="<?php echo base_url('assets/logo/logo-esdm.png');?>" alt=".">
       <span class="hidden-folded inline">Biro Hukum</span>
     </a> 
     <!-- / brand -->
   </div>
   <div data-flex class="hide-scroll">
    <nav class="scroll nav-stacked nav-stacked-rounded nav-color">

      <ul class="nav" data-ui-nav>

        <?php if ($this->session->userdata('login_id')) { ?>
          <li class="nav-header hidden-folded">
            <span class="text-xs">Main</span>
          </li> 
          <li>
            <a href="<?php echo site_url('backend/dokumen/') ?>"> 
              <span class="nav-icon">
                <i class="ion-filing"></i>
              </span>
              <span class="nav-text text-white">Dokumen</span>
            </a> 
          </li> 
          <li class="nav-header hidden-folded m-t">
            <span class="text-xs">Database</span>
          </li>   
          <li>
            <a href="<?php echo site_url('backend/database/master/') ?>"> 
              <span class="nav-icon">
                <i class="fa fa-book"></i>
              </span>
              <span class="nav-text text-white">List Data</span>
            </a>
          </li> 
          <li class="nav-header hidden-folded m-t">
            <span class="text-xs">Forum</span>
          </li>   
          <li>
            <a href="<?php echo site_url('backend/forum/thread/') ?>"> 
              <span class="nav-icon">
                <i class="fa fa-book"></i>
              </span>
              <span class="nav-text text-white">Forum</span>
            </a>
          </li> 
        <?php } ?>
        
      </ul>
    </nav>
  </div> 

  <div data-flex-no-shrink>
  <div class="nav-fold dropup">
    <a data-toggle="dropdown">
      <div class="pull-left">
        <div class="inline"><span class="avatar w-40 white  ">C</span></div>
        <img src="<?php echo base_url('assetnew/images/a2.jpg');?>" alt="..." class="w-40 img-circle hide">
      </div>
      <div class="clear hidden-folded p-x">
        <span class="block _500 text-white"><?php echo @$name; ?> </span>
        <p class="text-muted"></p>
        <span class="block _500 text-white"><?php echo date('d F Y'); ?> </span>
        <!-- <div class="progress-xxs m-y-sm lt progress">
          <div class="progress-bar info" style="width: 100%;">
          </div>
        </div> -->
      </div>
    </a>
    <div class="dropdown-menu w dropdown-menu-scale">
      <a class="dropdown-item" href="profile.html">
        <span>Profile</span>
      </a>
      <a class="dropdown-item" href="setting.html">
        <span>Settings</span>
      </a>
      <a class="dropdown-item" href="app.inbox.html">
        <span>Inbox</span>
      </a>
      <a class="dropdown-item" href="app.message.html">
        <span>Message</span>
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="docs.html">
        Need help?
      </a>
      <a class="dropdown-item" href="<?php echo site_url('auth/logout?true') ?>">Sign out</a>
    </div>
  </div>
</div> 
</div>




</div>
<?php } ?>
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
        <?php if (!empty($this->session->userdata('login_id'))) { ?>
        <li class="nav-item dropdown pos-stc-xs">
          <a class="nav-link clear" data-toggle="dropdown" aria-expanded="false">
            <span class="label info">3</span>
            <i class="ion-android-notifications-none w-24"></i>
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
              | 
              <?php echo @$name; ?>
              <span class="avatar w-32">
                <img src="<?php echo base_url('assetnew/images/a2.jpg');?>" class="w-full rounded" alt="...">
              </span>
            </a>
            <div class="dropdown-menu w dropdown-menu-scale pull-right">

              <a class="dropdown-item" href="<?php echo site_url('backend/auth/logout?true') ?>">Sign out</a>
            </div>
          </li>
        <?php } ?>
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
