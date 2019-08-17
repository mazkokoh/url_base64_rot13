<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manual extends CI_Controller {

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
	public function enkrip_text(){
		if (isset($_POST['submit'])) {
			$chiper=str_rot13(base64_encode($_POST['plain']));
			$plain=$_POST['plain'];
			# code...
		} else {
			$chiper="";
			$plain="";
		}
		$this->load->view('enkripsi_text',  array('plain' => $plain,
												  'chiper'=> $chiper));
	}	
	public function dekrip_text(){
		if (isset($_POST['submit'])) {
			$chiper=$_POST['chiper'];
			$plain=base64_decode(str_rot13($_POST['chiper']));
			# code...
		} else {
			$chiper="";
			$plain="";
		}
		$this->load->view('deskripsi_text',  array('plain' => $plain,
												  'chiper'=> $chiper));
	}

	





  	
		

	
}
