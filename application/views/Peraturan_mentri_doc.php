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
		</style>
	</head>
	<body class="app">
		<div id="loader">
			<div class="spinner"></div>
		</div>
		<div style="width:60%; margin: 0 auto">
			<form method="POST" action="<?php echo site_url('coba/sanusi'); ?>" target="_blank">
				<div class="form-group" style="margin-bottom:5px">
					<textarea name="super_judul" class="form-control" placeholder="Judul Dokumen" rows="4" cols="70"></textarea>
				</div>
				<fieldset><legend>Menimbang</legend>
					<table width="100%" border="0">
						<tr>
							<td valign="top" width="90"><input type="text" class="form-control" name="pointerMenimbang[]" placeholder="pointer" size="5"></td>
							<td valign="top" width="60%"><textarea type="text" class="form-control" name="Menimbang[]" placeholder="Menimbang" rows="4" cols="50"></textarea></td>
							<td valign="top" align="right">asd</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" class="form-control" name="pointerMenimbang[]" placeholder="pointer" size="5"></td>
							<td valign="top"><textarea type="text" class="form-control" name="Menimbang[]" placeholder="Menimbang" rows="4" cols="50"></textarea></td>
							<td valign="top" align="right">asd</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" class="form-control" name="pointerMenimbang[]" placeholder="pointer" size="5"></td>
							<td valign="top"><textarea type="text" class="form-control" name="Menimbang[]" placeholder="Menimbang" rows="4" cols="50"></textarea></td>
							<td valign="top" align="right">asd</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" class="form-control" name="pointerMenimbang[]" placeholder="pointer" size="5"></td>
							<td valign="top"><textarea type="text" class="form-control" name="Menimbang[]" placeholder="Menimbang" rows="4" cols="50"></textarea></td>
							<td valign="top" align="right">asd</td>
						</tr>
					</table>
				</fieldset>
				
				<fieldset><legend>Mengingat</legend>
					<table width="100%" border="0">
						<tr>
							<td valign="top" width="90"><input type="text" class="form-control" name="pointerMengingat[]" placeholder="pointer" size="5"></td>
							<td valign="top" width="60%" align="center"><textarea type="text" class="form-control" name="Mengingat[]" placeholder="Mengingat" rows="4" cols="50"></textarea></td>
							<td valign="top" align="right">asd</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" class="form-control" name="pointerMengingat[]" placeholder="pointer" size="5"></td>
							<td valign="top"><textarea type="text" class="form-control" name="Mengingat[]" placeholder="Mengingat" rows="4" cols="50"></textarea></td>
							<td valign="top" align="right">asd</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" class="form-control" name="pointerMengingat[]" placeholder="pointer" size="5"></td>
							<td valign="top"><textarea type="text" class="form-control" name="Mengingat[]" placeholder="Mengingat" rows="4" cols="50"></textarea></td>
							<td valign="top" align="right">asd</td>
						</tr>
						<tr>
							<td valign="top"><input type="text" class="form-control" name="pointerMengingat[]" placeholder="pointer" size="5"></td>
							<td valign="top"><textarea type="text" class="form-control" name="Mengingat[]" placeholder="Mengingat" rows="4" cols="50"></textarea></td>
							<td valign="top" align="right">asd</td>
						</tr>
					</table>
				</fieldset>
				<div><button type="submit" class="btn btn-success">Generate</button></div>
			</form>
		</div>
	</body>
</html>