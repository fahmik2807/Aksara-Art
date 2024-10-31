<?php 

	class Kategori extends CI_Controller{
		public function lukisan(){
			$data['lukisan'] = $this->model_barang->tampil_data()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('lukisan',$data);
			$this->load->view('templates/footer');

		}

		public function accessories(){
			$data['accessories'] = $this->model_kategori->data_accessories()->result();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('accessories',$data);
			$this->load->view('templates/footer');
	}
	public function about()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('about');
		$this->load->view('templates/footer');
	}

	public function carabeli()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('carapembelian');
		$this->load->view('templates/footer');
	}

}

 ?>