<?php
/* @property phpword_model $phpword_model */

class Keputusan_menteri_doc extends CI_Controller {

	function __construct(){
	  parent::__construct();
		// $this->load->model('phpword_model');
    }

	function index()
	{
		
		$data = array(
			'contents'	=> 'Keputusan_menteri_doc', 
			'title'		=> 'Dashbord Sistem'
		);
		$this->load->view('backend/template/head', $data, FALSE);
		// $this->load->view('');
	}
	
	function sanusi(){
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
		$pointerMemutuskan = $_POST['pointerMemutuskan'];
		
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
									$pointerMemutuskan[$i]."\t:\t".$barisMemutuskan[$j],
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
		
		
		/* *********************************************************************************** */
		
		$centerContents = array(
			'indentation' => array(
				'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(6), 
			),
			// 'align' => 'center',
		);

		$section->addText(
			"Ditetapkan di xxxxx",
			$fontStyle, 
			$centerContents
		);
		$section->addText(
			"Pada tanggal xxxxx",
			$fontStyle,
			$centerContents
		);
		$section->addText(
			"MENTERI ENERGI DAN SUMBER DAYA MINERAL",
			$fontStyle,
			$centerContents
		);
		$section->addText(
			"REPUBLIK INDONESIA,",
			$fontStyle,
			$centerContents
		);
		$section->addTextBreak(3,$fontStyle);
		$section->addText(
			"IGNASIUS JONAN",
			$fontStyle,
			$centerContents
		);
		$section->addTextBreak(1,$fontStyle);
		/* *********************************************************************************** */
		$section->addText(
			"Tembusan:",
			$fontStyle
		);
		
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		/* *********************************************************************************** */
		
		
		$section = $phpWord->addSection($thisPageLandscape);
		
		
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
		
		// $tabsDefault = array(
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(5.5)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(6.5)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(7.5)),
		// );
		$phpWord->setDefaultParagraphStyle(
			array(
				'align'  => 'both',
				'spacing' => 120,
				'spaceAfter' => 0,
				'tabs' => array(),
			)
		);
		
		/* *********************************************************************************** */
		$paragrafHeadLampiran = array(
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
		$section->addTextBreak(1,$fontStyle);
		/* *********************************************************************************** */
		
		
		
		
		$section->addText(
			"A.	WILAYAH IZIN USAHA PERTAMBANGAN PERIODE I ",
			$fontStyle, array('align' => 'center')
		);
		/* *********************************************************************************** */
		$rows = 10;
		$cols = 5;
		$section->addText('Basic table', $header);

		$table = $section->addTable();
		for ($r = 1; $r <= 8; $r++) {
			$table->addRow();
			for ($c = 1; $c <= 5; $c++) {
				$table->addCell(1750)->addText("Row {$r}, Cell {$c}");
			}
		}
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
		if (@$_POST['id_dokumen'] == ''){
			$id = $this->insert_document();
			$alldata = $this->insert_detail_document($id, $arrData);
		} else {
			$id = $_POST['id_dokumen'];
		}
		// echo $alldata;
		// exit;
		
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		try {
			$filename = $id.'_'.time().'_keputusan_menteri_doc.docx';
			$fullPath = './'.$filename;
			$objWriter->save($fullPath, 'Word2007');

		} catch (Exception $e) {}

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
		
		
		
		
	}
	
	function save_document() {
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
		$pointerMemutuskan = $_POST['pointerMemutuskan'];
		$nextPageMemutuskan = @$_POST['nextPageMemutuskan'];
		$subLevelMemutuskan = @$_POST['subLevelMemutuskan'];
		for($i=0; $i<count($Memutuskan); $i++) {
			$arrData['Memutuskan']['pointerMemutuskan'][] = $pointerMemutuskan[$i];
			$arrData['Memutuskan']['nextPageMemutuskan'][] = $nextPageMemutuskan[$i];
			$arrData['Memutuskan']['subLevelMemutuskan'][] = $subLevelMemutuskan[$i];
			$arrData['Memutuskan']['text'][] = $Memutuskan[$i];
		}
		
		/* Insert Into DB */
		$id = $this->insert_document();
		$alldata = $this->insert_detail_document($id, $arrData);
		echo $alldata;
	}
	
	function insert_document() {
		$dataDokumen = array(
			'jenis_dokumen'	=> 'Keputusan Menteri',
			'nama_dokumen'	=> 'KM01/001/2018',
			'cdate'			=> date('Y-m-d H:i:s'),
			'status'		=> 0
		);
		$queryDokumen = $this->db->insert('dokumen', $dataDokumen);
		return $this->db->insert_id();
	}
	
	function insert_detail_document($id, $insertArray) {
		foreach(array_keys($insertArray) as $valKeys) {
			if(is_string($insertArray[$valKeys])) {
				//echo "String <b>[".$valKeys."]</b>";
				$dataDetailDokumen = array(
					'id_dokumen'	=> $id,
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
						if($key === (count(array_keys($insertArray[$valKeys])) -1)) {
							$arrPivot[$loop][count($insertArray[$valKeys][$valDetailKeys])] = $jenis_field;
						}
					}
				}
				
				foreach($arrPivot as $valPivot) {
					if (@$valPivot[3] != ""){
						$dataDetailDokumen = array(
							'id_dokumen'	=> $id,
							'jenis_field'	=> $valPivot[4],
							'pointer'		=> $valPivot[0],
							'layout'		=> $valPivot[1],
							'sublevel'		=> $valPivot[2],
							'teks'			=> $valPivot[3],
							'cdate'			=> date('Y-m-d H:i:s'),
							'status'		=> 0
						);
						// // // // print_r($dataDetailDokumen);
						$queryDetailDokumen = $this->db->insert('dokumen_detail', $dataDetailDokumen);
					}
				}
			}
		}
		return "success insert data";
	}
	
	// function for cek the array key is associative or sequential
	function isAssoc(array $arr) {
		if (array() === $arr) return false;
		return array_keys($arr) !== range(0, count($arr) - 1);
	}
	
	function edit($id_dokumen = 0){
		$data = array(
			'contents'	=> 'Keputusan_menteri_doc_edit', 
			'title'		=> 'Dashbord Sistem'
		);
		
		$groupField = array();
		$sql = "SELECT *
			FROM dokumen_detail dd
			LEFT JOIN dokumen d ON dd.id_dokumen = d.id_dokumen
			WHERE d.id_dokumen = '$id_dokumen'
			ORDER BY id_detail ASC
		";
		$allRow = $this->db->query($sql)->result_array();
		foreach($allRow as $row){
			$namaJenisField = $row['jenis_field'];
			
			if(!in_array($namaJenisField, $groupField))
				$groupField[] = $namaJenisField;
			
			$detail_dokumen[$namaJenisField][] = $row;
		}
		
		$data['id_dokumen'] = $id_dokumen;
		$data['detail_dokumen'] = $detail_dokumen;
		
		$this->load->view('backend/template/head', $data, FALSE);
	}
}
/* End of file dashboard.php */
/* Location: ./system/application/modules/matchbox/controllers/dashboard.php */
