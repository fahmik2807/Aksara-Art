<?php 

	class Model_user extends CI_Model{

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

	}

 ?>