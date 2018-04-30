<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = array(
			'contents'	=> 'dashboard/dashboard',
			'title'		=> 'Dashbord Sistem'
		);
		$this->load->view('template/head', $data, FALSE);
		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */
