<style type="text/css">

body {
  font-family: 'Arial' , sans-serif;
  background: url(<?=base_url('background.png')?>);
  margin: 0;
}
.form-control{
  width: 100%;
  padding: .5rem .75rem;
  font-size: 1rem;
  line-height: 1.25;
  /*color: #000;*/
  color: #55595c;
  background-color: #fff;
  background-image: none;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 5px solid #55595c;
  border-top-color: #55595c;/*rgb(0, 0, 0);*/
  border-right-color:#55595c;/* rgb(0, 0, 0);*/
  border-bottom-color:#55595c;/* rgb(0, 0, 0);*/
  border-left-color: #55595c;/*rgb(0, 0, 0);*/
 /* border-radius: .25rem;
  border-top-color: rgb(0, 0, 0);
  border-right-color: rgb(0, 0, 0);
  border-bottom-color: rgb(0, 0, 0);
  border-left-color: rgb(0, 0, 0);*/
}
</style>

<div class="padding">
  <div class="navbar">
    <div class="pull-center">
      <!-- brand -->
      <a href="#" class="navbar-brand">
        <!-- <div data-ui-include="'<?=base_url('assets/logo/logo-esdm.png');?>'"></div>  -->
        <img src="<?=base_url('assets/logo/logo-esdm.png');?>" width="40px"> 
        <span class="hidden-folded inline">Smart Legal Drafting</span>
      </a>
      <!-- / brand -->
      <!--  -->
    </div>
  </div> 
</div>
<div class="b-t">
  <div class="center-block w-xxl w-auto-xs p-y-md text-center box">
    <div class="p-a-md">
      <div class="box"> 

        <?php 
        echo $message;
        echo form_error('username', '<div class="alert alert-danger">', '</div>');
        echo form_error('password', '<div class="alert alert-danger">', '</div>');
        ?>

        <form name="form" action="<?php echo site_url('backend/auth/proses');?>" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>      
          
          <button type="submit" class="btn btn-sm btn-primary p-x-lg">Masuk</button>
        </form>
        <div class="m-y">
          <a href="forgot-password.html" class="_600 btn btn-default">Masuk Sebagai Tamu</a>
        </div> 
      </div>
    </div>
  </div>

  <!-- ############ LAYOUT END-->

