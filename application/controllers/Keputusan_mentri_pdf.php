<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keputusan_mentri_pdf extends CI_Controller {
	function __construct() {
		parent:: __construct();
		$this->load->library('libdompdf');
	}
  
	public function index() {
		$this->load->view('Keputusan_mentri_pdf');
	}
  
	public function generatePdf() {
		$post = $this->input->post();
		$superjudul = @$post['super_judul'] ? nl2br($post['super_judul'], false) : 'Judul Kosong';
		$ttd = @$post['ttd'] ? nl2br($post['ttd'], false) : 'Tanda Tangan Kosong';
		$isiMenimbang = '';
		$isiMengingat = '';
		$isiTembusan = '';
		$isiPasal = '';
		$pasalJudul = array('KESATU', 'KEDUA', 'KETIGA', 'KEEMPAT', 'KELIMA', 'KEENAM', 'KETUJUH', 'KEDELAPAN', 'KESEMBILAN', 'KESEPULUH');
		for($var = 0; $var < count($post['menimbang']); $var++) {
			$menimbang = ($post['menimbang'][$var] !== '') ? $post['menimbang'][$var] : '&nbsp;' ;
			$isiMenimbang .= '<li style="margin-bottom:4px; text-align:justify;"><div style="padding:0 0 0 10px">'.$menimbang.'</div></li>';
		}
		for($var = 0; $var < count($post['mengingat']); $var++) {
			$mengingat = ($post['mengingat'][$var] !== '') ? $post['mengingat'][$var] : '&nbsp;' ;
			$isiMengingat .= '<li style="margin-bottom:4px; text-align:justify;"><div style="padding:0 0 0 10px">'.$mengingat.'</div></li>';
		}
		for($var = 0; $var < count($post['pasal']); $var++) {
			$judulPasal = '';
			$pasal = ($post['pasal'][$var] !== '') ? $post['pasal'][$var] : '&nbsp;' ;
			$isiPasal .= '<div style="margin-top:20px;">
						  <div style="position:absolute; left:55px;">'.$pasalJudul[$var].'</div><div style="position:absolute; left:24%;">:</div>
						  <div style="margin:0 auto 0 23%; text-align:justify; width:73%;"><div style="padding:0 0 0 10px">'.$pasal.'</div></div>
						  </div>';
		}
		for($var = 0; $var < count($post['tembusan']); $var++) {
			$judulPasal = '';
			$tembusan = ($post['tembusan'][$var] !== '') ? $post['tembusan'][$var] : '&nbsp;' ;
			$isiTembusan .= '<li style="margin-bottom:4px; text-align:justify;">&nbsp;&nbsp;&nbsp;'.$tembusan.'</li>';
		}
		$html1 = '<style>
				@font-face { font-family:"Bookman Old Style"; font-size:12px; src:url("'.base_url('assets/assets_backend/adminator/font/BOOKOS.TTF').'") format("truetype"); }
				</style>
				<div style="font-family:Bookman Old Style; font-style:normal;">
				<div style="margin:0 1.5em 0 1.5em">
				<div style="line-height:22px; margin:8em auto 3em auto; text-align:center; text-transform:uppercase; width:90%;">'.$superjudul.'</div>
				<div>
					<div style="position:absolute; left:6%;">Menimbang</div><div style="position:absolute; left:24%;">:</div>
					<ol type="a" style="margin:0 auto 0 20%; width:70%;">'.$isiMenimbang.'</ol>
				</div>
				<div>
					<div style="position:absolute; left:55px; margin-top:10px;">Mengingat</div><div style="position:absolute; left:24%;">:</div>
					<ol type="1" style="margin:0 auto 0 20%; width:70%;">'.$isiMengingat.'</ol>
				</div>
				<div style="page-break-inside:avoid">
					<div style="margin-top:25px; text-align:center; width:100%">MEMUTUSKAN:</div>
					<div style="position:absolute; left:55px; margin-top:10px;">Menetapkan</div><div style="position:absolute; left:24%;">:</div>
					<div style="margin:0 auto 0 23%; padding:0 0 0 10px; text-align:justify; width:73%;">'.$post['menetapkan'].'</div>
				</div>
				'.$isiPasal.'
				<div style="line-height:25px; margin:1.5em 0 0 35%; text-align:left; width:90%; page-break-inside:avoid;">'.$ttd.'</div>
				<div style="margin-top:30px">
					<div style="position:absolute; left:55px;">Tembusan:</div>
					<ol type="1" style="position:absolute; left:38px; margin-top:28px;">'.$isiTembusan.'</ol>
				</div>
				</div>
				</div>';
		
		$html2 = '<div>TES</div>';
		$this->libdompdf->mergePDF($html1, $html2);
		//echo $html; exit;
	}
}