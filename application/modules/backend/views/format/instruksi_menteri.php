<script>
	function addMenimbang(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-Menimbang'+counts+'" style="display:inline-block; margin-top:5px; width:100%;">'+
		'<div style="float:left; width:20%">'+
		'<input type="text" name="pointerMenimbang[]" class="form-control" placeholder="Pointer" data-toggle="tooltip" title="" data-original-title="contoh : a. ( menggunakan titik dibelakang )"/>'+
		'<select name="nextPageMenimbang[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		'<option value="continue">Continues Page</option>'+
		'<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>'+
		'</select>'+
		'</select>'+
		'<input type="hidden" name="subLevelMenimbang[]" value="0">'+ 
		'</div>'+
		'<div style="width:100%">'+
		'<textarea type="text" name="Menimbang[]" class="form-control" placeholder="Menimbang" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
		'<a href="javascript:void(0)" onclick="addMenimbang(this, '+counts+')" style="position:absolute; right:2%;" title="Tambah Isi" class="btn btn-success btn-xs"><i class="fa fa-lg fa-plus"></i></a>'+
		'</div>'+
		'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)").attr('title', 'Hapus Isi');
		$(element).last().insertAfter($("#text-Menimbang"+count));
	}
	function addMengingat(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-Mengingat'+counts+'" style="display:inline-block; margin-top:5px; width:100%;">'+
		'<div style="float:left; width:20%">'+
		'<input type="text" name="pointerMengingat[]" class="form-control" placeholder="Pointer" />'+
		'<select name="nextPageMengingat[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		'<option value="continue">Continues Page</option>'+
		'<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>'+
		'</select>'+
		'<input type="hidden" name="subLevelMengingat[]" value="0">'+ 
		
		// '<select name="subLevelMengingat[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		// '<option value="0">SubLevel 0</option>'+
		// '<option value="1">SubLevel 1</option>'+
		// '<option value="2">SubLevel 2</option>'+
		// '<option value="3">SubLevel 3</option>'+
		// '<option value="4">SubLevel 4</option>'+
		// '</select>'+
		'</div>'+
		'<div style="width:100%">'+
		'<textarea type="text" name="Mengingat[]" class="form-control" placeholder="Mengingat" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
		'<a href="javascript:void(0)" onclick="addMengingat(this, '+counts+')" style="position:absolute; right:2%;" title="Tambah Isi" class="btn btn-xs btn-success"><i class="fa fa-lg fa-plus"></i></a>'+
		'</div>'+
		'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)").attr('title', 'Hapus Isi');
		$(element).last().insertAfter($("#text-Mengingat"+count));
	}
	function addMemutuskan(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-Memutuskan'+counts+'" style="display:inline-block; margin-top:5px; width:100%;">'+
		'<div style="float:left; width:20%">'+
		'<input type="text" name="pointerMemutuskan[]" class="form-control" placeholder="Pointer" />'+
		'<select name="nextMemutuskan[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		'<option value="continue">Continues Page</option>'+
		'<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>'+
		'</select>'+
		'<select name="subLevelMemutuskan[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		'<option value="0">SubLevel 0</option>'+
		'<option value="1">SubLevel 1</option>'+
		'<option value="2">SubLevel 2</option>'+
		'<option value="3">SubLevel 3</option>'+
		'<option value="4">SubLevel 4</option>'+
		'</select>'+
		'</div>'+
		'<div style="width:100%">'+
		'<textarea type="text" name="Memutuskan[]" class="form-control" placeholder="Memutuskan/Menetapkan" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
		'<a href="javascript:void(0)" onclick="addMemutuskan(this, '+counts+')" style="position:absolute; right:5%;" title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>'+
		'</div>'+
		'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)").attr('title', 'Hapus Isi');
		$(element).last().insertAfter($("#text-Memutuskan"+count));
	}
	function addDiktum(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-Diktum'+counts+'" style="display:inline-block; margin-top:5px; width:100%;">'+
		'<div style="float:left; width:20%">'+
		'<input type="text" name="pointerDiktum[]" class="form-control" placeholder="Pointer" />'+
		// '<select name="nextDiktum[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		// '<option value="continue">Continues Page</option>'+
		// '<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>'+
		// '</select>'+
		'<input type="hidden" name="nextDiktum[]" value="continue">'+ 
		'<select name="subLevelDiktum[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		'<option value="0">SubLevel 0</option>'+
		'<option value="1">SubLevel 1</option>'+
		'<option value="2">SubLevel 2</option>'+
		'<option value="3">SubLevel 3</option>'+
		'<option value="4">SubLevel 4</option>'+
		'</select>'+
		'</div>'+
		'<div style="width:100%">'+
		'<textarea type="text" name="Diktum[]" class="form-control" placeholder="Diktum" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
		'<a href="javascript:void(0)" onclick="addDiktum(this, '+counts+')" style="position:absolute; right:2%;" title="Tambah Isi" class="btn btn-xs btn-success"><i class="fa fa-lg fa-plus"></i></a>'+
		'</div>'+
		'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)").attr('title', 'Hapus Isi');
		$(element).last().insertAfter($("#text-Diktum"+count));

	}
	function addTembusan(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-Tembusan'+counts+'" style="display:inline-block; margin-top:5px; width:100%;">'+
		'<div style="float:left; width:20%">'+
		'<input type="text" name="pointerTembusan[]" class="form-control" placeholder="Pointer" />'+
		'<select class="form-control" style="cursor:pointer; margin-top:10px;">'+
		'<option value="continue">Continues Page</option>'+
		'<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>'+
		'</select>'+
		'<input type="hidden" name="subLevelTembusan[]" value="0">'+
		// '<select name="subLevelTembusan[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		// '<option value="0">SubLevel 0</option>'+
		// '<option value="1">SubLevel 1</option>'+
		// '<option value="2">SubLevel 2</option>'+
		// '<option value="3">SubLevel 3</option>'+
		// '<option value="4">SubLevel 4</option>'+
		// '</select>'+
		'</div>'+
		'<div style="width:100%">'+
		'<textarea type="text" name="Tembusan[]" class="form-control" placeholder="Tembusan" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
		'<a href="javascript:void(0)" onclick="addTembusan(this, '+counts+')" style="position:absolute; right:2%;" title="Tambah Isi" class="btn btn-xs btn-success"><i class="fa fa-lg fa-plus"></i></a>'+
		'</div>'+
		'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)").attr('title', 'Hapus Isi');
		$(element).last().insertAfter($("#text-Tembusan"+count));
	}
	function remove(ele) {
		$(ele).parent().parent().parent().remove();
	}
	function addKolomLampiran(ele, count, lampiran, table) {
		var eleJudul = $(ele).parent().parent(),
		countColspan = eleJudul.children().prop("colSpan") + 1;

		var getBodyRows = $(ele).parent().parent().parent().next().children();

		eleJudul.children().first().attr('colspan', countColspan);
		for(var i = 0; i < getBodyRows.length; i++) {
			var eleCopy = $(getBodyRows[i]).children('td:last').prev().clone();
			eleCopy.insertBefore($(getBodyRows[i]).children('td:last'));
		}
	}
	function rmKolomLampiran(ele, count, lampiran) {
		var eleJudul = $(ele).parent().parent(),
		countColspan = eleJudul.children().prop("colSpan") - 1,
		getRows = $(ele).parent().parent().parent().next().children();

		eleJudul.children().first().attr('colspan', countColspan);
		for(var i = 0; i < getRows.length; i++) {
			$(getRows[i]).children('td:last').prev().remove();
		}
	}
	function addRowLampiran(ele, count, row, lampiran, table) {
		var counts = count + 1, minCount = count - 1, numrow = row + 1, _table = table - 1;
		var eleContent = $(ele),
		tbodyContent = eleContent.parent().parent().parent(),
		countCol = eleContent.parent().parent().children(),
		countRow = eleContent.parent().parent().parent().children();
		eleContent.children().addClass('fa-minus-square').removeClass('fa-plus-square');
		eleContent.attr("onclick", "rmRowLampiran(this, "+count+", "+lampiran+", "+table+")").attr('title', 'Hapus Baris');

		var rows = '<tr class="content-tabel'+count+'">';
		rows += '<td class="firstrow'+counts+'" align="center" style="min-width:30px">'+
		'<input type="text" class="form-control-sm" name="kolom['+_table+'][content]['+numrow+'][]" value="'+countRow.length+'" style="border:none; background:transparent; text-align:center;" size="1" disabled />'+
		'</td>';
		for(var i = 0; i < (countCol.length - 2); i++) {
			rows += '<td><input type="text" name="kolom['+_table+'][content]['+numrow+'][]" class="form-control form-control-sm float-left" placeholder="Konten" /></td>';
		}
		rows += '<td class="lastrowcontent'+lampiran+'-'+table+'-'+counts+' numrows'+lampiran+'-'+table+'-'+numrow+'" align="center">'+
		'<a href="javascript:void(0)" style="line-height:32px; margin:0 5px;" title="Tambah Baris" onclick="addRowLampiran(this, '+counts+', '+numrow+', '+lampiran+', '+table+')">'+
		'<i class="fa fa-plus-square"></i>'+
		'</a>'+
		'</td>';
		$(tbodyContent).children().last('tr').after(rows);
	}
	function rmRowLampiran(ele, count, lampiran, table) {
		var minCount = count - 1, _minTable = table - 1, _table = table - 1;
		if($(ele).parent().parent().children('td:first').children().val().toLowerCase() === 'no') {
			bootoast.toast({
				message: 'Header Table Tidak Bisa Dihapus',
				type: 'warning'
			});
		}
		else {
			$(ele).parent().parent().remove();
			var eleContent = $(ele),
			tbodyContent = $('#tbody-tabel'+table),
			countRow = $(tbodyContent).children(),
			number = 0;

			for(var i = 1; i < countRow.length; i++) {
				var number = $(countRow[i]).children('td:first').children();
				var lastnum = $(countRow[i]).children('td:last').children();
				var betweennum = $(countRow[i]).children().nextUntil('td:last', 'td').children().not('a');
				$(countRow[i]).children('td:last').attr('class', 'lastrowcontent'+count+' numrows'+lampiran+'-'+_minTable+'-'+i);
				betweennum.attr('name', 'kolom['+_table+'][content]['+i+'][]');
				number.val(i);
			}
		}
	}
	function addTabelLampiran(ele, count) {
		var _count = count + 1;
		var new_table = '<div>'+$(ele).parent().parent().children('div:last').html()+'</div>';

		var replace_1 = $(new_table).find('table.tabel-lampiran'+count).attr('class', 'tabel-lampiran'+_count);
		var totalRow = replace_1.children('tbody').children('tr:first').children().prevAll();
		new_table = '<div>'+replace_1.parent().html()+'</div>';

		var replace_2 = $(new_table).contents().find('tr#judul-tabel'+count).attr('id', 'judul-tabel'+_count);
		new_table = '<div>'+replace_2.parent().parent().parent().html()+'</div>';

		var replace_3 = $(new_table).contents().find('tbody#tbody-tabel'+count).attr('id', 'tbody-tabel'+_count);
		new_table = '<div>'+replace_3.parent().parent().html()+'</div>';

		var replace_3_1 = $(new_table).contents().find('input[name^="kolom['+(count-1)+']"]');
		replace_3_1.each(function(num, ele) {
			if(num > totalRow.length) {
				$(this).attr('name', 'kolom['+count+'][content][][]');
			}
			else {
				$(this).attr('name', 'kolom['+count+'][header][][]');
			}
		});
		new_table = replace_3_1.parent().parent().parent().parent().parent();

		var replace_4 = $(new_table).contents().find('tr.content-tabel'+count).find('a#addTableRow'+count).attr('id', 'addTableRow'+_count).attr('onclick', 'addRowLampiran(this, 1, 0, 1, '+_count+')');
		new_table = '<div>'+replace_4.parent().parent().parent().parent().parent().html()+'</div>';

		var replace_5 = $(new_table).contents().find('tr.content-tabel'+count).attr('class', 'content-tabel'+_count);
		new_table = '<div>'+replace_5.parent().parent().parent().html()+'</div>';

		var replace_6 = $(new_table).contents().find('a#deleteTableLampiran'+count).attr('id', 'deleteTableLampiran'+_count).attr('onclick', 'rmKolomLampiran(this, '+_count+', '+count+')');
		new_table = '<div>'+replace_6.parent().parent().parent().parent().parent().html()+'</div>';

		var replace_7 = $(new_table).contents().find('a#addTableLampiran'+count).attr('id', 'addTableLampiran'+_count).attr('onclick', 'addKolomLampiran(this, 1, 1, '+_count+')');
		new_table = '<div>'+replace_7.parent().parent().parent().parent().parent().html()+'</div>';

		var replace_8 = $(new_table).contents().find('td.lastrowheader'+count).attr('class', 'lastrowheader'+_count);
		new_table = '<div class="table'+_count+' margin-top-5px">'+replace_8.parent().parent().parent().parent().html()+'</div>';

		$(ele).attr('onclick', 'addTabelLampiran(this, '+_count+')');
		$('#fieldTabelLampiran').children().last().after(new_table);
	}

	function removeTabelLampiran(ele) {
		var total_tabel = $('#fieldTabelLampiran').children('div').length;
		var _count = total_tabel - 1;
		if(_count > 0) {
			$('#add_tabel').attr('onclick', 'addTabelLampiran(this, '+_count+')');
			$('#fieldTabelLampiran').children('div:last').remove();
		}
		else {
			alert('Tidak Dapat Menghapus Tabel Lagi!');
		}
	}

	function addLampiran(ele) {
		var lampiran = $(ele).parent().parent().html();
		$('#form-keputusan').children('fieldset:last').after('<fieldset style="margin-top:30px">'+lampiran+'</fieldset>');
	}
