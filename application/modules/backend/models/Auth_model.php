<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	public function login($parameter)
	{  
		if (sha1($parameter['password'])  === '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8') {
			return true;
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Pengguna tidak ditemukan</div>');
			return false;
		} 
	}
	

}

/* End of file Auth_model.php */
/* Location: ./application/modules/backend/models/Auth_model.php */
