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

    function dashboard()
    {
        ####### creative-economy-categories
        $url = $this->API.'creative-economy-categories';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_creative_economy_categories']=$response['data'];

####### galleries
        $url = $this->API.'galleries';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_galleries']=$response['data'];

        ####### photos-gallery
        $url = $this->API.'photos-gallery';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_photos_gallery']=$response['data'];

        #######profiles
        $url = $this->API.'profiles';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_profiles']=$response['data'];

        #######destinations
        $url = $this->API.'destinations';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_destinations']=$response['data'];

#######DOWNLOADS
        $url = $this->API.'downloads';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_downloads']=$response['data'];


        #######SLIDES
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


#######PARTNERS
        $url = $this->API.'partners';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response_json, true);
        $data['data_partners']=$response['data'];

    $this->load->view('admin/admin_dashboard',$data);

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
        
       echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Event");'; 
echo 'document.location.href ="'.base_url().'Admin/events";';
echo '</script>';      

                }

                else{
                    echo '<script type="text/javascript">'; 
echo 'alert("Gagal Menambah Event");'; 
echo 'document.location.href ="'.base_url().'Admin/events";';
echo '</script>';      

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
       echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Mengedit Event");'; 
echo 'document.location.href ="'.base_url().'Admin/events";';
echo '</script>';     
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
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Slider");'; 
        echo 'document.location.href ="'.base_url().'Admin/slides";';
        echo '</script>';
                  }

                else{
echo '<script type="text/javascript">'; 
echo 'alert("Gagal Menambah Slider");'; 
        echo 'document.location.href ="'.base_url().'Admin/slides";';
        echo '</script>';
        
    }
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
    echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menonaktifkan Slider");'; 
        echo 'document.location.href ="'.base_url().'Admin/slides";';
        echo '</script>';
        
     
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
                         echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Mengaktifkan Slider");'; 
        echo 'document.location.href ="'.base_url().'Admin/slides";';
        echo '</script>';
        
     
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
       echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Berita");'; 
        echo 'document.location.href ="'.base_url().'Admin/news";';
        echo '</script>';
        

                }

                else{
                    echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menghapus Slider");'; 
        echo 'document.location.href ="'.base_url().'Admin/news";';
        echo '</script>';
        

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
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Mengedit Berita");'; 
        echo 'document.location.href ="'.base_url().'Admin/news";';
        echo '</script>';
            
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
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Partner");'; 
        echo 'document.location.href ="'.base_url().'Admin/partners";';
        echo '</script>';
         

                }

                else{
         
        echo '<script type="text/javascript">'; 
echo 'alert("Gagal Menambah Partner");'; 
        echo 'document.location.href ="'.base_url().'Admin/partners";';
        echo '</script>';    

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
        
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Mengedit Partner");'; 
        echo 'document.location.href ="'.base_url().'Admin/partners";';
        echo '</script>';
    }


