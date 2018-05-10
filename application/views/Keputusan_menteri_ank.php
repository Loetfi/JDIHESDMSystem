<style>
	.display-inline-block {
		display: inline-block;
	}
	.form-control {
		width: auto !important;
	}
	.form-group {
		margin-right: 15px;
	}
	.md-input {
		width: auto !important;
	}
	.width-50p {
		width: 50%;
	}
	.width-100p {
		width: 100%;
	}
	.width-80px {
		width: 80px;
	}
	fieldset {
		border: 1px #d2d2d2 dotted;
		border-radius: 4px;
		margin-bottom: 5px;
		padding: 10px;
	}
	legend {
		font-size: 20px;
		padding: 1px 10px;
		width: auto !important;
	}
</style>
<div class="row-col">
	<div class="col-lg b-r"> 
		<div class="padding">
			<form method="POST" id="form-keputusan" target="_blank">
			<div class="row">
				<div class="col-lg-12 col-sm-6">
					<div class="box">
						<div class="box-header b-b">
							<h3>Judul Dokumen</h3>
						</div>
						<div class="padding">
							<div class="form-group">
								<textarea name="super_judul" class="form-control" placeholder="Judul Dokumen" rows="4" style="width:100% !important" required></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-6">
					<div class="box">
						<div class="box-header b-b">
							<h3>Menimbang</h3>
						</div>
						<div class="box-body p-v-md">
							<div class="display-inline-block width-100p">
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMenimbang[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMenimbang[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMenimbang[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Menimbang[]" placeholder="Menimbang 1" rows="7" style="width:100% !important" required></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMenimbang[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMenimbang[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMenimbang[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Menimbang[]" placeholder="Menimbang 2" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
							</div>
							<div class="display-inline-block width-100p">
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMenimbang[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMenimbang[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMenimbang[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Menimbang[]" placeholder="Menimbang 3" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMenimbang[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMenimbang[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMenimbang[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Menimbang[]" placeholder="Menimbang 4" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 col-sm-6">
					<div class="box">
						<div class="box-header b-b">
							<h3>Mengingat</h3>
						</div>
						<div class="box-body p-v-md">
							<div class="display-inline-block width-100p">
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMengingat[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMengingat[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMengingat[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Mengingat[]" placeholder="Mengingat 1" rows="7" style="width:100% !important" required></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMengingat[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMengingat[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMengingat[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Mengingat[]" placeholder="Mengingat 2" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
							</div>
							<div class="display-inline-block width-100p">
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMengingat[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMengingat[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMengingat[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Mengingat[]" placeholder="Mengingat 3" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMengingat[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMengingat[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMengingat[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Mengingat[]" placeholder="Mengingat 4" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 col-sm-6">
					<div class="box">
						<div class="box-header b-b">
							<h3>Memutuskan & Menetapkan</h3>
						</div>
						<div class="box-body p-v-md">
							<div class="display-inline-block width-100p">
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMemutuskan[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMemutuskan[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMemutuskan[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Memutuskan[]" placeholder="Memutuskan 1" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMemutuskan[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMemutuskan[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMemutuskan[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Memutuskan[]" placeholder="Memutuskan 2" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
							</div>
							<div class="display-inline-block width-100p">
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMemutuskan[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMemutuskan[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMemutuskan[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Memutuskan[]" placeholder="Memutuskan 3" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerMemutuskan[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPageMemutuskan[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelMemutuskan[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="Memutuskan[]" placeholder="Memutuskan 4" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 col-sm-6">
					<div class="box">
						<div class="box-header b-b">
							<h3>BAB / Pasal xx(1)</h3>
						</div>
						<div class="box-body p-v-md">
							<div class="display-inline-block width-100p">
								<div class="form-group col-lg-12">
									<textarea class="form-control" name="judulBab1" rows="4" placeholder="ex: BAB I dan/atau Pasal 1" style="width:100% !important"></textarea>
								</div>
							</div>
							<div class="display-inline-block width-100p">
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerPasal1[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPagePasal1[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelPasal1[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="contentPasal1[]" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerPasal1[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPagePasal1[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelPasal1[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="contentPasal1[]" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
							</div>
							<div class="display-inline-block width-100p">
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerPasal1[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPagePasal1[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelPasal1[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="contentPasal1[]" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerPasal1[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPagePasal1[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelPasal1[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="contentPasal1[]" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 col-sm-6">
					<div class="box">
						<div class="box-header b-b">
							<h3>BAB / Pasal xx(2)</h3>
						</div>
						<div class="box-body p-v-md">
							<div class="display-inline-block width-100p">
								<div class="form-group col-lg-12">
									<textarea class="form-control" name="judulBab1" rows="4" placeholder="ex: BAB II dan/atau Pasal 2" style="width:100% !important"></textarea>
								</div>
							</div>
							<div class="display-inline-block width-100p">
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerPasal2[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPagePasal2[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelPasal2[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="contentPasal2[]" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerPasal2[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPagePasal2[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelPasal2[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="contentPasal2[]" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
							</div>
							<div class="display-inline-block width-100p">
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerPasal2[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPagePasal2[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelPasal2[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="contentPasal2[]" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-xs-12">
									<div class="col-lg-4 col-sm-12 col-md-12">
										<div class="md-form-group float-label">
											<input class="md-input" type="text" name="pointerPasal2[]" />
											<label>Pointer</label>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="nextPagePasal2[]">
												<option value="continues">Continues Page</option>
												<option value="new">Next Page</option>
											</select>
										</div>
										<div class="form-group">
											<select class="form-control form-control-sm" name="subLevelPasal2[]">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
											</select>
										</div>
									</div>
									<div class="col-lg-8 col-sm-12 col-md-12">
										<textarea class="form-control" type="text" name="contentPasal2[]" rows="7" style="width:100% !important"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 col-sm-6">
					<div class="box display-inline-block padding width-100p">
						<div class="col-lg-2 col-xs-6">
							<button type="submit" class="btn btn-success" id="view_doc">Lihat Dokumen</button>
						</div>
						<div class="col-lg-1 col-xs-6">
							<button type="submit" class="btn btn-success" id="save_doc">Simpan Dokumen</button>
						</div>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

<script>
$("#view_doc").click(function(e) {
	$("#form-keputusan").attr("action", "<?php echo site_url('keputusan_menteri_doc/sanusi'); ?>");
});

$("#save_doc").click(function(e) {
	$("#form-keputusan").attr("action", "<?php echo site_url('keputusan_menteri_doc/save_document'); ?>");
});
</script>