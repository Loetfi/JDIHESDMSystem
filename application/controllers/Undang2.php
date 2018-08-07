<?php
/* @property phpword_model $phpword_model */

class Undang2 extends CI_Controller {

	function __construct() {
		parent::__construct();
		// $this->load->model('phpword_model');
    }
	
	function index() {
		$data = array(
			'contents'	=> 'Undang2', 
			'title'		=> 'Dashbord Sistem'
		);
		$this->load->view('backend/template/head', $data, FALSE);
		// $this->load->view('');
	}
	function coba(){
		$this->sanusi('benar');
	}
	function sanusi($thisDownload = 'benar') { 

		// print_r(@$_POST);die();

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
		foreach($pointerBab as $key => $val){
			
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
					$barisPointPasal = explode("\r\n",$pointPasalVal);
					foreach($barisPointPasal as $row){
						if ($row != ""){
							$txtPointPasal = $row;
							$idxSubLevel = $subLevelBabPasal[$keyPasal][$keyPointPasal][$pointPasalKey];
							$pointerPointPasal = @$pointerBabPasal[$keyPasal][$keyPointPasal][$pointPasalKey];
							// $section->addText($txtPointPasal, $fontStyle, $subLevel[$idxSubLevel]['pointer']);
							
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
				}
			}
			
			$section->addTextBreak(1,$fontStyle);
		}
		
		
		
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */


		//$section = $phpWord->addSection($thisPageLandscape);


		// header firstPage
		// $header = $section->addHeader();
		// $header->firstPage();
		// $table = $header->addTable();
		// $table->addRow();
		// $cell = $table->addCell(450);
		// $textrun = $cell->addTextRun();
		// $textrun->addText('');
		// Add header for all other pages
		// $subsequent = $section->addHeader();
		// $subsequent->addPreserveText('- {PAGE} -', $fontStyle, array('align' => 'center'));

		// $tabsDefault = array(
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(5.5)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(6.5)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(7.5)),
		// );
		// $phpWord->setDefaultParagraphStyle(
		// 	array(
		// 		'align'  => 'both',
		// 		'spacing' => 120,
		// 		'spaceAfter' => 0,
		// 		'tabs' => array(),
		// 	)
		// );

		/* *********************************************************************************** */
		/*$paragrafHeadLampiran = array(
			'indentation' => array(
				'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(14),
			),
			'tabs' => array(
				new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(16.5)),
			),
		);

		$section->addText(
			"LAMPIRAN I",
			$fontStyle, $paragrafHeadLampiran
		);
		$section->addText(
			"KEPUTUSAN MENTERI ENERGI DAN SUMBER DAYA MINERAL",
			$fontStyle, $paragrafHeadLampiran
		);
		$section->addText(
			"REPUBLIK INDONESIA",
			$fontStyle, $paragrafHeadLampiran
		);
		$section->addText(
			"NOMOR\t:",
			$fontStyle, $paragrafHeadLampiran
		);
		$section->addText(
			"TANGGAL\t:",
			$fontStyle, $paragrafHeadLampiran
		);
		$section->addText(
			"TENTANG",
			$fontStyle, $paragrafHeadLampiran
		);
		$section->addText(
			"PENETAPAN WILAYAH IZIN USAHA PERTAMBANGAN DAN WILAYAH IZIN USAHA PERTAMBANGAN KHUSUS YANG AKAN DITAWARKAN DAN/ATAU DILELANG PADA PERIODE TAHUN 2018.",
			$fontStyle, $paragrafHeadLampiran
		);
		$section->addTextBreak(1,$fontStyle);

		$section->addText(
			"WILAYAH IZIN USAHA PERTAMBANGAN DAN WILAYAH IZIN USAHA PERTAMBANGAN KHUSUS YANG AKAN DITAWARKAN",
			$fontStyle, array('align' => 'center')
		);
		$section->addTextBreak(1,$fontStyle); */
		/* *********************************************************************************** */

		//debug
		// print_r($arrData); exit();
		// $subjudul = @$_POST['subjudul'];
		// $widthMaxCol = 16000;
		// $judultabel = @$_POST['judultabel'];
		// $table = @$_POST['kolom'];

		// if (count($subjudul) > 0 && count($judultabel) > 0 && count($kolom) > 0){
			// for($idxTable=0 $idxTable<count())
		// }



		/*$section->addText(
			"A.	WILAYAH IZIN USAHA PERTAMBANGAN PERIODE I ",
			$fontStyle, array('align' => 'left')
		);*/
		/* *********************************************************************************** */