################GALLERIES
        function galleries()
    {
$url = $this->API.'galleries';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];
    $this->load->view('admin/admin_galleries',$data);

    }

    function tambah_galleries()
    {
        $this->load->view('admin/tambah_galleries');
    }


    function post_galleries()
    {
        
        $url = $this->API.'galleries';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $title=$this->input->post('title');

        $data = array(
        // 'id'=>$title,
        'title' => $title
        
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

        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Kategori Galeri");'; 
        echo 'document.location.href ="'.base_url().'Admin/galleries";';
        echo '</script>'; 
    }

    function delete_galleries($id)
    {
   $url = $this->API.'galleries/'.$id;
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
        redirect('Admin/galleries');

    }

    function edit_galleries($id){
        $json = json_decode($this->curl->simple_get($this->API.'galleries/'.$id));
         $data['data']=$json;
    
        $this->load->view('admin/edit_galleries',$data);
    }

        function put_galleries($id)
    {

        
        $title=$this->input->post('title');
        $created=$this->input->post('created_at'); 
        $updated=date('Y-m-d H:i:s');

        $data = array(
        'title' => $title,
        'created_at'=>$created,
        'updated_at'=>$updated

        );

        $url = $this->API.'galleries/'.$id;
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
        
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Mengedit Kategori Galeri");'; 
        echo 'document.location.href ="'.base_url().'Admin/galleries";';
        echo '</script>';
    }

################photos_gallery
function photos_gallery()
    {
$url = $this->API.'photos-gallery';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];
    $this->load->view('admin/admin_photos_gallery',$data);

    }

    function tambah_photos_gallery()
    {

    $url = $this->API.'galleries';
        $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response_json = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response_json, true);
    $data['data']=$response['data'];
        $this->load->view('admin/tambah_photos_gallery',$data);
    }


    function post_photos_gallery()
    {
        
        $this->load->library('upload');
        $config['upload_path'] = './images/photos_gallery/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
 
            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/photos_gallery/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/photos_gallery/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
                        $url = $this->API.'photos-gallery';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $gallery_id=$this->input->post('gallery_id');

        $data = array(
        'gallery_id' => $gallery_id,
        'photo' => $gambar1,
        
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
         
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Galeri Foto");'; 
        echo 'document.location.href ="'.base_url().'Admin/photos_gallery";';
        echo '</script>';
                }

                else{

        echo '<script type="text/javascript">'; 
echo 'alert("Gagal Menambah Galeri Foto");'; 
        echo 'document.location.href ="'.base_url().'Admin/photos_gallery";';
        echo '</script>';
                
        }
    }

    function delete_photos_gallery($id)
    {
   $url = $this->API.'photos-gallery/'.$id;
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
        redirect('Admin/photos_gallery');

    }

    // function edit_photos_gallery($id){
    //     $json = json_decode($this->curl->simple_get($this->API.'photos-gallery/'.$id));
    //      $data['data']=$json;
    
    //     $this->load->view('admin/edit_photos_gallery',$data);
    // }

    //     function put_photos_gallery($id)
    // {

    //     if (empty($_FILES['picture']['name'])){
    //         $gambar1=$this->input->post('temp_picture');

        
    //     }
    //     else{
           
    //     $this->load->library('upload');
    //     $config['upload_path'] = './images/photos_gallery/'; //path folder
    //     $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    //     $config['encrypt_name'] = TRUE; 
    //     $this->upload->initialize($config);
        

    //         if ($this->upload->do_upload('picture') ){
    //             $gbr = $this->upload->data();
    //             //Compress Image
    //             $config['image_library']='gd2';
    //             $config['source_image']='./images/photos_gallery/'.$gbr['file_name'];
    //             $config['create_thumb']= FALSE;
    //             $config['maintain_ratio']= FALSE;
    //             $config['quality']= '50%';
    //             $config['new_image']= './images/photos_gallery/'.$gbr['file_name'];
    //             $this->load->library('image_lib', $config);
    //             $this->image_lib->resize();
    //             $gambar1=$gbr['file_name'];
                
               
    //         }
    //     }
       

    //     $name=$this->input->post('name');
    //     $url=$this->input->post('url');
    //     $created=$this->input->post('created_at'); 
    //     $updated=date('Y-m-d H:i:s');

    //     $data = array(
    //     'name' => $name,
    //     'picture' => $gambar1,
    //     'url' => $url,
    //     'created_at'=>$created,
    //     'updated_at'=>$updated

    //     );

    //     $url = $this->API.'photos-gallery/'.$id;
    //     $ch = curl_init($url);
    //     $authorization="Authorization: Bearer ".$this->token;

    //     $payload=json_encode($data);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //     'Content-Type: application/json',$authorization));

    //     curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'PUT');
    //     curl_setopt($ch, CURLOPT_POSTFIELDS,$payload);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $response_json = curl_exec($ch);
    //     curl_close($ch);
    //     $response=json_decode($response_json, true);
    //     echo '<script language="javascript">alert("Succes edit"); document.location="?php echo base_url().'../Admin/photos_gallery";</script>';    
    // }

