<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title> 

	<!-- for ios 7 style, multi-resolution icon of 152x152 -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>/assetnew/images/logo.png">
	<meta name="apple-mobile-web-app-title" content="Lutfi">
	<!-- for Chrome on Android, multi-resolution icon of 196x196 -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" sizes="196x196" href="<?php echo base_url(); ?>/assetnew/images/logo.png">
	
	<!-- style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetnew/css/animate.css/animate.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetnew/css/glyphicons/glyphicons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetnew/css/font-awesome/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetnew/css/material-design-icons/material-design-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetnew/css/ionicons/css/ionicons.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetnew/css/simple-line-icons/css/simple-line-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assetnew/css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />

	<!-- build:css css/styles/app.min.css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assetnew/css/styles/app.css?v.1" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assetnew/css/styles/style.css?v.1" type="text/css" />
	<!-- endbuild -->

	<!-- datatable -->
	<style type="text/css" href="<?php echo base_url(); ?>/assetnew/libs/datatables/media/css/dataTables.bootstrap4.min.css"></style>
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assetnew/css/styles/font.css?v.1" type="text/css" />
	
	<script type="text/javascript" src="<?php echo base_url(); ?>/assetnew/scripts/jquery-2.1.1.min.js"></script>

<style>
html {
	background-color: #0275d8; 
}
body {
	font-family: 'Arial' , sans-serif;
	background: url(<?=base_url('assetnew/bg-landing.png')?>);
	background-repeat: no-repeat;
	background-position: center; 
	background-attachment: fixed;
}
#thisAll{
	max-width: 70%;
	margin: 0 auto;
	padding-top: 20px;
	padding-bottom: 20px;
}
.allButton a > img{
	border-radius: 0 30px 0 10px; 
	border: 1px #efefef solid;
	/*box-shadow: 3px 3px 3px 3px #fff;*/
	margin-bottom: 10px;
}
.allButton a > img:hover{
	box-shadow: 3px 3px 3px 3px #fff000;
}
</style>
</head>
<body>
	<div id="thisAll">
		<div class="row">
			<!-- div class="col-xs-3 col-sm-2 col-md-2">
				<img src="<?php echo base_url(); ?>/assets/logo/logo-esdm.png" width="100%">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6">
				<h1>Rannah Hukum</h1>
				<h4>Rancang Bangun Naskah Hukum</h4>
			</div -->
			<div class="col-xs-12 col-sm-12 col-md-8">
				<img src="<?php echo base_url('assetnew/logo-tagline.png');?>" style="padding-top: 0px;" width="100%">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4"><br>
				<button onclick="location.href='<?=site_url()?>'" type="button" class="btn btn-primary pull-right" style="margin: 0 3px;">FAQ</button>
				<button onclick="location.href='<?=site_url()?>'" class="btn btn-info pull-right" style="margin: 0 3px;">Beranda</button>
			</div>
		</div>
		<!-- img src="https://www.esdm.go.id/themes/v1/img/xlogo-esdm-web.png.pagespeed.ic.rpNW33_FYz.png" style="padding-top: 0px;" -->
		
		<div class="row">
			<div class="col-md-8 allButton" >
				<br><br><br>
				<?php 
				if ((@$this->session->userdata('login_id'))) { ?>


				<div class="col-xs-3 col-sm-3 col-md-3">
					<a href="<?php echo site_url('backend/dokumen/pilih/');?>"><img src="<?php echo base_url(); ?>/assets/logo/icon-rancangan-solid.png" width="100%"></a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
					<a href="<?php echo site_url('backend/dokumen/');?>"><img src="<?php echo base_url(); ?>/assets/logo/icon-telaah-solid.png" width="100%"></a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
					<a href="<?php echo site_url('backend/database/master/') ?>"><img alt="database"  src="<?php echo base_url(); ?>/assets/logo/icon-database-solid.png" width="100%"></a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
					<a href="<?php echo site_url('backend/forum/') ?>"><img alt="forum" src="<?php echo base_url(); ?>/assets/logo/icon-forum-solid.png" width="100%"></a>
				</div>
			<?php } else { ?>
			</div>
			<div class="col-md-8 allButton" >
				<div class="col-xs-3 col-sm-3 col-md-3">
					<a href="<?php echo site_url('backend/dokumen/pilih/');?>"><img src="<?php echo base_url(); ?>/assets/logo/icon-quick-format-solid.png" width="100%"></a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
					<a data-toggle="modal" href='#modal-id'><img src="<?php echo base_url(); ?>/assets/logo/icon-regulasi.png" width="100%"></a>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3">
					<a data-toggle="modal" href='#modal-id2'><img src="<?php echo base_url(); ?>/assets/logo/icon-profil.png" width="100%"></a>
				</div>
				
				
			</div>
			<?php } ?>
		</div>
	</div>




<!-- MODAL  -->

  <div class="modal fade" id="modal-id">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title">Regulasi</h6>
              </div>
              <div class="modal-body">
                <iframe src="<?php echo base_url('assetnew/dasar-hukum-penyusunan.pdf');?>" width="100%" height="400px"></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-primary btn-default" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>

         <div class="modal fade" id="modal-id2">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title">Profil Biro Hukum</h6>
              </div>
              <div class="modal-body">
                <iframe src="<?php echo base_url('assetnew/struktur-biro-hukum.pdf');?>" width="100%" height="400px"></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-xs btn-primary btn-default" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>


 
<script src="<?php echo base_url('assetnew/libs/tether/dist/js/tether.min.js');?> "></script>
<script src="<?php echo base_url('assetnew/libs/bootstrap/dist/js/bootstrap.js');?> "></script>
<!-- core -->
<script src="<?php echo base_url('assetnew/libs/jQuery-Storage-API/jquery.storageapi.min.js');?> "></script>
<script src="<?php echo base_url('assetnew/libs/PACE/pace.min.js');?>"></script>
<script src="<?php echo base_url('assetnew/libs/jquery-pjax/jquery.pjax.js');?>"></script>
<script src="<?php echo base_url('assetnew/libs/blockUI/jquery.blockUI.js');?>"></script>
<script src="<?php echo base_url('assetnew/libs/jscroll/jquery.jscroll.min.js');?>"></script>


<script src="<?=base_url('assetnew/libs/datatables/media/js/jquery.dataTables.min.js');?>"></script>
<script src="<?=base_url('assetnew/libs/datatables/media/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?=base_url('assetnew/libs/datatables/extensions/buttons/dataTables.buttons.min.js');?>"></script>
<script src="<?=base_url('assetnew/libs/datatables/extensions/buttons/buttons.bootstrap4.min.js');?>"></script>
<script src="<?=base_url('assetnew/libs/datatables/extensions/buttons/jszip.min.js');?>"></script>

<script src="<?=base_url('assetnew/libs/datatables/extensions/buttons/vfs_fonts.js');?>"></script>
<script src="<?=base_url('assetnew/libs/datatables/extensions/buttons/buttons.html5.min.js');?>"></script>
<script src="<?=base_url('assetnew/libs/datatables/extensions/buttons/buttons.print.min.js');?>"></script>
<script src="<?=base_url('assetnew/libs/datatables/extensions/buttons/buttons.colVis.min.js');?>"></script>

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

<script>
	var getClassName = $('#aside').removeClass('folded');
</script>
</body>
</html>

</body>
</html>
