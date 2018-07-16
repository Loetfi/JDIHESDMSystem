<script>
	function addMenimbang(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-Menimbang'+counts+'" style="display:inline-block; margin-top:5px; width:100%;">'+
		'<div style="float:left; width:20%">'+
		'<input type="text" name="pointerMenimbang[]" class="form-control" placeholder="Pointer" />'+
		'<select name="nextPageMenimbang[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		'<option value="continue">Continues Page</option>'+
		'<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>'+
		'</select>'+
		'<select name="subLevelMenimbang[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		'<option value="0">SubLevel 0</option>'+
		'<option value="1">SubLevel 1</option>'+
		'<option value="2">SubLevel 2</option>'+
		'<option value="3">SubLevel 3</option>'+
		'<option value="4">SubLevel 4</option>'+
		'</select>'+
		'</div>'+
		'<div style="width:100%">'+
		'<textarea type="text" name="Menimbang[]" class="form-control" placeholder="Menimbang" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
		'<a href="javascript:void(0)" onclick="addMenimbang(this, '+counts+')" style="position:absolute; right:5%;" title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>'+
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
		'<select name="subLevelMengingat[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		'<option value="0">SubLevel 0</option>'+
		'<option value="1">SubLevel 1</option>'+
		'<option value="2">SubLevel 2</option>'+
		'<option value="3">SubLevel 3</option>'+
		'<option value="4">SubLevel 4</option>'+
		'</select>'+
		'</div>'+
		'<div style="width:100%">'+
		'<textarea type="text" name="Mengingat[]" class="form-control" placeholder="Mengingat" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
		'<a href="javascript:void(0)" onclick="addMengingat(this, '+counts+')" style="position:absolute; right:5%;" title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>'+
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
		'<select name="nextDiktum[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		'<option value="continue">Continues Page</option>'+
		'<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>'+
		'</select>'+
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
		'<a href="javascript:void(0)" onclick="addDiktum(this, '+counts+')" style="position:absolute; right:5%;" title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>'+
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
		'<select name="subLevelTembusan[]" class="form-control" style="cursor:pointer; margin-top:10px;">'+
		'<option value="0">SubLevel 0</option>'+
		'<option value="1">SubLevel 1</option>'+
		'<option value="2">SubLevel 2</option>'+
		'<option value="3">SubLevel 3</option>'+
		'<option value="4">SubLevel 4</option>'+
		'</select>'+
		'</div>'+
		'<div style="width:100%">'+
		'<textarea type="text" name="Tembusan[]" class="form-control" placeholder="Tembusan" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
		'<a href="javascript:void(0)" onclick="addTembusan(this, '+counts+')" style="position:absolute; right:5%;" title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>'+
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
<div class="row-col">
	<div class="col-lg b-r">
		<div class="padding">
			<div class="box">
				<div class="padding">
					<legend>Rancangan Keputusan Menteri</legend>
					<form class="width-100p" method="POST" id="form-keputusan" target="_blank">
						<center><p>KEPUTUSAN MENTERI ENERGI DAN SUMBER DAYA MINERAL</p>
							<p>REPUBLIK INDONESIA</p>
							<p>NOMOR :</p>
							<p>TENTANG</p>
						</p></center>
						<div class="form-group" style="margin-bottom:5px">
							<textarea name="super_judul" class="form-control" autocomplete="off" placeholder="Judul Rancangan" rows="4" required><?php echo @$detail_dokumen['judul'][0]['teks']; ?></textarea>
						</div>
						<center>
							<p>DENGAN RAHMAT TUHAN YANG MAHA ESA</p>
							<p>MENTERI ENERGI DAN SUMBER DAYA MINERAL REPUBLIK INDONESIA,</p>
						</center>
						<fieldset>
							<legend>Menimbang</legend>
							<div>
								<?php $namaMenimbang = 'Menimbang';?>
								<div class="form-group" id="text-<?php echo $namaMenimbang; ?>1" style="display:inline-block; width:100%;">
									<div style="float:left; width:20%">
										<input type="text" name="pointer<?php echo $namaMenimbang; ?>[]" class="form-control" placeholder="Pointer" />
										<select name="nextPage<?php echo $namaMenimbang; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select>
										<select name="subLevel<?php echo $namaMenimbang; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="0">SubLevel 0</option>
											<option value="1">SubLevel 1</option>
											<option value="2">SubLevel 2</option>
											<option value="3">SubLevel 3</option>
											<option value="4">SubLevel 4</option>
										</select>
									</div>
									<div style="width:100%">
										<textarea type="text" name="<?php echo $namaMenimbang; ?>[]" class="form-control" placeholder="Menimbang" rows="6" style="float:left; margin-left:5px; width:75%;" required></textarea>
										<a href="javascript:void(0)" onclick="addMenimbang(this, 1)" style="position:absolute; right:5%;" title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Mengingat</legend>
							<div>
								<?php $namaMengingat = 'Mengingat'; ?>
								<div class="form-group" id="text-<?php echo $namaMengingat; ?>1" style="display:inline-block; width:100%;">
									<div style="float:left; width:20%">
										<input type="text" name="pointer<?php echo $namaMengingat; ?>[]" class="form-control" placeholder="Pointer" />
										<select name="nextPage<?php echo $namaMengingat; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select>
										<select name="subLevel<?php echo $namaMengingat; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="0">SubLevel 0</option>
											<option value="1">SubLevel 1</option>
											<option value="2">SubLevel 2</option>
											<option value="3">SubLevel 3</option>
											<option value="4">SubLevel 4</option>
										</select>
									</div>
									<div style="width:100%">
										<textarea type="text" name="<?php echo $namaMengingat; ?>[]" class="form-control" placeholder="Mengingat" rows="6" style="float:left; margin-left:5px; width:75%;" required></textarea>
										<a href="javascript:void(0)" onclick="addMengingat(this, 1)" style="position:absolute; right:5%;" title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<!-- <legend>Menetapkan</legend> -->
							<div>
								<center><p>MEMUTUSKAN:</p></center>
								<?php $namaMemutuskan = 'Memutuskan'; ?>
								<div class="form-group" id="text-<?php echo $namaMemutuskan; ?>1" style="display:inline-block; width:100%;">
									<div style="float:left; width:20%">
										<input type="text" name="pointer<?php echo $namaMemutuskan; ?>[]" class="form-control" placeholder="Pointer" value="Menetapkan" disabled=""/>
										<!-- <select name="nextPage<?php echo $namaMemutuskan; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select> -->
										<!-- <select name="subLevel<?php echo $namaMemutuskan; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="0">SubLevel 0</option>
											<option value="1">SubLevel 1</option>
											<option value="2">SubLevel 2</option>
											<option value="3">SubLevel 3</option>
											<option value="4">SubLevel 4</option>
										</select> -->
									</div>
									<div style="width:100%">
										<p>KEPUTUSAN MENTERI ENERGI DAN SUMBER DAYA MINERAL TENTANG</p>
										<textarea type="text" name="<?php echo $namaMemutuskan; ?>[]" class="form-control" placeholder="Memutuskan/Menetapkan" rows="6" style="float:left; margin-left:5px; width:75%;" required></textarea>
										<a href="javascript:void(0)" onclick="addMemutuskan(this, 1)" style="position:absolute; right:5%;" title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Diktum</legend>
							<div>
								<?php $namaDiktum = 'Diktum'; ?>
								<div class="form-group" id="text-<?php echo $namaDiktum; ?>1" style="display:inline-block; width:100%;">
									<div style="float:left; width:20%">
										<input type="text" name="pointer<?php echo $namaDiktum; ?>[]" class="form-control" placeholder="Pointer" />
										<!-- <select name="nextPage<?php echo $namaDiktum; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select> -->
										<select name="subLevel<?php echo $namaDiktum; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="0">SubLevel 0</option>
											<option value="1">SubLevel 1</option>
											<option value="2">SubLevel 2</option>
											<option value="3">SubLevel 3</option>
											<option value="4">SubLevel 4</option>
										</select>
									</div>
									<div style="width:100%">
										<textarea type="text" name="<?php echo $namaDiktum; ?>[]" class="form-control" placeholder="Diktum" rows="6" style="float:left; margin-left:5px; width:75%;" required></textarea>
										<a href="javascript:void(0)" onclick="addDiktum(this, 1)" style="position:absolute; right:5%;" title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
							</div>
						</fieldset>

						<fieldset>
							<legend>Pejabat Penanda Tangan</legend>
							<div class="form-group">
								<textarea name="ttd" class="form-control" autocomplete="off" placeholder="Tanda Tangan" rows="4" style="width:95%" required></textarea>
							</div>
						</fieldset>
						<fieldset>
							<legend>Tembusan</legend>
							<div>
								<?php $namaTembusan = 'Tembusan'; ?>
								<div class="form-group" id="text-<?php echo $namaTembusan; ?>1">
									<div style="float:left; width:20%">
										<input type="text" name="pointer<?php echo $namaTembusan; ?>[]" class="form-control" placeholder="Pointer" />
										<select class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select>
										<select name="subLevel<?php echo $namaTembusan; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="0">SubLevel 0</option>
											<option value="1">SubLevel 1</option>
											<option value="2">SubLevel 2</option>
											<option value="3">SubLevel 3</option>
											<option value="4">SubLevel 4</option>
										</select>
									</div>
									<div style="width:100%">
										<textarea type="text" name="<?php echo $namaTembusan; ?>[]" class="form-control" placeholder="<?php echo $namaTembusan; ?>" rows="6" style="float:left; margin-left:5px; width:75%;" required></textarea>
										<a href="javascript:void(0)" onclick="addTembusan(this, 1)" style="position:absolute; right:5%;" title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset style="margin-top:30px;">
							<legend>
								Lampiran
								<a href="javascript:void(0)" style="font-size:12px; line-height:32px;" title="Hapus Lampiran" onclick=""><i class="fa fa-minus-square"></i></a>
								<a href="javascript:void(0)" style="font-size:12px; line-height:32px;" title="Tambah Lampiran" onclick="addLampiran(this)"><i class="fa fa-plus-square"></i></a>
							</legend>
							<div>
								<div class="form-group" id="text-lampiran1">
									<div class="form-group">
										<textarea name="perihal_lampiran[]" class="form-control margin-bottom-5px" autocomplete="off" placeholder="Perihal Lampiran" rows="4"></textarea>
										<input type="text" name="judul_lampiran[]" class="form-control float-left margin-bottom-5px" placeholder="Judul Lampiran" />
									</div>
									<div class="margin-left-right-top70px width-90p">
										<fieldset class="width-100p" id="fieldTabelLampiran">
											<legend>
												Tabel
												<a href="javascript:void(0)" style="font-size:12px; line-height:32px;" title="Hapus Tabel" onclick="removeTabelLampiran(this)">
													<i class="fa fa-minus-square"></i>
												</a>
												<a href="javascript:void(0)" style="font-size:12px; line-height:32px;" title="Tambah Tabel" onclick="addTabelLampiran(this, 1)" id="add_tabel">
													<i class="fa fa-plus-square"></i>
												</a>
											</legend>
											<div class="table1">
												<input type="text" name="subjudul[][]" class="form-control float-left margin-bottom-3px" placeholder="Sub Judul Lampiran" />
												<table class="tabel-lampiran1" border="1">
													<thead>
														<tr id="judul-tabel1">
															<th colspan="2">
																<input type="text" name="judultabel[][]" class="form-control form-control-sm float-left" placeholder="Judul Tabel" />
															</th>
															<th align="center">
																<a href="javascript:void(0)" style="line-height:32px; margin:0 auto;" title="Hapus Kolom" onclick="rmKolomLampiran(this, 1, 1)" id="deleteTableLampiran1">
																	<i class="fa fa-minus-square"></i>
																</a>
																<a href="javascript:void(0)" style="line-height:32px; margin:0 auto;" title="Tambah Kolom" onclick="addKolomLampiran(this, 1, 1, 1)" id="addTableLampiran1">
																	<i class="fa fa-plus-square"></i>
																</a>
															</th>
														</tr>
													</thead>
													<tbody id="tbody-tabel1">
														<tr class="content-tabel1">
															<td class="firstrow1" align="center" style="min-width:30px">
																<input type="text" name="kolom[0][header][][]" value="NO" style="border:none; background:transparent; text-align:center;" size="2" disabled />
															</td>
															<td>
																<input type="text" name="kolom[0][header][][]" class="form-control form-control-sm float-left" placeholder="Konten" />
															</td>
															<td class="lastrowheader1" align="center">
																<a href="javascript:void(0)" style="line-height:32px; margin:0 5px;" title="Tambah Baris" onclick="addRowLampiran(this, 1, 0, 1, 1)" id="addTableRow1">
																	<i class="fa fa-plus-square"></i>
																</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</fieldset>
									</div>
								</div>
							</div>
						</fieldset>
						<div class="form-group margin-top-5px">
							<button type="submit" class="btn btn-success" id="view_doc">Lihat Dokumen</button>
							<button type="submit" class="btn btn-success" id="save_doc">Simpan Dokumen</button>
						</div>
					</form>

					<script>
						$("#view_doc").click(function(e) {
							$("#form-keputusan").attr("action", "<?php echo site_url('keputusan_menteri_doc/sanusi'); ?>");
						});

						$("#save_doc").click(function(e) {
							$("#form-keputusan").attr("action", "<?php echo site_url('keputusan_menteri_doc/save_document'); ?>");
						});
					</script>