###########DESTINATION-CATEGORIES
        function destination_categories()
    {
$url = $this->API.'destination-categories';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];
    $this->load->view('admin/admin_destination_categories',$data);

    }

function tambah_destination_categories()
    {
        $this->load->view('admin/tambah_destination_categories');
    }


    function post_destination_categories()
    {
        
        $this->load->library('upload');
        $config['upload_path'] = './images/destination_categories/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
 
            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/destination_categories/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/destination_categories/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
                        $url = $this->API.'destination-categories';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $title=$this->input->post('title');
        $order=$this->input->post('order');

        $data = array(
        'title' => $title,
        'icon' => $gambar1,
        'order' => $order
        
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

        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Kategori Destinasi");'; 
        echo 'document.location.href ="'.base_url().'Admin/destination_categories";';
        echo '</script>';
                
                }

                else{
                
        echo '<script type="text/javascript">'; 
echo 'alert("Gagal Menambah Kategori Destinasi");'; 
        echo 'document.location.href ="'.base_url().'Admin/destination_categories";';
        echo '</script>';
        }
    }

    function delete_destination_categories($id)
    {
   $url = $this->API.'destination-categories/'.$id;
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
        redirect('Admin/destination_categories');

    }

    function edit_destination_categories($id){
        $json = json_decode($this->curl->simple_get($this->API.'destination-categories/'.$id));
         $data['data']=$json;
    
        $this->load->view('admin/edit_destination_categories',$data);
    }

        function put_destination_categories($id)
    {

        if (empty($_FILES['picture']['name'])){
            $gambar1=$this->input->post('temp_picture');

        
        }
        else{
           
        $this->load->library('upload');
        $config['upload_path'] = './images/destination_categories/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
        

            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/destination_categories/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/destination_categories/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
               
            }
        }
       

        $title=$this->input->post('title');
        $order=$this->input->post('order');
        $created=$this->input->post('created_at');
        
        $updated=date('Y-m-d H:i:s');

        $data = array(
        'title' => $title,
        'icon' => $gambar1,
        'order' => $order,
        'created_at'=>$created,
        'updated_at'=>$updated

        );

        $url = $this->API.'destination-categories/'.$id;
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
        
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Mengedit Kategori Destinasi");'; 
        echo 'document.location.href ="'.base_url().'Admin/destination_categories";';
        echo '</script>';    
    }




###########DESTINATIONS
    function destinations_spesifik(){
       $url = $this->API.'destinations';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];

    $url1 = $this->API.'destination-categories';
        $ch1 = curl_init($url1);
curl_setopt($ch1, CURLOPT_HTTPGET, true);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$response_json1 = curl_exec($ch1);
curl_close($ch1);
$response1 = json_decode($response_json1, true);
    $data['data_kategori']=$response1['data'];
    


        $data['kategori']=$this->input->post('data_kategori');

        if ($this->input->post('data_kategori')=='ALL'){
             redirect('Admin/destinations');
        }
        else{


        $this->load->view('admin/admin_destinations_spesifik',$data);
    }
}


        function destinations()
    {
    $url = $this->API.'destinations';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];

    $url1 = $this->API.'destination-categories';
        $ch1 = curl_init($url1);
curl_setopt($ch1, CURLOPT_HTTPGET, true);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$response_json1 = curl_exec($ch1);
curl_close($ch1);
$response1 = json_decode($response_json1, true);
    $data['data_kategori']=$response1['data'];
    $this->load->view('admin/admin_destinations',$data);

    }

