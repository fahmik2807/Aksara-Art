<?php 
	
	class Invoice extends CI_Controller{

		public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '3'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							Anda belum Login!
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>');
			redirect('auth/login');
		}
	}
		
		public function index()
		{
			$data['invoice'] = $this->model_invoice->tampil_data();
			$this->load->view('admingaleri_templates/header');
			$this->load->view('admingaleri_templates/sidebar');
			$this->load->view('admin_galeri/invoice',$data);
			$this->load->view('admingaleri_templates/footer');
		}

		public function detail($id_invoice){
			$data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
			$data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);

			$this->load->view('admingaleri_templates/header');
			$this->load->view('admingaleri_templates/sidebar');
			$this->load->view('admin_galeri/detail_invoice',$data);
			$this->load->view('admingaleri_templates/footer');

		}

		public function verif($id_invoice){

			$data['update'] = $this->model_invoice->verif($id_invoice);
			$data['invoice'] = $this->model_invoice->tampil_data();
			$this->load->view('admingaleri_templates/header');
			$this->load->view('admingaleri_templates/sidebar');
			$this->load->view('admin_galeri/invoice',$data);
			$this->load->view('admingaleri_templates/footer');

		}

		public function update($id_invoice){
			
			$data['update'] = $this->model_invoice->verif($id_invoice);
			$data['invoice'] = $this->model_invoice->tampil_data_invoice($id_invoice);
			$this->load->view('admingaleri_templates/header');
			$this->load->view('admingaleri_templates/sidebar');
			$this->load->view('admin_galeri/update',$data);
			$this->load->view('admingaleri_templates/footer');

		}
		public function update_barang(){
			$id 			= $this->input->post('id_brg');
			$stock 			= $this->input->post('stock');
	
			$data = array(
				'stock' 		=> $stock
			);
	
			$where = array(
				'id_brg' => $id
			);
	
			$this->model_barang->update_data($where,$data, 'tb_item');	
	
		}
	
		public function update_resi(){

			$no_resi = $_POST['no_resi'];
			$id_invoice = $_POST['id_invoice'];
			
			$data['update'] = $this->model_invoice->update_resi($id_invoice,$no_resi);
			$data['invoice'] = $this->model_invoice->tampil_data_invoice($id_invoice);
			$this->load->view('admingaleri_templates/header');
			$this->load->view('admingaleri_templates/sidebar');
			$this->load->view('admin_galeri/invoice',$data);
			$this->load->view('admingaleri_templates/footer');

		}

		public function hapus_invoice($id_invoice){
			$where = array('id' => $id_invoice);
		$this->model_invoice->hapus_data($where,'tb_invoice');
		redirect('admin_galeri/invoice');
	}

	public function hapus_barang ($id){
		$this->load->model('model_invoice');
		$this->model_invoice->delete_data($id);
		redirect("admin_galeri/invoice/verif");	
		}

		}

 ?>