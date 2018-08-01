
<div class="padding">

  <div class="box">
    <div class="box-header">
      <h2><?php echo @$title; ?></h2>
    </div>
    <div class="box-divider m-a-0"></div>
    <div class="box-body"> 
      <form role="form" action="<?php echo site_url('backend/forum/thread/proses') ?>" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Judul Post</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul Post" name="judul">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Apa yang sedang ingin kamu bahas ? </label>
          <textarea class="form-control" width="350%" name="isi"> </textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Pilih Kategori ? </label>
          <select name="kategori" class="form-control">
            <option value="1">Pembahasan : Rancangan Keputusan Menteri</option>
            <option value="2">Pembahasan : Rancangan Undang - undang</option>
          </select>
        </div>  
        <button type="submit" class="btn primary btn-xs m-b">Submit</button>
      </form>
    </div>
  </div>


</div>
