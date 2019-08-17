<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url_website extends CI_Controller {

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
	public function input(){
		if (isset($_POST['submit'])) {
		 	$data = array(
		        'id' => $_POST['id_site'],
		        'nama' => $_POST['nama_site'],
		        'site' => $_POST['url']
		);
		$this->db->insert('website', $data);
		redirect('url_website/list/');
			# code...
		} else {
		$this->load->view('input_site');
			
		}
	}
	public function list()
	{
		$data = $this->db->get('website'); 

		// $this->load->view('embed_site');
		 $this->load->view('list_site',array('site' => $data));

		// echo "HALAMAN URL TERENKRIPSI <BR>";
		// echo "<a href='".base_url()."' >back</a>";
	}


}
