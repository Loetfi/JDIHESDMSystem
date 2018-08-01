
<div class="padding">

  <div class="box">
    <div class="box-header">
      <h2><?php echo @$sub_title; ?></h2>
    </div>
    <div class="box-divider m-a-0"></div>
    <div class="box-body"> 

      <?php echo @$message; ?>

      <div class="form-group"> 
        <button class="btn info btn-xs">Kategori : Rancangan Keputusan Menteri</button> 
        <button class="btn info btn-xs">Dari : <?php echo @$detail['name'];?></button> 
        <button class="btn info btn-xs">Pada : <?php echo @date('d F Y H:i:s',strtotime($detail['tanggal_thread']));?></button>  
      </div>
      <div class="form-group"> 
        <?php echo @$detail['isi_thread']; ?>
      </div> 

      <hr>

      <h6>Balasan</h6>  

      <ul class="list inset m-a-0">  
      <?php if (!empty($balasan)) {
        foreach ($balasan as $balas) { ?>
        <li class="list-item">
          <a href="#" class="list-left">
            <span class="w-40 circle accent">
              <i class="fa fa-user"></i>
            </span>
          </a>
          <div class="list-body">
            <div><a href="#" class="text-muted"><?php echo @$balas['name'] ?></a></div>
            <small class="text-muted text-ellipsis"><?php echo @date('d F Y H:i:s',strtotime($balas['tanggal_balasan']));?></small>
            <br>
            <small class=""><?php echo @$balas['isi_balasan']; ?></small>
          </div>
        </li> 
      <?php } } ?>
      </ul>

      <form action="<?php echo site_url('backend/forum/thread/balasan_proses/'.$id_forum);?>" method="POST">
        
       <div class="form-group">
          <label class="success label">Beri Tanggapan</label>
          <textarea rows="5" class="form-control" name="isi_balasan"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-xs btn-success">Kirim</button>
        </div>
        
      </form>
    </div>
  </div>


</div>
