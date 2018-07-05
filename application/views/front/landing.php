<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>JDIH ESDM</title>
<style>
html,
body { height: 100%; }

body {
  font-family: 'Oswald', sans-serif;
  background: #dddddd; /*url(https://picsum.photos/1800/1600/?image=888);*/
  margin: 0;
  /*background: linear-gradient(#eeeeee, #cccccc);*/
  overflow: hidden;
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
  font-weight: 300; 
}

.selector button {
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
</style>
</head>
 
<center><img src="https://www.esdm.go.id/themes/v1/img/xlogo-esdm-web.png.pagespeed.ic.rpNW33_FYz.png" style="padding-top: 0px;"></center>
<div class='selector'>
  <ul>
    <li>
      <input id='c1' type='checkbox'>
      <label for='c1'> <a href="<?php echo site_url('backend/dokumen/pilih');?>">FORMAT</a> </label>
      
    </li>
    <li>
      <input id='c2' type='checkbox'>
      <label for='c2'><a href="<?php echo site_url('backend/dokumen/');?>">TELAHAAN</a></label>
    </li>

    <li>
      <input id='c3' type='checkbox'>
      <label for='c3'><a href="<?php echo site_url('forum');?>">FORUM KORDINASI</a></label>
    </li>

    <li>
      <input id='c3' type='checkbox'>
      <label for='c4'><a href="#">DATABASE PROSES</a></label>
    </li>
    
  </ul>
  <button><font color="black">PRODUK HUKUM</font></button>
</div>
<div style="">
  <center><a href="">Aplikasi perancangan produk hukum Kementerian Energi Sumber Daya Manusia</a></center>
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
