<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thread extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('backend');
		check_login('backend/dokumen/pilih');
	}

	public function index()
	{
		$data = array(
			'contents'	=> 'forum/thread',
			'title'		=> 'Forum',
			'name'		=> empty($this->session->userdata('name')) ? 'Tanpa Login' : $this->session->userdata('name')
		);
		$this->load->view('template/head', $data, FALSE);
	}

}

/* End of file Thread.php */
/* Location: ./application/modules/backend/controllers/forum/Thread.php */