</script>
<style type="text/css">

.form-control{
	width: 100%;
	padding: .5rem .75rem;
	font-size: 1rem;
	line-height: 1.25;
	/*color: #000;*/
	color: #55595c;
	background-color: #fff;
	background-image: none;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	border: 2px solid #55595c;
	border-top-color: #55595c;/*rgb(0, 0, 0);*/
	border-right-color:#55595c;/* rgb(0, 0, 0);*/
	border-bottom-color:#55595c;/* rgb(0, 0, 0);*/
	border-left-color: #55595c;/*rgb(0, 0, 0);*/ 
}
</style>
<div class="row-col">
	<div class="col-lg b-r">
		<div class="padding">
			<div class="box">
				<div class="box-header light lt">
					<h3>Rancangan <?php echo  @$sub_title; ?></h3>
					<small>Membuat sebuah dokumen <?php echo  @$sub_title; ?></small>
				</div>
				<div class="padding"> 
					<form class="width-100p" method="POST" id="form-keputusan" target="_blank" enctype="multipart/form-data">
						<fieldset> 
							<div class="form-group">
								<label for="">Nama Dokumen</label>
								<input type="text" class="form-control" name="nama_dokumen" placeholder="Masukan nama inisial dari dokumen yang akan dibuat" required="" data-toggle="tooltip" title="Masukan nama inisial dari dokumen yang akan dibuat">
							</div> 
						</fieldset>
						<hr>
						<center><p>INSTRUKSI</p>
							<p>MENTERI ENERGI DAN SUMBER DAYA MINERAL</p>
							<p>NOMOR :</p>
							<p>TENTANG</p>
						</p></center>
						<div class="form-group" style="margin-bottom:5px">
							<textarea name="super_judul" class="form-control" autocomplete="off" placeholder="Judul Rancangan" rows="4" required="" data-toggle="tooltip" title="Masukan Judul Rancangan Keputusan Menteri yang akan dibuat"><?php echo @$detail_dokumen['judul'][0]['teks']; ?>PENAGIHAN PEMBAYARAN BONUS TANDA TANGAN (SIGNATURE BONUS) DAN KOMITMEN PASTI EKSPLORASI 
