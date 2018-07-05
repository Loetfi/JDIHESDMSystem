<?php
/* @property phpword_model $phpword_model */

class Coba extends CI_Controller {

	function __construct(){
	  parent::__construct();
		$this->load->model('phpword_model');
    }

	function index()
	{
		$this->load->view('Peraturan_mentri_doc');
	}

	public function download()  {
		$this->load->library('Phpword');

		$news = $this->phpword_model->get_news();
		//  create new file and remove Compatibility mode from word title

		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		$phpWord->getCompatibility()->setOoxmlVersion(14);
		$phpWord->getCompatibility()->setOoxmlVersion(15);

		$targetFile = "./global/uploads/";
		$filename = 'test.docx';

		// add style settings for the title and paragraph
		foreach($news as $n){

			$section = $phpWord->addSection();
			$section->addText($n['ne_title'], array('bold' => true,'underline' => 'single','name'=> 'arial','size' => 21,'color' =>'red'),array('align' => 'center', 'spaceAfter' => 10));
			$section->addTextBreak(1);
			if(!empty($n['ne_img'])){
				$section->addImage($targetFile.$n['ne_img'], array('align' => 'center','width'=>200, 'height'=>200));
			}
			$section->addTextBreak(1);
			$section->addText($n['ne_desc'], array('name'=> 'arial','size' => 14),array('align' => 'left', 'spaceAfter' => 100));
		}
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		$objWriter->save($filename);
		// send results to browser to download
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.$filename);
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename));
		flush();
		readfile($filename);
		unlink($filename); // deletes the temporary file
		exit;
	}
	
	function sanusi_1(){
		$this->load->library('Phpword');

$phpWord = new \PhpOffice\PhpWord\PhpWord();

$phpWord->setDefaultParagraphStyle(
    array(
        'align'  => 'both',
    )
);


// $phpWord->addTitleStyle(1, array('bold' => true), array('spaceAfter' => 240));

// New portrait section
$section = $phpWord->addSection(
	array(
		'paperSize' 	=> 'Legal', 
		// 'orientation' => 'landscape',
		'marginLeft' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5), 
		'marginRight' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5), 
		'marginTop' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5), 
		'marginBottom' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4),
		// 'headerHeight' => 50,
        // 'footerHeight' => 50,
	)
);

$fontStyle['name'] = 'Bookman Old Style';
$fontStyle['size'] = 12;
$fontStyle['allCaps'] = true;
// $fontStyle['bold'] = true;
// $fontStyle['italic'] = true;

#####################################################################
## header
$paragraphStyleName = 'alignCenter';
$phpWord->addParagraphStyle(
	$paragraphStyleName, 
	array(
		'align' => 'center',
	)
);
$section->addTextBreak(7,$fontStyle);
$txtTitle = 'PERATURAN MENTERI ENERGI DAN SUMBER DAYA MINERAL';
$section->addText($txtTitle, $fontStyle, 'alignCenter');

$section->addText(
	'REPUBLIK indonesia',
	$fontStyle, 'alignCenter'
);
$section->addText(
	'NOMOR xxxxxxxxxxxx TAHUN 20xx',
	$fontStyle, 'alignCenter'
);
$section->addText(
	'TENTANG',
	$fontStyle, 'alignCenter'
);
$section->addText(
	'PELAKSANAAN KAIDAH PERTAMBANGAN YANG BAIK',
	$fontStyle, 'alignCenter'
);
$section->addText(
	'DAN PENGAWASAN PERTAMBANGAN MINERAL DAN BATUBARA',
	$fontStyle, 'alignCenter'
);

$section->addTextBreak(1,$fontStyle);
$section->addText(
	'DENGAN RAHMAT TUHAN YANG MAHA ESA',
	$fontStyle, 'alignCenter'
);
$section->addTextBreak(1,$fontStyle);
$section->addText(
	'MENTERI ENERGI DAN SUMBER DAYA MINERAL REPUBLIK INDONESIA,',
	$fontStyle, 'alignCenter'
);
$section->addTextBreak(2,$fontStyle);
## end header
#####################################################################

#####################################################################
## Menimbang
$fontStyle['allCaps'] = false;
$paragraphMenimbang = array(
		'tabs' => array(
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
		),
		'indentation' => array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5) * -1, 
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5), 
		),
		'spacing' => 120,
		'align' => 'both',
	);
	