function tambah_destinations()
    {
        $url = $this->API.'destination-categories';
        $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response_json = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response_json, true);
    $data['data']=$response['data'];
    
        $this->load->view('admin/tambah_destinations',$data);
    }


    function post_destinations()
    {
        
        $this->load->library('upload');
        $config['upload_path'] = './images/destinations/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
 
            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/destinations/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/destinations/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
                        $url = $this->API.'destinations';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $title=$this->input->post('title');
        $destination_id=$this->input->post('destination_id');
        $description=$this->input->post('description');
        $address=$this->input->post('address');
        $opening_hours=$this->input->post('opening_hours');
        $closing_hours=$this->input->post('closing_hours');
        $opening_minute=$this->input->post('opening_minute');
        $closing_minute=$this->input->post('closing_minute');
        
        $latitude=$this->input->post('latitude');
        $longitude=$this->input->post('longitude');
        
        $data = array(
        'destination_category_id' => $destination_id,
        'title' => $title,
        'description' => $description,
        'address' => $address,
        'photo' => $gambar1,
        'opening_hours' => $opening_hours.':'.$opening_minute.':00',
        'closing_hours' => $closing_hours.':'.$closing_minute.':00',
        'latitude' => $latitude,
        'longitude' => $longitude
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
        
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Destinasi Wisata");'; 
        echo 'document.location.href ="'.base_url().'Admin/destinations";';
        echo '</script>';   

                }

                else{
echo '<script type="text/javascript">'; 
echo 'alert("Gagal Menambah Destinasi Wisata");'; 
        echo 'document.location.href ="'.base_url().'Admin/destinations";';
        echo '</script>';   
        }
    }

    function delete_destinations($id)
    {
   $url = $this->API.'destinations/'.$id;
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
        redirect('Admin/destinations');

    }

    function edit_destinations($id){
        $json = json_decode($this->curl->simple_get($this->API.'destinations/'.$id));
        $json1 = json_decode($this->curl->simple_get($this->API.'destination-categories'));
         $data['data']=$json;
         $data['data_destination_category']=$json1;
        $this->load->view('admin/edit_destinations',$data);
    }

        function put_destinations($id)
    {

        if (empty($_FILES['picture']['name'])){
            $gambar1=$this->input->post('temp_picture');

        
        }
        else{
           
        $this->load->library('upload');
        $config['upload_path'] = './images/destinations/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
        

            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/destinations/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/destinations/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
               
            }
        }
       $destination_id=$this->input->post('destination_id');
   $title=$this->input->post('title');
        
        $description=$this->input->post('description');
        $address=$this->input->post('address');
        $opening_hours=$this->input->post('opening_hours');
        $closing_hours=$this->input->post('closing_hours');
        $opening_minute=$this->input->post('opening_minute');
        $closing_minute=$this->input->post('closing_minute');
        
        $latitude=$this->input->post('latitude');
        $longitude=$this->input->post('longitude');
        $created=$this->input->post('created_at');
        $updated=date('Y-m-d H:i:s');


        $data = array(
        'destination_category_id' => $destination_id,
        'title' => $title,
        'description' => $description,
        'address' => $address,
        'photo' => $gambar1,
        'opening_hours' => $opening_hours.':'.$opening_minute.':00',
        'closing_hours' => $closing_hours.':'.$closing_minute.':00',
        'latitude' => $latitude,
        'longitude' => $longitude,
        'created_at'=>$created,
        'updated_at'=>$updated

        
        );
     
        
        
        $url = $this->API.'destinations/'.$id;
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

        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Mengedit Destinasi Wisata");'; 
        echo 'document.location.href ="'.base_url().'Admin/destinations";';
        echo '</script>';      
    }

##########creative-economy-categories
        function creative_economies_categories()
    {
$url = $this->API.'creative-economy-categories';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];
    $this->load->view('admin/admin_creative_economies_categories',$data);

    }

