<div class="padding"> 

  <?php echo @$message; ?>

  <div class="box">
    <div class="box-header light lt">
      <h3>Kategori : Pembahasan Keputusan Menteri</h3>
      <small>Terdapat 5 Topik</small> 
      <br>
      <a href="<?php echo site_url('backend/forum/thread/new/') ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Tulis Baru</a>
    </div>
    <ul class="list inset m-a-0">
      <?php foreach ($forum as $fr) { ?> 
        <li class="list-item">
          <a href="#" class="list-left">
            <span class="w-40 circle accent">
              <i class="fa fa-envelope"></i>
            </span>
          </a>
          <div class="list-body">
            <div><a href="<?php echo site_url('backend/forum/thread/detail/'.$fr['id_thread']) ?>"><?php echo $fr['name'];?></a></div>
            <small class="text-muted text-ellipsis"><a href="<?php echo site_url('backend/forum/thread/detail/'.$fr['id_thread']) ?>"><?php echo $fr['judul_thread'];?></a></small>
            <small class="text-muted text-ellipsis"><a href="<?php echo site_url('backend/forum/thread/detail/'.$fr['id_thread']) ?>"><?php echo $fr['tanggal_thread']; ?></a></small>
            <p><a href="" class="btn btn-outline b-primary text-primary btn-xs pull-right">0 Jawaban</a></p>
          </div>
        </li>
      <?php } ?>


    </ul>
  </div> 

</div>
