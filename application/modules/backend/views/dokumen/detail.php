<div class="row-col">
<div class="col-lg b-r"> 
<div class="padding">
<div class="row">
<!-- <div class="col-sm-4"> -->
<div class="box"> 
<div class="p-a-md b-b _600"><?php echo @$title; ?> - <?php echo @$detail_dok['jenis_dokumen']; ?>		</div>
<div class="padding"> 
<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum. -->

<div class="text-center">
<br><br>
<a href="" class="btn btn-xs btn-primary">Export Docx</a>
<a href="" class="btn btn-xs btn-primary">Export PDF</a>
</div>	 

Tandai sebagai finish dokumen <a href="" class="btn-xs btn-primary btn">Yes</a>

</div>
<div class="p-a-md b-b _600">Versioning Dokumen</div>
<div class="padding"> 
<?php //echo "<pre>"; print_r($dok_versi); echo "</pre>";?>
<table class="table ">
	<tr>
		<td>Nama </td>
		<td>ID Revisi</td>
		<td>ID Dok</td>
		<td>Status Revisi</td>
		<td>Nama Atasan</td>
	</tr>
<?php foreach($dok_versi as $dv){?>
	<tr>
		<td><?php echo $dv['name'];?> </td>
		<td><?php echo $dv['id_revisi'];?> </td>
		<td><?php echo $dv['id_dokumen'];?> </td>
		<td><?php echo $dv['status_revisi'];?> </td>
		<td><?php echo $dv['nama_atasan'];?></td>
		<td><a href="<?php echo base_url($dv['namafile']);?>" class="btn btn-xs btn-primary">Download</a></td>
	</tr>
<?php } ?>
</table> 
 
		
