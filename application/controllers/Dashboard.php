<?php

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id') != '2') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							Anda belum Login!
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
			redirect('auth/login');
		}
	}


	public function tambah_ke_keranjang($id,$page)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
			'id'      => $barang->id_brg,
			'qty'     => 1,
			'price'   => $barang->harga,
			'name'    => $barang->nama_brg,
		);

		//Update stock

		$result_update_stock = $this->db->where('id_brg', $barang->id_brg)->get('tb_item');
		$update_stock = $result_update_stock->row()->stock;

		$this->db->query("UPDATE tb_item SET  stock=" . $update_stock . "- 1  WHERE id_brg=" . $barang->id_brg . ";");

		$this->cart->insert($data);
		if ($page=='welcome'){
		redirect("$page");
	} else {	
		redirect("dashboard/detail/$barang->id_brg");
	}
	}
	public function tambah_quantity($id)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
			'id'      => $barang->id_brg,
			'qty'     => 1,
			'price'   => $barang->harga,
			'name'    => $barang->nama_brg,
		);

		$this->cart->insert($data);
		redirect("dashboard/detail_keranjang");
	}
	public function kurang_quantity($id)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
			'id'      => $barang->id_brg,
			'qty'     => -1,
			'price'   => $barang->harga,
			'name'    => $barang->nama_brg,
		);

		$this->cart->insert($data);
		redirect("dashboard/detail_keranjang");
	}

	public function hapus_item($rowid)
	{
		var_dump($this->cart->contents());
		$data = array(
			'rowid'      => $rowid,
			'qty'     => 0
		);
		$this->cart->update($data);

		$result_update_stock = $this->db->where('id_brg', $this->uri->segment('4'))->get('tb_item');
		$update_stock = $result_update_stock->row()->stock;
		$this->db->query("UPDATE tb_item SET stock=" . $update_stock . "+ " . $this->uri->segment('5') . " WHERE id_brg=" . $this->uri->segment('4') . ";");

		redirect('welcome');
	}

	public function detail_keranjang()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('welcome');
	}

	public function pembayaran()
	{

		$id = $this->session->userdata('id');
		$data['users'] = $this->model_auth->user($id);

		$valid = $this->form_validation;
		$valid->set_rules('nama', 'Nama', 'required', ['required' => 'Masukkan Nama Lengkap anda!']);
		$valid->set_rules('alamat', 'Alamat', 'required', ['required' => 'Masukkan Alamat Lengkap anda!']);
		$valid->set_rules('no_telp');
		$provinsi_tujuan = $this->input->post('provinsi');
        $kota_tujuan = $this->input->post('kota');
        $kurir = $this->input->post('jasa');
        $berat = $this->input->post('berat');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        // CURLOPT_POSTFIELDS => "origin=501&destination=114&weight=1700&courier=jne",
        CURLOPT_POSTFIELDS => "origin=115&destination=".$kota_tujuan."&weight=".$berat."&courier=".$kurir."",
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: 8575064cf42a7ad04a3af233d900c66f"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        

    
		if ($valid->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pembayaran', $data);
			$this->load->view('templates/footer');
		} else {
			$data['hasil'] = json_decode($response, true);
			// var_dump($data['hasil']);
			// die();
			$nominal = 0;
			foreach ($this->cart->contents() as $item) {
				$nominal += $item['price'];
			}
			$data['ongkir'] = $data['hasil']['rajaongkir']['query']['weight']*$data['hasil']['rajaongkir']['results'][0]['costs'][0]['cost'][0]['value'];
			$sub = substr($nominal, -3);
			$sub2 = substr($nominal, -2);
			$sub3 = substr($nominal, -1);

			$total =  random_string('numeric', 3);
			$total2 =  random_string('numeric', 2);
			$total3 =  random_string('numeric', 1);

			if ($sub == 0) {
				$hasil =  $nominal + $total;
				$is_processed = $this->model_invoice->index($total);
			} else if ($sub2 == 0) {
				$hasil = $nominal + $total2;
				$no = substr($hasil, -3);
				$is_processed = $this->model_invoice->index($no);
			} else if ($sub3 == 0) {
				$hasil = $nominal + $total3;
				$no = substr($hasil, -3);
				$is_processed = $this->model_invoice->index($no);
			} else {
				$is_processed = $this->model_invoice->index($sub);
			}

			if ($is_processed) {
				$this->cart->destroy();
				$data['invoice'] = $this->model_invoice->ambil_id_invoice($is_processed);
				$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($is_processed);
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('proses_pesanan', $data);
				$this->load->view('templates/footer');
			} else {
				echo "Maaf, Pesanan Anda Gagal diproses!";
			}
		}
	}


	public function detail($id_brg)
	{
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}

	

	public function transaksi()
	{
		$role = $this->session->userdata('role_id');
		// print_r($role);
		$id_user = $this->session->userdata('id');
		if ($role == 1){
			$data['transaksi'] = $this->model_invoice->tampil_data();
		}else{
			$data['transaksi'] = $this->model_invoice->ambil_id_user($id_user);

		}
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/transaksi', $data);
		$this->load->view('templates/footer');
	}

	public function detail_belanja($id)
	{
		$id_user = $this->session->userdata('role_id');
		$data['user'] = $this->model_invoice->ambil_id_user_detail($id_user, $id);
		$data['detail'] = $this->model_invoice->detail_transaksi($id);
		$data['resi'] = $this->model_invoice->detail_resi($id);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_belanja', $data);
		$this->load->view('templates/footer');
	}

	public function upload()
	{
		$data = array();
		$id['id_invoice'] = $this->uri->segment(3);

		if ($this->input->post('submit')) {
			$upload = $this->model_auth->upload();
			if ($upload['result'] == "success") {
				$this->model_auth->save($upload);
				redirect('dashboard/transaksi');
			} else {
				$data['message'] = $upload['error'];
			}
		}
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('upload', $id);
		$this->load->view('templates/footer');
	}

	public function hapus_transaksi($id_invoice)
	{
		$where = array('id' => $id_invoice);
		$this->model_invoice->hapus_data($where, 'tb_invoice');
		redirect('dashboard/transaksi');
	}
	

	public function hapus_barang($id)
	{
		$where = array('id_brg' => $id);
		$this->model_barang->hapus_data($where, 'tb_item');
		redirect('admin/data_brg/index');
	}
}