PADA KEGIATAN USAHA HULU MINYAK DAN GAS BUMI 
KEPADA KONTRAKTOR KONTRAK KERJA SAMA MINYAK DAN GAS BUMI
</textarea>
						</div>
						<center>
							<p>MENTERI ENERGI DAN SUMBER DAYA MINERAL,</p>
						</center>

						<hr>
						<fieldset>
							<div class="form-group" style="margin-bottom:5px">
							<textarea name="paragraf" class="form-control" autocomplete="off" placeholder="Paragraf" rows="4" required="" data-toggle="tooltip" title="Paragraf"><?php echo @$detail_dokumen['judul'][0]['teks']; ?>Dalam rangka mendorong percepatan pemenuhan kewajiban pembayaran bonus tanda tangan (signature bonus) dan kewajiban finansial atas pengakhiran kontrak kerja sama (terminasi) yang belum memenuhi komitmen pasti eksplorasi oleh beberapa Kontraktor Kontrak Kerja Sama Minyak dan Gas Bumi, dengan ini menginstruksikan:</textarea>
						</div>
						</fieldset>
						<hr>
						<fieldset>
							<div>
								<?php $namaMenimbang = 'Menimbang';?>
								<div class="form-group" id="text-<?php echo $namaMenimbang; ?>1" style="display:inline-block; width:100%;">
									<div style="float:left; width:20%"> 
										<input type="text" name="pointer<?php echo $namaMenimbang; ?>[]" class="form-control" placeholder="Pointer" data-toggle="tooltip" title="contoh : a. ( menggunakan titik dibelakang )" value="Kepada"/>
										<select name="nextPage<?php echo $namaMenimbang; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;" data-toggle="tooltip" title="Jika dalam kondisi dokumen harus menggunakan halaman baru ( potrait / lanskap ) gunakan fitur ini. Continues Page menjadi bagian default dari pengaturan ini.">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select>
										<input type="hidden" name="subLevel<?php echo $namaMenimbang; ?>[]" value="0"> 
									</div>
									<div style="width:100%">
										<textarea data-toggle="tooltip" title="sistem akan memberikan otomatis simbol ; ( titik koma) pada akhir paragraf, apabila sistem tidak memberi simbol ; maka kamu harus menambahkannya. " type="text" name="<?php echo $namaMenimbang; ?>[]" class="form-control" placeholder="Text" rows="6" style="float:left; margin-left:5px; width:75%;">Kepala Satuan Kerja Khusus Pelaksana Kegiatan Usaha Hulu Minyak dan Gas Bumi.</textarea>
										<a href="javascript:void(0)" onclick="addMenimbang(this, 1)" style="position:absolute; right:2%;" title="Tambah Isi" class="btn btn-success btn-xs"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
							</div>
						</fieldset>
						<hr>
						<fieldset>
							<p>Untuk : </p>
							<div>
								<?php $namaDiktum = 'Diktum'; ?>
								<div class="form-group" id="text-<?php echo $namaDiktum; ?>1" style="display:inline-block; width:100%;">
									<div style="float:left; width:20%;">
										<input type="text" name="pointer<?php echo $namaDiktum; ?>[]" class="form-control" placeholder="Pointer" data-toggle="tooltip" title="Isian ini akan otomatis membuat huruf menjadi kapital, contoh : KESATU"/>
										<!-- <select name="nextPage<?php echo $namaDiktum; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select> -->
										<select name="subLevel<?php echo $namaDiktum; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;" data-toggle="tooltip" title="Ini adalah kedalaman dari poin-poin, biarkan di sublevel 0 jika tidak ada perubahan.">
											<option value="0">SubLevel 0</option>
											<option value="1">SubLevel 1</option>
											<option value="2">SubLevel 2</option>
											<option value="3">SubLevel 3</option>
											<option value="4">SubLevel 4</option>
										</select>
									</div>
									<div style="width:100%">
										<textarea data-toggle="tooltip" title="Isian ini harap diisi dengan sebagai mestinya." type="text" name="<?php echo $namaDiktum; ?>[]" class="form-control" placeholder="Text" rows="6" style="float:left; margin-left:5px; width:75%;" required></textarea>
										<a href="javascript:void(0)" onclick="addDiktum(this, 1)" style="position:absolute; right:2%;" title="Tambah Isi" class="btn btn-success btn-xs"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
							</div>
						</fieldset>
						 
						<hr>
						<fieldset>
							<legend>Pejabat Penanda Tangan</legend>
							<div class="form-group">
								<input name="ttd" class="form-control" autocomplete="off" placeholder="Nama Penanda Tangan" rows="4" style="width:95%" required> 
							</div>
						</fieldset> 
						<hr>
						<fieldset> 
							<legend>Unggah Lampiran</legend>
							<input type="file" name="userfile">
						</fieldset> 
						<hr>
						<div class="form-group margin-top-5px">
							<button type="submit" class="btn btn-success btn-xs" id="view_doc">Lihat Format</button>
							
							<?php 
							if ($this->session->userdata('login_id')) {
								echo '<button type="submit" class="btn btn-primary btn-xs" id="save_doc">Simpan Dokumen</button>';
							}
							?>



						</div>
					</form>

					<script>
						$("#view_doc").click(function(e) {
							$("#form-keputusan").attr("action", "<?php echo site_url('backend/format/instruksi_menteri/sanusi'); ?>");
						});

						$("#save_doc").click(function(e) {
							$("#form-keputusan").attr("action", "<?php echo site_url('backend/format/instruksi_menteri/save_document'); ?>");
						});

						$('textarea[name="super_judul"]').keyup(function() {
							$('textarea[name^="Memutuskan"]').text($(this).val());
						});

						$('textarea[name^="Menimbang"], textarea[name^="Mengingat"]').blur(function() {
							var str = $(this).val(),
							strcheck = (str === '') ? '' : str+';';
							$(this).val(strcheck);
						})
						.focus(function() {
							var str = $(this).val();
							$(this).val(str.slice(0, -1));
						});

						$('textarea[name^="Memutuskan"]').blur(function() {
							var str = $(this).val(),
							strcheck = (str === '') ? '' : str+'.';
							$(this).val(strcheck);
						}).focus(function() {
							var str = $(this).val();
							$(this).val(str.slice(0, -1));
						});

						$('input[name^="pointerDiktum"]').keyup(function() {
							$(this).val(($(this).val()).toUpperCase());
						});
					</script>
