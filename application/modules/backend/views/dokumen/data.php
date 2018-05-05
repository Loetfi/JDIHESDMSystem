<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2><?php echo @$title; ?></h2>
    </div>
    <div class="table-responsive table" id="datatable">
    	<div class="padding">
    		<a href="<?php echo site_url('backend/dokumen/pilih') ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Tambah Baru</a>
      <table data-ui-jp="dataTable" data-ui-options="{
          sAjaxSource: '<?=base_url('assetnew/api/datatable.json')?>',
          lengthChange: false,
          search : false, 
          aoColumns: [
            { mData: 'engine' },
            { mData: 'browser' },
            { mData: 'platform' },
            { mData: 'version' },
            { mData: 'grade' }
          ],
          'initComplete': function () {
            this.api().buttons().container()
              .appendTo( '#datatable .col-md-6:eq(0)' );
          }
        }" class="table table-striped b-t b-b">
        <thead>
          <tr>
            <th  style="width:20%">Jenis Dokumen</th>
            <th  style="width:25%">Nama Dokumen</th>
            <th  style="width:25%">Dibuat pada</th>
            <th  style="width:15%">Aktifitas</th>
            <th  style="width:15%">Aksi</th>
          </tr> 
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
