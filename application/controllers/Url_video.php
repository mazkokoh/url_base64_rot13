<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url_video extends CI_Controller {

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

	public function uploadVideo()
	{
	    $config['upload_path']          = './assets/video/';
	    $config['allowed_types']        = 'mp4';
	    $config['file_name']            = 'baru';
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    // $config['max_width']            = 1024;
	    // $config['max_height']           = 768;
	
	    $this->load->library('upload', $config);
	
	    if ($this->upload->do_upload('image')) {
	        return $this->upload->data("file_name");
	    }
	    
	    return "default.jpg";
	}

	public function input_video()
	{
		$this->load->view('upload_video');
	}
	public function video($type='')
	{
		if ($type=='') {
			# code...
			redirect('/');
		}
		$data = $this->db->get('video'); 
		$this->load->view('daftar_video',array('video' => $data,
												'type'=> $type));

		// echo "HALAMAN URL TERENKRIPSI <BR>";
		// echo "<a href='".base_url()."' >back</a>";
	}

	
}
