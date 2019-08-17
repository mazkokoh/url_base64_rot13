<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url_profile extends CI_Controller {

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
	public function encrypted()
	{
		$data = $this->db->get('mahasiswa'); 
		$this->load->view('daftar_siswa',array('datamhs' => $data,
													'type'=>'encrypted'));

		// echo "HALAMAN URL TERENKRIPSI <BR>";
		// echo "<a href='".base_url()."' >back</a>";
	}
	public function input_data_mahasiswa(){
		$this->load->view('input_mahasiswa');
	}

	public function insert_data(){

		$data = array(
		        'id' => $_POST['id_mahasiswa'],
		        'nama' => $_POST['nama_mahasiswa'],
		        'jenis_kelamin' => $_POST['jk_mahasiswa'],
		        'tempat_lahir' => $_POST['tempat_lahir_mahasiswa'],
		        'tgl_lahir' => $_POST['tanggal_lahir_mahasiswa'],
		        'jurusan' => $_POST['jurusan_mahasiswa'],
		        'angkatan' => $_POST['angkatan_mahasiswa']
		);
		$id_enc=str_rot13(base64_encode($_POST['id_mahasiswa']));
		$this->db->insert('mahasiswa', $data);
		redirect('mahasiswa/detail?id='.$id_enc.'&type=TERENKRIPSI');
	}
	public function unencrypted()
	{
		$data = $this->db->get('mahasiswa'); 
		$this->load->view('daftar_siswa',array('datamhs' => $data,
													'type'=>'unencrypted'));


	}
	
}
