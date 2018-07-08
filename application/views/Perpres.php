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
	function remove(ele) {
		$(ele).parent().parent().parent().remove();
	}
</script>
<div class="row-col">
	<div class="col-lg b-r"> 
		<div class="padding">
			<div class="box">
				<div class="padding">
					<legend>Buat Dokumen Peraturan Presiden</legend>
					<form>
						<div class="form-group" style="margin-bottom:5px">
							<textarea name="super_judul" 
									  class="form-control" 
									  autocomplete="off" 
									  placeholder="Judul Dokumen" 
									  rows="4" required><?php echo @$detail_dokumen['judul'][0]['teks']; ?></textarea>
						</div>
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
										<textarea name="<?php echo $namaMenimbang; ?>[]" 
												  type="text" 
												  class="form-control" 
												  placeholder="Menimbang" 
												  rows="6" 
												  style="float:left; margin-left:5px; width:75%;" required></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenimbang(this, 1)" 
										   style="position:absolute; right:5%;" 
										   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
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
										<textarea name="<?php echo $namaMengingat; ?>[]" 
												  type="text" 
												  class="form-control" 
												  placeholder="Mengingat" 
												  rows="6" 
												  style="float:left; margin-left:5px; width:75%;" required></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMengingat(this, 1)" 
										   style="position:absolute; right:5%;" 
										   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Menetapkan -- BAB, pasal, bagian-bagian dan paragraph masih di pikirkan --</legend>
							<div>
								<?php $namaMemutuskan = 'Memutuskan'; ?>
								<div class="form-group" id="text-<?php echo $namaMemutuskan; ?>1" style="display:inline-block; width:100%;">
									<div>
										<input type="text" name="pointerBab" class="form-control" placeholder="Bab" style="width:93%" />
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanBab(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Bab"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									<div style="margin-top:10px; margin-left:25px;">
										<input type="text" name="pointerPasal" class="form-control" placeholder="Pasal" style="width:93%" />
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanPasal(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Pasal"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<div style="float:left; width:20%;">
											<input type="text" name="pointer<?php echo $namaMemutuskan; ?>[]" class="form-control" placeholder="Pointer" />
											<select name="nextPage<?php echo $namaMemutuskan; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
												<option value="continue">Continues Page</option>
												<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
											</select>
											<select name="subLevel<?php echo $namaMemutuskan; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
												<option value="0">SubLevel 0</option>
												<option value="1">SubLevel 1</option>
												<option value="2">SubLevel 2</option>
												<option value="3">SubLevel 3</option>
												<option value="4">SubLevel 4</option>
											</select>
										</div>
										<div style="width:100%;">
											<textarea name="<?php echo $namaMemutuskan; ?>[]" 
													  type="text" 
													  class="form-control" 
													  placeholder="Memutuskan/Menetapkan" 
													  rows="6" 
													  style="float:left; margin-left:5px; width:75%;" required></textarea>
											<a href="javascript:void(0)" 
											   onclick="addMenetapkan(this, 1)" 
											   style="position:absolute; right:5%;" 
											   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
										</div>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Tanda Tangan</legend>
							<div class="form-group">
								<textarea name="ttd" class="form-control" autocomplete="off" placeholder="Tanda Tangan" rows="4" style="width:95%" required></textarea>
							</div>
						</fieldset>
						<fieldset>
							<legend>Mengundang</legend>
							<div class="form-group">
								<textarea name="ttd" class="form-control" autocomplete="off" placeholder="Tanda Tangan" rows="4" style="width:95%" required></textarea>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>