

<div class="padding">
  <div class="navbar">
    <div class="pull-center">
      <!-- brand -->
      <a href="index.html" class="navbar-brand">
        <div data-ui-include="'<?=base_url('assets/logo/logo-esdm.png');?>'"></div>
        <!-- <img src="<?=base_url('assets/logo/logo-esdm.png');?>">  -->
        <!-- <span class="hidden-folded inline">Smart Legal Drafting - KESDM</span>  -->
      </a>
      <!-- / brand -->
    </div>
  </div>
</div>
<div class="b-t">
  <div class="center-block w-xxl w-auto-xs p-y-md text-center box">
    <div class="p-a-md">
      <div class=""> 

        <?php 
        echo $message;
        echo form_error('username', '<div class="alert alert-danger">', '</div>');
        echo form_error('password', '<div class="alert alert-danger">', '</div>');
        ?>

        <form name="form" action="<?php echo site_url('backend/auth/proses');?>" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" name="username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="password" name="password">
          </div>      
          <div class="m-b-md">        
            <label class="md-check">
              <input type="checkbox"><i class="primary"></i> Keep me signed in
            </label>
          </div>
          <button type="submit" class="btn btn-sm btn-primary p-x-lg">Masuk</button>
        </form>
        <div class="m-y">
          <a href="forgot-password.html" class="_600">Lupa Password?</a>
        </div> 
      </div>
    </div>
  </div>

  <!-- ############ LAYOUT END-->

