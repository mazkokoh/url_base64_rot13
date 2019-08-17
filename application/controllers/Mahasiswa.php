<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

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
		echo "HALAMAN URL";
	}
	public function detail()
	{
		if ($_GET['type']=="TERENKRIPSI") {
			$id_mahasiswa = base64_decode(str_rot13($_GET['id']));
		} else {
			$id_mahasiswa=$_GET['id'];
		}

		// $this->db->where('id', $id_mahasiswa);
		// $data = $this->db->get('mahasiswa'); 
		$data=$this->db->query('select * from mahasiswa where id='.$id_mahasiswa);
		if ($_GET['type']=="TERENKRIPSI") {
		$this->load->view('detail_siswa',array('datamhs' => $data,
												'type'=>'enc'));
		} else {
		$this->load->view('detail_siswa',array('datamhs' => $data,
												'type'=>'dec'));
		}
	 
	 // echo $id_mahasiswa;
	}
	public function del($type,$id){
		if ($type=='enc') {
				$id = base64_decode(str_rot13($id));		
		} 
		$this->db->delete('mahasiswa', array('id' => $id)); 
		if ($type=='enc') {
		redirect('url_profile/encrypted');
		} else {
		redirect('url_profile/unencrypted');
		}
	}

	
}
