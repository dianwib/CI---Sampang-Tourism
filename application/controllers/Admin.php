<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->token=$this->session->userdata('token');

        $this->API="https://sampang-tourism.herokuapp.com/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');

    }

    function post_events($title="test",$content="test",$picture="test")
    {
        $url = $this->API.'events';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $data = array(
        'title' => $title,
        'content' => $content,
        'picture' => $picture
        );
        
        $payload = json_encode($data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',$authorization));

        // Prepare new cURL resource
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        // Set HTTP Header for POST request
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        // Submit the POST request
        $result = curl_exec($ch);
 
        // Close cURL session handle
        
        curl_close($ch); 
        echo $result;
}

    function get_events()
    {
    $json = json_decode($this->curl->simple_get($this->API.'events'));
         $data['data']=$json->data;
        $this->load->view('admin/admin_events',$data);
    }
    function delete_events($id)
    {
   $url = $this->API.'events/'.$id;
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',$authorization));
       curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
        
        curl_close($ch); 
        $response=json_decode($response_json, true);
#echo($response_json);
        redirect('Admin/get_events');

    }

    function edit_events($id){
        $json = json_decode($this->curl->simple_get($this->API.'events/'.$id));
         $data['data']=$json;
    
        $this->load->view('admin/edit_events',$data);
    }



     function index()
    {  

        redirect('/login');       
   
    }

    


   
}
