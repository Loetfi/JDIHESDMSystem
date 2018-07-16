<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>JDIH ESDM</title> 

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="http://localhost/Projekan/jdih/assetnew/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Lutfi">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="http://localhost/Projekan/jdih/assetnew/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="http://localhost/Projekan/jdih/assetnew/css/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Projekan/jdih/assetnew/css/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Projekan/jdih/assetnew/css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Projekan/jdih/assetnew/css/material-design-icons/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Projekan/jdih/assetnew/css/ionicons/css/ionicons.min.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Projekan/jdih/assetnew/css/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Projekan/jdih/assetnew/css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />

  <!-- build:css css/styles/app.min.css -->
  <link rel="stylesheet" href="http://localhost/Projekan/jdih/assetnew/css/styles/app.css?v.1" type="text/css" />
  <link rel="stylesheet" href="http://localhost/Projekan/jdih/assetnew/css/styles/style.css?v.1" type="text/css" />
  <!-- endbuild -->

  <!-- datatable -->
  <style type="text/css" href="http://localhost/Projekan/jdih/assetnew/libs/datatables/media/css/dataTables.bootstrap4.min.css"></style>
  <link rel="stylesheet" href="http://localhost/Projekan/jdih/assetnew/css/styles/font.css?v.1" type="text/css" />
  
  <script type="text/javascript" src="http://localhost/Projekan/jdih/assetnew/scripts/jquery-2.1.1.min.js"></script>

  <style>
  html,
  body { height: 100%; }

  body {
    font-family: 'Arial' , sans-serif;
    background: url(<?=base_url('background.png')?>);
    margin: 0;
    /*background-repeat: ;*/
    /*background: linear-gradient(#eeeeee, #cccccc);*/
    /*overflow: hidden;*/
  }

  a{
    text-decoration: none;
    color: black;
  }

  .selector {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 170px;
    height: 170px;
    margin-top: -70px;
    margin-left: -70px;
  }

  .selector,
  .selector button {
    font-family: 'Oswald', sans-serif;
    font-weight: 100; 
  }

  .selector button { /**/
    position: relative;
    width: 100%;
    height: 100%;
    padding: 10px;
    background: yellow;
    border-radius: 50%;
    border: 0;
    color: white;
    font-size: 20px;
    cursor: pointer;
    box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
    transition: all .1s;
  }

  .selector button:hover { background: #f0f0f0;/*#3071a9*/; }

  .selector button:focus { outline: none; }

  .selector ul {
    position: absolute;
    list-style: none;
    padding: 0;
    margin: 0;
    top: -20px;
    right: -20px;
    bottom: -20px;
    left: -20px;
  }

  .selector li {
    position: absolute;
    width: 0;
    height: 100%;
    margin: 0 50%;
    -webkit-transform: rotate(-360deg);
    transition: all 0.8s ease-in-out;
  }

  .selector li input { display: none; }

  .selector li input + label {
    position: absolute;
    left: 50%;
    bottom: 100%;
    width: 0;
    height: 0;
    line-height: 1px;
    margin-left: 0;
    background: #fff;
    border-radius: 50%;
    text-align: center;
    font-size: 1px;
    overflow: hidden;
    cursor: pointer;
    box-shadow: none;
    transition: all 0.8s ease-in-out, color 0.1s, background 0.1s;
  }

  .selector li input + label:hover { background: #f0f0f0; }

  .selector li input:checked + label {
    background: #5cb85c;
    color: white;
  }

  .selector li input:checked + label:hover { background: #449d44; }

  .selector.open li input + label {
    width: 100px;
    height: 100px;
    line-height: 100px;
    margin-left: -40px;
    box-shadow: 0 3px 3px rgba(0, 0, 0, 0.1);
    font-size: 14px;
  }

  .selector.open li a {
    display: inline-block;
    border-radius: 50%;
    font-size: 10px;
    font-weight: 600;
  }

  h3 { 
    color: yellow;
    text-align: center;
  }
</style>
</head>

<!-- <center></center>/ -->
<img src="https://www.esdm.go.id/themes/v1/img/xlogo-esdm-web.png.pagespeed.ic.rpNW33_FYz.png" style="padding-top: 0px;">
<!-- <p><a href="" style="padding: 20px; font-size: 17px"><b>Aplikasi perancangan produk hukum Kementerian Energi Sumber Daya Manusia</b></a></p> -->
<br><br><br>
<div class="col-lg b-r"> 
  <div class="padding">
    <div class="row">
      <!-- <div class="col-sm-2" > 
        <div class="box black" style="border-radius: 10px">
          <div class="box-header">
            <h3>QUICK FORMAT</h3>
          </div>
          <div class="box-body"> 
            <button class="btn btn-outline rounded b-warning text-warning">Pilih</button>
             
          </div>
        </div>
      </div>  -->

      <div class="col-sm-2" > 
        <div class="box black" style="border-radius: 10px; background: rancangan.png ">
          <div class="box-header">
            <h3>FORMAT</h3>
            <br>
          </div>
          <div class="box-body"> 
            <button class="btn btn-outline rounded b-warning text-warning">Pilih</button>
            <!-- <a href="<?php echo site_url('Keputusan_menteri_doc') ?>" class="btn btn-success btn-xs">Pilih <i class="fa fa-chevron-right"></i></a> -->
          </div>
        </div>
      </div> 

      <div class="col-sm-2" > 
        <div class="box black" style="border-radius: 10px">
          <div class="box-header">
            <h3>TELAAHAN</h3>
            <br>
          </div>
          <div class="box-body"> 
            <button class="btn btn-outline rounded b-warning text-warning">Pilih</button>
            <!-- <a href="<?php echo site_url('Keputusan_menteri_doc') ?>" class="btn btn-success btn-xs">Pilih <i class="fa fa-chevron-right"></i></a> -->
          </div>
        </div>
      </div> 

      <div class="col-sm-2" > 
        <div class="box black" style="border-radius: 10px">
          <div class="box-header">
            <h3>FORUM KOORDINASI</h3>

          </div>
          <div class="box-body"> 
            <button class="btn btn-outline rounded b-warning text-warning">Pilih</button>
            <!-- <a href="<?php echo site_url('Keputusan_menteri_doc') ?>" class="btn btn-success btn-xs">Pilih <i class="fa fa-chevron-right"></i></a> -->
          </div>
        </div>
      </div> 

      <div class="col-sm-2" > 
        <div class="box black" style="border-radius: 10px">
          <div class="box-header">
            <h3>DATABASE PROSES</h3>
          </div>
          <div class="box-body"> 
            <button class="btn btn-outline rounded b-warning text-warning">Pilih</button>
            <!-- <a href="<?php echo site_url('Keputusan_menteri_doc') ?>" class="btn btn-success btn-xs">Pilih <i class="fa fa-chevron-right"></i></a> -->
          </div>
        </div>
      </div>   
    </div> 
  </div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><script>var nbOptions = 8;
var angleStart = -360;

// jquery rotate animation
function rotate(li,d) {
  $({d:angleStart}).animate({d:d}, {
    step: function(now) {
      $(li)
      .css({ transform: 'rotate('+now+'deg)' })
      .find('label')
      .css({ transform: 'rotate('+(-now)+'deg)' });
    }, duration: 0
  });
}

// show / hide the options
function toggleOptions(s) {
  $(s).toggleClass('open');
  var li = $(s).find('li');
  var deg = $(s).hasClass('half') ? 180/(li.length-1) : 360/li.length;
  for(var i=0; i<li.length; i++) {
    var d = $(s).hasClass('half') ? (i*deg)-90 : i*deg;
    $(s).hasClass('open') ? rotate(li[i],d) : rotate(li[i],angleStart);
  }
}

$('.selector button').click(function(e) {
  toggleOptions($(this).parent());
});

setTimeout(function() { toggleOptions('.selector'); }, 100);//@ sourceURL=pen.js
</script> 

</body>
</html>
