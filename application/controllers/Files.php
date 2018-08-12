<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Controller {
	function index() {
        echo "Save File Connected...";
	}

	function saveformat() {
		$post = $this->input->post();
		if(!file_exists('format/sideformat')) {
			echo exec('mkdir format/sideformat');
			$this->inputAction($post);
		}
		else {
			$this->inputAction($post);
		}		
		echo 'success create file';
	}

	function savefile() {
		echo 'tes';
	}

	function inputAction($post) {
		$myfile = fopen('format/sideformat/'.$post['namafile'], "wt") or die("Unable to open file!");
		$txt = $post['konten'];
		fwrite($myfile, $txt);
		flock($myfile, LOCK_UN);
		fclose($myfile);
		chmod('format/sideformat/'.$post['namafile'], 0777);
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