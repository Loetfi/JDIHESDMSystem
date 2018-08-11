<?php
/* @property phpword_model $phpword_model */

class Peraturan_menteri extends CI_Controller {

	function __construct() {
		parent::__construct();
		// $this->load->model('phpword_model');
    }
	
	function index() {
		$data = array(
			'contents'	=> 'Peraturan_menteri', 
			'title'		=> 'Dashbord Sistem'
		);
		$this->load->view('backend/template/head', $data, FALSE);
		// $this->load->view('');
	}
	function save_document()
	{
		$this->save_doc();
		$this->session->set_flashdata('message', '<div class="alert alert-info"> Dokumen berhasil dibuat.</div>');
		redirect('backend/dokumen','refresh');
	}
	function sanusi($thisDownload = 'benar') {
		error_reporting(0);
		$this->load->library('Phpword');
		$phpWord = new \PhpOffice\PhpWord\PhpWord();

		// setting kertas dan margin
		$thisPage = array(
			'paperSize' 	=> 'Folio',
			'marginLeft' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5),
			'marginRight' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5),
			'marginTop' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3),
			'marginBottom' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5),
			'headerHeight' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1.25),
			'footerHeight' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1.25),
		);
		$thisPageLandscape = array(
			'paperSize' 	=> 'Folio',
			'orientation' => 'landscape',
			'marginLeft' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5),
			'marginRight' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5),
			'marginTop' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5),
			'marginBottom' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4),
			'headerHeight' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1.25),
			'footerHeight' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1.25),
		);

		// addSection portrait awal
		$section = $phpWord->addSection($thisPage);

		// setting paragraf global
		$tabsDefault = array(
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(5.5)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(6.5)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(7.5)),
		);
		$phpWord->setDefaultParagraphStyle(
			array(
				'align'  => 'both',
				'spacing' => 120,
				'spaceAfter' => 0,
				'tabs' => $tabsDefault,
			)
		);

		$centerContent = array(
			'indentation' => array(
				'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5),
			),
			'align' => 'center',
		);
		$babTitle = array(
			'indentation' => array(
				'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5),
			),
			'align' => 'center',
		);
		$babContent = array(
			'indentation' => array(
				'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5),
			),
			'align' => 'left',
		);

		// setting subLevel 0
		$subLevel[0]['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5),
		);
		$subLevel[0]['firstLine']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5),
		);
		$subLevel[0]['pointer']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5),
		);

		// setting subLevel 1
		$subLevel[1]['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5),
		);
		// setting subLevel 1 pointer
		$subLevel[1]['pointer']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5),
		);
		// setting subLevel 1 pointer body
		$subLevel[1]['firstLine']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5),
		);

		// setting subLevel 2
		$subLevel[2]['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(5.5),
		);
		// setting subLevel 2 pointer
		$subLevel[2]['pointer']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(5.5),
		);

		// setting subLevel 3
		$subLevel[3]['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(6.5),
		);
		// setting subLevel 3 pointer
		$subLevel[3]['pointer']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(6.5),
		);
		// setting subLevel 4
		$subLevel[4]['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(7.5),
		);
		// setting subLevel 3 pointer
		$subLevel[4]['pointer']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(7.5),
		);


		$subLevel['listing_1']['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1),
		);
		$subLevel['listing_1']['firstLine']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1),
		);
		$subLevel['listing_1']['pointer']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2),
		);

		// 'tabs' => array(
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5)),
		// ),


		// setting font global
		$fontStyle['name'] = 'Bookman Old Style';
		$fontStyle['size'] = 12;




		// header firstPage
		$header = $section->addHeader();
		$header->firstPage();
		$table = $header->addTable();
		$table->addRow();
		$cell = $table->addCell(450);
		$textrun = $cell->addTextRun();
		$textrun->addText('');
		// Add header for all other pages
		$subsequent = $section->addHeader();
		$subsequent->addPreserveText('- {PAGE} -', $fontStyle, array('align' => 'center'));


		/* *********************************************************************************** */
		## judul
		$fontStyle['allCaps'] = TRUE;
		$judul = $_POST['super_judul'];
		$barisJudul = explode("\r\n",$judul);

		// print_r($barisJudul); exit();
		foreach($barisJudul as $row){
			if ($row != ""){
				$txtTitle = $row;
				$section->addText($txtTitle, $fontStyle, array('align' => 'center'));
			} else {
				$section->addTextBreak(1,$fontStyle);
			}
		}
		$arrData['judul'] = $judul;
		// $arrData['judul']['pointerMenimbang'][] = "";
		// $arrData['judul']['nextPageMenimbang'][] = "";
		// $arrData['judul']['subLevelMenimbang'][] = 0;
		// $arrData['judul']['text'][] = $judul;
		/* *********************************************************************************** */


		$fontStyle['allCaps'] = false;
		/* *********************************************************************************** */
		## menimbang
		$Menimbang = $_POST['Menimbang'];
		$pointerMenimbang = $_POST['pointerMenimbang'];

		$nextPageMenimbang = @$_POST['nextPageMenimbang'];
		$subLevelMenimbang = @$_POST['subLevelMenimbang'];
		$theFirst = true;

		// print_r($nextPageMenimbang); die();
		for($i=0; $i<count($Menimbang); $i++){

			if ($Menimbang[$i] != ''){
				$barisMenimbang = explode("\r\n",$Menimbang[$i]);

				if (@$nextPageMenimbang[$i] == 'newP')
					$section = $phpWord->addSection($thisPage);
				else if (@$nextPageMenimbang[$i] == 'newL')
					$section = $phpWord->addSection($thisPageLandscape);

				// print_r($Menimbang[$i]);
				// print_r($barisMenimbang);
				for($j=0; $j<count($barisMenimbang); $j++){

					$idxSubLevel = @$subLevelMenimbang[$i];

					if ($theFirst==true){ // awal Menimbang
						if ($j==0){ // awal baris menimbang

							if ($pointerMenimbang[$i] == ''){ // awal tanpa pointer
								$section->addText(
									"Menimbang\t:\t".$barisMenimbang[$j],
									$fontStyle,
									$subLevel[0]['firstLine']
								);
							}
							else{ // awal ada pointer
								$section->addText(
									"Menimbang\t:\t".$pointerMenimbang[$i]."\t".$barisMenimbang[$j],
									$fontStyle,
									$subLevel[1]['firstLine']
								);
							}
						}
						else {
							if ($pointerMenimbang[$i] == ''){ // lanjutan tanpa pointer
								$section->addText(
									$barisMenimbang[$j],
									$fontStyle,
									$subLevel[0]['default']
								);
							}
							else { // lanjutan ada pointer
								$section->addText(
									$barisMenimbang[$j],
									$fontStyle,
									$subLevel[1]['default']
								);
							}
						}
					}
					else { // body Menimbang
						if ($j==0){ // awal body baris menimbang
							if ($pointerMenimbang[$i] == ''){ // awal body menimbang tanpa pointer
								$section->addText(
									$barisMenimbang[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['default']
								);
							}
							else { // awal body menimbang ada pointer
								$section->addText(
									$pointerMenimbang[$i]."\t".$barisMenimbang[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['pointer']
								);

							}
						}
						else {
							$section->addText(
								$barisMenimbang[$j],
								$fontStyle,
								$subLevel[$idxSubLevel]['default']
							);
						}
					}

				}
				$theFirst = false;
			}

			$arrData['Menimbang']['pointerMenimbang'][] = $pointerMenimbang[$i];
			$arrData['Menimbang']['nextPageMenimbang'][] = $nextPageMenimbang[$i];
			$arrData['Menimbang']['subLevelMenimbang'][] = $subLevelMenimbang[$i];
			$arrData['Menimbang']['text'][] = $Menimbang[$i];
		}

		/* *********************************************************************************** */

		/* *********************************************************************************** */
		## Mengingat
		$Mengingat = $_POST['Mengingat'];
		$pointerMengingat = $_POST['pointerMengingat'];

		$nextPageMengingat = @$_POST['nextPageMengingat'];
		$subLevelMengingat = @$_POST['subLevelMengingat'];
		$theFirst = true;
		for($i=0; $i<count($Mengingat); $i++){

			if ($Mengingat[$i] != ''){
				$barisMengingat = explode("\r\n",$Mengingat[$i]);

				if (@$nextPageMengingat[$i] == 'newP')
					$section = $phpWord->addSection($thisPage);
				else if (@$nextPageMengingat[$i] == 'newL')
					$section = $phpWord->addSection($thisPageLandscape);


				// print_r($Mengingat[$i]);
				// print_r($barisMengingat);
				for($j=0; $j<count($barisMengingat); $j++){

					$idxSubLevel = @$subLevelMengingat[$i];

					if ($theFirst==true){ // awal Mengingat
						if ($j==0){ // awal baris Mengingat

							if ($pointerMengingat[$i] == ''){ // awal tanpa pointer
								$section->addText(
									"Mengingat\t:\t".$barisMengingat[$j],
									$fontStyle,
									$subLevel[0]['firstLine']
								);
							}
							else{ // awal ada pointer
								$section->addText(
									"Mengingat\t:\t".$pointerMengingat[$i]."\t".$barisMengingat[$j],
									$fontStyle,
									$subLevel[1]['firstLine']
								);
							}
						}
						else {
							if ($pointerMengingat[$i] == ''){ // lanjutan tanpa pointer
								$section->addText(
									$barisMengingat[$j],
									$fontStyle,
									$subLevel[0]['default']
								);
							}
							else { // lanjutan ada pointer
								$section->addText(
									$barisMengingat[$j],
									$fontStyle,
									$subLevel[1]['default']
								);
							}
						}
					}
					else { // body Mengingat
						if ($j==0){ // awal body baris Mengingat
							if ($pointerMengingat[$i] == ''){ // awal body Mengingat tanpa pointer
								$section->addText(
									$barisMengingat[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['default']
								);
							}
							else { // awal body Mengingat ada pointer
								$section->addText(
									$pointerMengingat[$i]."\t".$barisMengingat[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['pointer']
								);

							}
						}
						else {
							$section->addText(
								$barisMengingat[$j],
								$fontStyle,
								$subLevel[$idxSubLevel]['default']
							);
						}
					}

				}
				$theFirst = false;
			}

			$arrData['Mengingat']['pointerMengingat'][] = $pointerMengingat[$i];
			$arrData['Mengingat']['nextPageMengingat'][] = $nextPageMengingat[$i];
			$arrData['Mengingat']['subLevelMengingat'][] = $subLevelMengingat[$i];
			$arrData['Mengingat']['text'][] = $Mengingat[$i];
		}
		/* *********************************************************************************** */

		/* *********************************************************************************** */

		$section->addTextBreak(1,$fontStyle);
		$section->addText(
			"MEMUTUSKAN:",
			$fontStyle,
			$centerContent
		);


		## Memutuskan
		$Memutuskan = $_POST['Memutuskan'];
		$pointerMemutuskan = @$_POST['pointerMemutuskan'];

		$nextPageMemutuskan = @$_POST['nextPageMemutuskan'];
		$subLevelMemutuskan = @$_POST['subLevelMemutuskan'];
		$theFirst = true;
		for($i=0; $i<count($Memutuskan); $i++){

			if ($Memutuskan[$i] != ''){
				$barisMemutuskan = explode("\r\n",$Memutuskan[$i]);

				if (@$nextPageMemutuskan[$i] == 'newP')
					$section = $phpWord->addSection($thisPage);
				else if (@$nextPageMemutuskan[$i] == 'newL')
					$section = $phpWord->addSection($thisPageLandscape);

				// print_r($Memutuskan[$i]);
				// print_r($barisMemutuskan);
				for($j=0; $j<count($barisMemutuskan); $j++){

					$idxSubLevel = @$subLevelMemutuskan[$i];

					if ($theFirst==true){ // awal Memutuskan
						if ($j==0){ // awal baris Memutuskan

							if ($pointerMemutuskan[$i] == ''){ // awal tanpa pointer
								$section->addText(
									"Menetapkan\t:\t".$barisMemutuskan[$j],
									$fontStyle,
									$subLevel[0]['firstLine']
								);
							}
							else{ // awal ada pointer
								$section->addText(
									$pointerMemutuskan[$i]."\t:\t KEPUTUSAN MENTERI ENERGI DAN SUMBER DAYA MINERAL TENTANG ".$barisMemutuskan[$j],
									$fontStyle,
									$subLevel[0]['firstLine']
								);
							}
							$section->addTextBreak(1,$fontStyle);
						}
						else {
							if ($pointerMemutuskan[$i] == ''){ // lanjutan tanpa pointer
								$section->addText(
									$barisMemutuskan[$j],
									$fontStyle,
									$subLevel[0]['default']
								);
							}
							else { // lanjutan ada pointer
								$section->addText(
									$barisMemutuskan[$j],
									$fontStyle,
									$subLevel[1]['default']
								);
							}
						}
					}
					else { // body Memutuskan
						if ($j==0){ // awal body baris Memutuskan
							if ($pointerMemutuskan[$i] == ''){ // awal body Memutuskan tanpa pointer
								$section->addText(
									$barisMemutuskan[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['default']
								);
							}
							else { // awal body Memutuskan ada pointer
								$section->addText(
									$pointerMemutuskan[$i]."\t".$barisMemutuskan[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['pointer']
								);

							}
						}
						else {
							$section->addText(
								$barisMemutuskan[$j],
								$fontStyle,
								$subLevel[$idxSubLevel]['default']
							);
						}
					}

				}
				// $theFirst = false;
			}

			$arrData['Memutuskan']['pointerMemutuskan'][] = $pointerMemutuskan[$i];
			$arrData['Memutuskan']['nextPageMemutuskan'][] = $nextPageMemutuskan[$i];
			$arrData['Memutuskan']['subLevelMemutuskan'][] = $subLevelMemutuskan[$i];
			$arrData['Memutuskan']['text'][] = $Memutuskan[$i];
		}
		/* *********************************************************************************** */
		
		
		## BAB cobaSanusi
		$pointerBab = @$_POST['pointerBab'];
		$arrPasal = @$_POST['pasal'];
		$arrKeteranganPasal = @$_POST['keteranganPasal'];
		
		$arrPointPasal = @$_POST['BabPasal'];
		$subLevelBabPasal = @$_POST['subLevelBabPasal'];
		$pointerBabPasal = @$_POST['pointerBabPasal'];
		$arrPageBabPasal = @$_POST['nextPageBabPasal'];
		foreach($pointerBab as $key => $val){
			
			$babPasalAll[] = array('id_dokumen' => $idDokumen, 'id_revisi' => $idRevisi,
				'jenis_field' => 'Bab',
				'pointer' => '',
				'layout' => '',
				'subLevel' => '',
				'teks' => $val,
				'cdate' => $cdate,
			);
			
			$fontStyle['allCaps'] = true;
			$barisBab = explode("\r\n",$val);
			foreach($barisBab as $row){
				if ($row != ""){
					$txtBab = $row;
					$section->addText($txtBab, $fontStyle, $babTitle);
				} else {
					$section->addTextBreak(1,$fontStyle);
				}
			}
			
			$fontStyle['allCaps'] = false;
			
			## pasal
			$keyPasal = $key + 1;
			$pasal = $arrPasal[$keyPasal];
			foreach($pasal as $pasalKey => $pasalVal){
				
				$babPasalAll[] = array('id_dokumen' => $idDokumen, 'id_revisi' => $idRevisi,
					'jenis_field' => 'Pasal',
					'pointer' => '',
					'layout' => '',
					'subLevel' => '',
					'teks' => @$pasalVal,
					'cdate' => $cdate,
				);
				$babPasalAll[] = array('id_dokumen' => $idDokumen, 'id_revisi' => $idRevisi,
					'jenis_field' => 'PasalKet',
					'pointer' => '',
					'layout' => '',
					'subLevel' => '',
					'teks' => @$arrKeteranganPasal[$keyPasal][$key],
					'cdate' => $cdate,
				);
				if ($pasalVal != ''){
					$barisPasal = explode("\r\n",$pasalVal);
					$thisParagraf = $babTitle;
					$section->addTextBreak(1,$fontStyle);
				} else {
					$barisPasal = explode("\r\n",@$arrKeteranganPasal[$keyPasal][$key]);
					$thisParagraf = $babContent;
				}
				
				foreach($barisPasal as $row){
					if ($row != ""){
						$txtPasal = $row;
						$section->addText($txtPasal, $fontStyle, $thisParagraf);
					} else {
						$section->addTextBreak(1,$fontStyle);
					}
				}
				
				## point pasal
				$keyPointPasal = $pasalKey + 1;
				$pointPasal = $arrPointPasal[$keyPasal][$keyPointPasal];
				foreach($pointPasal as $pointPasalKey => $pointPasalVal){
					
					$idxSubLevel = $subLevelBabPasal[$keyPasal][$keyPointPasal][$pointPasalKey];
					$pointerPointPasal = @$pointerBabPasal[$keyPasal][$keyPointPasal][$pointPasalKey];
					$nextPageBabPasal = @$arrPageBabPasal[$keyPasal][$keyPointPasal][$pointPasalKey];
					$barisPointPasal = explode("\r\n",$pointPasalVal);
					foreach($barisPointPasal as $row){
						if ($row != ""){
							$txtPointPasal = $row;
							// $section->addText($txtPointPasal, $fontStyle, $subLevel[$idxSubLevel]['pointer']);
							
							if (@$nextPageBabPasal == 'newP')
								$section = $phpWord->addSection($thisPage);
							else if (@$nextPageBabPasal == 'newL')
								$section = $phpWord->addSection($thisPageLandscape);
							
							if ($pointerPointPasal == ''){ // tanpa pointer
								$section->addText(
									$txtPointPasal,
									$fontStyle,
									$subLevel[$idxSubLevel]['default']
								);
							}
							else { // ada pointer
								$section->addText(
									$pointerPointPasal."\t".$txtPointPasal,
									$fontStyle,
									$subLevel[$idxSubLevel]['pointer']
								);

							}
							
							
							
						} else {
							$section->addTextBreak(1,$fontStyle);
						}
					}
					
					
					$babPasalAll[] = array('id_dokumen' => $idDokumen, 'id_revisi' => $idRevisi,
						'jenis_field' => 'PasalPoint',
						'pointer' => @$pointerPointPasal,
						'layout' => @$nextPageBabPasal,
						'subLevel' => $idxSubLevel,
						'teks' => @$pointPasalVal,
						'cdate' => $cdate,
					);
				}
			}
			
			$section->addTextBreak(1,$fontStyle);
		}
		
		// $alldata = $this->insert_detail_document($idDokumen, $idRevisi, $arrData);
		// $this->insert_pasal($babPasalAll);
		// print_r($babPasalAll);
		// die();
		
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */


		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$filename = @$id.'_'.time().'_peraturan-menteri.docx';
		try {
			$fullPath = './'.$filename;
			$objWriter->save($fullPath, 'Word2007');
		} catch (Exception $e) {}
		if ($thisDownload == 'benar'){
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename='.$filename);
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize($fullPath));
			flush();
			readfile($fullPath);
			unlink($fullPath); // deletes the temporary file
			exit;

		} else {
			return $filename;
		}

	}

	function insert_document() {
		$dataDokumen = array(
			'jenis_dokumen'	=> 'Undang-undang',
			'nama_dokumen'	=> isset($_POST['nama_dokumen']) ? $_POST['nama_dokumen'] : '',
			'login_id'		=> !empty($this->session->userdata('login_id')) ? $this->session->userdata('login_id') : 2, // 2 is admin
			'cuser'			=> !empty($this->session->userdata('login_id')) ? $this->session->userdata('login_id') : 2, // 2 is admin
			'cdate'			=> date('Y-m-d H:i:s'),
			'status'		=> 1,
			'submit_doc'	=> 0,
			'relasi_doc'	=> 0
		);
		$queryDokumen = $this->db->insert('dokumen', $dataDokumen);
		return $this->db->insert_id();
	}
	function cek_revisi_document($id) {
		$sql = "
		SELECT
			status_revisi AS revisi,
			length(status_revisi) terhitung
		FROM dokumen_revisi dr
		WHERE dr.id_dokumen = '$id'
		ORDER BY length(status_revisi) DESC, status_revisi DESC 
		LIMIT 1
		";
		$allRow = $this->db->query($sql)->row_array();
		if (@$allRow['terhitung'] == 0){
			$revisi = 'A';
		} else if (@$allRow['terhitung'] > 0){
			$revisi = $allRow['revisi'];
			$revisi++;
		}
		return $revisi;
	}
	function insert_revisi_document($id, $revisi, $namaFile) {


		$dataDokumenRevisi = array(
			'id_dokumen'	=> $id,
			'status_revisi'	=> $revisi,
			'cdate'			=> date('Y-m-d H:i:s'),
			'appto'			=> null,
			'namafile'		=> $namaFile,
			'cuser'			=> !empty($this->session->userdata('login_id')) ? $this->session->userdata('login_id') : 2
		);
		$queryDokumen = $this->db->insert('dokumen_revisi', $dataDokumenRevisi);
		return $this->db->insert_id();
	}

	function insert_detail_document($id, $idRevisi, $insertArray) {
		foreach(array_keys($insertArray) as $valKeys) {
			if(is_string($insertArray[$valKeys])) {
				//echo "String <b>[".$valKeys."]</b>";
				$dataDetailDokumen = array(
					'id_dokumen'	=> $id,
					'id_revisi'		=> $idRevisi,
					'jenis_field'	=> $valKeys,
					'pointer'		=> 0,
					'layout'		=> '',
					'sublevel'		=> 0,
					'teks'			=> $insertArray[$valKeys],
					'cdate'			=> date('Y-m-d H:i:s'),
					'status'		=> 0
				);
				// // // // print_r($dataDetailDokumen);
				$queryDetailDokumen = $this->db->insert('dokumen_detail', $dataDetailDokumen);
			}
			else if(is_array($insertArray[$valKeys])) {
				//echo "Array <b>[".$valKeys."]</b>";
				$arrPivot = array();
				$jenis_field = str_replace('pointer', '', array_keys($insertArray[$valKeys])[0]);
				foreach(array_keys($insertArray[$valKeys]) as $key => $valDetailKeys) {
					//echo "Ada Nilai";
					for($loop = 0; $loop < count($insertArray[$valKeys][$valDetailKeys]); $loop++) {
						$arrPivot[$loop][$key] = $insertArray[$valKeys][$valDetailKeys][$loop];
						if($key === count(array_keys($insertArray[$valKeys]))) {
							$arrPivot[$loop][count($insertArray[$valKeys][$valDetailKeys])] = $jenis_field;
						}
					}
				}

				$idxKomentar=0;
				foreach($arrPivot as $valPivot) {
					if (@$valPivot[3] != ""){
						$dataDetailDokumen = array(
							'id_dokumen'	=> $id,
							'id_revisi'		=> $idRevisi,
							'jenis_field'	=> $valKeys, //$valPivot[4],
							'pointer'		=> $valPivot[0],
							'layout'		=> $valPivot[1],
							'sublevel'		=> $valPivot[2],
							'teks'			=> $valPivot[3],
							'cdate'			=> date('Y-m-d H:i:s'),
							'status'		=> 0
							//'komentar'	=> @$_POST['Komentar_'.$valKeys][$idxKomentar],
						);
						// // // // print_r($dataDetailDokumen);
						$queryDetailDokumen = $this->db->insert('dokumen_detail', $dataDetailDokumen);
						
						// add komentar to tabel komentar_doc
						if(@$_POST['Komentar_'.$valKeys][$idxKomentar]) {
							$dataKomentar = array(
								'id_detail'	=> $this->db->insert_id(),
								'pesan'		=> @$_POST['Komentar_'.$valKeys][$idxKomentar],
								'cdate'		=> date("Y-m-d H:i:s"),
								'user_id'	=> @$this->session->userdata('login_id')
							);
							$this->db->insert('komentar_doc', $dataKomentar);
						}
					}
					$idxKomentar++;
				}
			}
		}
		return ['id_dokumen' =>$id, 'id_revisi' => $idRevisi];
	}
	function insert_pasal($insertArray) {
		foreach($insertArray as $row){
			$queryDetailDokumen = $this->db->insert('dokumen_detail', $row);
		}
	}
	
	function save_doc() {
		$cdate = date('Y-m-d H:i:s');
		
		$arrData['judul'] = $_POST['super_judul'];
		$Menimbang = $_POST['Menimbang'];
		$pointerMenimbang = $_POST['pointerMenimbang'];
		$nextPageMenimbang = @$_POST['nextPageMenimbang'];
		$subLevelMenimbang = @$_POST['subLevelMenimbang'];
		for($i=0; $i<count($Menimbang); $i++) {
			$arrData['Menimbang']['pointerMenimbang'][] = $pointerMenimbang[$i];
			$arrData['Menimbang']['nextPageMenimbang'][] = $nextPageMenimbang[$i];
			$arrData['Menimbang']['subLevelMenimbang'][] = $subLevelMenimbang[$i];
			$arrData['Menimbang']['text'][] = $Menimbang[$i];
		}
		$Mengingat = $_POST['Mengingat'];
		$pointerMengingat = $_POST['pointerMengingat'];
		$nextPageMengingat = @$_POST['nextPageMengingat'];
		$subLevelMengingat = @$_POST['subLevelMengingat'];
		for($i=0; $i<count($Mengingat); $i++) {
			$arrData['Mengingat']['pointerMengingat'][] = $pointerMengingat[$i];
			$arrData['Mengingat']['nextPageMengingat'][] = $nextPageMengingat[$i];
			$arrData['Mengingat']['subLevelMengingat'][] = $subLevelMengingat[$i];
			$arrData['Mengingat']['text'][] = $Mengingat[$i];
		}
		$Memutuskan = $_POST['Memutuskan'];
		$pointerMemutuskan = @$_POST['pointerMemutuskan'];
		$nextPageMemutuskan = @$_POST['nextPageMemutuskan'];
		$subLevelMemutuskan = @$_POST['subLevelMemutuskan'];
		for($i=0; $i<count($Memutuskan); $i++) {
			$arrData['Memutuskan']['pointerMemutuskan'][] = @$pointerMemutuskan[$i];
			$arrData['Memutuskan']['nextPageMemutuskan'][] = @$nextPageMemutuskan[$i] == '' ? 'continue' : @$nextPageMemutuskan[$i];
			$arrData['Memutuskan']['subLevelMemutuskan'][] = @$subLevelMemutuskan[$i];
			$arrData['Memutuskan']['text'][] = @$Memutuskan[$i];
		}
		
		
		if (@$_POST['id_dokumen'] == '')
			$id = $this->insert_document();
		else
			$id = $_POST['id_dokumen'];

		$namaFile = $this->sanusi('salah');
		$revisi = $this->cek_revisi_document($id);
		$idRevisi = $this->insert_revisi_document($id, $revisi, $namaFile);
		$alldata = $this->insert_detail_document($id, $idRevisi, $arrData);
		
		$idDokumen = $id;
		## BAB cobaSanusi
		$pointerBab = @$_POST['pointerBab'];
		$arrPasal = @$_POST['pasal'];
		$arrKeteranganPasal = @$_POST['keteranganPasal'];
		
		$arrPointPasal = @$_POST['BabPasal'];
		$subLevelBabPasal = @$_POST['subLevelBabPasal'];
		$pointerBabPasal = @$_POST['pointerBabPasal'];
		$arrPageBabPasal = @$_POST['nextPageBabPasal'];
		foreach($pointerBab as $key => $val){
			
			$babPasalAll[] = array('id_dokumen' => $idDokumen, 'id_revisi' => $idRevisi,
				'jenis_field' => 'Bab',
				'pointer' => '',
				'layout' => '',
				'subLevel' => '',
				'teks' => $val,
				'cdate' => $cdate,
			);
			
			## pasal
			$keyPasal = $key + 1;
			$pasal = $arrPasal[$keyPasal];
			foreach($pasal as $pasalKey => $pasalVal){
				
				$babPasalAll[] = array('id_dokumen' => $idDokumen, 'id_revisi' => $idRevisi,
					'jenis_field' => 'PasalKet',
					'pointer' => '',
					'layout' => '',
					'subLevel' => '',
					'teks' => @$arrKeteranganPasal[$keyPasal][$key],
					'cdate' => $cdate,
				);
				$babPasalAll[] = array('id_dokumen' => $idDokumen, 'id_revisi' => $idRevisi,
					'jenis_field' => 'Pasal',
					'pointer' => '',
					'layout' => '',
					'subLevel' => '',
					'teks' => @$pasalVal,
					'cdate' => $cdate,
				);
				
				## point pasal
				$keyPointPasal = $pasalKey + 1;
				$pointPasal = $arrPointPasal[$keyPasal][$keyPointPasal];
				foreach($pointPasal as $pointPasalKey => $pointPasalVal){
					
					$idxSubLevel = $subLevelBabPasal[$keyPasal][$keyPointPasal][$pointPasalKey];
					$pointerPointPasal = @$pointerBabPasal[$keyPasal][$keyPointPasal][$pointPasalKey];
					$nextPageBabPasal = @$arrPageBabPasal[$keyPasal][$keyPointPasal][$pointPasalKey];
					
					$babPasalAll[] = array('id_dokumen' => $idDokumen, 'id_revisi' => $idRevisi,
						'jenis_field' => 'PasalPoint',
						'pointer' => @$pointerPointPasal,
						'layout' => @$nextPageBabPasal,
						'subLevel' => $idxSubLevel,
						'teks' => @$pointPasalVal,
						'cdate' => $cdate,
					);
				}
			}
		}
		
		$this->insert_pasal($babPasalAll);
		
		return $alldata;
	}
	
}