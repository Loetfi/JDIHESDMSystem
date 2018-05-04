<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo @$title; ?></title>
	<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('asset/css/modify.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('asset/css/bootoast.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/fonts/css/font-awesome.css'); ?>">
	<script src="<?php echo base_url('assets/js/jquery-2.1.1.min.js'); ?>"></script> 
	<script type="text/javascript" src="<?php echo base_url('asset/js/vendor.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/js/bundle.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/js/bootoast.js'); ?>"></script>
	<script>
		window.addEventListener('load', () => {
			const loader = document.getElementById('loader');
			setTimeout(() => {
				loader.classList.add('fadeOut');
				var indexEle = {
					children: [
					{
						attributes: ['', '', {value: 'Welcome'}]
					}
					]
				}
				sidemenu_click(indexEle);
			}, 1000);
		});
		window.site_url = '<?php echo site_url();?>';
	</script>
</head>
<body>
	<?php isset($contents) ? $this->load->view($contents) : 'belum load view'; ?>
</body>
</html>
