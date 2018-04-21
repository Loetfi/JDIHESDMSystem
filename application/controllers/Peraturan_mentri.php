<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan_mentri extends CI_Controller {
	function __construct() {
		parent:: __construct();
		$this->load->library('libdompdf');
	}
	
	public function index() {
		$this->load->view('peraturan_mentri');
	}
	
	public function generatePdf() {
		$post = $this->input->post();
		$superjudul = @$post['super_judul'] ? nl2br($post['super_judul'], false) : 'Judul Kosong';
		$judulMenimbang = '';
		$judulMengingat = '';
		for($var = 0; $var < count($post['menimbang']); $var++) {
			$judulMenimbang .= '<li style="text-align:left;">'.$post['menimbang'][$var].'</li>';
		}
		for($var = 0; $var < count($post['mengingat']); $var++) {
			$judulMengingat .= '<li style="text-align:left;">'.$post['mengingat'][$var].'</li>';
		}
		$html = '<div style="margin:0 1.5em 0 1.5em">
				 <div style="margin:8em auto 2em auto; text-align:center; text-transform:uppercase; width:50%;">'.$superjudul.'</div>
				 <div><div style="position:absolute; left:5px;">Menimbang :</div><ol type="a" style="margin:0 auto; width:65%;">'.$judulMenimbang.'</ol></div>
				 <div><div style="position:absolute; left:5px;">Mengingat :</div><ol type="a" style="margin:0 auto; width:65%;">'.$judulMengingat.'</ol></div>
				 </div>';
		//echo $html; exit;
		$this->libdompdf->generate($html);
	}
}