<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Company-HTML Bootstrap theme</title>
		<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('asset/css/modify.css'); ?>" />
		<script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('asset/js/vendor.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('asset/js/bundle.js'); ?>"></script>
		<script>
			window.addEventListener('load', () => {
				const loader = document.getElementById('loader');
				setTimeout(() => {
					loader.classList.add('fadeOut');
				}, 100);
			});
			function addMenimbang(ele, count) {
				var counts = count + 1;
				var element =	'<div class="form-group" id="text-menimbang'+counts+'">'+
									'<input type="text" name="menimbang[]" class="form-control float-left width-90p" placeholder="Menimbang" />'+
									'<a href="#" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMenimbang(this, '+counts+')"><i class="fa fa-lg fa-plus"></i></a>'+
								'</div>';
				$(ele).children().toggleClass('fa-plus fa-minus');
				$(ele).children().attr("onclick","remove(this)");
				$(element).last().insertAfter($("#text-menimbang"+count));
			}
			function addMengingat(ele, count) {
				var counts = count + 1;
				var element =	'<div id="text-mengingat'+counts+'">'+
									'<input type="text" name="mengingat[]" class="form-control float-left width-90p" placeholder="Mengingat" />'+
									'<a href="#" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMengingat(this, '+counts+')"><i class="fa fa-lg fa-plus"></i></a>'+
								'</div>';
				$(ele).children().toggleClass('fa-plus fa-minus');
				$(ele).children().attr("onclick","remove(this)");
				$(element).last().insertAfter($("#text-mengingat"+count));
			}
			function remove(ele) {
				$(ele).parent().parent().remove();
			}
		</script>
	</head>
	<body class="app">
		<div id="loader">
			<div class="spinner"></div>
		</div>
		<div class="margin-left-right-auto mT-30 width-50p">
			<form class="width-100p" method="POST" action="<?php echo site_url('Peraturan_mentri/generatePdf'); ?>" target="_blank">
				<div class="form-group" style="margin-bottom:5px">
					<textarea name="super_judul" class="form-control" autocomplete="off" placeholder="Judul Dokumen" rows="4"></textarea>
				</div>
				<fieldset>
					<legend>Menimbang</legend>
					<div>
						<div class="form-group" id="text-menimbang1">
							<input type="text" name="menimbang[]" class="form-control float-left width-90p" placeholder="Menimbang" />
							<a href="#" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMenimbang(this, 1)"><i class="fa fa-lg fa-plus"></i></a>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legend>Mengingat</legend>
					<div>
						<div class="form-group" id="text-mengingat1">
							<input type="text" name="mengingat[]" class="form-control float-left width-90p" placeholder="Mengingat" />
							<a href="#" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMengingat(this, 1)"><i class="fa fa-lg fa-plus"></i></a>
						</div>
					</div>
				</fieldset>
				<div><button type="submit" class="btn btn-success">Generate</button></div>
			</form>
		</div>
	</body>
</html>