function tambah_creative_economies_categories()
    {
        $this->load->view('admin/tambah_creative_economies_categories');
    }


    function post_creative_economies_categories()
    {
        
        $this->load->library('upload');
        $config['upload_path'] = './images/creative_economies_categories/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
 
            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/creative_economies_categories/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/creative_economies_categories/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
                        $url = $this->API.'creative-economy-categories';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $title=$this->input->post('title');
        $order=$this->input->post('order');

        $data = array(
        'title' => $title,
        'icon' => $gambar1,
        'order' => $order
        
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
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Kategori Ekonomi Kreatif");'; 
        echo 'document.location.href ="'.base_url().'Admin/creative_economies_categories";';
        echo '</script>';   
                }

                else{
                 echo '<script type="text/javascript">'; 
echo 'alert("Gagal Menambah Kategori Ekonomi Kreatif");'; 
        echo 'document.location.href ="'.base_url().'Admin/creative_economies_categories";';
        echo '</script>';       

        }
    }

    function delete_creative_economies_categories($id)
    {
   $url = $this->API.'creative-economy-categories/'.$id;
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
        redirect('Admin/creative_economies_categories');

    }

    function edit_creative_economies_categories($id){
        $json = json_decode($this->curl->simple_get($this->API.'creative-economy-categories/'.$id));
         $data['data']=$json;
    
        $this->load->view('admin/edit_creative_economies_categories',$data);
    }

        function put_creative_economies_categories($id)
    {

        if (empty($_FILES['picture']['name'])){
            $gambar1=$this->input->post('temp_picture');

        
        }
        else{
           
        $this->load->library('upload');
        $config['upload_path'] = './images/creative_economies_categories/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
        

            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/creative_economies_categories/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/creative_economies_categories/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
               
            }
        }
       

        $title=$this->input->post('title');
        $order=$this->input->post('order');
        $created=$this->input->post('created_at');
        
        $updated=date('Y-m-d H:i:s');

        $data = array(
        'title' => $title,
        'icon' => $gambar1,
        'order' => $order,
        'created_at'=>$created,
        'updated_at'=>$updated

        );

        $url = $this->API.'creative-economy-categories/'.$id;
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
echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Megedit Kategori Ekonomi Kreatif");'; 
        echo 'document.location.href ="'.base_url().'Admin/creative_economies_categories";';
        echo '</script>';   
    }


###########creative_economies
    function creative_economies_spesifik(){
       $url = $this->API.'creative-economies';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];

    $url1 = $this->API.'creative-economy-categories';
        $ch1 = curl_init($url1);
curl_setopt($ch1, CURLOPT_HTTPGET, true);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$response_json1 = curl_exec($ch1);
curl_close($ch1);
$response1 = json_decode($response_json1, true);
    $data['data_kategori']=$response1['data'];
    


        $data['kategori']=$this->input->post('data_kategori');

        if ($this->input->post('data_kategori')=='ALL'){
             redirect('Admin/creative_economies');
        }
        else{


        $this->load->view('admin/admin_creative_economies_spesifik',$data);
    }
}


        function creative_economies()
    {
    $url = $this->API.'creative-economies';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];

    $url1 = $this->API.'creative-economy-categories';
        $ch1 = curl_init($url1);
curl_setopt($ch1, CURLOPT_HTTPGET, true);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$response_json1 = curl_exec($ch1);
curl_close($ch1);
$response1 = json_decode($response_json1, true);
    $data['data_kategori']=$response1['data'];
    $this->load->view('admin/admin_creative_economies',$data);

    }

