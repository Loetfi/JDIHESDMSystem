<div class="row-col">
	<div class="col-lg b-r"> 
		<div class="padding">
			<div class="box">
				<div class="padding">
<legend>Buat Dokumen Keputusan Menteri</legend>

<script>
	function addMenimbang(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-menimbang'+counts+'" style="display:inline-block; margin-top:5px; width:100%;">'+
							'<div style="float:left; width:20%">'+
								'<input type="text" name="poinMenimbang[]" class="form-control" placeholder="Pointer" />'+
								'<select class="form-control" style="cursor:pointer; margin-top:10px;">'+
									'<option value="0">Continues Page</option>'+
									'<option value="0">Next Page</option>'+
								'</select>'+
								'<select class="form-control" style="cursor:pointer; margin-top:10px;">'+
									'<option value="0">SubLevel 0</option>'+
									'<option value="0">SubLevel 1</option>'+
									'<option value="0">SubLevel 2</option>'+
									'<option value="0">SubLevel 3</option>'+
									'<option value="0">SubLevel 4</option>'+
								'</select>'+
							'</div>'+
							'<div style="width:100%">'+
								'<textarea type="text" name="menimbang[]" class="form-control" placeholder="Menimbang" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
								'<a href="javascript:void(0)" onclick="addMenimbang(this, '+counts+')" style="position:absolute; right:5%;"><i class="fa fa-lg fa-plus"></i></a>'+
							'</div>'+
						'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)");
		$(element).last().insertAfter($("#text-menimbang"+count));
	}
	function addMengingat(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-mengingat'+counts+'" style="display:inline-block; margin-top:5px; width:100%;">'+
							'<div style="float:left; width:20%">'+
								'<input type="text" name="poinMengingat[]" class="form-control" placeholder="Pointer" />'+
								'<select class="form-control" style="cursor:pointer; margin-top:10px;">'+
									'<option value="0">Continues Page</option>'+
									'<option value="0">Next Page</option>'+
								'</select>'+
								'<select class="form-control" style="cursor:pointer; margin-top:10px;">'+
									'<option value="0">SubLevel 0</option>'+
									'<option value="0">SubLevel 1</option>'+
									'<option value="0">SubLevel 2</option>'+
									'<option value="0">SubLevel 3</option>'+
									'<option value="0">SubLevel 4</option>'+
								'</select>'+
							'</div>'+
							'<div style="width:100%">'+
								'<textarea type="text" name="mengingat[]" class="form-control" placeholder="Mengingat" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
								'<a href="javascript:void(0)" onclick="addMengingat(this, '+counts+')" style="position:absolute; right:5%;"><i class="fa fa-lg fa-plus"></i></a>'+
							'</div>'+
						'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)");
		$(element).last().insertAfter($("#text-mengingat"+count));
	}
	function addPasal(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-pasal'+counts+'" style="display:inline-block; margin-top:5px; width:100%;">'+
							'<div style="float:left; width:20%">'+
								'<input type="text" name="poinPasal[]" class="form-control" placeholder="Pointer" />'+
								'<select class="form-control" style="cursor:pointer; margin-top:10px;">'+
									'<option value="0">Continues Page</option>'+
									'<option value="0">Next Page</option>'+
								'</select>'+
								'<select class="form-control" style="cursor:pointer; margin-top:10px;">'+
									'<option value="0">SubLevel 0</option>'+
									'<option value="0">SubLevel 1</option>'+
									'<option value="0">SubLevel 2</option>'+
									'<option value="0">SubLevel 3</option>'+
									'<option value="0">SubLevel 4</option>'+
								'</select>'+
							'</div>'+
							'<div style="width:100%">'+
								'<textarea type="text" name="pasal[]" class="form-control" placeholder="Pasal" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
								'<a href="javascript:void(0)" onclick="addPasal(this, '+counts+')" style="position:absolute; right:5%;"><i class="fa fa-lg fa-plus"></i></a>'+
							'</div>'+
						'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)");
		$(element).last().insertAfter($("#text-pasal"+count));
	}
	function addTembusan(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-tembusan'+counts+'" style="display:inline-block; margin-top:5px; width:100%;">'+
							'<div style="float:left; width:20%">'+
								'<input type="text" name="poinTembusan[]" class="form-control" placeholder="Pointer" />'+
								'<select class="form-control" style="cursor:pointer; margin-top:10px;">'+
									'<option value="0">Continues Page</option>'+
									'<option value="0">Next Page</option>'+
								'</select>'+
								'<select class="form-control" style="cursor:pointer; margin-top:10px;">'+
									'<option value="0">SubLevel 0</option>'+
									'<option value="0">SubLevel 1</option>'+
									'<option value="0">SubLevel 2</option>'+
									'<option value="0">SubLevel 3</option>'+
									'<option value="0">SubLevel 4</option>'+
								'</select>'+
							'</div>'+
							'<div style="width:100%">'+
								'<textarea type="text" name="tembusan[]" class="form-control" placeholder="Tembusan" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>'+
								'<a href="javascript:void(0)" onclick="addTembusan(this, '+counts+')" style="position:absolute; right:5%;"><i class="fa fa-lg fa-plus"></i></a>'+
							'</div>'+
						'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)");
		$(element).last().insertAfter($("#text-tembusan"+count));
	}
	function remove(ele) {
		$(ele).parent().parent().parent().remove();
	}
	function addKolomLampiran(ele, count) {console.log($(ele).parent().parent().parent().next().children('tr:first').next().children('td:last').hasClass('numrows'));
		var eleJudul = $(ele).parent().parent()/*$('#judul-tabel'+count)*/, 
			eleContent = $(ele).parent().parent().parent().next().children()/*$('.content-tabel'+count)*/, 
			countColspan = eleJudul.children().prop("colSpan") + 1,
			lastRowHeader = $(ele).parent().parent().parent().next().children('tr:first').children('td:last').attr('class'),
			minCount = count - 1;
		//var getColumnArray = Object.keys(eleContent).filter(function(a) {return /^\d+$/.test(a);});
		eleJudul.children().first().attr('colspan', countColspan);
		$('<td><input type="text" name="kolom['+minCount+'][header][]" class="form-control float-left" placeholder="Konten" /></td>').insertBefore('.'+lastRowHeader);
		for(var i = 0; i < (eleContent.length); i++) {
			$('<td><input type="text" name="kolom['+minCount+'][content]['+i+'][]" class="form-control float-left" placeholder="Konten" /></td>').insertBefore(".numrows"+i);
		}
	}
	function rmKolomLampiran(ele, count) {
		var eleJudul = $(ele).parent().parent()/*$('#judul-tabel'+count)*/, 
			lastRowHeader = $('.lastrowheader'+count), 
			countColspan = eleJudul.children().prop("colSpan") - 1,
			/*eleJudulContent = $('#judul-tabel'+count),*/ 
			lastRowContent = $('.lastrowcontent'+count), 
			countColspan = eleJudul.children().prop("colSpan") - 1;
		if(lastRowHeader.parent().children().length > 3) {
			lastRowHeader.prev().remove();
			eleJudul.children().first().attr('colspan', countColspan);
		}
		if(lastRowContent.parent().children().length > 3) {
			lastRowContent.prev().remove();
			eleJudul.children().first().attr('colspan', countColspan);
		}
	}
	function addRowLampiran(ele, count, row) {
		var counts = count + 1, minCount = count - 1, numrow = row + 1;
		var eleContent = $(ele),
			tbodyContent = eleContent.parent().parent().parent(),
			countCol = eleContent.parent().parent().children(),
			countRow = eleContent.parent().parent().parent().children();
		eleContent.children().addClass('fa-minus-square').removeClass('fa-plus-square');
		eleContent.attr("onclick","rmRowLampiran(this, "+count+")");
		var rows = '<tr class="content-tabel'+count+'">';
		rows += '<td class="firstrow1" align="center" style="min-width:30px">'+
				'<input type="text" name="kolom['+minCount+'][content]['+numrow+'][]" value="'+countRow.length+'" style="border:none; background:transparent; text-align:center;" size="1" disabled />'+
				'</td>';
		for(var i = 0; i < (countCol.length - 2); i++) {
			rows += '<td><input type="text" name="kolom['+minCount+'][content]['+numrow+'][]" class="form-control float-left" placeholder="Konten" /></td>';
		}
		rows += '<td class="lastrowcontent'+count+' numrows'+numrow+'" align="center">'+
				'<a href="javascript:void(0)" style="line-height:32px; margin:0 5px;" onclick="addRowLampiran(this, '+count+', '+numrow+')">'+
				'<i class="fa fa-plus-square"></i>'+
				'</a>'+
				'</td>';
		$(tbodyContent).children().last('tr').after(rows);
	}
	function rmRowLampiran(ele, count) {
		var minCount = count - 1;
		if($(ele).parent().parent().children('td:first').children().val().toLowerCase() === 'no') {
			bootoast.toast({
				message: 'Header Table Tidak Bisa Dihapus',
				type: 'warning'
			});
		}
		else {
			$(ele).parent().parent().remove();
			var eleContent = $(ele),
				tbodyContent = $('#tbody-tabel'+count),
				countRow = $(tbodyContent).children(),
				number = 0;
				
			for(var i = 1; i < countRow.length; i++) {
				var number = $(countRow[i]).children('td:first').children();
				var lastnum = $(countRow[i]).children('td:last').children();
				var betweennum = $(countRow[i]).children().nextUntil('td:last', 'td').children().not('a');
				$(countRow[i]).children('td:last').attr('class', 'lastrowcontent'+count+' numrows'+i);
				betweennum.attr('name', 'kolom['+minCount+'][content]['+i+'][]');
				number.val(i);
			}
		}
	}
	function addTabelLampiran(ele, count) {
		//console.log($(ele).parent().next().wrap('<div></div>').parent().html());
		$('#fieldTabelLampiran'+count).append('<div class="margin-top-5px">'+$(ele).parent().next().html()+'</div>');
	}
