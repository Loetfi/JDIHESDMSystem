<div class="padding">
  <div class="box">
    <div class="box-header light lt">
      <h3><?php echo @$title; ?></h3>
      <small>Merupakan list dari data dokumen kesuluruhan, dari yang kamu buat sampai dengan yang kamu harus telaah.</small>
    </div>
    <div class="table-responsive table" id="datatables">
    	<div class="padding">
        <a href="<?php echo site_url('backend/dokumen/pilih') ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> Buat Rancangan</a>

        <br>
        <?php echo @$message; ?>


        <table class="table table-striped table-bordered table-hover" id="tableadms" width="100%"> 
          <thead> 
            <tr>     
              <th>ID</th>
              <th>Jenis Rancangan</th>
              <th>Nama Rancangan</th>
              <th>Dibuat pada</th>
              <th data-toggle="tooltip" title="Publish adalah sebuah status yang menyatakan bahwa dokumen ini benar-benar sudah terbuat dengan sempurna.">Publish</th>
              <th>Aksi</th>
            </tr> 
          </thead> 
          <tbody></tbody>   
        </table> 

      </div>  
    </div> 
  </div> 
</div>


<script> 
  $(function(){
    var thisDataTables = $('#tableadms').DataTable({ 
      scrollCollapse: true,
      fixedColumns:   {
        leftColumns: 0,
        rightColumns: 1
      },
      "order": [
      [0, "DESC"]
      ],
      "orderable" : true,
      "processing": true,
      "serverSide": true,
      "ajax": {
        "data" : {
          'masteritem' : '6', 
          'detail' : '<?=@urlencode($detail)?>',
          'update' : '<?=@urlencode($edit)?>', 
          'masteritem' : '#', 
        },

        "url": "<?=@$url?>", 
        "type": "POST", 

        complete: function () {
          $('.ttipDatatables').tooltip();
        },

        dataFilter: function(data){
          var json = jQuery.parseJSON( data );
          json.recordsTotal = json.data.recordsTotal;
          json.recordsFiltered = json.data.recordsFiltered;
          json.data = json.data.data;
        return JSON.stringify( json ); // return JSON string
      }
    },
  });

    
    
  });

</script>  

