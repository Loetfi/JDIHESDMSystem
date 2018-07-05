<div class="row-col">
	<div class="col-lg b-r"> 
		<div class="padding">
			<div class="row">
				<?php for ($i=0; $i < 3 ; $i++) { ?>
				<div class="col-sm-4">
					<div class="box"> 
						<div class="padding">
							<div> 
								<p>Total Dokumen</p>
							</div>
							<div class="text-center">
								<h2 class="text-center _600">45</h2>
								<p class="text-muted m-b-md">Telah dibuat</p>
								<div>
									<span data-ui-jp="sparkline" data-ui-options="[2,3,2,2,1,3,6,3,2,1], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span>
								</div> 
							</div>
						</div>
					</div>
				</div> 
				<?php } ?>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="box">
						<div class="box-header">
							<a href="" class="btn btn-xs btn-primary pull-right">Lihat Semua</a>
							<h3>Pengguna</h3>
						</div>
						<div class="p-b-sm">
							<ul class="list no-border m-a-0">
								<li class="list-item">
									<a href="#" class="list-left">
										<span class="w-40 avatar danger">
											<span>C</span>
											<i class="on b-white bottom"></i>
										</span>
									</a>
									<div class="list-body">
										<div><a href="#">Chris Fox</a></div>
										<small class="text-muted text-ellipsis">Pelaksana</small>
									</div>
								</li>
								<li class="list-item">
									<a href="#" class="list-left">
										<span class="w-40 avatar purple">
											<span>M</span>
											<i class="on b-white bottom"></i>
										</span>
									</a>
									<div class="list-body">
										<div><a href="#">Mogen Polish</a></div>
										<small class="text-muted text-ellipsis">Pelaksana</small>
									</div>
								</li>
								<li class="list-item">
									<a href="#" class="list-left">
										<span class="w-40 avatar info">
											<span>J</span>
											<i class="off b-white bottom"></i>
										</span>
									</a>
									<div class="list-body">
										<div><a href="#">Joge Lucky</a></div>
										<small class="text-muted text-ellipsis">Pelaksana</small>
									</div>
								</li>
								<li class="list-item">
									<a href="#" class="list-left">
										<span class="w-40 avatar warning">
											<span>F</span>
											<i class="on b-white bottom"></i>
										</span>
									</a>
									<div class="list-body">
										<div><a href="#">Folisise Chosielie</a></div>
										<small class="text-muted text-ellipsis">Pelaksana</small>
									</div>
								</li>
								<li class="list-item">
									<a href="#" class="list-left">
										<span class="w-40 avatar success">
											<span>P</span>
											<i class="away b-white bottom"></i>
										</span>
									</a>
									<div class="list-body">
										<div><a href="#">Peter</a></div>
										<small class="text-muted text-ellipsis">Pelaksana</small>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="box">
						<div class="box-header">
							<h3>Aktifitas Dokumen</h3>
							<small>20 finished, 5 remaining</small>
						</div>
						<div class="box-tool">
							<ul class="nav">
								<li class="nav-item inline dropdown">
									<a class="nav-link text-muted p-x-xs" data-toggle="dropdown">
										<i class="fa fa-ellipsis-v"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-scale pull-right">
										<a class="dropdown-item" href="#">New task</a>
										<a class="dropdown-item" href="#">Make all finished</a>
										<a class="dropdown-item" href="#">Make all unfinished</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item">Settings</a>
									</div>
								</li>
							</ul>
						</div>
						<div class="box-body">
							<div class="streamline">
								<div class="sl-item b-success">
									<div class="sl-content">
										<div class="sl-date text-muted">8:30</div>
										<div>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail about the AP project.</div>
									</div>
								</div>
								<div class="sl-item">
									<div class="sl-content">
										<div class="sl-date text-muted">Sat, 5 Mar</div>
										<div>Prepare for presentation</div>
									</div>
								</div>
								<div class="sl-item">
									<div class="sl-content">
										<div class="sl-date text-muted">Sun, 11 Feb</div>
										<div><a href="#" class="text-info">Jessi</a> assign you a task <a href="#" class="text-info">Mockup Design</a>.</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<a href="#" class="btn btn-xs white rounded">More</a>
						</div>
					</div>
				</div> 
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="box">
						<div class="box-header">
							<h3>Aktifitas Koreksi</h3>
						</div>
						<ul class="list-group no-border m-b">
							<?php for ($i=0; $i < 5; $i++) {  ?>
							<li class="list-group-item">
								<a href="#" class="pull-left w-40 m-r"><img src="<?php echo base_url('assetnew/images/a8.jpg');?>" class="img-responsive img-circle" alt="."></a>
								<div class="clear">
									<a href="#" class="_500 block">Jonathan Doe</a>
									<span class="text-muted text-ellipsis">Minggu , 6 Mei 2018</span>
									<span class="text-muted text-ellipsis">Terdapat koreksi dokumen </span> <a href="" class="">Keputusan Menteri <?=$i?></a>
								</div>
							</li>
							<?php } ?>
							 
						</ul>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="box">
						<div class="box-header b-b">
							<h3>Berita</h3>
						</div>
						<ul class="list">
							<?php for ($i=0; $i < 5; $i++) {  ?>
							<li class="list-item">
								<div class="list-body">
									<div class="text-ellipsis">Wellcome <a href="#" class="text-info">@Drew Wllon</a> and play this web application template, have fun1 </div>
									<small class="block text-muted"><i class="fa fa-fw fa-clock-o"></i> 2 minuts ago</small>
								</div>
							</li>
							 
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div> 
