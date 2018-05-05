<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>DataTables</h2>
    </div>
    <div class="table-responsive" id="datatable">
      <table data-ui-jp="dataTable" data-ui-options="{
          sAjaxSource: '<?=base_url('assetnew/api/datatable.json')?>',
          lengthChange: false,
          buttons: [ 'copy', 'excel', 'pdf', 'colvis' ],
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
            <th  style="width:20%">Rendering engine</th>
            <th  style="width:25%">Browser</th>
            <th  style="width:25%">Platform(s)</th>
            <th  style="width:15%">Engine version</th>
            <th  style="width:15%">CSS grade</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
