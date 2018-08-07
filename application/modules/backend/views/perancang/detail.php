 

 <div class="row">
  <div class="col-sm-5">
    <div class="">
      <a href="#" class="thumbnail">
        <img src="<?php echo base_url('assets/logo/logo-esdm.png') ?>" alt="" width="100%">
      </a>
    </div>
    <center><h4><?php echo @$data_detail['name'] ?></h4></center>
  </div>
  <div class="col-sm-7">
    <br>
    <table class="table table-hover">
      <tr>
        <td>NIP</td>
        <td>:</td>
        <td><?php echo @$data_detail['nip'] ?></td>
      </tr>

      <tr>
        <td>GOL RUANG</td>
        <td>:</td>
        <td><?php echo @$data_detail['gol_ruang'] ?></td>
      </tr>

      <tr>
        <td>JABATAN</td>
        <td>:</td>
        <td><?php echo @$data_detail['jabatan'] ?></td>
      </tr>

      <tr>
        <td>UNIT ESELON 1</td>
        <td>:</td>
        <td><?php echo @$data_detail['unit_eselon_1'] ?></td>
      </tr>

      <tr>
        <td>UNIT ESELON 2</td>
        <td>:</td>
        <td><?php echo @$data_detail['unit_eselon_2'] ?></td>
      </tr>

      <tr>
        <td>Kontak</td>
        <td>:</td>
        <td><?php echo @$data_detail['kontak'] ?></td>
      </tr>

      </tr>
    </table> 
  </div>
 </div>
