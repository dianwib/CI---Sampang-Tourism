<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
/*		$json = json_decode($this->curl->simple_get($this->API.'produk-anggota'));
         $data['dataproduk']=$json->data;

		$this->load->view('home/index',$data);*/

		$url = $this->API.'slides';
        $ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response_json = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response_json, true);
    	$data['data_slides']=$response['data'];

    	#######NEWS
    	$url = $this->API.'news';
        $ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response_json = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response_json, true);
    	$data['data_news']=$response['data'];

    	#######ECONOMIES
    	$url = $this->API.'creative-economies';
        $ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response_json = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response_json, true);
    	$data['data_creative_economies']=$response['data'];

    	#######EVENTS
    	$url = $this->API.'events';
        $ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response_json = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response_json, true);
    	$data['data_events']=$response['data'];

    	#######DESTINATION-CATEGORIES
    	$url = $this->API.'destination-categories';
        $ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response_json = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response_json, true);
    	$data['data_destination_categories']=$response['data'];

#######destinations
        $url = $this->API.'destinations';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_destinations']=$response['data'];

#######PARTNERS
    	$url = $this->API.'partners';
        $ch = curl_init($url);
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response_json = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($response_json, true);
    	$data['data_partners']=$response['data'];


    	 $data['base_url']=$this->API;
		$this->load->view('home/index',$data);
		
	}
}
