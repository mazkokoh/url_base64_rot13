<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	// $this->load->view('menu');	
		redirect('/');
	}

	public function download_now($file='null'){
		 force_download(base_url().'assets/file/'.$file,null);

	}
	public function file()
	{

	if ($_GET['type']=='chiper') {
		# code...
	$file = base64_decode(str_rot13($_GET['f']));

	} else if ($_GET['type']=='plain') {
	$file = $_GET['f'];
	} else {
	redirect('/');

	}
	$filepath='assets/file/'.$file;
	force_download($filepath,null);
  	
	}	

	// public function download_dec($file='null')
	// {
	// 	if ($file=='null') {
	// 		redirect('/');
	// 	}

	// $filepath='assets/lagu/'.$file;
	// $this->load->view('download_now_enc',array('file' => $filepath,
	// 													'nama_file'=>$file));
	// force_download($filepath,null);
	// $file_to_enc=read_file('assets/lagu/decrypt.txt');
 // 	$file_enc=str_rot13(base64_encode($file_to_enc));
	// force_download('encrypt.txt',$file_enc);

	// $file_to_dec=read_file('assets/lagu/encrypt.txt');
	// $file_dec = base64_decode(str_rot13($file_to_dec));
	// force_download('decrypt.txt',$file_dec);
	// }	

	
}