function tambah_creative_economies()
    {
        $url = $this->API.'creative-economy-categories';
        $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response_json = curl_exec($ch);
    curl_close($ch);
    $response = json_decode($response_json, true);
    $data['data']=$response['data'];
    
        $this->load->view('admin/tambah_creative_economies',$data);
    }


    function post_creative_economies()
    {
        
        $this->load->library('upload');
        $config['upload_path'] = './images/creative_economies/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
 
            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/creative_economies/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/creative_economies/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
                        $url = $this->API.'creative-economies';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $title=$this->input->post('title');
        $economies_id=$this->input->post('economies_id');
        $description=$this->input->post('description');
        $address=$this->input->post('address');
        $contact_person=$this->input->post('contact_person');
        $contact_number=$this->input->post('contact_number');
        
        $latitude=$this->input->post('latitude');
        $longitude=$this->input->post('longitude');
        
        $data = array(
        'creative_economy_category_id' => $economies_id,
        'title' => $title,
        'description' => $description,
        'address' => $address,
        'photo' => $gambar1,
        'contact_person' => $contact_person,
        'contact_number' => $contact_number,
        'latitude' => $latitude,
        'longitude' => $longitude
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
echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Anggota Ekonomi Kreatif");'; 
        echo 'document.location.href ="'.base_url().'Admin/creative_economies";';
        echo '</script>';   
                }

                else{
                 echo '<script type="text/javascript">'; 
echo 'alert("Gagal Menambah Anggota Ekonomi Kreatif");'; 
        echo 'document.location.href ="'.base_url().'Admin/creative_economies";';
        echo '</script>';       

        }
    }

    function delete_creative_economies($id)
    {
   $url = $this->API.'creative-economies/'.$id;
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
        redirect('Admin/creative_economies');

    }

    function edit_creative_economies($id){
        $json = json_decode($this->curl->simple_get($this->API.'creative-economies/'.$id));
        $json1 = json_decode($this->curl->simple_get($this->API.'creative-economy-categories'));
         $data['data']=$json;
         $data['data_economy_category']=$json1;
        $this->load->view('admin/edit_creative_economies',$data);
    }

        function put_creative_economies($id)
    {

        if (empty($_FILES['picture']['name'])){
            $gambar1=$this->input->post('temp_picture');

        
        }
        else{
           
        $this->load->library('upload');
        $config['upload_path'] = './images/creative_economies/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; 
        $this->upload->initialize($config);
        

            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./images/creative_economies/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '50%';
                $config['new_image']= './images/creative_economies/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $gambar1=$gbr['file_name'];
                
               
            }
        }
       $economies_id=$this->input->post('economies_id');
   $title=$this->input->post('title');
        
        $description=$this->input->post('description');
        $address=$this->input->post('address');
        $contact_person=$this->input->post('contact_person');
        $contact_number=$this->input->post('contact_number');
        
        $latitude=$this->input->post('latitude');
        $longitude=$this->input->post('longitude');
        $created=$this->input->post('created_at');
        $updated=date('Y-m-d H:i:s');

        
        $data = array(
        'creative_economy_category_id' => $economies_id,
        'title' => $title,
        'description' => $description,
        'address' => $address,
        'photo' => $gambar1,
        'contact_person' => $contact_person,
        'contact_number' => $contact_number,
        'latitude' => $latitude,
        'longitude' => $longitude,
        'created_at'=>$created,
        'updated_at'=>$updated

        
        );
     
        
        
        $url = $this->API.'creative-economies/'.$id;
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

        
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Mengedit Anggota Ekonomi Kreatif");'; 
        echo 'document.location.href ="'.base_url().'Admin/creative_economies";';
        echo '</script>';    
    }




##########PROFILES
        function profile()
    {
$url = $this->API.'profiles';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];
    $this->load->view('admin/admin_profile',$data);

    }

function tambah_profile()
    {
        $this->load->view('admin/tambah_profile');
    }


    function post_profile()
    {
        

        $title=$this->input->post('title');
        $order=$this->input->post('order');
        $content=$this->input->post('content');

        $data = array(
        'title' => $title,
        'content' => $content,
        'order' => $order
        
        );
        $url = $this->API.'profiles';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;

        
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
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Pofil");'; 
        echo 'document.location.href ="'.base_url().'Admin/profile";';
        echo '</script>';    

    }

    function delete_profile($id)
    {
   $url = $this->API.'profiles/'.$id;
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
        redirect('Admin/profile');

    }

    function edit_profile($id){
        $json = json_decode($this->curl->simple_get($this->API.'profiles/'.$id));
         $data['data']=$json;
    
        $this->load->view('admin/edit_profile',$data);
    }

        function put_profile($id)
    {

        $created=$this->input->post('created_at');
        $updated=date('Y-m-d H:i:s');


        
        $title=$this->input->post('title');
        $order=$this->input->post('order');
        $content=$this->input->post('content');

        $data = array(
        'title' => $title,
        'content' => $content,
        'order' => $order,
        'created_at'=>$created,
        'updated_at'=>$updated
        
        );
        $url = $this->API.'profiles/'.$id;
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
        // print_r($response);
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Mengedit Pofil");'; 
        echo 'document.location.href ="'.base_url().'Admin/profile";';
        echo '</script>';        
    }



