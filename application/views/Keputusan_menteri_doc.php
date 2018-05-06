<div class="row-col">
	<div class="col-lg b-r"> 
		<div class="padding">
			<div class="box">
				<div class="padding"> 
		<script>
			window.addEventListener('load', () => {
				const loader = document.getElementById('loader');
				setTimeout(() => {
					loader.classList.add('fadeOut');
				}, 100);
			});
		</script>
		<style>
			.width-80px {
				width: 80px;
			}
			fieldset {
				border: 1px #000 solid;
				padding: 10px;
			}
		</style>
	</head>
	 
	 <legend>Buat Dokumen Keputusan Menteri</legend>
		<!-- <div style="width:60%; margin: 0 auto"> -->
			<form method="POST" action="<?php echo site_url('keputusan_menteri_doc/sanusi'); ?>" target="_blank">
				<div class="form-group" style="margin-bottom:5px">
					<textarea name="super_judul" class="form-control" placeholder="Judul Dokumen" rows="4" cols="70"></textarea>
				</div>
				<fieldset><legend>Menimbang</legend>
					<table width="100%" border="0">
						<tr>
							<td valign="top">
								<div><input type="text" name="Menimbang[pointerMenimbang][]" placeholder="" size="17"></div>
								<div><label><select name="Menimbang[nextPageMenimbang][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Menimbang[subLevelMenimbang][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Menimbang[text][]" placeholder="Menimbang" rows="4" cols="50" required></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="Menimbang[pointerMenimbang][]" placeholder="" size="17"></div>
								<div><label><select name="Menimbang[nextPageMenimbang][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Menimbang[subLevelMenimbang][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Menimbang[text][]" placeholder="Menimbang" rows="4" cols="50"></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="Menimbang[pointerMenimbang][]" placeholder="" size="17"></div>
								<div><label><select name="Menimbang[nextPageMenimbang][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Menimbang[subLevelMenimbang][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Menimbang[text][]" placeholder="Menimbang" rows="4" cols="50"></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="Menimbang[pointerMenimbang][]" placeholder="" size="17"></div>
								<div><label><select name="Menimbang[nextPageMenimbang][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Menimbang[subLevelMenimbang][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Menimbang[text][]" placeholder="Menimbang" rows="4" cols="50"></textarea></td>
						</tr>
					</table>
				</fieldset>
				
				<fieldset><legend>Mengingat</legend>
					<table width="100%" border="0">
						<tr>
							<td valign="top">
								<div><input type="text" name="Mengingat[pointerMengingat][]" placeholder="" size="17"></div>
								<div><label><select name="Mengingat[nextPageMengingat][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Mengingat[subLevelMengingat][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Mengingat[text][]" placeholder="Mengingat" rows="4" cols="50" required></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="Mengingat[pointerMengingat][]" placeholder="" size="17"></div>
								<div><label><select name="Mengingat[nextPageMengingat][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Mengingat[subLevelMengingat][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Mengingat[text][]" placeholder="Mengingat" rows="4" cols="50"></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="Mengingat[pointerMengingat][]" placeholder="" size="17"></div>
								<div><label><select name="Mengingat[nextPageMengingat][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Mengingat[subLevelMengingat][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Mengingat[text][]" placeholder="Mengingat" rows="4" cols="50"></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="Mengingat[pointerMengingat][]" placeholder="" size="17"></div>
								<div><label><select name="Mengingat[nextPageMengingat][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Mengingat[subLevelMengingat][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Mengingat[text][]" placeholder="Mengingat" rows="4" cols="50"></textarea></td>
						</tr>
					</table>
				</fieldset>
				
				<fieldset><legend>Memutuskan & Menetapkan</legend>
					<table width="100%" border="0">
						<tr>
							<td valign="top">
								<div><input type="text" name="Memutuskan[pointerMemutuskan][]" placeholder="" size="17"></div>
								<div><label><select name="Memutuskan[nextPageMemutuskan][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Memutuskan[subLevelMemutuskan][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Memutuskan[text][]" placeholder="Memutuskan" rows="4" cols="50" required></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="Memutuskan[pointerMemutuskan][]" placeholder="" size="17"></div>
								<div><label><select name="Memutuskan[nextPageMemutuskan][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Memutuskan[subLevelMemutuskan][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Memutuskan[text][]" placeholder="Memutuskan" rows="4" cols="50"></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="Memutuskan[pointerMemutuskan][]" placeholder="" size="17"></div>
								<div><label><select name="Memutuskan[nextPageMemutuskan][]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Memutuskan[subLevelMemutuskan][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Memutuskan[text][]" placeholder="Memutuskan" rows="4" cols="50"></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="Memutuskan[pointerMemutuskan][]" placeholder="" size="17"></div>
								<div><label><select name="Memutuskan[nextPageMemutuskan][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="Memutuskan[subLevelMemutuskan][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="Memutuskan[text][]" placeholder="Memutuskan" rows="4" cols="50"></textarea></td>
						</tr>
					</table>
				</fieldset>
				
				<fieldset><legend>BAB/pasal xx(1)</legend>
					<center>
						<label>Judul Header<br><textarea name="judulBab1" rows="4" cols="70" placeholder="ex: BAB I dan/atau Pasal 1"></textarea></label><br>
					</center>
					<br>
					<table width="100%" border="0">
						<tr>
							<td valign="top">
								<div><input type="text" name="contentPasal1[pointerPasal1][]" placeholder="" size="17"></div>
								<div><label><select name="contentPasal1[nextPagePasal1][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="contentPasal1[subLevelPasal1][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="contentPasal1[text][]" placeholder="" rows="4" cols="50" required></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="contentPasal1[pointerPasal1][]" placeholder="" size="17"></div>
								<div><label><select name="contentPasal1[nextPagePasal1][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="contentPasal1[subLevelPasal1][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="contentPasal1[text][]" placeholder="" rows="4" cols="50" required></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="contentPasal1[pointerPasal1][]" placeholder="" size="17"></div>
								<div><label><select name="contentPasal1[nextPagePasal1][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="contentPasal1[subLevelPasal1][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="contentPasal1[text][]" placeholder="" rows="4" cols="50" required></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="contentPasal1[pointerPasal1][]" placeholder="" size="17"></div>
								<div><label><select name="contentPasal1[nextPagePasal1][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="contentPasal1[subLevelPasal1][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="contentPasal1[text][]" placeholder="" rows="4" cols="50" required></textarea></td>
						</tr>
					</table>
				</fieldset>
				
				<fieldset><legend>BAB/pasal xx(2)</legend>
					<center>
						<label>Judul Header<br><textarea name="judulBab2" rows="4" cols="70" placeholder="ex: BAB I dan/atau Pasal 1"></textarea></label><br>
					</center><br>
					
					<table width="100%" border="0">
						<tr>
							<td valign="top">
								<div><input type="text" name="contentPasal2[pointerPasal2][]" placeholder="" size="17"></div>
								<div><label><select name="contentPasal2[nextPagePasal2][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="contentPasal2[subLevelPasal2][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="contentPasal2[text][]" placeholder="" rows="4" cols="50" required></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="contentPasal2[pointerPasal2][]" placeholder="" size="17"></div>
								<div><label><select name="contentPasal2[nextPagePasal2][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="contentPasal2[subLevelPasal2][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="contentPasal2[text][]" placeholder="" rows="4" cols="50" required></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="contentPasal2[pointerPasal2][]" placeholder="" size="17"></div>
								<div><label><select name="contentPasal2[nextPagePasal2][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="contentPasal2[subLevelPasal2][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="contentPasal2[text][]" placeholder="" rows="4" cols="50" required></textarea></td>
						</tr>
						<tr>
							<td valign="top">
								<div><input type="text" name="contentPasal2[pointerPasal2][]" placeholder="" size="17"></div>
								<div><label><select name="contentPasal2[nextPagePasal2][]"><option value="continues">Continues Page</option><option value="new">Next Page</option></select></label></div>
								<div>
								<label>Sub level <select name="contentPasal2[subLevelPasal2][]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
								</div>
							</td>
							<td valign="top"><textarea type="text" name="contentPasal2[text][]" placeholder="" rows="4" cols="50" required></textarea></td>
						</tr>
					</table>
				</fieldset>
				
				<div><button type="submit" class="btn btn-success">Generate</button></div>
			</form>
		</div>
	</body>
</html>
