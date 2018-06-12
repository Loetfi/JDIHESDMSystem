<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2><?php echo @$title; ?></h2>
    </div>
    <div class="table-responsive table" id="datatable">
    	<div class="padding">
    		<a href="<?php echo site_url('backend/dokumen/pilih') ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Tambah Baru</a>
      <table id="tableadms" class="table table-striped b-t b-b">
        <thead>
          <tr>
            <th  style="width:20%">Jenis Dokumen</th>
            <th  style="width:25%">Nama Dokumen</th>
            <th  style="width:25%">Dibuat pada</th>
            <th  style="width:15%">Aktifitas</th>
            <th  style="width:15%">Aksi</th>
          </tr> 
        </thead>
        <?php foreach ($data as $row) { ?>
          <tr>

            <td><?php echo $row['jenis_dokumen']; ?></td> 
            <td><?php echo $row['nama_dokumen']; ?></td>
            <td></td>
            <td></td>
            <td><div class='btn-group'><a href='detail' class='btn btn-primary btn-xs'> <i class='fa fa-eye'></i> </a><a href="<?php echo site_url('dokumen/detail/'.$row['id_dokumen']) ?>" class='btn btn-success btn-xs'> <i class='fa fa-pencil'></i></a> <a href='' class='btn btn-danger btn-xs'> <i class='fa fa-trash'></i> </a></div></td>
          </tr>
        <?php } ?>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>

 
