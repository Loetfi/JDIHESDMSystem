<style>
	.display-inline-block {
		display: inline-block;
	}
</style>

<div class="row-col">

	<div class="col-lg b-r"> 
		<div class="padding">
			<div class="row">
				<div class="box display-inline-block">
					<div class="box-header b-b">
						<h3>Format</h3>
					</div>
					<div class="box-body">
						<form data-ui-jp="parsley" id="form">
							<div id="rootwizard" data-ui-jp="bootstrapWizard" data-ui-options="{
							onTabClick: function(tab, navigation, index) {
							return false;
						},
						onNext: function(tab, navigation, index) {
						var instance = $('#form').parsley();
						instance.validate();
						if(!instance.isValid()) {
						return false;
					}
				}
			}">
			<ul class="nav nav-pills clearfix m-b">
				<li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Undang-Undang</a></li>
				<li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab">P.Pemerintah</a></li>
				<li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab">Keputusan</a></li>
				<li class="nav-item"><a class="nav-link" href="#tab4" data-toggle="tab">P. Presiden</a></li>
				<li class="nav-item"><a class="nav-link" href="#tab5" data-toggle="tab">P. Menteri</a></li>
				<li class="nav-item"><a class="nav-link" href="#tab6" data-toggle="tab">Ins. Menteri</a></li>
				<li class="nav-item"><a class="nav-link" href="#tab7" data-toggle="tab">Surat Perintah</a></li>
				<li class="nav-item"><a class="nav-link" href="#tab8" data-toggle="tab">Surat Edaran</a></li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active" id="tab1">
					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Keputusan Menteri</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('Keputusan_menteri_doc');?>" class="btn btn-primary btn-xs">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>

					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Keputusan Delegasi Menteri</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>

					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Keputusan Pejabat Pimipinan Tinggi Madya</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>

					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Keputusan Pejabat Pimipinan Tinggi Madya</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>

					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Keputusan Pejabat Pimipinan Tinggi Pratama</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>

					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Keputusan KPA/KPB Satuan Kerja Setjen KESDM</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>

					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Keputusan KPA/KPB Satuan Kerja PPBMN</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>

				</div>

				<div class="tab-pane" id="tab2">
					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Undang - Undang</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('Undang2');?>" class="btn btn-primary btn-xs">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>
				</div>
				<div class="tab-pane" id="tab3">
					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>P.Pemerintah</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('Perpres');?>" class="btn btn-primary btn-xs">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>
				</div>

				<div class="tab-pane" id="tab4">
					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>P.Presiden</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>
				</div>

				<div class="tab-pane" id="tab5">
					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>P.Menteri</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>
				</div>

				<div class="tab-pane" id="tab6">
					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Ins. Menteri</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>
				</div>

				<div class="tab-pane" id="tab7">
					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Surat Perintah</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>
				</div>

				<div class="tab-pane" id="tab8">
					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Surat Edaran Menteri</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>

					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Surat Edaran Delegasi Menteri</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>

					<div class="col-sm-3">
						<div class="box"> 
							<div class="padding">
								<div> 
									<p><b>Surat Edaran Pejabat Pimpinan Tinggi Madya</b></p>
								</div>
								<div class="text-center">
									<p class="text-muted m-b-md"></p> 
									<a href="<?php echo site_url('#');?>" class="btn btn-primary btn-xs disabled">Pilih <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>	
					</div>

				</div>

			</div>  
		</div>
	</form>
</div>
</div> 

</div>
