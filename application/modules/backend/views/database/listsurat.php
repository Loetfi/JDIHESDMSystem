<div class="padding">

  <div class="box">
    <div class="box-header light lt">
      <h3>Daftar Database Rancangan dari Sektor <?php echo strtoupper(@$_GET['sektor']);?> </h3>
      <small>Merupakan list database rancangan dari sub sektor yang telah dipilih.</small>
    </div>
    <div class="table-responsive table" id="datatables">
    	<div class="padding">
        <table class="table table-striped table-bordered table-hover" id="tableadms" width="100%"> 
          <thead> 
            <tr>     
              <th>ID</th>
              <th>Jenis Dokumen</th>
              <th>Nama Dokumen</th>
              <th>Dibuat pada</th>
              <th>Publish</th>
              <th>Sektor</th>
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
          'param' : '<?=@($param)?>'
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

