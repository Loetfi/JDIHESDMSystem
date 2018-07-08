<?php
/* @property phpword_model $phpword_model */

class Perpres extends CI_Controller {

	function __construct() {
		parent::__construct();
		// $this->load->model('phpword_model');
    }
	
	function index() {
		$data = array(
			'contents'	=> 'Perpres', 
			'title'		=> 'Dashbord Sistem'
		);
		$this->load->view('backend/template/head', $data, FALSE);
		// $this->load->view('');
	}
	
}