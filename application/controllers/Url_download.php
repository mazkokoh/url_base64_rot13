<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url_download extends CI_Controller {

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
	public function file(){
		$data = $this->db->get('file'); 
		if ($_GET['type']=='chiper') {
			# code..
		$this->load->view('daftar_file',array('file' => $data,
											  'page'=>'chiper_file'));
		} else if ($_GET['type']=='plain') {
		$this->load->view('daftar_file',array('file' => $data,
											  'page'=>'plain_file'));

		} else if ($_GET['type']=='upload') {
		$this->load->view('upload_file',array('page'=>'upload_file'));
			
		} else {
		redirect('/');

		}
	}
	public function view(){
		$this->load->view('embed_doc', array('page' => base64_decode(str_rot13($_GET['p']))  ,'file' => base64_decode(str_rot13($_GET['f'])) , 'nama'=>base64_decode(str_rot13($_GET['n'])) ));
	}
	
}
