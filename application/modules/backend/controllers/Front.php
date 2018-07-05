<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index()
	{
		$data = array();
		echo 'Contoh Doc : ' . site_url('coba');
		echo '<p>';
		echo 'Contoh PDF : ' . site_url('peraturan_mentri');
		die();
		$this->load->view('template/header', $data, FALSE);
		
	}

}

/* End of file Front.php */
/* Location: ./application/controllers/Front.php */
