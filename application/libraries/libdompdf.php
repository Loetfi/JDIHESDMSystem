<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'third_party/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
class libdompdf extends Dompdf {
	
	protected function ci() {
		return get_instance();
	}
	
	protected function getDompdf() {
		return new Dompdf();
	}
	
	public function generate($html, $filename='', $stream=TRUE, $paper = 'A4', $orientation = "portrait") {
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
	
	public function setLandscape() {
		$dompdf->set_paper($paper, $orientation);
	}
	
}