###########downloads
        function data_publik()
    {
$url = $this->API.'downloads';
        $ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_json = curl_exec($ch);
curl_close($ch);
$response = json_decode($response_json, true);
    $data['data']=$response['data'];
    $this->load->view('admin/admin_data_publik',$data);

    }

function tambah_data_publik()
    {
        $this->load->view('admin/tambah_data_publik');
    }


    function post_data_publik()
    {
        
        $this->load->library('upload');
        $config['upload_path'] = './data/data_publik/'; //path folder
        $config['allowed_types'] = 'doc|docx|pdf|xlsx|xls|csv'; //type yang dapat diakses bisa anda sesuaikan
        $this->upload->initialize($config);
 
            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['source_image']='./data/data_publik/'.$gbr['file_name'];
                
                $this->load->library('upload', $config);
                $gambar1=$gbr['file_name'];
                
                        $url = $this->API.'downloads';
        $ch = curl_init($url);
        $authorization="Authorization: Bearer ".$this->token;


        $title=$this->input->post('title');
        $description=$this->input->post('description');
        $url=base_url().'data/data_publik/'.$gbr['file_name'];

        $data = array(
        'title' => $title,
        'description' => $description,
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

        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Menambah Data Publik");'; 
        echo 'document.location.href ="'.base_url().'Admin/data_publik";';
        echo '</script>';
                
                }

                else{
                
        echo '<script type="text/javascript">'; 
echo 'alert("Gagal Menambah Data Publik");'; 
        echo 'document.location.href ="'.base_url().'Admin/data_publik";';
        echo '</script>';
        }
    }

    function delete_data_publik($id)
    {
   $url = $this->API.'downloads/'.$id;
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
        redirect('Admin/data_publik');

    }

    function edit_data_publik($id){
        $json = json_decode($this->curl->simple_get($this->API.'downloads/'.$id));
         $data['data']=$json;
    
        $this->load->view('admin/edit_data_publik',$data);
    }

        function put_data_publik($id)
    {

        if (empty($_FILES['picture']['name'])){
            $gambar1=$this->input->post('temp_picture');
            $url=$this->input->post('url');

        
        }
        else{
           
         $this->load->library('upload');
        $config['upload_path'] = './data/data_publik/'; //path folder
        $config['allowed_types'] = 'doc|docx|pdf|xlsx|xls|csv'; //type yang dapat diakses bisa anda sesuaikan
        $this->upload->initialize($config);
        

            if ($this->upload->do_upload('picture') ){
                $gbr = $this->upload->data();
                //Compress Image
                $config['source_image']='./data/data_publik/'.$gbr['file_name'];
                
                $this->load->library('upload', $config);
                $gambar1=$gbr['file_name'];
                $url=base_url().'data/data_publik/'.$gbr['file_name'];
                
               
            }
        }
        $created=$this->input->post('created_at');
        $updated=date('Y-m-d H:i:s');

       $title=$this->input->post('title');
        $description=$this->input->post('description');
        

        $data = array(
        'title' => $title,
        'description' => $description,
        'picture' => $gambar1,
        'url' => $url,
        'created_at'=>$created,
        'updated_at'=>$updated
        
        
        );

        $url = $this->API.'downloads/'.$id;
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
        
        print_r($response);
        echo '<script type="text/javascript">'; 
echo 'alert("Berhasil Mengedit Kategori Destinasi");'; 
        echo 'document.location.href ="'.base_url().'Admin/data_publik";';
        echo '</script>';    
    }



     function index()
    {  

        redirect('/login');       
   
    }

    


   
}
