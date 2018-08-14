<?php
/* @property phpword_model $phpword_model */
class Surat_edaran extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('phpword_model');
		date_default_timezone_set('Asia/Jakarta');
	}
	function index()
	{

		$data = array(
			'contents'	=> 'format/surat_edaran',
			'title'		=> 'Buat Dokumen Rancangan Surat Edaran',
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
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(5)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(6)),
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

		$subLevel['paragraf']['default']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1.25),
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0),
		);
		
		// setting subLevel 0
		$subLevel[0]['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1),
		);
		$subLevel[0]['pointer']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1),
		);

		// setting subLevel 1
		$subLevel[1]['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2),
		);
		// setting subLevel 1 pointer
		$subLevel[1]['pointer']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2),
		);

		// setting subLevel 2
		$subLevel[2]['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3),
		);
		// setting subLevel 2 pointer
		$subLevel[2]['pointer']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3),
		);
		
		// setting subLevel 3
		$subLevel[3]['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4),
		);
		// setting subLevel 3 pointer
		$subLevel[3]['pointer']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4),
		);
		
		// setting subLevel 4
		$subLevel[4]['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(5),
		);
		// setting subLevel 4 pointer
		$subLevel[4]['pointer']['indentation'] = array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1,
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(5),
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
		$section->addTextBreak(6,$fontStyle);
		$section->addText("Yang terhormat", $fontStyle);
		
		## Kepada
		$yang_terhormat = $_POST['yang_terhormat'];
		$barisYangTerhormat = explode("\r\n",$yang_terhormat);
		foreach($barisYangTerhormat as $row){
			if ($row != ""){
				$txtTitle = $row;
				$section->addText($txtTitle, $fontStyle);
			} else {
				$section->addTextBreak(1,$fontStyle);
			}
		}
		$section->addTextBreak(1,$fontStyle);
		
		/* *********************************************************************************** */
		## judul
		$fontStyle['allCaps'] = TRUE;
		
		$section->addText("SURAT EDARAN", $fontStyle, array('align' => 'center'));
		$section->addText("NOMOR _____________________", $fontStyle, array('align' => 'center'));
		$section->addText("TENTANG", $fontStyle, array('align' => 'center'));
		
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
		$section->addTextBreak(2,$fontStyle);
		
		## Paragraf
		$Paragraf = $_POST['Paragraf'];
		$pointerParagraf = $_POST['pointerParagraf'];

		$nextPageParagraf = @$_POST['nextPageParagraf'];
		$subLevelParagraf = @$_POST['subLevelParagraf'];
		

		// print_r($nextPageParagraf); die();
		for($i=0; $i<count($Paragraf); $i++){

			if ($Paragraf[$i] != ''){
				$barisParagraf = explode("\r\n",$Paragraf[$i]);

				if (@$nextPageParagraf[$i] == 'newP')
					$section = $phpWord->addSection($thisPage);
				else if (@$nextPageParagraf[$i] == 'newL')
					$section = $phpWord->addSection($thisPageLandscape);

				// print_r($Paragraf[$i]);
				// print_r($barisParagraf);
				$theFirst = true;
				for($j=0; $j<count($barisParagraf); $j++){

					$idxSubLevel = @$subLevelParagraf[$i];
					if ($theFirst==true){
						
						if ($idxSubLevel == 'paragraf'){
							$section->addText(
								$barisParagraf[$j],
								$fontStyle,
								$subLevel[$idxSubLevel]['default']
							);
							$section->addTextBreak(1,$fontStyle);
						}
						else {
							
							if ($pointerParagraf[$i] == ''){ // awal tanpa pointer
								$section->addText(
									$barisParagraf[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['default']
								);
							}
							else{ // awal ada pointer
								$section->addText(
									$pointerParagraf[$i]."\t".$barisParagraf[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['pointer']
								);
							}
							
						}
						$theFirst = false;
					}
					else {
						if ($idxSubLevel == 'paragraf'){
							$section->addText(
								$barisParagraf[$j],
								$fontStyle,
								$subLevel[$idxSubLevel]['default']
							);
							$section->addTextBreak(1,$fontStyle);
						}
						else {
							
							if ($pointerParagraf[$i] == ''){ // awal tanpa pointer
								$section->addText(
									$barisParagraf[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['default']
								);
							}
							else{ // awal ada pointer
								$section->addText(
									$barisParagraf[$j],
									$fontStyle,
									$subLevel[$idxSubLevel]['default']
								);
							}
							
						}
						
					}
					
				}
				
			}

			$arrData['Paragraf']['pointerParagraf'][] = $pointerParagraf[$i];
			$arrData['Paragraf']['nextPageParagraf'][] = $nextPageParagraf[$i];
			$arrData['Paragraf']['subLevelParagraf'][] = $subLevelParagraf[$i];
			$arrData['Paragraf']['text'][] = $Paragraf[$i];
		}
// print_r(@$_POST);
		// die();
		/* *********************************************************************************** */

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

		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		try {
			$filename = @$id.'_'.time().'_surat_edaran.docx';
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


		$arrData['yang_terhormat'] = $_POST['yang_terhormat'];
		$arrData['judul'] = $_POST['super_judul'];
		
		## Paragraf
		$Paragraf = $_POST['Paragraf'];
		$pointerParagraf = @$_POST['pointerParagraf'];
		$nextPageParagraf = @$_POST['nextPageParagraf'];
		$subLevelParagraf = @$_POST['subLevelParagraf'];
		for($i=0; $i<count($Paragraf); $i++){
			$arrData['Paragraf']['pointerParagraf'][] = $pointerParagraf[$i];
			$arrData['Paragraf']['nextPageParagraf'][] = $nextPageParagraf[$i];
			$arrData['Paragraf']['subLevelParagraf'][] = $subLevelParagraf[$i];
			$arrData['Paragraf']['text'][] = $Paragraf[$i];
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
			'jenis_dokumen'	=> 'Surat Edaran',
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
						/*if(@$_POST['Komentar_'.$valKeys][$idxKomentar]) {
							$dataKomentar = array(
								'id_detail'	=> $this->db->insert_id(),
								'pesan'		=> @$_POST['Komentar_'.$valKeys][$idxKomentar],
								'cdate'		=> date("Y-m-d H:i:s"),
								'user_id'	=> @$this->session->userdata('login_id')
							);
							$this->db->insert('komentar_doc', $dataKomentar);
						}*/
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
			'contents'	=> 'format/surat_edaran_edit',
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

		if (count(@$allRow) > 0){
			foreach($allRow as $row){
				$namaJenisField = $row['jenis_field'];

				if(!in_array($namaJenisField, $groupField))
					$groupField[] = $namaJenisField;

				$detail_dokumen[$namaJenisField][] = $row;
			}
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


		function cari_email($login_id = '')
		{
			$cari = $this->db->query("SELECT email from login where id_flow = $login_id")->row_array();
			return empty($cari['email']) ? '' : $cari['email']; 
		}

		function submit_document()
		{
			// print_r($_POST);exit();
			if (empty($this->session->userdata('login_id'))) {
				exit('anda belom login');
			} else {
				require_once(APPPATH.'modules/backend/helpers/sending_helper.php');
				// $this->load->helper('backend/helpers/sending');

				#join assign multiple 
				$join_assign = @$_POST['assign'] ? implode(',', $_POST['assign']) : 0;
				## end coba jaa
				$res = '';
				$login_id = $this->session->userdata('login_id');
				$data = $this->save_doc();
				$id_revisi =  $data['id_revisi'];
				$cari_revisi = $this->db->query("SELECT  b.direct_boss, b.name, b.email,  a.* from dokumen_revisi a 
					left join login b on a.cuser = b.login_id
					where id_revisi = $id_revisi and cuser = $login_id")->row_array();

 				## sending email
				if (count($join_assign)>0) {
					$_GET['subject'] = 'Kamu mendapat dokumen dari '.$cari_revisi['name'];
					$_GET['message'] = 'Hai, Kamu mendapat dokumen untuk ditelaah dengan judul '.$_POST['super_judul'].' dengan menambahkan catatan : '.@$_POST['catatan_submit']; 

					foreach ($_POST['assign'] as $assign_email) {
						$to[] = $this->cari_email($assign_email);
						$to_send = $to;
					}
					$_GET['to'] = implode(',', $to_send);
					Notification::sending();  
				}
				## end sending email

				# ganti status jadi submit 
				if (count($cari_revisi['direct_boss']) > 0) {
				# update 
					$update = array(
						'appTo'			=> @$join_assign ? @$join_assign : $cari_revisi['direct_boss'], 
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
			$query = $this->db->query("
				SELECT 
					a.pesan
					,a.id_detail
					,a.cdate AS comm_date
					,a.user_id
					,d.login_id
					,c.id_revisi
					,c.id_dokumen
					,d.name
					,d.email
					,d.id_flow
				FROM komentar_doc a
				INNER JOIN dokumen_detail b on b.id_detail = a.id_detail
				INNER JOIN dokumen_revisi c on c.id_revisi = b.id_revisi
				INNER JOIN login d on d.login_id = a.user_id
				WHERE c.status_revisi = '$rev' and b.id_dokumen = $id");
			echo json_encode($query->result());
		}

		function submitKomentarHistory() {
			$post = $this->input->post();
			$dataKomentar = array(
				'id_detail'	=> $post['id_detail'],
				'pesan'		=> $post['pesan'],
				'cdate'		=> date("Y-m-d H:i:s"),
				'user_id'	=> @$this->session->userdata('login_id')
			);
			$query = $this->db->insert('komentar_doc', $dataKomentar);
			if(@$query) {
				echo json_encode(array('status' => 1));
			}
			else {
				echo json_encode(array('status' => 0));
			}
		}
	}
	/* End of file dashboard.php */
	/* Location: ./system/application/modules/matchbox/controllers/dashboard.php */
