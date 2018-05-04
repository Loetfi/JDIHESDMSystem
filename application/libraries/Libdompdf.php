<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'third_party/dompdf/autoload.inc.php';

use iio\libmergepdf\Merger;
use Dompdf\Dompdf;

// https://groups.google.com/d/msg/dompdf/NvTKQkBPxVc/aEK_2NSk3LUJ by Yakub Kristianto
require_once 'dompdf_pages.php';

class libdompdf extends Dompdf {
	
	protected function ci() {
		return get_instance();
	}
	
	public function getDompdf() {
		return new Dompdf();
	}
	
	public function getDompdfPages() {
		return new dompdf_pages();
	}
	
	public function mergePDF($html1, $html2, $paper = 'A4', $orientation = array('portrait', 'landscape'), $filename='', $stream=TRUE) {
		$sheet1 = ($orientation[0] === 'portrait') ? 'portrait' : 'landscape';
		$sheet2 = ($orientation[1] === 'portrait') ? 'portrait' : 'landscape';
		$dompdf = $this->getDompdfPages();
		$dompdf->set_paper($paper, $sheet1);
		$dompdf->load_html($html1);
		$dompdf->render();
		
		$dompdf->set_paper($paper, $sheet2);
		$dompdf->load_html($html2);
		$dompdf->render();
		if ($stream) {
			$dompdf->stream($filename.".pdf", array("Attachment" => 0));
		}
		else {
			return $dompdf->output();
		}
	}
	
	public function generate($html, $paper = 'A4', $orientation = "portrait", $filename='', $stream=TRUE) {
		$dompdf = $this->getDompdf();
		$dompdf->load_html($html);
		$dompdf->set_paper($paper, $orientation);
		$dompdf->set_option('defaultFont', 'Courier');
		$dompdf->render();
		if ($stream) {
			$dompdf->stream($filename.".pdf", array("Attachment" => 0));
		}
		else {
			return $dompdf->output();
		}
	}
	
}