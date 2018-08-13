<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {
	function index() {
        echo "Save File Connected...";
	}

	function saveformat() {
		$post = $this->input->post();
		$path = 'format/sideformat/';
		if(!file_exists($path)) {
			echo exec('mkdir '.$path);
			$this->inputAction($post, $path);
		}
		else {
			$this->inputAction($post, $path);
		}		
		echo 'success create file format';
	}

	function savefile() {
		$post = $this->input->post();
		$path = 'format/contentformat/';
		if(!file_exists($path)) {
			echo exec('mkdir '.$path);
			$this->inputAction($post, $path);
		}
		else {
			$this->inputAction($post, $path);
		}		
		echo 'success create file content';
	}

	function inputAction($post, $path) {
		$myfile = fopen($path.$post['namafile'], "wt") or die("Unable to open file!");
		$txt = $post['konten'];
		fwrite($myfile, $txt);
		flock($myfile, LOCK_UN);
		fclose($myfile);
		chmod($path.$post['namafile'], 0777);
	}

	function loadformat() {
		$postfile = $this->input->post('filename');
		if($postfile === null) {
			echo 'variable false';
		}
		else {
			$filename = "format/sideformat/".$postfile;
			if(!file_exists('format/sideformat/'.$postfile)) {
				echo '[]';
			}
			else {
				$handle = fopen($filename, "r");
				$contents = fread($handle, filesize($filename));
				fclose($handle);
				echo $contents;
			}
		}
	}
}
?>