<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

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

	public function embed()
	{

		$id = base64_decode(str_rot13($_GET['s']));
		
		$this->db->where('id', $id);
		$data = $this->db->get('website');
		$this->load->view('embed_site',array( 'site' => $data));

	}	
	public function del(){
		$id = base64_decode(str_rot13($_GET['id']));

		$this->db->delete('website', array('id' => $id)); 

		redirect('url_website/list');

	}
	public function open($site="default"){
		if (!isset($_POST['site'])) {
			$this->load->view('enkrip_site');
		} else {
			redirect('website/site?encrypted='.str_rot13(base64_encode($_POST['site'])));
		}

	}
	public function site(){
		$this->load->view('full_site',  array('site' => base64_decode(str_rot13($_GET['encrypted'])) ));
	}
	public function full()
	{

		$id = base64_decode(str_rot13($_GET['s']));
		
		$this->db->where('id', $id);
		$data = $this->db->get('website');
		$data2= $data->row();
		$site=$data2->site;
		$this->load->view('full_site',array( 'site' => $site));

	}



}
