<div class="row-col">
	<div class="col-lg b-r"> 
		<div class="padding">
			<div class="row">
				<!-- <div class="col-sm-4"> -->
					<div class="box"> 
						<div class="p-a-md b-b _600"><?php echo @$title; ?> - <?php echo @$detail_dok['jenis_dokumen']; ?>		</div>
						<div class="padding">  
							<div class="text-center">
								<br><br> 
							</div>	 

							<!-- Tandai sebagai finish dokumen <a href="" class="btn-xs btn-primary btn">Yes</a> -->

						</div>
						<div class="p-a-md b-b _600">Riwayat Dokumen</div>
						<div class="padding"> 
							<?php //echo "<pre>"; print_r($dok_versi); echo "</pre>";?>
							<div class="alert alert-info">
								<p>Kolom Nama bagian terisi karena dokumen di submit untuk ke bagian</p>
							</div>
							<?php if ($publish): ?>
								<div class="alert alert-info">
									<strong>Informasi !</strong> Dokumen sudah berhasil di Publis, tombol ubah tidak tersedia
								</div>

							<?php endif ?>
							<?php 

// $arr = [1,2,3,4,5];
// $numItems = count($arr);
// $i = 0;
// foreach($arr as $key=>$value) {
//   if(++$i === $numItems) {
//     echo "$i last index!";
//   }
// }    ?>
<table class="table table-hover table-bordered">
	<tr>
		<td>Nama </td>
		<td>ID Revisi</td>
		<td>ID Dok</td>
		<td>Status Revisi</td>
		<td>Nama Bagian</td>
		<td>Catatan</td>
		<td>Pada Tgl</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<!-- <td>Submit Pada Versi</td> -->
	</tr>
	<?php foreach($dok_versi as $dv){?>
		<tr>
			<td><?php echo $dv['name'];?> </td>
			<td><?php echo $dv['id_revisi'];?> </td>
			<td><?php echo $dv['id_dokumen'];?> </td>
			<td><?php echo $dv['status_revisi'];?> </td>
			<td><?php echo isset($dv['nama_atasan']) ? $dv['nama_atasan'] : '-';?></td>
			<td><?php echo $dv['catatan_submit']; ?></td>
			<td><?php echo date('d F Y H:i:s', strtotime($dv['cdate']));?> </td>
			<td><a href="<?php echo base_url($dv['namafile']);?>" class="btn btn-xs btn-primary" data-toggle="tooltip" title="Download, jika ingin men-download rancangan format versi ini.">Download</a></td>
			<td>
				<?php if ($publish==FALSE): ?>
					<a href="<?php echo site_url('Keputusan_menteri_doc/edit/'.$dv['id_dokumen'].'/'.$dv['status_revisi']);?>" class="btn btn-xs btn-success" data-toggle="tooltip" title="Ubah, jika kamu ingin merubah dan melakukan submit rancangan.">Ubah</a>
				<?php endif ?>
			</td>
		<!-- <td>
			<a href="<?php echo site_url('backend/dokumen/submit/'.$dv['id_dokumen']) ?>" class="btn btn-warning btn-xs">Submit</a>
			
		</td> -->
	</tr>
<?php } ?>
</table> 

<hr>





