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
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/styles/app.css?v.1');?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/styles/style.css?v.1');?>" type="text/css" />
  <!-- endbuild -->

  <!-- datatable -->
  <style type="text/css" href="<?=base_url('assetnew/libs/datatables/media/css/dataTables.bootstrap4.min.css');?>"></style>
  <link rel="stylesheet" href="<?php echo base_url('assetnew/css/styles/font.css?v.1');?>" type="text/css" />
  
  <script type="text/javascript" src="<?=base_url('assetnew/scripts/jquery-2.1.1.min.js');?>"></script>
</head>
<body>
  <div class="app" id="app">
