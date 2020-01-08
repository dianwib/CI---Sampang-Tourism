<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
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


   #######ECONOMIES-CATEGORIES
        $url = $this->API.'galleries';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_galleries']=$response['data'];


        #######GALLERY
        $url = $this->API.'photos-gallery';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_photos_gallery']=$response['data'];



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
        $this->load->view('gallery/gallery_index',$data);
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


 #######GALLERY
        $url = $this->API.'photos-gallery/'.$id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_photos_gallery']=$response;


#######PARTNERS
        $url = $this->API.'partners';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_partners']=$response['data'];


        $this->load->view('gallery/gallery_detil',$data);
    }


}
