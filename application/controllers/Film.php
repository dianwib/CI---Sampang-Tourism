<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Film extends CI_Controller {
	var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://www.omdbapi.com/?i=tt3896198&apikey=bcf94867";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    
   public function index()
	{
		 $json = json_decode($this->curl->simple_get($this->API));
         $data['dataproduk']=$json;
        $this->load->view('event/event_detil (copy)',$data);
	}
    public function detil_event()
    {
         $json = json_decode($this->curl->simple_get($this->API.'produk-anggota'));
        $data['dataproduk']=$json->data;
        $this->load->view('event/event_detil',$data);
    }
    
}
