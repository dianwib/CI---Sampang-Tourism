<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
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
        $data['base_url']=$this->API;
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


#######PARTNERS
        $url = $this->API.'partners';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_partners']=$response['data'];


        $this->load->view('berita/berita_index',$data);
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


 #######NEWS
        $url = $this->API.'news/'.$id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_news']=$response;


#######PARTNERS
        $url = $this->API.'partners';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_partners']=$response['data'];


        $this->load->view('berita/berita_detil',$data);
    }


}
