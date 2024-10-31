<?php
class Pembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$nominal = 1238000; // jumlah nominal awal
		$sub = substr($nominal, -3);
		$sub2 = substr($nominal, -2);
		$sub3 = substr($nominal, -1);

		$total =  random_string('numeric', 3);
		$total2 =  random_string('numeric', 2);
		$total3 =  random_string('numeric', 1);

		if ($sub == 0) {
			$hasil =  $nominal + $total;
			echo "No Unik :" . $total . "<br>";
			echo "Nominal Transfer : Rp. " . number_format($hasil, 0, ",", ".");
		} else if ($sub2 == 0) {
			$hasil = $nominal + $total2;
			$no = substr($hasil, -3);
			echo "No Unik :" . $no . "<br>";
			echo "Nominal Transfer : Rp. " . number_format($hasil, 0, ",", ".");
		} else if ($sub3 == 0) {
			$hasil = $nominal + $total3;
			$no = substr($hasil, -3);
			echo "No Unik :" . $no . "<br>";
			echo "Nominal Transfer : Rp. " . number_format($hasil, 0, ",", ".");
		} else {
			echo "No Unik :" . $sub . "<br>";
			echo "Nominal Transfer : Rp. " . number_format($nominal, 0, ",", ".");
		}
	}

	function _api_ongkir_post($param)
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "COST",
			CURLOPT_POSTFIELDS => $param,
			CURLOPT_HTTPHEADER => array(
				"content-type: application/x-www-form-urlencoded",
				/* masukan api key disini*/
				"key: 3852e5062804997c5cf875671d0e029f"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			return $err;
		} else {
			return $response;
		}
	}

	function _api_ongkir($data)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/province?id=12",
			CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
			CURLOPT_URL => "http://api.rajaongkir.com/starter/cost" . $data,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				/* masukan api key disini*/
				"key: 3852e5062804997c5cf875671d0e029f"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			// return  $err;
			echo "cURL Error #:" . $err;
		} else {
			// return $response;
			echo json_decode($response);
		}
	}


	public function provinsi()
	{

		$provinsi = $this->_api_ongkir('province');
		$data = json_decode($provinsi, true);
		echo json_encode($data['rajaongkir']['results']);
	}


	public function lokasi()
	{
		$this->load->view('head');
		$this->load->view('nav');
		$this->load->view('pembayaran');
		$this->load->view('footer');
	}

	public function kota($provinsi = "")
	{
		print_r($provinsi);		
		if (!empty($provinsi)) {
			if (is_numeric($provinsi)) {
				$kota = $this->_api_ongkir('city?province=' . $provinsi);
				$data = json_decode($kota, true);
				echo json_encode($data['rajaongkir']['results']);
			} else {
				show_404();
			}
		} else {
			show_404();
		}
	}

	public function tarif($origin, $des, $qty, $cour)
	{
		print_r($origin, $des, $qty, $cour);
		$berat = $qty * 1000;
		$param = array(
			'origin':$origin
			'destination':$des
			'weight':$berat
			'courir':$cour
		)
		$tarif = $this->_api_ongkir_post($param);
		$data = json_decode($tarif, true);
		print_r($data);
		echo json_encode($data['rajaongkir']['results']);
	}
}