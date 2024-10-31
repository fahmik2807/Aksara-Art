<?php 
/**
 * 
 */
class Dashboard_admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
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
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('admin_templates/header');
		$this->load->view('admin_templates/sidebar');
		$this->load->view('admin/data_brg',$data);
		$this->load->view('admin_templates/footer');

	}
}
 ?>