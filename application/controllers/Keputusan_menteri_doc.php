<?php
/* @property phpword_model $phpword_model */
class Keputusan_menteri_doc extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('phpword_model');
		date_default_timezone_set('Asia/Jakarta');
	}
	function index()
	{

		$data = array(
			'contents'	=> 'Keputusan_menteri_doc',
			'title'		=> 'Buat Dokumen Rancangan Keputusan Menteri',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name')
		);
		$this->load->view('backend/template/head', $data, FALSE);
		// $this->load->view('');
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
		$judul = "\r\n\r\n\r\n\r\n\r\n\r\n\r\nKEPUTUSAN MENTERI ENERGI DAN SUMBER DAYA MINERAL\r\nREPUBLIK INDONESIA\r\nNOMOR :_____________________\r\nTENTANG\r\n". $_POST['super_judul'] . "\r\nDENGAN RAHMAT TUHAN YANG MAHA ESA\r\n\r\nMENTERI ENERGI DAN SUMBER DAYA MINERAL REPUBLIK INDONESIA,\r\n\r\n";
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

		/* *********************************************************************************** */
		## Diktum
		$Diktum = $_POST['Diktum'];
		$pointerDiktum = $_POST['pointerDiktum'];

		$nextPageDiktum = @$_POST['nextPageDiktum'];
		$subLevelDiktum = @$_POST['subLevelDiktum'];
		// print_r($subLevelDiktum);
		$theFirst = true;
		for($i=0; $i<count($Diktum); $i++){

			if ($Diktum[$i] != ''){
				$barisDiktum = explode("\r\n",$Diktum[$i]);

				if (@$nextPageDiktum[$i] == 'newP')
					$section = $phpWord->addSection($thisPage);
				else if (@$nextPageDiktum[$i] == 'newL')
					$section = $phpWord->addSection($thisPageLandscape);

				// print_r($Diktum[$i]);
				// print_r($barisDiktum);
				for($j=0; $j<count($barisDiktum); $j++){

					$idxSubLevel = @$subLevelDiktum[$i];

					if ($theFirst==true){ // awal Diktum
						if ($j==0 and $i==0){ // awal baris Diktum
							// echo($pointerDiktum[$i]);
							// echo "<br>";

							if ($pointerDiktum[$i] == ''){ // awal tanpa pointer
								$section->addText(
									"Menetapkan\t:\t".$barisDiktum[$j],
									$fontStyle,
									$subLevel[0]['firstLine']
								);
							}
							else{ // awal ada pointer
								// echo $i."\t:\t".$j.'<br>';
								$section->addText(
									$pointerDiktum[$i]."\t:\t".$barisDiktum[$j],
									$fontStyle,
									$subLevel[0]['firstLine']
								);
							}
							$section->addTextBreak(1,$fontStyle);
						}
						else {
							if ($pointerDiktum[$i] == ''){ // lanjutan tanpa pointer
								$section->addText(
									$barisDiktum[$j],
									$fontStyle,
									$subLevel[0]['default']
								);
							}
							else { // lanjutan ada pointer
								// echo $i."\t:\t".$j.'<br>';
								$section->addText(
									$barisDiktum[$j],
									$fontStyle,
									$subLevel[1]['default']
								);
							}
						}
					}
					else { // body Diktum
						if ($j==0){ // awal body baris Diktum
							if ($pointerDiktum[$i] == ''){ // awal body Diktum tanpa pointer
								// echo "4";
								$section->addText(
									$barisDiktum[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['default']
								);
							}
							else { // awal body Diktum ada pointer
								// echo $pointerDiktum[$i]."\t".$barisDiktum[$j];
								$section->addText(
									$pointerDiktum[$i]."\t".$barisDiktum[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['pointer']
								);

							}
						}
						else {
							// echo "5";
							$section->addText(
								$barisDiktum[$j],
								$fontStyle,
								$subLevel[$idxSubLevel]['default']
							);
						}
					}

				}
				$theFirst = false;
			}

			$arrData['Diktum']['pointerDiktum'][] = $pointerDiktum[$i];
			$arrData['Diktum']['nextPageDiktum'][] = $nextPageDiktum[$i];
			$arrData['Diktum']['subLevelDiktum'][] = $subLevelDiktum[$i];
			$arrData['Diktum']['text'][] = $Diktum[$i];
		}
		// die();
		/* *********************************************************************************** */

		// print_r($arrData); die();


		/* *********************************************************************************** */

		$centerContents = array(
			'indentation' => array(
				'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(6),
			),
			// 'align' => 'center',
		);
		$section->addText(
			"Ditetapkan di Jakarta",
			$fontStyle,
			$centerContents
		);
		$section->addText(
			"pada tanggal",
			$fontStyle,
			$centerContents
		);
		$section->addTextBreak(1,$fontStyle);
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
			@$_POST['ttd'] ?  $_POST['ttd'] : "IGNASIUS JONAN",
			$fontStyle,
			$centerContents
		);
		$section->addTextBreak(1,$fontStyle);
		/* *********************************************************************************** */

		$section->addText(
			"Tembusan:",
			$fontStyle
		);

		## Tembusan
		$Tembusan = $_POST['Tembusan'];
		$pointerTembusan = $_POST['pointerTembusan'];

		$nextPageTembusan = @$_POST['nextPageTembusan'];
		$subLevelTembusan = @$_POST['subLevelTembusan'];
		$theFirst = true;
		for($i=0; $i<count($Tembusan); $i++){

			if ($Tembusan[$i] != ''){
				$barisTembusan = explode("\r\n",$Tembusan[$i]);

				if (@$nextPageTembusan[$i] == 'newP')
					$section = $phpWord->addSection($thisPage);
				else if (@$nextPageTembusan[$i] == 'newL')
					$section = $phpWord->addSection($thisPageLandscape);

				// print_r($Tembusan[$i]);
				// print_r($barisTembusan);
				for($j=0; $j<count($barisTembusan); $j++){

					$idxSubLevel = @$subLevelTembusan[$i];

					if ($theFirst==true){ // awal Tembusan
						if ($j==0){ // awal baris Tembusan

							$section->addText(
								$pointerTembusan[$i]."\t".$barisTembusan[$j],
								$fontStyle,
								$subLevel['listing_1']['firstLine']
							);
						}
						else {
							if ($pointerTembusan[$i] == ''){ // lanjutan tanpa pointer
								$section->addText(
									$barisTembusan[$j],
									$fontStyle,
									$subLevel['listing_1']['default']
								);
							}
							else { // lanjutan ada pointer
								$section->addText(
									$barisTembusan[$j],
									$fontStyle,
									$subLevel['listing_1']['default']
								);
							}
						}
					}
					else { // body Tembusan
						if ($j==0){ // awal body baris Tembusan
							if ($pointerTembusan[$i] == ''){ // awal body Tembusan tanpa pointer
								$section->addText(
									$barisTembusan[$j],
									$fontStyle,
									$subLevel['listing_1']['default']
								);
							}
							else { // awal body Tembusan ada pointer
								$section->addText(
									$pointerTembusan[$i]."\t".$barisTembusan[$j],
									$fontStyle,
									$subLevel['listing_1']['pointer']
								);

							}
						}
						else {
							$section->addText(
								$barisTembusan[$j],
								$fontStyle,
								$subLevel['listing_1']['default']
							);
						}
					}

				}
				// $theFirst = false;
			}

			$arrData['Tembusan']['pointerTembusan'][] = $pointerTembusan[$i];
			$arrData['Tembusan']['nextPageTembusan'][] = $nextPageTembusan[$i];
			$arrData['Tembusan']['subLevelTembusan'][] = $subLevelTembusan[$i];
			$arrData['Tembusan']['text'][] = $Tembusan[$i];
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
		try {
			$filename = @$id.'_'.time().'_keputusan_menteri_doc.docx';
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

	function save_document()
	{
		$this->save_doc();
		$this->session->set_flashdata('message', '<div class="alert alert-info"> Dokumen berhasil dibuat.</div>');
		redirect('backend/dokumen','refresh');
	}

	function save_doc() {

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$config['max_size']  = '10000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if (empty($this->upload->do_upload())){
			if (strlen($this->upload->display_errors())==43) {
				// echo(1);
			} else {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				exit();
			}
		}
		else{
			$data = $this->upload->data();
			$_POST['file_name'] = $data['file_name'];
		}


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

		$Diktum = $_POST['Diktum'];
		$pointerDiktum = $_POST['pointerDiktum'];
		$nextPageDiktum = @$_POST['nextPageDiktum'];
		$subLevelDiktum = @$_POST['subLevelDiktum'];
		for($i=0; $i<count($Diktum); $i++) {
			$arrData['Diktum']['pointerDiktum'][] = @$pointerDiktum[$i];
			$arrData['Diktum']['nextPageDiktum'][] = @$nextPageDiktum[$i] == '' ? 'continue' : @$nextPageDiktum[$i];
			$arrData['Diktum']['subLevelDiktum'][] = @$subLevelDiktum[$i];
			$arrData['Diktum']['text'][] = @$Diktum[$i];
		}

		$Tandatangan = @$_POST['ttd'] ?  $_POST['ttd'] : "IGNASIUS JONAN";
		$arrData['TTD']['pointerTembusan'][] = @$pointerTembusan[$i];
		$arrData['TTD']['nextPageTembusan'][] = @$nextPageTembusan[$i] == '' ? 'continue' : @$nextPageTembusan[$i];
		$arrData['TTD']['subLevelTembusan'][] = @$subLevelTembusan[$i];
		$arrData['TTD']['text'][] = $Tandatangan;

		// upload lampiran 
		$Upload = @$_POST['file_name'] ?  $_POST['file_name'] : "no-data";
		$arrData['Upload']['pointerTembusan'][] = @$pointerTembusan[$i];
		$arrData['Upload']['nextPageTembusan'][] = @$nextPageTembusan[$i] == '' ? 'continue' : @$nextPageTembusan[$i];
		$arrData['Upload']['subLevelTembusan'][] = @$subLevelTembusan[$i];
		$arrData['Upload']['text'][] = $Upload;
		// upload 

		$Tembusan = @$_POST['Tembusan'];
		$pointerTembusan = @$_POST['pointerTembusan'];
		$nextPageTembusan = @$_POST['nextPageTembusan'];
		$subLevelTembusan = @$_POST['subLevelTembusan'];
		for($i=0; $i<count($Tembusan); $i++) {
			$arrData['Tembusan']['pointerTembusan'][] = @$pointerTembusan[$i];
			$arrData['Tembusan']['nextPageTembusan'][] = @$nextPageTembusan[$i] == '' ? 'continue' : @$nextPageTembusan[$i];
			$arrData['Tembusan']['subLevelTembusan'][] = @$subLevelTembusan[$i];
			$arrData['Tembusan']['text'][] = @$Tembusan[$i];
		}

		
		// $arrData['TTD'] = $Tandatangan;
		// print_r([$id, $revisi, @$namaFile]);
		// print_r($_POST['assign']);
		// print_r($arrData); die();

		// print_r($pointerTembusan);
		// print_r($nextPageTembusan);
		// print_r($subLevelTembusan);
		// print_r($arrData['Tembusan']);
		// $this->coba(34, 'B', $arrData);
		// die();

		/* Insert Into DB */
		if (@$_POST['id_dokumen'] == '')
			$id = $this->insert_document();
		else
			$id = $_POST['id_dokumen'];


		$namaFile = $this->sanusi('salah');
		$revisi = $this->cek_revisi_document($id);
		$idRevisi = $this->insert_revisi_document($id, $revisi, $namaFile);
		$alldata = $this->insert_detail_document($id, $idRevisi, $arrData);
		// print_r($arrData);
		// die();
		return $alldata;
	}

	function insert_document() {
		$dataDokumen = array(
			'jenis_dokumen'	=> 'Keputusan Menteri',
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
		max(status_revisi) revisi,
		count(*) terhitung
		FROM dokumen_revisi dr
		WHERE dr.id_dokumen = '$id'
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

	// function for cek the array key is associative or sequential
	function isAssoc(array $arr) {
		if (array() === $arr) return false;
		return array_keys($arr) !== range(0, count($arr) - 1);
	}


	function edit($id_dokumen = 0, $status_revisi = ''){
		$login_id = !empty($this->session->userdata('login_id')) ? $this->session->userdata('login_id') : 0;
		// exit();
		##
		$cek_atasan = $this->db->query("SELECT direct_boss from login where login_id = '$login_id' ")->row_array();
		// print_r($cek_atasan); exit();
		if ($cek_atasan['direct_boss'] == 0) {
			$submit_hilang = true;
			$publis_dok = 'backend/dokumen/publis?id_dokumen='.$id_dokumen.'&status_revisi='.$status_revisi;
		} else {
			$submit_hilang = false;
			$publis_dok = '#';
		}
		##

		## cek dokumen dari jalur kuning/biru/abu2
		$cari_jalur_dok = $this->db->query("SELECT c.jalur_flow from dokumen a
			inner join login b on a.login_id = b.login_id
			left join flow c on b.id_flow = c.id_flow
			where a.id_dokumen = $id_dokumen")->row_array();
		$cari_jalur_dok_res = count($cari_jalur_dok['jalur_flow'])>0 ? $cari_jalur_dok['jalur_flow'] : 0;
		## end cek dokumen dari jalur kuning/biru/abu2

		## cari disposisi
		$id_flow = @$this->session->userdata('id_flow') ? $this->session->userdata('id_flow') : 0;
		$cari_dispo = $this->db->query("SELECT b.id_flow_role,c.nama_flow from flow a
			inner join flow_detail b on a.id_flow = b.id_flow
			inner join flow c on b.id_flow_role = c.id_flow
			where a.id_flow = $id_flow and ( c.jalur_flow like '%$cari_jalur_dok_res%' )")->result_array();
		## end cari disposisi

		

		$data = array(
			'cari_dispo'	=> $cari_dispo,
			'submit_hilang'	=> $submit_hilang,
			'publis_dok'	=> $publis_dok,
			'contents'	=> 'Keputusan_menteri_doc_edit',
			'title'		=> 'Ubah Rancangan',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name'),
			'id_dokumen'	=> $id_dokumen,
			'stat_revisi'	=> $status_revisi
		);

		if ($status_revisi == ''){
			$sqlRevisi = $this->db->query("SELECT max(status_revisi) status_revisi from dokumen_revisi where id_dokumen = '$id_dokumen'")->row_array();
			$status_revisi = @$sqlRevisi['status_revisi'];
		}

		$groupField = array();
		$sql = "SELECT *
		FROM dokumen_detail dd
		LEFT JOIN dokumen_revisi dr ON dr.id_revisi = dd.id_revisi
		LEFT JOIN dokumen d ON d.id_dokumen = dr.id_dokumen
		WHERE dr.id_dokumen = '$id_dokumen'
		AND dr.status_revisi = '$status_revisi'
		ORDER BY id_detail ASC
		";
		$allRow = $this->db->query($sql)->result_array();

		if (count(@$allRow) > 0)
			foreach($allRow as $row){
				$namaJenisField = $row['jenis_field'];

				if(!in_array($namaJenisField, $groupField))
					$groupField[] = $namaJenisField;

				$detail_dokumen[$namaJenisField][] = $row;
			}

			$data['id_dokumen'] = $id_dokumen;
			$data['detail_dokumen'] = @$detail_dokumen;

			$this->load->view('backend/template/head', $data, FALSE);
		}


		function update_document(){
			$this->save_doc();
			$this->session->set_flashdata('message', '<div class="alert alert-info"> Rancangan berhasil dirubah.</div>');
			redirect('backend/dokumen','refresh');
		}

		function submit_document()
		{
		// print_r($_POST);
			if (empty($this->session->userdata('login_id'))) {
				exit('anda belom login');
			} else {
				$res = '';
				$login_id = $this->session->userdata('login_id');
				$data = $this->save_doc();
				$id_revisi =  $data['id_revisi'];
				$cari_revisi = $this->db->query("SELECT  b.direct_boss, a.* from dokumen_revisi a 
					left join login b on a.cuser = b.login_id
					where id_revisi = $id_revisi and cuser = $login_id")->row_array();

			# ganti status jadi submit 
				if (count($cari_revisi['direct_boss']) > 0) {
				# update 
					$update = array(
						'appTo'			=> @$_POST['assign'] ? @$_POST['assign'] : $cari_revisi['direct_boss'], 
						'rilis_doc'		=> 1,
						'catatan_submit'=> @$_POST['catatan_submit'] ? nl2br($_POST['catatan_submit']) : '-'
					);
				// print_r($update);
				// print_r($data);
				// exit();

					$this->db->where('id_revisi', $id_revisi);
					$this->db->where('cuser', $login_id);
					$this->db->update('dokumen_revisi', $update);

					$res = 'Berhasil';
				} else { $res = 'Gagal'; }
			// return $res;
				redirect('backend/dokumen/detail/'.$data['id_dokumen'],'refresh');
			}
		}

		function getKomentarHistory() {
			$id = $this->input->get('id');
			$rev = $this->input->get('stat');
			$type = $this->input->get('jenis');
			$query = $this->db->query("SELECT * FROM komentar_doc a
				INNER JOIN dokumen_detail b ON b.id_detail = a.id_detail 
				INNER JOIN (
					SELECT a.id_dokumen, a.cuser, a.login_id FROM dokumen a
					JOIN dokumen_revisi b ON b.id_dokumen = a.id_dokumen
					WHERE a.id_dokumen = $id AND b.status_revisi = '$rev'
				) c ON c.id_dokumen = b.id_dokumen
				INNER JOIN login d ON d.login_id = c.login_id
				where b.jenis_field = '$type'");
			echo json_encode($query->result());
		}
	}
	/* End of file dashboard.php */
	/* Location: ./system/application/modules/matchbox/controllers/dashboard.php */
