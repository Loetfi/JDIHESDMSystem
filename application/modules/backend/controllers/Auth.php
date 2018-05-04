<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		$data = array(
			'contents'	=> 'auth/login',
			'title'		=> 'Login Sistem'
		);
		$this->load->view('template/auth', $data, FALSE);
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */
