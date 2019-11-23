<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->token=$this->session->userdata('token');

        $this->API="https://sampang-tourism.herokuapp.com/";
        $this->load->library('session');
        $this->load->library('curl');

        $this->load->helper(array('form', 'url'));


    }

    function events()
    {
$url = $this->API.'events';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];
    $this->load->view('admin/admin_events',$data);

    }

function tambah_events()
    {
        $this->load->view('admin/tambah_events');
    }


    function post_events()
    {
        
        $this->load->library('upload');
        $config['upload_path'] = './images/events/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
 
            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/events/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/events/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
                        $url = $this->API.'events';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $title=$this->input->post('title');
        $content=$this->input->post('content');

        $data = array(
        'title' => $title,
        'content' => $content,
        'picture' => $gambar1
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
        echo '<script language="javascript">alert("Succes upload"); document.location="../Admin/events";</script>';    

                }

                else{
                    echo '<script language="javascript">alert("Failed upload"); document.location="../Admin/events";</script>';    

        }
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
        redirect('Admin/events');

    }

    function edit_events($id){
        $json = json_decode($this->curl->simple_get($this->API.'events/'.$id));
         $data['data']=$json;
    
        $this->load->view('admin/edit_events',$data);
    }

        function put_events($id)
    {

        if (empty($_FILES['picture']['name'])){
            $gambar1=$this->input->post('temp_picture');

        
        }
        else{
           
        $this->load->library('upload');
        $config['upload_path'] = './images/events/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
        

            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/events/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/events/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
               
            }
        }
       

        $title=$this->input->post('title');
        $content=$this->input->post('content');
        $created=$this->input->post('created_at');
        
        $updated=date('Y-m-d H:i:s');

        $data = array(
        'title' => $title,
        'content' => $content,
        'picture' => $gambar1,
        'created_at'=>$created,
        'updated_at'=>$updated

        );

        $url = $this->API.'events/'.$id;
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;

        $payload=json_encode($data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',$authorization));

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS,$payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response_json, true);
        echo '<script language="javascript">alert("Succes edit"); document.location="../../Admin/events";</script>';    
    }

###########slides
    function slides()
    {

        $url = $this->API.'slides';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];
    $this->load->view('admin/admin_slides',$data);


    }

    function tambah_slides()
    {
        $this->load->view('admin/tambah_slides');
    }

    function post_slides()
    {
                $this->load->library('upload');

        
        $config['upload_path'] = './images/slides/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
        
            if ($this->upload->do_upload('picture') ){

                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/slides/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/slides/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
        $url = $this->API.'slides';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $data = array(
        'picture' => $gambar1,
        'is_visible'=>True
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
        echo '<script language="javascript">alert("Succes upload"); document.location="../Admin/slides";</script>';                    }

                else{
                    echo '<script language="javascript">alert("Failed upload"); document.location="../Admin/slides";</script>';                   }

    }
    function delete_slides($id)
    {
   $url = $this->API.'slides/'.$id;
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
        redirect('Admin/slides');

    }

        function sembunyi_slides($id)
    {

        
        $updated=date('Y-m-d H:i:s');

        $data = array(
        'is_visible'=>FALSE,
        'updated_at'=>$updated

        );

        $url = $this->API.'slides/'.$id;
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;

        $payload=json_encode($data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',$authorization));

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'PATCH');
        curl_setopt($ch, CURLOPT_POSTFIELDS,$payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response_json, true);
     echo '<script language="javascript">alert("Berhasil Menon-aktifkan Slide"); document.location="../../Admin/slides";</script>';
     
    }
            function tampil_slides($id)
    {

        
        $updated=date('Y-m-d H:i:s');

        $data = array(
        'is_visible'=>TRUE,
        'updated_at'=>$updated

        );

        $url = $this->API.'slides/'.$id;
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;

        $payload=json_encode($data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',$authorization));

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'PATCH');
        curl_setopt($ch, CURLOPT_POSTFIELDS,$payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response_json, true);
                            echo '<script language="javascript">alert("Berhasil Meng-aktifkan Slide"); document.location="../../Admin/slides";</script>';
     
    }


################NEWS
        function news()
    {
$url = $this->API.'news';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];
    $this->load->view('admin/admin_news',$data);

    }

    function tambah_news()
    {
        $this->load->view('admin/tambah_news');
    }


    function post_news()
    {
        
        $this->load->library('upload');
        $config['upload_path'] = './images/news/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
 
            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/news/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/news/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
                        $url = $this->API.'news';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $title=$this->input->post('title');
        $content=$this->input->post('content');

        $data = array(
        'title' => $title,
        'content' => $content,
        'picture' => $gambar1
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
        echo '<script language="javascript">alert("Succes upload"); document.location="../Admin/news";</script>';    

                }

                else{
                    echo '<script language="javascript">alert("Failed upload"); document.location="../Admin/news";</script>';    

        }
    }

    function delete_news($id)
    {
   $url = $this->API.'news/'.$id;
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
        redirect('Admin/news');

    }

    function edit_news($id){
        $json = json_decode($this->curl->simple_get($this->API.'news/'.$id));
         $data['data']=$json;
    
        $this->load->view('admin/edit_news',$data);
    }

        function put_news($id)
    {

        if (empty($_FILES['picture']['name'])){
            $gambar1=$this->input->post('temp_picture');

        
        }
        else{
           
        $this->load->library('upload');
        $config['upload_path'] = './images/news/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
        

            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/news/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/news/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
               
            }
        }
       

        $title=$this->input->post('title');
        $content=$this->input->post('content');
        $created=$this->input->post('created_at');
        
        $updated=date('Y-m-d H:i:s');

        $data = array(
        'title' => $title,
        'content' => $content,
        'picture' => $gambar1,
        'created_at'=>$created,
        'updated_at'=>$updated

        );

        $url = $this->API.'news/'.$id;
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;

        $payload=json_encode($data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',$authorization));

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS,$payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response_json, true);
        echo '<script language="javascript">alert("Succes edit"); document.location="../../Admin/news";</script>';    
    }


################PARTNERS
        function partners()
    {
$url = $this->API.'partners';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];
    $this->load->view('admin/admin_partners',$data);

    }

    function tambah_partners()
    {
        $this->load->view('admin/tambah_partners');
    }


    function post_partners()
    {
        
        $this->load->library('upload');
        $config['upload_path'] = './images/partners/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
 
            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/partners/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/partners/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
                        $url = $this->API.'partners';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $name=$this->input->post('name');
        $url=$this->input->post('url');

        $data = array(
        'name' => $name,
        'picture' => $gambar1,
        'url' => $url
        
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
        echo '<script language="javascript">alert("Succes upload"); document.location="../Admin/partners";</script>';    

                }

                else{
                    echo '<script language="javascript">alert("Failed upload"); document.location="../Admin/partners";</script>';    

        }
    }

    function delete_partners($id)
    {
   $url = $this->API.'partners/'.$id;
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
        redirect('Admin/partners');

    }

    function edit_partners($id){
        $json = json_decode($this->curl->simple_get($this->API.'partners/'.$id));
         $data['data']=$json;
    
        $this->load->view('admin/edit_partners',$data);
    }

        function put_partners($id)
    {

        if (empty($_FILES['picture']['name'])){
            $gambar1=$this->input->post('temp_picture');

        
        }
        else{
           
        $this->load->library('upload');
        $config['upload_path'] = './images/partners/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
        

            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/partners/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/partners/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
               
            }
        }
       

        $name=$this->input->post('name');
        $url=$this->input->post('url');
        $created=$this->input->post('created_at'); 
        $updated=date('Y-m-d H:i:s');

        $data = array(
        'name' => $name,
        'picture' => $gambar1,
        'url' => $url,
        'created_at'=>$created,
        'updated_at'=>$updated

        );

        $url = $this->API.'partners/'.$id;
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;

        $payload=json_encode($data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',$authorization));

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS,$payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response=json_decode($response_json, true);
        echo '<script language="javascript">alert("Succes edit"); document.location="../../Admin/partners";</script>';    
    }














     function index()
    {  

        redirect('/login');       
   
    }

    


   
}
