<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function admsCurl($url, $dataArray = array(), $method='GET' ){
		$ci =& get_instance();

		$dataPost = http_build_query($dataArray);

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_PORT => "",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded"
			), 

			CURLOPT_URL => $url,
			CURLOPT_POSTFIELDS => $dataPost,
			CURLOPT_CUSTOMREQUEST => $method,

		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		return array(
			'response' => $response,
			'err' => $err,
		);
	}


	public function index($compay_id = NULL)
	{ 
		$url = 'https://adms-stock.ibid.astra.co.id/acv/data/index/'.$compay_id;//.$compay_id; //linkservice('master')."item/get";  
		$res = file_get_contents($url);
		echo $res;

		// $method = 'GET';
		// $responseApi = $this->admsCurl($url, array(), $method);
		// echo ($responseApi['response']); die();
	}


	function coba(){
		$this->load->view('templateMetal');
	}
}
