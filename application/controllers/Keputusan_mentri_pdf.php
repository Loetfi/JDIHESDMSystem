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
		$judulMenimbang = '';
		$judulMengingat = '';
		for($var = 0; $var < count($post['menimbang']); $var++) {
			$menimbang = ($post['menimbang'][$var] !== '') ? $post['menimbang'][$var] : '&nbsp;' ;
			$judulMenimbang .= '<li style="margin-bottom:4px; text-align:justify;">'.$menimbang.'</li>';
		}
		for($var = 0; $var < count($post['mengingat']); $var++) {
			$mengingat = ($post['mengingat'][$var] !== '') ? $post['mengingat'][$var] : '&nbsp;' ;
			$judulMengingat .= '<li style="margin-bottom:4px; text-align:justify;">'.$mengingat.'</li>';
		}
		$html = '<div style="font-family:"Bookman Old Style"; font-size:12px;">
				<div style="margin:0 1.5em 0 1.5em">
				<div style="line-height:25px; margin:8em auto 2em auto; text-align:center; text-transform:uppercase; width:90%;">'.$superjudul.'</div>
				<div>
				<div style="position:absolute; left:55px;">Menimbang</div><div style="position:absolute; left:24%;">:</div>
				<ol type="a" style="margin:0 auto 0 20%; width:70%;">'.$judulMenimbang.'</ol>
				</div>
				<div>
				<div style="position:absolute; left:55px; margin-top:10px;">Mengingat</div><div style="position:absolute; left:24%;">:</div>
				<ol type="1" style="margin:0 auto 0 20%; width:70%;">'.$judulMengingat.'</ol>
				</div>
				</div>
				</div>';
		//echo $html; exit;
		$this->libdompdf->generate($html);
	}
}