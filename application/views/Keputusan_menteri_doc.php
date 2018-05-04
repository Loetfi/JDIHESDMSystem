<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('asset/css/modify.css'); ?>" />
		<script type="text/javascript" src="<?php echo base_url('asset/js/vendor.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('asset/js/bundle.js'); ?>"></script>
		<title>Company-HTML Bootstrap theme</title>
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
	<body class="app">
		<div id="loader">
			<div class="spinner"></div>
		</div>
		<div style="width:60%; margin: 0 auto">
			<form method="POST" action="<?php echo site_url('keputusan_menteri_doc/sanusi'); ?>" target="_blank">
				<div class="form-group" style="margin-bottom:5px">
					<textarea name="super_judul" class="form-control" placeholder="Judul Dokumen" rows="4" cols="70"></textarea>
				</div>
				<fieldset><legend>Menimbang</legend>
					<table width="100%" border="0">
						<tr>
							<td valign="top"><input type="text" name="pointerMenimbang[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Menimbang[]" placeholder="Menimbang" rows="4" cols="50" required></textarea></td>
							<td valign="top">
								<label><select name="nextPageMenimbang[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMenimbang[]">
									<option value="0">0</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerMenimbang[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Menimbang[]" placeholder="Menimbang" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPageMenimbang[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMenimbang[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerMenimbang[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Menimbang[]" placeholder="Menimbang" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPageMenimbang[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMenimbang[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerMenimbang[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Menimbang[]" placeholder="Menimbang" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPageMenimbang[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMenimbang[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
					</table>
				</fieldset>
				
				<fieldset><legend>Mengingat</legend>
					<table width="100%" border="0">
						<tr>
							<td valign="top"><input type="text" name="pointerMengingat[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Mengingat[]" placeholder="Mengingat" rows="4" cols="50" required></textarea></td>
							<td valign="top">
								<label><select name="nextPageMengingat[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMengingat[]">
									<option value="0">0</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerMengingat[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Mengingat[]" placeholder="Mengingat" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPageMengingat[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMengingat[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerMengingat[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Mengingat[]" placeholder="Mengingat" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPageMengingat[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMengingat[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerMengingat[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Mengingat[]" placeholder="Mengingat" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPageMengingat[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMengingat[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
					</table>
				</fieldset>
				
				<fieldset><legend>Memutuskan & Menetapkan</legend>
					<table width="100%" border="0">
						<tr>
							<td valign="top"><input type="text" name="pointerMemutuskan[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Memutuskan[]" placeholder="Memutuskan" rows="4" cols="50" required></textarea></td>
							<td valign="top">
								<label><select name="nextPageMemutuskan[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMemutuskan[]">
									<option value="0">0</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerMemutuskan[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Memutuskan[]" placeholder="Memutuskan" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPageMemutuskan[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMemutuskan[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerMemutuskan[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Memutuskan[]" placeholder="Memutuskan" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPageMemutuskan[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMemutuskan[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerMemutuskan[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="Memutuskan[]" placeholder="Memutuskan" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPageMemutuskan[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelMemutuskan[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
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
							<td valign="top"><input type="text" name="pointerPasal1[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="contentPasal1[]" placeholder="" rows="4" cols="50" required></textarea></td>
							<td valign="top">
								<label><select name="nextPagePasal1[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelPasal1[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerPasal1[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="contentPasal1[]" placeholder="" rows="4" cols="50" required></textarea></td>
							<td valign="top">
								<label><select name="nextPagePasal1[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelPasal1[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerPasal1[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="contentPasal1[]" placeholder="" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPagePasal1[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelPasal1[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerPasal1[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="contentPasal1[]" placeholder="" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPagePasal1[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelPasal1[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
					</table>
				</fieldset>
				<fieldset><legend>BAB/pasal xx(2)</legend>
					<center>
						<label>Judul Header<br><textarea name="judulBab2" rows="4" cols="70" placeholder="ex: BAB I dan/atau Pasal 1"></textarea></label><br>
					</center><br>
					
					<table width="100%" border="0">
						<tr>
							<td valign="top"><input type="text" name="pointerPasal2[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="contentPasal2[]" placeholder="" rows="4" cols="50" required></textarea></td>
							<td valign="top">
								<label><select name="nextPagePasal2[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelPasal2[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerPasal2[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="contentPasal2[]" placeholder="" rows="4" cols="50" required></textarea></td>
							<td valign="top">
								<label><select name="nextPagePasal2[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelPasal2[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerPasal2[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="contentPasal2[]" placeholder="" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPagePasal2[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelPasal2[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" name="pointerPasal2[]" placeholder="" size="5"></td>
							<td valign="top"><textarea type="text" name="contentPasal2[]" placeholder="" rows="4" cols="50"></textarea></td>
							<td valign="top">
								<label><select name="nextPagePasal2[]"><option value="0">Continues Page</option><option value="1">Next Page</option></select></label><br>
								<label>Sub level <select name="subLevelPasal2[]">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select></label>
							</td>
						</tr>
					</table>
				</fieldset>
				
				<div><button type="submit" class="btn btn-success">Generate</button></div>
			</form>
		</div>
	</body>
</html>