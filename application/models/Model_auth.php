<?php 

	class Model_auth extends CI_Model{

		public function cek_login(){
			$username = set_value('username');
			$password = set_value('password');

			$pass = md5($password);

			$result   = $this->db->where('username', $username)
								 ->where('password', $pass)
								 ->limit(1)
								 ->get('tb_user');
			if($result->num_rows() > 0){
				return $result->row();
			}else{
				return array();
			}

		}

		public function user($id){
			$result   = $this->db->where('id', $id)
								 ->limit(1)
								 ->get('tb_user');
			if($result->num_rows() > 0){
				return $result->row();
			}else{
				return array();
			}

		}

		public function upload()
		{
			$config['upload_path'] = './assets/img_transaksi';
			$config['allowed_types'] = 'jpg|png|jpeg|';
			$config['max_size'] 	= '2048';
			$config['remove_space'] = TRUE;

			$this->load->library('upload', $config);
			if($this->upload->do_upload('input_gambar')) {
				$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
				return $return;
			} else {
				$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
				return $return;
			}
		}

		public function save($upload)
		{
			$id = $this->input->post('id');
			$filename = $upload['file']['file_name'];



			$sql = $this->db->query("UPDATE tb_invoice SET bukti_transaksi='$filename', status='2' WHERE id='$id';");
			return $sql;
		}

	}

 ?>