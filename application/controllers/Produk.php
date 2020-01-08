<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	var $API ="";

    function __construct() {
          parent::__construct();
        $this->API="https://sampang-tourism.herokuapp.com/";
        $this->load->library('session');
        $this->load->library('curl');

        $this->load->helper(array('form', 'url'));
    }

    
   public function index()
	{
        $url = $this->API.'slides';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_slides']=$response['data'];


        #######ECONOMIES-CATEGORIES
        $url = $this->API.'creative-economy-categories';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_creative_economy_categories']=$response['data'];

		#######ECONOMIES
        $url = $this->API.'creative-economies';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_creative_economies']=$response['data'];


#######PARTNERS
        $url = $this->API.'partners';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_partners']=$response['data'];

        $data['kategori']=$this->input->post('data_kategori');

        if (empty($this->input->post('data_kategori'))){
            $data['kategori']='ALL';            
        }

        
        
         $data['base_url']=$this->API;
        $this->load->view('produk/produk_index',$data);
	}


   
    public function detil($id)


    {
         $data['base_url']=$this->API;
        $url = $this->API.'slides';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_slides']=$response['data'];


        #######ECONOMIES-CATEGORIES
        $url = $this->API.'creative-economy-categories';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_creative_economy_categories']=$response['data'];

        #######ECONOMIES
        $url = $this->API.'creative-economies/'.$id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_creative_economies']=$response;
     

#######PARTNERS
        $url = $this->API.'partners';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_partners']=$response['data'];

#####MAPS
    $latitude=$data['data_creative_economies']['latitude'];
    $longitude=$data['data_creative_economies']['longitude'];

        $this->load->library('googlemaps');

    $config['center'] = $latitude.','. $longitude;
    $config['zoom'] = 15;
    $this->googlemaps->initialize($config);

    $marker = array();
    $marker['position'] = $latitude.','. $longitude;
    $this->googlemaps->add_marker($marker);
    $data['map'] = $this->googlemaps->create_map();


        $this->load->view('produk/produk_detil',$data);
    }


}
