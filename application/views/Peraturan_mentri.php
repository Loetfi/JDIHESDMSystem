<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Company-HTML Bootstrap theme</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
		<!--link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/prettyPhoto.css'); ?>"-->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>	
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
		<!--script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.isotope.min.js'); ?>"></script>  
		<script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/functions.js'); ?>"></script-->
		<script>
			function addMenimbang(ele, count) {
				var counts = count + 1;
				var element =	'<div id="text-menimbang'+counts+'">'+
									'<input type="text" name="menimbang[]" class="form-control float-left width-90p" autocomplete="off" placeholder="Menimbang" />'+
									'<a href="#" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMenimbang(this, '+counts+')"><i class="fa fa-lg fa-plus"></i></a>'+
								'</div>';
				$(ele).children().toggleClass('fa-plus fa-minus');
				$(ele).children().attr("onclick","remove(this)");
				$(element).last().insertAfter($("#text-menimbang"+count));
			}
			function addMengingat(ele, count) {
				var counts = count + 1;
				var element =	'<div id="text-mengingat'+counts+'">'+
									'<input type="text" name="mengingat[]" class="form-control float-left width-90p" autocomplete="off" placeholder="Mengingat" />'+
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
		<style>
			form {
				display: inline-block;
			}
			
			form div {
				display: block;
				min-height: 40px;
			}
			
			.float-left {
				float: left;
			}
			
			.width-90p {
				width: 90%;
			}
		</style>
	</head>
	<body>
		<div style="width:50%; margin: 0 auto">
			<form style="width:50%; margin: 20px 30px" method="POST" action="<?php echo site_url('Peraturan_mentri/generatePdf'); ?>" target="_blank">
				<div style="margin-bottom:5px"><textarea name="super_judul" class="form-control" autocomplete="off" placeholder="Judul Dokumen" rows="4"></textarea></div>
				<div>
					<div id="text-menimbang1">
						<input type="text" name="menimbang[]" class="form-control float-left width-90p" autocomplete="off" placeholder="Menimbang" />
						<a href="#" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMenimbang(this, 1)"><i class="fa fa-lg fa-plus"></i></a>
					</div>
				</div>
				<div>
					<div id="text-mengingat1">
						<input type="text" name="mengingat[]" class="form-control float-left width-90p" autocomplete="off" placeholder="Mengingat" />
						<a href="#" class="fb tool-tip" style="line-height:32px; margin-left:10px;" onclick="addMengingat(this, 1)"><i class="fa fa-lg fa-plus"></i></a>
					</div>
				</div>
				<div><button type="submit" class="btn btn-success">Generate</button></div>
			</form>
		</div>
	</body>
</html>