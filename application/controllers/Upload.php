<?php 

class Upload extends CI_Controller{


	public function index(){
		$this->load->view('input_video', array('error' => ' ' ));
	}
	public function del_v($id,$file){
		$this->db->delete('video', array('id' => $id)); 
		unlink('./assets/video/'.$file);
		redirect('url_video/video/encrypted');
	}	
	public function del_f($id,$file){
		$this->db->delete('file', array('id' => $id)); 
		unlink('./assets/file/'.$file);
		redirect('url_download/file?type=chiper');
	}
	public function insert_data(){
	$file_v=$this->aksi_upload();
		$data = array(
		        'id' => $_POST['id_video'],
		        'judul' => $_POST['judul_video'],
		        'episode' => $_POST['episode_video'],
		        'cover' => 'default.png',
		        'durasi' => $_POST['durasi_video'],
		        'file' => $file_v
		);
		$this->db->insert('video', $data);
        $to_video=str_rot13(base64_encode($_POST['id_video'])).'&type=encrypted';
		redirect('video/watch?v='.$to_video);
		
	}
	public function aksi_upload(){
		$config['upload_path']          = './assets/video/';
		$config['allowed_types']        = 'mp4';
		$config['max_size']             = 100000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('video_file')){
			$error = array('error' => $this->upload->display_errors());
			// $this->load->view('v_upload', $error);
			return $this->upload->display_errors();
		}else{
			$data = array('upload_data' => $this->upload->data());
			 return $this->upload->data("file_name");
			// $this->load->view('v_upload_sukses', $data);	
		}
	}	
	public function insert_file(){
	$file=$this->aksi_upload_file();
		$data = array(
		        'id' => '',
		        'nama' => $_POST['nama_file'],
		        'file' => $file
		);
		$this->db->insert('file', $data);
        
		redirect('url_download/file?type=chiper');
		
	}
	public function aksi_upload_file(){
		$config['upload_path']          = './assets/file/';
		$config['allowed_types']        = '*';
		$config['max_size']             = 100000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file_upl')){
			$error = array('error' => $this->upload->display_errors());
			// $this->load->view('v_upload', $error);
			echo "Gagal Upload";
			return $this->upload->display_errors();
		}else{
			$data = array('upload_data' => $this->upload->data());
			 return $this->upload->data("file_name");
			// $this->load->view('v_upload_sukses', $data);	
		}
	}
	
}