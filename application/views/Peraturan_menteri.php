<div class="row-col">
	<div class="col-lg b-r"> 
		<div class="padding">
			<div class="box">
				<div class="padding">
					<legend>Buat Dokumen Peraturan Presiden</legend>
					<form action="<?php echo site_url('Peraturan_menteri/save_document'); ?>" method="POST" target="_blank" >
						<div class="form-group" style="margin-bottom:5px">
							<textarea name="super_judul" 
									  class="form-control" 
									  autocomplete="off" 
									  placeholder="Judul Dokumen" 
									  rows="4" required><?php echo @$detail_dokumen['judul'][0]['teks']; ?>
PERATURAN MENTERI ENERGI DAN SUMBER DAYA MINERAL
REPUBLIK INDONESIA
NOMOR x|x|x| TAHUN x|x|
TENTANG
PELAKSANAAN KAIDAH PERTAMBANGAN YANG BAIK 
DAN PENGAWASAN PERTAMBANGAN MINERAL DAN BATUBARA

DENGAN RAHMAT TUHAN YANG MAHA ESA

MENTERI ENERGI DAN SUMBER DAYA MINERAL REPUBLIK INDONESIA,</textarea>
						</div>
						<fieldset>
							<legend>Menimbang</legend>
							<div>
								<?php $namaMenimbang = 'Menimbang';?>
								<div class="form-group" id="text-<?php echo $namaMenimbang; ?>1" style="display:inline-block; width:100%;">
									<div style="float:left; width:20%">
										<input type="text" name="pointer<?php echo $namaMenimbang; ?>[]" class="form-control" placeholder="Pointer" />
										<select name="nextPage<?php echo $namaMenimbang; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select>
										<select name="subLevel<?php echo $namaMenimbang; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="0">SubLevel 0</option>
											<option value="1">SubLevel 1</option>
											<option value="2">SubLevel 2</option>
											<option value="3">SubLevel 3</option>
											<option value="4">SubLevel 4</option>
										</select>
									</div>
									<div style="width:100%">
										<textarea name="<?php echo $namaMenimbang; ?>[]" 
												  type="text" 
												  class="form-control" 
												  placeholder="Menimbang" 
												  rows="6" 
												  style="float:left; margin-left:5px; width:75%;" required>
