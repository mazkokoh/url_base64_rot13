<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

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

	public function watch()
	{
		if ($_GET['type']=='encrypted') {
			$id_video = base64_decode(str_rot13($_GET['v']));
		} else {
			$id_video =$_GET['v'];
		}
		
		$this->db->where('id', $id_video);
		$data = $this->db->get('video');

		$data2 = $this->db->get('video'); 
		$this->load->view('watch_video',array( 'video' => $data,
											   'list_vd'=>$data2,
											   'type'=>$_GET['type']));

	}

	public function watch_dec($id='id')
	{
		if ($id=='id') {
			redirect('/');
		}
		$this->db->where('id', $id);
		$data = $this->db->get('video'); 
		$this->load->view('watch_video_dec',array('video' => $data));
	}

}
