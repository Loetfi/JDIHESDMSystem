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
           <span class="hidden-folded inline">ESDM</span>
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
              <a>
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
              </ul>
            </li>
            
            <li class="nav-header hidden-folded m-t">
              <span class="text-xs">Pengaturan</span>
            </li>  


            <li>
              <a href="<?php echo site_url('backend/dashboard/') ?>" class="">
                <span class="nav-icon text-white no-fade">
                  <i class="fa fa-cog"></i>
                </span>
                <span class="nav-text">Pengaturan</span>
              </a>
            </li>  

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
        <div class="navbar-item pull-left h5" id="pageTitle">Dashboard</div>
        <!-- nabar right -->
        <ul class="nav navbar-nav pull-right"> 
          <li class="nav-item dropdown">
            <a class="nav-link clear" data-toggle="dropdown">
              <span class="avatar w-32">
                <img src="<?php echo base_url('assetnew/images/a2.jpg');?>" class="w-full rounded" alt="...">
              </span>
            </a>
            <div class="dropdown-menu w dropdown-menu-scale pull-right">
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