bahwa untuk melaksanakan ketentuan Pasal 27 ayat (3), Pasal 36 ayat (2), Pasal 42 ayat (8), Pasal 43 ayat (2) dan ayat (4), Pasal 54 ayat (2), Pasal 55 ayat (4), Pasal 86 ayat (2), Pasal 96, Pasal 104 ayat (4), Pasal 108, Pasal 109 ayat (4), Pasal 113, Pasal 114 ayat (2),  dan Pasal 116 ayat (2)  Undang-Undang Nomor 8 Tahun 2016 tentang Penyandang Disabilitas, perlu menetapkan Peraturan Pemerintah tentang Pelaksanaan atas Undang-Undang Nomor 8 Tahun 2016 tentang Penyandang Disabilitas;
												  </textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenimbang(this, 1)" 
										   style="position:absolute; right:5%;" 
										   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Mengingat</legend>
							<div>
								<?php $namaMengingat = 'Mengingat'; ?>
								<div class="form-group" id="text-<?php echo $namaMengingat; ?>1" style="display:inline-block; width:100%;">
									<div style="float:left; width:20%">
										<input type="text" name="pointer<?php echo $namaMengingat; ?>[]" class="form-control" placeholder="Pointer" />
										<select name="nextPage<?php echo $namaMengingat; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select>
										<select name="subLevel<?php echo $namaMengingat; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="0">SubLevel 0</option>
											<option value="1">SubLevel 1</option>
											<option value="2">SubLevel 2</option>
											<option value="3">SubLevel 3</option>
											<option value="4">SubLevel 4</option>
										</select>
									</div>
									<div style="width:100%">
										<textarea name="<?php echo $namaMengingat; ?>[]" 
												  type="text" 
												  class="form-control" 
												  placeholder="Mengingat" 
												  rows="6" 
												  style="float:left; margin-left:5px; width:75%;" required></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMengingat(this, 1)" 
										   style="position:absolute; right:5%;" 
										   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
								<div class="form-group" id="text-<?php echo $namaMengingat; ?>2" style="display:inline-block; width:100%;">
									<div style="float:left; width:20%">
										<input type="text" name="pointer<?php echo $namaMengingat; ?>[]" class="form-control" placeholder="Pointer" />
										<select name="nextPage<?php echo $namaMengingat; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select>
										<select name="subLevel<?php echo $namaMengingat; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="0">SubLevel 0</option>
											<option value="1">SubLevel 1</option>
											<option value="2">SubLevel 2</option>
											<option value="3">SubLevel 3</option>
											<option value="4">SubLevel 4</option>
										</select>
									</div>
									<div style="width:100%">
										<textarea name="<?php echo $namaMengingat; ?>[]" 
												  type="text" 
												  class="form-control" 
												  placeholder="Mengingat" 
												  rows="6" 
												  style="float:left; margin-left:5px; width:75%;" required></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMengingat(this, 1)" 
										   style="position:absolute; right:5%;" 
										   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
								<div class="form-group" id="text-<?php echo $namaMengingat; ?>3" style="display:inline-block; width:100%;">
									<div style="float:left; width:20%">
										<input type="text" name="pointer<?php echo $namaMengingat; ?>[]" class="form-control" placeholder="Pointer" />
										<select name="nextPage<?php echo $namaMengingat; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select>
										<select name="subLevel<?php echo $namaMengingat; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="0">SubLevel 0</option>
											<option value="1">SubLevel 1</option>
											<option value="2">SubLevel 2</option>
											<option value="3">SubLevel 3</option>
											<option value="4">SubLevel 4</option>
										</select>
									</div>
									<div style="width:100%">
										<textarea name="<?php echo $namaMengingat; ?>[]" 
												  type="text" 
												  class="form-control" 
												  placeholder="Mengingat" 
												  rows="6" 
												  style="float:left; margin-left:5px; width:75%;" required></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMengingat(this, 1)" 
										   style="position:absolute; right:5%;" 
										   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Memutuskan</legend>
							<div>
								<?php $namaMemutuskan = 'Memutuskan'; ?>
								<div class="form-group" id="text-<?php echo $namaMemutuskan; ?>1" style="display:inline-block; width:100%;">
									<div style="float:left; width:20%">
										<input type="text" name="pointer<?php echo $namaMemutuskan; ?>[]" class="form-control" placeholder="Pointer" />
										<select name="nextPage<?php echo $namaMemutuskan; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="continue">Continues Page</option>
											<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
										</select>
										<select name="subLevel<?php echo $namaMemutuskan; ?>[]" class="form-control" style="cursor:pointer; margin-top:10px;">
											<option value="0">SubLevel 0</option>
											<option value="1">SubLevel 1</option>
											<option value="2">SubLevel 2</option>
											<option value="3">SubLevel 3</option>
											<option value="4">SubLevel 4</option>
										</select>
									</div>
									<div style="width:100%">
										<textarea name="<?php echo $namaMemutuskan; ?>[]" 
												  type="text" 
												  class="form-control" 
												  placeholder="Mengingat" 
												  rows="6" 
												  style="float:left; margin-left:5px; width:75%;" required>
PERATURAN MENTERI ENERGI DAN SUMBER DAYA MINERAL TENTANG PELAKSANAAN KAIDAH PERTAMBANGAN YANG BAIK DAN PENGAWASAN PERTAMBANGAN MINERAL DAN BATUBARA.</textarea>
										<a href="javascript:void(0)" 
										   onclick="addMemutuskan(this, 1)" 
										   style="position:absolute; right:5%;" 
										   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
									</div>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Menetapkan -- BAB, pasal, bagian-bagian dan paragraph masih di pikirkan --</legend>
							<div>
								<?php 
								$namaBabPasal = 'BabPasal';
								$noBab = '1'; 
								?>
								<div class="form-group" id="text-<?php echo $namaBabPasal; ?>-<?php echo $noBab; ?>" style="display:inline-block; width:100%;">
									<div>
										<textarea type="text" name="pointerBab[]" class="form-control" placeholder="Bab <?php echo $noBab; ?>" style="width:93%" >BAB I
