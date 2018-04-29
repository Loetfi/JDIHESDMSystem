<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Company-HTML Bootstrap theme</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/assets_backend/adminator/css/style.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/assets_backend/adminator/css/modify.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/assets_backend/flatlab/assets/bootoast/bootoast.css'); ?>" />
		<script src="<?php echo base_url('assets/assets_backend/flatlab/js/jquery-1.8.3.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/assets_backend/adminator/js/vendor.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/assets_backend/adminator/js/bundle.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/assets_backend/flatlab/assets/bootoast/bootoast.js'); ?>"></script>
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
	<body class="app">
		<div id="loader">
			<div class="spinner"></div>
		</div>
		<div class="sidebar">
            <div class="sidebar-inner">
                <div class="sidebar-logo">
                    <div class="peers ai-c fxw-nw">
                        <div class="peer peer-greed">
                            <a class="sidebar-link td-n" href="index.html">
                                <div class="peers ai-c fxw-nw">
                                    <div class="peer">
                                        <div class="logo"><img src="<?php echo base_url('assets/assets_backend/flatlab/img/ring.jpg'); ?>" width="60"></div>
                                    </div>
                                    <div class="peer peer-greed">
                                        <h5 class="lh-1 mB-0 logo-text">Adminator</h5></div>
                                </div>
                            </a>
                        </div>
                        <div class="peer">
                            <div class="mobile-toggle sidebar-toggle"><a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a></div>
                        </div>
                    </div>
                </div>
                <ul id="ul-sidemenu" class="sidebar-menu scrollable pos-r">
                    <li class="nav-item mT-30 active" onclick="sidemenu_click(this)">
						<a class="sidebar-link" href="javascript:void(0)" data-url="Keputusan_mentri_pdf">
							<span class="icon-holder">PM</span><span class="title">Peraturan Mentri</span>
						</a>
					</li>
					<li class="nav-item mT-30 active" onclick="sidemenu_click(this)">
						<a class="sidebar-link" href="javascript:void(0)">
							<span class="icon-holder">As</span><span class="title">Aselole</span>
						</a>
					</li>
                </ul>
            </div>
        </div>
		<div class="page-container">
			<div class="header navbar">
				<div class="header-container">
					<ul class="nav-right">
						<li class="dropdown">
							<a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
								<div class="peer mR-10"><img class="w-2r bdrs-50p" src="https://instagram.fcgk1-1.fna.fbcdn.net/vp/3a5c059f502454dd2ef41c0d7b7565ff/5B7B8A83/t51.2885-19/10601862_635697769860717_380306318_a.jpg" alt=""></div>
								<div class="peer"><span class="fsz-sm c-grey-900">John Doe</span></div>
							</a>
							<ul class="dropdown-menu fsz-sm">
								<li>
									<a href="javascript:void(0)" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
										<i class="fa fa-cog mR-10"></i><span class="icon-menu-margin">Setting</span>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
										<i class="fa fa-user-circle mR-10"></i><span class="icon-menu-margin">Profile</span>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
										<i class="fa fa-envelope mR-10"></i><span class="icon-menu-margin">Messages</span>
									</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="javascript:void(0)" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
										<i class="fa fa-power-off mR-10"></i><span class="icon-menu-margin">Logout</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<main class="main-content bgc-grey-100">
				<div class="margin-left-right-auto mT-30 width-80p">
					<!-- Load Content in Here -->
					<span id="contentHTML"></span>
				</div>
			</main>
			<footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
				<span>Copyright © 2018 Nama Perusahaan.</span>
			</footer>
		</div>
		<script type="text/javascript" src="<?php echo base_url('assets/assets_backend/adminator/js/modify.js'); ?>"></script>
	</body>
</html>