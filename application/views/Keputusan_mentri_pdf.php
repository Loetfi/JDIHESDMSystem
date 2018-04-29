<script>
	function addMenimbang(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-menimbang'+counts+'">'+
							'<input type="text" name="menimbang[]" class="form-control float-left width-90p" placeholder="Menimbang" />'+
							'<a href="javascript:void(0)" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMenimbang(this, '+counts+')"><i class="fa fa-lg fa-plus"></i></a>'+
						'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)");
		$(element).last().insertAfter($("#text-menimbang"+count));
	}
	function addMengingat(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-mengingat'+counts+'">'+
							'<input type="text" name="mengingat[]" class="form-control float-left width-90p" placeholder="Mengingat" />'+
							'<a href="javascript:void(0)" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMengingat(this, '+counts+')"><i class="fa fa-lg fa-plus"></i></a>'+
						'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)");
		$(element).last().insertAfter($("#text-mengingat"+count));
	}
	function addPasal(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-pasal'+counts+'">'+
							'<input type="text" name="pasal[]" class="form-control float-left width-90p" placeholder="Pasal" />'+
							'<a href="javascript:void(0)" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addPasal(this, '+counts+')"><i class="fa fa-lg fa-plus"></i></a>'+
						'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)");
		$(element).last().insertAfter($("#text-pasal"+count));
	}
	function addTembusan(ele, count) {
		var counts = count + 1;
		var element =	'<div class="form-group" id="text-tembusan'+counts+'">'+
							'<input type="text" name="tembusan[]" class="form-control float-left width-90p" placeholder="Tembusan" />'+
							'<a href="javascript:void(0)" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addTembusan(this, '+counts+')"><i class="fa fa-lg fa-plus"></i></a>'+
						'</div>';
		$(ele).children().toggleClass('fa-plus fa-minus');
		$(ele).children().attr("onclick","remove(this)");
		$(element).last().insertAfter($("#text-tembusan"+count));
	}
	function remove(ele) {
		$(ele).parent().parent().remove();
	}
</script>
<form class="width-100p" method="POST" action="<?php echo site_url('Keputusan_mentri_pdf/generatePdf'); ?>" target="_blank">
	<div class="form-group" style="margin-bottom:5px">
		<textarea name="super_judul" class="form-control" autocomplete="off" placeholder="Judul Dokumen" rows="4"></textarea>
	</div>
	<fieldset>
		<legend>Menimbang</legend>
		<div>
			<div class="form-group" id="text-menimbang1">
				<input type="text" name="menimbang[]" class="form-control float-left width-90p" placeholder="Menimbang" />
				<a href="javascript:void(0)" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMenimbang(this, 1)"><i class="fa fa-lg fa-plus"></i></a>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Mengingat</legend>
		<div>
			<div class="form-group" id="text-mengingat1">
				<input type="text" name="mengingat[]" class="form-control float-left width-90p" placeholder="Mengingat" />
				<a href="javascript:void(0)" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMengingat(this, 1)"><i class="fa fa-lg fa-plus"></i></a>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Menetapkan</legend>
		<div>
			<div class="form-group" id="text-menetapkan">
				<input type="text" name="menetapkan" class="form-control float-left width-90p" placeholder="Menetapkan" />
				<a href="javascript:void(0)" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMenetapkan(this)">&nbsp;</a>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Pasal</legend>
		<div>
			<div class="form-group" id="text-pasal1">
				<input type="text" name="pasal[]" class="form-control float-left width-90p" placeholder="Pasal" />
				<a href="javascript:void(0)" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addPasal(this, 1)"><i class="fa fa-lg fa-plus"></i></a>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Tanda Tangan</legend>
		<div class="form-group">
			<textarea name="ttd" class="form-control" autocomplete="off" placeholder="Tanda Tangan" rows="4"></textarea>
		</div>
	</fieldset>
	<fieldset>
		<legend>Tembusan</legend>
		<div>
			<div class="form-group" id="text-tembusan1">
				<input type="text" name="tembusan[]" class="form-control float-left width-90p" placeholder="Tembusan" />
				<a href="javascript:void(0)" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addTembusan(this, 1)"><i class="fa fa-lg fa-plus"></i></a>
			</div>
		</div>
	</fieldset>
	<div><button type="submit" class="btn btn-success">Generate</button></div>
</form>