KETENTUAN UMUM</textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanBab(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Bab"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									
									
									<?php $noPasal = '1'; ?>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="keteranganPasal[<?php echo $noBab; ?>][]" class="form-control" placeholder="Ketarangan Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
									</div>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="pasal[<?php echo $noBab; ?>][]" class="form-control" placeholder="Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanPasal(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Pasal"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									
									<?php $noPasal = '2'; ?>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="keteranganPasal[<?php echo $noBab; ?>][]" class="form-control" placeholder="Ketarangan Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
									</div>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="pasal[<?php echo $noBab; ?>][]" class="form-control" placeholder="Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanPasal(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Pasal"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									
									<?php $noPasal = '3'; ?>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="keteranganPasal[<?php echo $noBab; ?>][]" class="form-control" placeholder="Ketarangan Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
									</div>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="pasal[<?php echo $noBab; ?>][]" class="form-control" placeholder="Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanPasal(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Pasal"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div>
								<?php $noBab = '2'; ?>
								<div class="form-group" id="text-<?php echo $namaBabPasal; ?>-<?php echo $noBab; ?>" style="display:inline-block; width:100%;">
									<div>
										<textarea type="text" name="pointerBab[]" class="form-control" placeholder="Bab <?php echo $noBab; ?>" style="width:93%" >
BAB II
PELAKSANAAN KAIDAH TEKNIK 
PERTAMBANGAN YANG BAIK</textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanBab(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Bab"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									
									
									<?php $noPasal = '1'; ?>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="keteranganPasal-<?php echo $noBab; ?>[]" class="form-control" placeholder="Ketarangan Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
									</div>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="pasal[<?php echo $noBab; ?>][]" class="form-control" placeholder="Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanPasal(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Pasal"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									
									<?php $noPasal = '2'; ?>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="keteranganPasal-<?php echo $noBab; ?>[]" class="form-control" placeholder="Ketarangan Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
									</div>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="pasal[<?php echo $noBab; ?>][]" class="form-control" placeholder="Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanPasal(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Pasal"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div>
								<?php $noBab = '3'; ?>
								<div class="form-group" id="text-<?php echo $namaBabPasal; ?>-<?php echo $noBab; ?>" style="display:inline-block; width:100%;">
									<div>
										<textarea type="text" name="pointerBab[]" class="form-control" placeholder="Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanBab(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Bab"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									
									
									<?php $noPasal = '1'; ?>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="keteranganPasal-<?php echo $noBab; ?>[]" class="form-control" placeholder="Ketarangan Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
									</div>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="pasal[<?php echo $noBab; ?>][]" class="form-control" placeholder="Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanPasal(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Pasal"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									
									<?php $noPasal = '2'; ?>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="keteranganPasal-<?php echo $noBab; ?>[]" class="form-control" placeholder="Ketarangan Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
									</div>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="pasal[<?php echo $noBab; ?>][]" class="form-control" placeholder="Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanPasal(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Pasal"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									
									<?php $noPasal = '3'; ?>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="keteranganPasal-<?php echo $noBab; ?>[]" class="form-control" placeholder="Ketarangan Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
									</div>
									<div style="margin-top:10px; margin-left:25px;">
										<textarea type="text" name="pasal[<?php echo $noBab; ?>][]" class="form-control" placeholder="Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" style="width:93%" ></textarea>
										<a href="javascript:void(0)" 
										   onclick="addMenetapkanPasal(this, 1)" 
										   style="position:absolute; right:5%; margin-top:-35px;" 
										   title="Tambah Pasal"><i class="fa fa-lg fa-plus"></i></a>
									</div>
									<div style="margin-top:10px; width:92%; margin-left:56px;">
										<table width="100%" class="">
											<tr>
												<td width="20%" valign="top">
													<input type="text" name="pointer<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" placeholder="Pointer" />
													<select name="nextPage<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="continue">Continues Page</option>
														<option value="newP">Next Page Portrait</option><option value="newL">Next Page Landscape</option>
													</select>
													<select name="subLevel<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" class="form-control" style="cursor:pointer; margin-top:10px;">
														<option value="0">SubLevel 0</option>
														<option value="1">SubLevel 1</option>
														<option value="2">SubLevel 2</option>
														<option value="3">SubLevel 3</option>
														<option value="4">SubLevel 4</option>
													</select>
												</td>
												<td valign="top">
													<textarea name="<?php echo $namaBabPasal; ?>[<?php echo $noBab; ?>][<?php echo $noPasal; ?>][]" 
															  type="text" 
															  class="form-control" 
															  placeholder="Point Pasal <?php echo $noPasal; ?> Bab <?php echo $noBab; ?>" 
															  rows="6" 
															  style="float:left; margin-left:5px; width:95%; margin-bottom: 20px;" ></textarea>
													<a href="javascript:void(0)" 
													   onclick="addMenetapkan(this, 1)" 
													   style="position:absolute; right:5%;" 
													   title="Tambah Isi"><i class="fa fa-lg fa-plus"></i></a>
												</td>
											</tr>
										</table>
									</div>
									
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Tanda Tangan</legend>
							<div class="form-group">
								<textarea name="ttd" class="form-control" autocomplete="off" placeholder="Tanda Tangan" rows="4" style="width:95%" ></textarea>
							</div>
						</fieldset>
						<fieldset>
							<legend>Mengundang</legend>
							<div class="form-group">
								<textarea name="ttd" class="form-control" autocomplete="off" placeholder="Tanda Tangan" rows="4" style="width:95%" ></textarea>
							</div>
						</fieldset>
						<fieldset>
							<button type="submit">Sumbit</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>