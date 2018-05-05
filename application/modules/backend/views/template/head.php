<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title><?php echo @$title; ?></title>
  <meta name="description" content="Responsive, Bootstrap, BS4" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="<?php echo base_url('assetnew/images/logo.png');?>">
  <meta name="apple-mobile-web-app-title" content="Lutfi">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="<?php echo base_url('assetnew/images/logo.png');?>">
  
  <!-- style -->
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/animate.css/animate.min.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/glyphicons/glyphicons.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/font-awesome/css/font-awesome.min.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/material-design-icons/material-design-icons.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/ionicons/css/ionicons.min.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/simple-line-icons/css/simple-line-icons.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/bootstrap/dist/css/bootstrap.min.css');?>" type="text/css" />

  <!-- build:css css/styles/app.min.css -->
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/styles/app.css');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/styles/style.css');?>" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/styles/font.css');?>" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside fade nav-dropdown black">
    <!-- fluid app aside -->
    <div class="navside dk" data-layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a href="index.html" class="navbar-brand">
        	<div data-ui-include="'<?php echo base_url('assetnew/images/logo.svg');?>'"></div>
        	<img src="<?php echo base_url('assetnew/images/logo.png');?>" alt="." class="hide">
        	<span class="hidden-folded inline">aside</span>
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
                <a href="dashboard.html" class="b-danger">
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
                    <i class="fa fa-file"></i>
                  </span>
                  <span class="nav-text">Master</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="static.html" >
                      <span class="nav-text">Master Dokumen</span>
                    </a>
                  </li>
                  <li>
                    <a href="datatable.html" >
                      <span class="nav-text">Datatable</span>
                    </a>
                  </li>
                  <li>
                    <a href="footable.html" >
                      <span class="nav-text">Footable</span>
                    </a>
                  </li>
                </ul>
              </li>
            
              <li class="nav-header hidden-folded m-t">
                <span class="text-xs">Pengaturan</span>
              </li>  
              
              
            
              <li>
                <a>
                  <span class="nav-caret">
                    <i class="fa fa-caret-down"></i>
                  </span>
                  <span class="nav-icon">
                    <i class="ion-ios-grid-view"></i>
                  </span>
                  <span class="nav-text">Tables</span>
                </a>
                <ul class="nav-sub">
                  <li>
                    <a href="static.html" >
                      <span class="nav-text">Static table</span>
                    </a>
                  </li>
                  <li>
                    <a href="datatable.html" >
                      <span class="nav-text">Datatable</span>
                    </a>
                  </li>
                  <li>
                    <a href="footable.html" >
                      <span class="nav-text">Footable</span>
                    </a>
                  </li>
                </ul>
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
                      <a class="dropdown-item" href="signin.html">Sign out</a>
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

<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
  <script src="<?php echo base_url('assetnew/libs/jquery/dist/jquery.js');?> "></script>
<!-- Bootstrap -->
  <script src="<?php echo base_url('assetnew/libs/tether/dist/js/tether.min.js');?> "></script>
  <script src="<?php echo base_url('assetnew/libs/bootstrap/dist/js/bootstrap.js');?> "></script>
<!-- core -->
  <script src="<?php echo base_url('assetnew/libs/jQuery-Storage-API/jquery.storageapi.min.js');?> "></script>
  <script src="<?php echo base_url('assetnew/libs/PACE/pace.min.js');?>"></script>
  <script src="<?php echo base_url('assetnew/libs/jquery-pjax/jquery.pjax.js');?>"></script>
  <script src="<?php echo base_url('assetnew/libs/blockUI/jquery.blockUI.js');?>"></script>
  <script src="<?php echo base_url('assetnew/libs/jscroll/jquery.jscroll.min.js');?>"></script>

  <script src="<?php echo base_url('assetnew/scripts/config.lazyload.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-load.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-jp.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-include.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-device.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-form.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-modal.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-nav.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-list.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-screenfull.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-scroll-to.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-toggle-class.js');?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ui-taburl.js') ?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/app.js') ?>"></script>
  <script src="<?php echo base_url('assetnew/scripts/ajax.js') ?>"></script>
<!-- endbuild -->
</body>
</html>