</script>
<form class="width-100p" method="POST" action="<?php echo site_url('Keputusan_mentri_pdf/generatePdf'); ?>" target="_blank">
	<div class="form-group" style="margin-bottom:5px">
		<textarea name="super_judul" class="form-control" autocomplete="off" placeholder="Judul Dokumen" rows="4"></textarea>
	</div>
	<fieldset>
		<legend>Menimbang</legend>
		<div>
			<div class="form-group" id="text-menimbang1" style="display:inline-block; width:100%;">
				<div style="float:left; width:20%">
					<input type="text" name="poinMenimbang[]" class="form-control" placeholder="Pointer" />
					<select class="form-control" style="cursor:pointer; margin-top:10px;">
						<option value="0">Continues Page</option>
						<option value="0">Next Page</option>
					</select>
					<select class="form-control" style="cursor:pointer; margin-top:10px;">
						<option value="0">SubLevel 0</option>
						<option value="0">SubLevel 1</option>
						<option value="0">SubLevel 2</option>
						<option value="0">SubLevel 3</option>
						<option value="0">SubLevel 4</option>
					</select>
				</div>
				<div style="width:100%">
					<textarea type="text" name="menimbang[]" class="form-control" placeholder="Menimbang" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>
					<a href="javascript:void(0)" onclick="addMenimbang(this, 1)" style="position:absolute; right:5%;"><i class="fa fa-lg fa-plus"></i></a>
				</div>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Mengingat</legend>
		<div>
			<div class="form-group" id="text-mengingat1" style="display:inline-block; width:100%;">
				<div style="float:left; width:20%">
					<input type="text" name="poinMengingat[]" class="form-control" placeholder="Pointer" />
					<select class="form-control" style="cursor:pointer; margin-top:10px;">
						<option value="0">Continues Page</option>
						<option value="0">Next Page</option>
					</select>
					<select class="form-control" style="cursor:pointer; margin-top:10px;">
						<option value="0">SubLevel 0</option>
						<option value="0">SubLevel 1</option>
						<option value="0">SubLevel 2</option>
						<option value="0">SubLevel 3</option>
						<option value="0">SubLevel 4</option>
					</select>
				</div>
				<div style="width:100%">
					<textarea type="text" name="mengingat[]" class="form-control" placeholder="Mengingat" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>
					<a href="javascript:void(0)" onclick="addMengingat(this, 1)" style="position:absolute; right:5%;"><i class="fa fa-lg fa-plus"></i></a>
				</div>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Menetapkan</legend>
		<div>
			<div class="form-group" id="text-menetapkan" style="display:inline-block; width:100%;">
				<div style="float:left; width:20%">
					<select class="form-control" style="cursor:pointer">
						<option value="0">Continues Page</option>
						<option value="0">Next Page</option>
					</select>
				</div>
				<div style="float: left; margin-left:5px; width: 75%;">
					<textarea type="text" name="menetapkan" class="form-control" placeholder="Menetapkan" rows="6" style="width:100%;"></textarea>
				</div>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Pasal</legend>
		<div>
			<div class="form-group" id="text-pasal1">
				<div style="float:left; width:20%">
					<input type="text" name="poinPasal[]" class="form-control" placeholder="Pointer" />
					<select class="form-control" style="cursor:pointer; margin-top:10px;">
						<option value="0">Continues Page</option>
						<option value="0">Next Page</option>
					</select>
					<select class="form-control" style="cursor:pointer; margin-top:10px;">
						<option value="0">SubLevel 0</option>
						<option value="0">SubLevel 1</option>
						<option value="0">SubLevel 2</option>
						<option value="0">SubLevel 3</option>
						<option value="0">SubLevel 4</option>
					</select>
				</div>
				<div style="width:100%">
					<textarea type="text" name="pasal[]" class="form-control" placeholder="Pasal" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>
					<a href="javascript:void(0)" onclick="addPasal(this, 1)" style="position:absolute; right:5%;"><i class="fa fa-lg fa-plus"></i></a>
				</div>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Tanda Tangan</legend>
		<div class="form-group">
			<textarea name="ttd" class="form-control" autocomplete="off" placeholder="Tanda Tangan" rows="4" style="width:95%"></textarea>
		</div>
	</fieldset>
	<fieldset>
		<legend>Tembusan</legend>
		<div>
			<div class="form-group" id="text-tembusan1">
				<div style="float:left; width:20%">
					<input type="text" name="poinTembusan[]" class="form-control" placeholder="Pointer" />
					<select class="form-control" style="cursor:pointer; margin-top:10px;">
						<option value="0">Continues Page</option>
						<option value="0">Next Page</option>
					</select>
					<select class="form-control" style="cursor:pointer; margin-top:10px;">
						<option value="0">SubLevel 0</option>
						<option value="0">SubLevel 1</option>
						<option value="0">SubLevel 2</option>
						<option value="0">SubLevel 3</option>
						<option value="0">SubLevel 4</option>
					</select>
				</div>
				<div style="width:100%">
					<textarea type="text" name="tembusan[]" class="form-control" placeholder="Tembusan" rows="6" style="float:left; margin-left:5px; width:75%;"></textarea>
					<a href="javascript:void(0)" onclick="addTembusan(this, 1)" style="position:absolute; right:5%;"><i class="fa fa-lg fa-plus"></i></a>
				</div>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>
			Lampiran
			<a href="javascript:void(0)" style="font-size:12px; line-height:32px;" title="Hapus Lampiran" onclick=""><i class="fa fa-minus-square"></i></a>
			<a href="javascript:void(0)" style="font-size:12px; line-height:32px;" title="Tambah Lampiran" onclick=""><i class="fa fa-plus-square"></i></a>
		</legend>
		<div>
			<div class="form-group" id="text-lampiran1">
				<div class="form-group">
					<textarea name="perihal_lampiran[]" class="form-control margin-bottom-5px" autocomplete="off" placeholder="Perihal Lampiran" rows="4"></textarea>
					<input type="text" name="judul_lampiran[]" class="form-control float-left margin-bottom-5px" placeholder="Judul Lampiran" />
				</div>
				<div class="margin-left-right-top70px width-90p">
					<fieldset class="width-100p" id="fieldTabelLampiran1">
						<legend>
							Tabel
							<a href="javascript:void(0)" style="font-size:12px; line-height:32px;" title="Hapus Tabel" onclick=""><i class="fa fa-minus-square"></i></a>
							<a href="javascript:void(0)" style="font-size:12px; line-height:32px;" title="Tambah Tabel" onclick="addTabelLampiran(this, 1)"><i class="fa fa-plus-square"></i></a>
						</legend>
						<div>
							<input type="text" name="subjudul[][]" class="form-control float-left margin-bottom-3px" placeholder="Sub Judul Lampiran" />
							<table class="tabel-lampiran1" border="1">
								<thead>
									<tr id="judul-tabel1">
										<th colspan="2">
											<input type="text" name="judultabel[][]" class="form-control float-left" placeholder="Judul Tabel" />
										</th>
										<th align="center">
											<a href="javascript:void(0)" style="line-height:32px; margin:0 auto;" title="Hapus Kolom" onclick="rmKolomLampiran(this, 1)">
												<i class="fa fa-minus-square"></i>
											</a>
											<a href="javascript:void(0)" style="line-height:32px; margin:0 auto;" title="Tambah Kolom" onclick="addKolomLampiran(this, 1)">
												<i class="fa fa-plus-square"></i>
											</a>
										</th>
									</tr>
								</thead>
								<tbody id="tbody-tabel1">
									<tr class="content-tabel1">
										<td class="firstrow1" align="center" style="min-width:30px">
											<input type="text" name="kolom[0][header][]" value="NO" style="border:none; background:transparent; text-align:center;" size="1" disabled />
										</td>
										<td>
											<input type="text" name="kolom[0][header][]" class="form-control float-left" placeholder="Konten" />
										</td>
										<td class="lastrowheader1" align="center">
											<a href="javascript:void(0)" style="line-height:32px; margin:0 5px;" onclick="addRowLampiran(this, 1, 0)">
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
	<div class="form-group margin-top-5px"><button type="submit" class="btn btn-success">Generate</button></div>
</form>
