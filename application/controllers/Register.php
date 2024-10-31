	<?php 

	class Register extends CI_Controller{
		 public function index()
		 {

		 	$this->form_validation->set_rules('nama','Nama','required',['required' => 'Masukkan Nama']);
		 	$this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[12]',
		 		[

		 		'required' => 'Masukkan Username anda!',
		 		'min_length' => 'Username terlalu pendek',
		 		'is_unique' => 'This %s already exist'
		 		]);
		 	$this->form_validation->set_rules('alamat','Alamat','required',['required' => 'Masukkan Alamat anda']);
		 	$this->form_validation->set_rules('no_telp','No_Telepon','required|numeric',
		 		[
		 			'required' 		=> 'Masukkan Nomor Telepon anda',
		 			'numeric'		=> 'Nomor Telepon harus angka'
		 		]);
		 	$this->form_validation->set_rules('password_1','Password','required|trim|min_length[3]|matches[password_2]',[
		 		'required' 		=> 'Masukkan Password',
		 		'min_length'	=> 'Password terlalu pendek',
		 		'matches' 		=> 'Password anda tidak cocok'
		 		]);
		 	$this->form_validation->set_rules('password_2','Password','required|matches[password_1]');

		 	if($this->form_validation->run() == FALSE) {
		 	$this->load->view('templates/header');
		 	$this->load->view('register');
		 	$this->load->view('templates/footer');

		 	$password = $this->input->post('password_1',true);

		 	} else {
		 		$data = array(
		 		'id' 			=> '',
		 		'nama' 			=> htmlspecialchars($this->input->post('nama',true)),
		 		'username' 		=> htmlspecialchars($this->input->post('username',true)),
		 		'password' 		=> md5($this->input->post('password_1',true)),
		 		'alamat' 		=> $this->input->post('alamat'),
		 		'no_telp' 		=> $this->input->post('no_telp'),
		 		'tgl_daftar' 	=> date('Y-m-d H:i:s'),
		 		'role_id' 		=> 2,
		 	);

		 		$this->db->insert('tb_user', $data);
		 		redirect('auth/login');
		 	}	

		 }
	}

 ?>