<?php
class Rajaongkir extends CI_Controller
{
    // private $api_key = '3852e5062804997c5cf875671d0e029f';
    private $api_key = '8575064cf42a7ad04a3af233d900c66f';

	public function provinsi()
	{

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: $this->api_key"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        
        $array_response = json_decode($response, true);
        // echo '<pre>';
        // print_r($array_response);
        // echo '</pre>';

        $data_provinsi = $array_response['rajaongkir']['results'];
        echo "<option value=''>--Pilih Provinsi--</option>";
        foreach ($data_provinsi as $key => $value) {
            echo "<option value='" .$value['province_id'] . "' id_provinsi='".$value['province_id']."'>" . $value['province'] . "</option>";
        }
        }
    }

    public function kota()
    {
        $id_provinsi_terpilih = $this->input->post('id_provinsi');
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=" . $id_provinsi_terpilih,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key:$this->api_key"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        // echo $response;
        $array_response = json_decode($response, true);
        // echo '<pre>';
        // print_r($array_response);
        // echo '</pre>';
        $data_kota = $array_response['rajaongkir']['results'];
        echo "<option value=''>--Pilih Kota--</option>";
        foreach ($data_kota as $key => $value) {
            echo "<option value='" .$value['city_id'] . "'>" . $value['city_name'] . "</option>";
        }
        }
     }

    public function ongkir()
    {
        $provinsi_tujuan = $this->input->post('provinsi');
        $kota_tujuan = $this->input->post('kota');
        $kurir = $this->input->post('kurir');
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
            "key: $this->api_key"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        

       

        if ($err) {
         $data['hasil'] = array('error'=>true);
        } else {
        $data['hasil'] = json_decode($response, true);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
            

        $this->load->view('templates/header');
			$this->load->view('templates/sidebar');
            $this->load->view('keranjang', $data);
			$this->load->view('templates/footer');
        }

       
    }
}