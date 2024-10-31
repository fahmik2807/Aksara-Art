<?php 
	class Model_invoice extends CI_Model{
		public function index($kode)
		{
			$kode_unik = $kode;
			date_default_timezone_set('Asia/Jakarta');
			$id_user 	= $this->session->userdata('id');
			$nama 		= $this->input->post('nama');
			$alamat 	= $this->input->post('alamat');
			$telepon  	= $this->input->post('no_telp');
			$jasa 		= $this->input->post('jasa');
			$bank		= $this->input->post('bank');

			$invoice = array (
				'id_user' => $id_user,
				'nama' 	 => $nama,
				'alamat' => $alamat,
				'tgl_pesan' 	=> date('Y-m-d H:i:s'),
				'batas_bayar' 	=> date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 2,date('Y'))),
					'kode_unik' => $kode_unik,
					'no_telepon' 	=> $telepon,
					'jasa_pengiriman' 	=> $jasa,
					'bank' 		=> $bank

			);
			$this->db->insert('tb_invoice', $invoice);
			$id_invoice = $this->db->insert_id();

			foreach ($this->cart->contents() as $item) {
				$data = array(
				'id_invoice' 		=> $id_invoice,
				'id_brg' 			=> $item['id'],
				'nama_brg' 			=> $item['name'],
				'jumlah'			=> $item['qty'],
				'harga'				=> $item['price'],

				);
				$this->db->insert('tb_pesanan', $data);
			}
			return $id_invoice;

		}
		public function tampil_data()
		{
			$result = $this->db->get('tb_invoice');
			if($result->num_rows() > 0){
				return $result->result();
			} else{
				return false;
			}
		}
		public function tampil_data_galery($id_user)
		{
			$result = $this->db->where('status',1)->get('tb_invoice');
			// ->where('id_user', $id_user) ini ntar lu masukin sebelum ->get diatas, kalo invoice lu udah masukin id_user galeri nya
			if($result->num_rows() > 0){
				return $result->result();
			} else{
				return false;
			}
		}

		public function ambil_id_invoice($id_invoice){
			$result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
			if($result->num_rows() > 0){
				return $result->row();
			} else{
				return false;
			}
		}

		public function ambil_id_pesanan($id_invoice){
			$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
			if($result->num_rows() > 0){
				return $result->result();
			} else{
				return false;
			}
		}

		public function ambil_id_user($id_user){
			$sql = $this->db->query("SELECT * FROM tb_invoice WHERE id_user = $id_user");
			return $sql;
		}

		public function ambil_id_user_detail($id_user,$id){
			$sql = $this->db->query("SELECT * FROM tb_invoice WHERE id_user = '$id_user' AND id = '$id'");
			return $sql;
		}

		public function detail_transaksi($id){
			$sql = $this->db->query("SELECT * FROM tb_pesanan WHERE id_invoice = $id");
			return $sql;
		}
		public function pesanan_bedasarkan_id_brg($id){
			$sql = $this->db->query("SELECT * FROM tb_pesanan WHERE id_brg = $id");
			foreach($sql->result() as $pesanan){
				$invoice = $this->db->query("SELECT * FROM tb_invoice WHERE id = $pesanan->id_invoice");
				$pesanan->status = $invoice->row()->status;
				// print_r($join->row());
			}
			return $sql;
		}
		public function detail_resi($id){
			$sql = $this->db->query("SELECT * FROM tb_resi WHERE id_order = $id");
			return $sql;
		}

		public function verif($id_invoice){
			$sql = $this->db->query("UPDATE tb_invoice SET  status='1' WHERE id='$id_invoice';");
			return $sql;
		}

		public function tampil_data_invoice($id_invoice)
		{
			$this->db->where('id',$id_invoice);
			$result = $this->db->get('tb_invoice');
			if($result->num_rows() > 0){
				return $result->result();
			} else{
				return false;
			}
		}

		public function update_resi($id_invoice,$no_resi)
		{
			$data = array(
				'id_order' 		=> $id_invoice,
				'resi' 			=> $no_resi

				);
				$this->db->insert('tb_resi', $data);

		}

		public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		}


		public function delete_data($id){
		$this->db->where('id_brg', $id);
		$this->db->delete('tb_item');
		}
	}
 ?>