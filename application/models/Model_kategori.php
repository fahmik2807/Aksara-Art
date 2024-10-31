<?php 

	class Model_kategori extends CI_Model{
		public function data_lukisan(){
		 	return	$this->db->get_where("tb_item", array('kategori' => 'lukisan' ));
		}

			public function data_accessories(){
		 	return	$this->db->get_where("tb_item", array('kategori' => 'accessories' ));
		}
	}

 ?>