$section->addText(
	"Menimbang\t:\tbahwa untuk memberikan pedoman pelaksanaan kaidah teknik pertambangan yang baik sebagaimana dimaksud dalam Pasal 95 huruf a dan Pasal 96 Undang-Undang Nomor 4 Tahun 2009 tentang Pertambangan Mineral dan Batubara serta untuk melaksanakan ketentuan Pasal 35 Peraturan Pemerintah Nomor 55 Tahun 2010 tentang Pembinaan dan Pengawasan Penyelenggaraan Pengelolaan Usaha Pertambangan Mineral dan Batubara, perlu Memutuskan Peraturan Menteri Energi dan Sumber Daya Mineral tentang Pelaksanaan Kaidah Pertambangan yang Baik dan Pengawasan Pertambangan Mineral dan Batubara;",
	$fontStyle,
	$paragraphMenimbang
);
## end Menimbang
#####################################################################

#####################################################################
## Mengingat

// Head Mengingat
$paragraphHeadPointMengingat = array(
		'tabs' => array(
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5)),
		),
		'indentation' => array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5) * -1, 
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5), 
		),
		'spacing' => 120,
		'align' => 'both',
	);
$section->addText(
	"Mengingat\t:\t1.\tUndang-Undang Nomor 4 Tahun 2009 tentang Pertambangan Mineral dan Batubara (Lembaran Negara Republik Indonesia Tahun 2009 Nomor 4, Tambahan Lembaran Negara Republik Indonesia Nomor 49);",
	$fontStyle,
	$paragraphHeadPointMengingat
);

// body Mengingat
$paragraphBodyPointMengingat = array(
		'tabs' => array(
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
			new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5)),
		),
		'indentation' => array(
			'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1, 
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5), 
		),
		'spacing' => 120,
		'align' => 'both',
	);
$section->addText(
	"2.\tUndang-Undang Nomor 32 Tahun 2009 tentang Perlindungan dan Pengelolaan Lingkungan Hidup (Lembaran Negara Republik Indonesia Tahun 2009 Nomor 140, Tambahan Lembaran Negara Republik Indonesia Nomor 5059);",
	$fontStyle,
	$paragraphBodyPointMengingat
);


$paragraphBodyPointContentMengingat = array(
		'tabs' => array(
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
			// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5)),
		),
		'indentation' => array(
			// 'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1, 
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5), 
		),
		'spacing' => 120,
		'align' => 'both',
	);
$section->addText(
	"(tambahan dari saya)Undang-Undang Nomor 32 Tahun 2009 tentang Perlindungan dan Pengelolaan Lingkungan Hidup (Lembaran Negara Republik Indonesia Tahun 2009 Nomor 140, Tambahan Lembaran Negara Republik Indonesia Nomor 5059);",
	$fontStyle,
	$paragraphBodyPointContentMengingat
);
## end Mengingat
#####################################################################



$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
try {

	$filename = 'helloWorld.docx';
	$fullPath = './'.$filename;
    // $objWriter->save(storage_path('helloWorld.docx'));
    $objWriter->save($fullPath, 'Word2007');

} catch (Exception $e) {

}

// $targetFile = "./global/uploads/".$filename;
// $format = 'Word2007';
// $phpWord->save($targetFile, $format);

// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
// $objWriter->save($filename);
// send results to browser to download
// // // header('Content-Description: File Transfer');
// // // header('Content-Type: application/octet-stream');
// // // header('Content-Disposition: attachment; filename='.$filename);
// // // header('Content-Transfer-Encoding: binary');
// // // header('Expires: 0');
// // // header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
// // // header('Pragma: public');
// // // header('Content-Length: ' . filesize($fullPath));
// // // flush();
// // // readfile($fullPath);
// // // unlink($fullPath); // deletes the temporary file
// // // exit;




	}
	
	function sanusi_2(){
		
		$this->load->library('Phpword');

		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		
		// setting kertas dan margin
		$section = $phpWord->addSection(
			array(
				'paperSize' 	=> 'Legal', 
				// 'orientation' => 'landscape',
				'marginLeft' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5), 
				'marginRight' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5), 
				'marginTop' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5), 
				'marginBottom' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4),
				// 'headerHeight' => 50,
				// 'footerHeight' => 50,
			)
		);
		
		// setting paragraf global
		$phpWord->setDefaultParagraphStyle(
			array(
				'align'  => 'both',
				'spacing' => 120,
				'spaceAfter' => 0,
				'tabs' => array(
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5)),
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5)),
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(5.5)),
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(6.5)),
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(7.5)),
				),
			)
		);
		
		// setting font global
		$fontStyle['name'] = 'Bookman Old Style';
		$fontStyle['size'] = 12;
		$fontStyle['allCaps'] = true;
		
		
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
		
		
		// setting paragraph Judul
		$paragraphStyleName = 'paragrafJudul';
		$phpWord->addParagraphStyle(
			$paragraphStyleName, 
			array(
				'align' => 'center',
			)
		);
		
		// subLevel 0
		$subLevel[0]['default']['indentation'] = array(
			'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5), 
		);
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		// setting paragraphMenimbang awal
		$paragraphMenimbangHeadNoPointer = array(
				'tabs' => array(
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
				),
				'indentation' => array(
					'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5) * -1, 
					'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5), 
				),
			);
		$paragraphMenimbangHeadContentNoPointer = array(
				'tabs' => array(
					// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
				),
				'indentation' => array(
					// 'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5), 
					'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5), 
				),
				'spacing' => 120,
				'align' => 'both',
			);
			
		$paragraphHeadPoint = array(
			'tabs' => array(
				new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
				new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5)),
			),
			'indentation' => array(
				'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5) * -1, 
				'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5), 
			),
			'spacing' => 120,
			'align' => 'both',
		);
		
		
		
		$paragraphBodyHeadPoint = array(
			'tabs' => array(
				// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
				new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5)),
			),
			'indentation' => array(
				'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1, 
				'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5), 
			),
			'spacing' => 120,
			'align' => 'both',
		);
		
		$paragraphBodyPoint = array(
			'tabs' => array(
				// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
				new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5)),
			),
			'indentation' => array(
				// 'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(1) * -1, 
				'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5), 
			),
			'spacing' => 120,
			'align' => 'both',
		);
		
		$paragraphBody = array(
			'tabs' => array(
				// new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
			),
			'indentation' => array(
				// 'firstLine' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5) * -1, 
				'left' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5), 
			),
			'spacing' => 120,
			'align' => 'both',
		);
		
		// echo '<pre>';
		// print_r($_POST); 
		
		## judul
		$judul = $_POST['super_judul'];
		$barisJudul = explode("\r\n",$judul);
		foreach($barisJudul as $row){
			if ($row != ""){
				$txtTitle = $row;
				$section->addText($txtTitle, $fontStyle, 'paragrafJudul');
			} else {
				$section->addTextBreak(1,$fontStyle);
			}
			// print_r($row); 
		}
		
		// echo '<hr><hr><hr><hr>';
		$fontStyle['allCaps'] = false;
		## menimbang
		$pointerMenimbang = $_POST['pointerMenimbang'];
		$Menimbang = $_POST['Menimbang'];
		for($i=0; $i<count($Menimbang); $i++){
			if ($Menimbang[$i] != ''){
				$barisMenimbang = explode("\r\n",$Menimbang[$i]);
				
				// print_r($Menimbang[$i]);
				// print_r($barisMenimbang);
				for($j=0; $j<count($barisMenimbang); $j++){
					
					if ($i==0){ // awal Menimbang
						if ($j==0){ // awal baris menimbang
							if ($pointerMenimbang[$i] == ''){ // awal tanpa pointer
								$section->addText(
									"Menimbang\t:\t".$barisMenimbang[$j],
									$fontStyle,
									$paragraphMenimbangHeadNoPointer
								);
							}
							else{ // awal ada pointer 
								$section->addText(
									"Mengingat\t:\t".$pointerMenimbang[$i]."\t".$barisMenimbang[$j],
									$fontStyle,
									$paragraphHeadPoint
								);
							}
						}
						else {
							if ($pointerMenimbang[$i] == ''){ // lanjutan tanpa pointer
								$section->addText(
									$barisMenimbang[$j],
									$fontStyle,
									$paragraphMenimbangHeadContentNoPointer
								);
							}
							else { // lanjutan ada pointer
								
							}
						}
						
					}
					else { // body Menimbang
						if ($j==0){ // awal body baris menimbang
							if ($pointerMenimbang[$i] == ''){ // awal body menimbang tanpa pointer 
								$section->addText(
									$barisMenimbang[$j],
									$fontStyle,
									$paragraphBody
								);
							}
							else { // awal body menimbang ada pointer 
								$section->addText(
									$pointerMenimbang[$i]."\t".$barisMenimbang[$j],
									$fontStyle,
									$paragraphBodyHeadPoint
								);
								
							}
						}
						else {
							if ($pointerMenimbang[$i] == ''){ // lanjutan body menimbang tanpa pointer 
							}
							else { // lanjutan body menimbang ada pointer 
								$section->addText(
									$barisMenimbang[$j],
									$fontStyle,
									$paragraphBodyPoint
								);
							}
						}
					}
				}
				
			}
			// echo '<hr>';
		}
		
		## Mengingat
		$pointerMengingat = $_POST['pointerMengingat'];
		$Mengingat = $_POST['Mengingat'];
		for($i=0; $i<count($Mengingat); $i++){
			if ($Mengingat[$i] != ''){
				$barisMengingat = explode("\r\n",$Mengingat[$i]);
				
				// print_r($Mengingat[$i]);
				// print_r($barisMengingat);
				for($j=0; $j<count($barisMengingat); $j++){
					
					if ($i==0){ // awal Mengingat
						if ($j==0){ // awal baris Mengingat
							if ($pointerMengingat[$i] == ''){ // awal tanpa pointer
								$section->addText(
									"Mengingat\t:\t".$barisMengingat[$j],
									$fontStyle,
									$paragraphMengingatHeadNoPointer
								);
							}
							else{ // awal ada pointer 
								$section->addText(
									"Mengingat\t:\t".$pointerMengingat[$i]."\t".$barisMengingat[$j],
									$fontStyle,
									$paragraphHeadPoint
								);
							}
						}
						else {
							if ($pointerMengingat[$i] == ''){ // lanjutan tanpa pointer
								$section->addText(
									$barisMengingat[$j],
									$fontStyle,
									$paragraphMengingatHeadContentNoPointer
								);
							}
							else { // lanjutan ada pointer
								$section->addText(
									$barisMengingat[$j],
									$fontStyle,
									$paragraphBodyPoint
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
									$paragraphBody
								);
							}
							else { // awal body Mengingat ada pointer 
								$section->addText(
									$pointerMengingat[$i]."\t".$barisMengingat[$j],
									$fontStyle,
									$paragraphBodyHeadPoint
								);
								
							}
						}
						else {
							if ($pointerMengingat[$i] == ''){ // lanjutan body Mengingat tanpa pointer 
							}
							else { // lanjutan body Mengingat ada pointer 
								$section->addText(
									$barisMengingat[$j],
									$fontStyle,
									$paragraphBodyPoint
								);
							}
						}
					}
				}
				
			}
			// echo '<hr>';
		}
		
		
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		try {
			$filename = 'coba.docx';
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
	
	function sanusi(){
		
		$this->load->library('Phpword');

		$phpWord = new \PhpOffice\PhpWord\PhpWord();
		
		// setting kertas dan margin
		$thisPage = array(
			'paperSize' 	=> 'Legal', 
			'marginLeft' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5), 
			'marginRight' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5), 
			'marginTop' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(2.5), 
			'marginBottom' 	=> \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4),
			'headerHeight' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.5),
			'footerHeight' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.5), 
		);
		$section = $phpWord->addSection($thisPage);
		
		// setting paragraf global
		$phpWord->setDefaultParagraphStyle(
			array(
				'align'  => 'both',
				'spacing' => 120,
				'spaceAfter' => 0,
				'tabs' => array(
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3)),
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(3.5)),
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(4.5)),
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(5.5)),
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(6.5)),
					new \PhpOffice\PhpWord\Style\Tab('left', \PhpOffice\PhpWord\Shared\Converter::cmToTwip(7.5)),
				),
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
				
				if (@$nextPageMenimbang[$i] == 1) 
					$section = $phpWord->addSection($thisPage);
				
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
				
				if (@$nextPageMengingat[$i] == 1) 
					$section = $phpWord->addSection($thisPage);
				
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
				
				if (@$nextPageMemutuskan[$i] == 1) 
					$section = $phpWord->addSection($thisPage);
				
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
									"Menetapkan\t:\t".$pointerMemutuskan[$i]."\t".$barisMemutuskan[$j],
									$fontStyle,
									$subLevel[1]['firstLine']
								);
							}
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
				$theFirst = false;
			}
			
		}
		/* *********************************************************************************** */
		
		// echo '<hr><hr><hr><hr>';
		// $fontStyle['allCaps'] = false;
		
		/* *********************************************************************************** */
		// all content bab dan pasal
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
		
		/* *********************************************************************************** */
		
		
		
		
		/* *********************************************************************************** */
		// footer tanda tangan 
		// print_r($_POST); die();
		
		
		
		
		
		
		
		
		
		$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
		try {
			$filename = 'coba.docx';
			$fullPath = './'.$filename;
			$objWriter->save($fullPath, 'Word2007');

		} catch (Exception $e) {}

		// header('Content-Description: File Transfer');
		// header('Content-Type: application/octet-stream');
		// header('Content-Disposition: attachment; filename='.$filename);
		// header('Content-Transfer-Encoding: binary');
		// header('Expires: 0');
		// header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		// header('Pragma: public');
		// header('Content-Length: ' . filesize($fullPath));
		// flush();
		// readfile($fullPath);
		// unlink($fullPath); // deletes the temporary file
		// exit;
		
		
		
		
	}
	
}
/* End of file dashboard.php */
/* Location: ./system/application/modules/matchbox/controllers/dashboard.php */