		/*$widthMaxCol = 16000;
		$table = @$_POST['kolom'];
		$judultabel = @$_POST['judultabel'];
		$table = array();
		if (count($table) > 0){
			$idxTable = 0;



			$headerTable 	= $table[$idxTable]['header'];
			$contentTable 	= $table[$idxTable]['content'];

			$rows = count($contentTable) + 1;
			$cols = count($headerTable);

			// $section->addText('Basic table', $header);

			$cellHCentered = array('alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER);
			$borderTableStyle = array('borderSize' => 1, 'borderColor' => '000000');
			$spanTableStyleName = 'BorderAll';
			$phpWord->addTableStyle($spanTableStyleName, $borderTableStyle);
			$thisTable = $section->addTable($spanTableStyleName);

			$thisTable->addRow();
			$cellColSpan = array('gridSpan' => $cols+1, 'valign' => 'center');
			$cell2 = $thisTable->addCell($widthMaxCol, $cellColSpan);
			$textrun2 = $cell2->addTextRun($cellHCentered);
			$textrun2->addText($judultabel[$idxTable][0]);

			$thisTable->addRow();
			$thisTable->addCell(600)->addText("NO", null, $cellHCentered);
			for ($idxHeader = 0; $idxHeader < count($headerTable); $idxHeader++) {
				$textHeader = $headerTable[$idxHeader];
				$thisWidth = ($widthMaxCol - 600)/($cols - 1);
				$thisTable->addCell($thisWidth)->addText($textHeader, null, $cellHCentered);
			}


			for ($r = 1; $r < $rows; $r++) {
				$thisTable->addRow();
				for ($c = 0; $c <= $cols; $c++) {
					if ($c == 0) {
						$thisWidth = 600;
						$thisTable->addCell($thisWidth)->addText($r, null, $cellHCentered);
					}
					else {
						$thisWidth = ($widthMaxCol - 600)/($cols - 1);
						$thisTable->addCell($thisWidth)->addText($contentTable[$r][$c-1], null, $cellHCentered);
					}

				}
			}


		} */

		/* *********************************************************************************** */





		/* *********************************************************************************** */
		// all content bab dan pasal
		/*
		$numberBab = 1;
		for($numberBab=1; $numberBab<4; $numberBab++){
			@$judulBab = @$_POST['judulBab'.@$numberBab];
			@$contentPasal = @$_POST['contentPasal'.@$numberBab];
			@$pointerPasal = @$_POST['pointerPasal'.@$numberBab];

			@$nextPagePasal = @$_POST['nextPagePasal'.@$numberBab];
			@$subLevelPasal = @$_POST['subLevelPasal'.@$numberBab];

			$barisJudulBab = explode("\r\n",$judulBab);
			foreach($barisJudulBab as $row){
				if ($row != ""){
					$txtTitle = $row;
					$section->addText(
						@$txtTitle,
						@$fontStyle,
						$centerContent
					);
				} else {
					$section->addTextBreak(1,$fontStyle);
				}
			}


			for($i=0; $i<count(@$contentPasal); $i++){

				if (@$contentPasal[$i] != ''){
					@$barisContentPasal = explode("\r\n",@$contentPasal[$i]);

					if (@$nextPagecontentPasal[$i] == 1)
						$section = $phpWord->addSection($thisPage);

					for($j=0; $j<count(@$barisContentPasal); $j++){

						@$idxSubLevel = @$subLevelPasal[$i];

						if (@$j==0){ // awal body baris contentPasal
							if (@$pointerPasal[$i] == ''){ // awal body contentPasal tanpa pointer
								$section->addText(
									@$barisContentPasal[@$j],
									@$fontStyle,
									@$subLevel[@$idxSubLevel]['default']
								);
							}
							else { // awal body contentPasal ada pointer
								$section->addText(
									@$pointerPasal[$i]."\t".@$barisContentPasal[$j],
									$fontStyle,
									@$subLevel[@$idxSubLevel]['pointer']
								);

							}
						}
						else {
							$section->addText(
								$barisContentPasal[$j],
								$fontStyle,
								$subLevel[$idxSubLevel]['default']
							);
						}


					}
				}

			}


		}
		*/
		/* *********************************************************************************** */

		/* *********************************************************************************** */
		// footer tanda tangan
		// echo "<pre>";
		// print_r($arrData);
		// $this->insert_detail_document(3, $arrData);
		// die();

		/* Insert Into DB */
		// if (@$_POST['id_dokumen'] == '')
			// $id = $this->insert_document();
		// else
			// $id = $_POST['id_dokumen'];

		// $revisi = $this->cek_revisi_document($id);
		// $idRevisi = $this->insert_revisi_document($id, $revisi);
		// $alldata = $this->insert_detail_document($id, $idRevisi, $arrData);


		// echo $alldata;
		// exit;

		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$filename = @$id.'_'.time().'_undang-undang_doc.docx';
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

}