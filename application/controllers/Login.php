<?php
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
	    if(!empty($this->session->userdata('token')))
	    {
	 	redirect('/admin/events');		
	 }
    else{
	   $this->load->view('admin/admin_login');
	}


	}

	function auth(){
		$username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
	

$url = 'https://sampang-tourism.herokuapp.com/authentication';
$ch = curl_init($url);
$data = array(
'username' =>$username,
'password' =>$password,
'strategy' =>'local',

);

$payload = json_encode($data);
 
// Prepare new cURL resource
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
 
// Set HTTP Header for POST request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);
 
// Submit the POST request
$result = curl_exec($ch);
 
// Close cURL session handle
curl_close($ch);
$json = json_decode($result);
if ($json->accessToken != "") {
	$this->session->set_userdata('token',$json->accessToken);
	

echo '<script type="text/javascript">'; 
echo 'alert("Login Berhasil");'; 
echo 'document.location.href ="'.base_url().'Admin/dashboard";';
echo '</script>';	

			}	
else{

echo '<script type="text/javascript">'; 
echo 'alert("Login Gagal");'; 
echo 'document.location.href ="'.base_url().'Login";';
echo '</script>';	

}

}

	function logout(){

		$this->session->sess_destroy();
				echo '<script type="text/javascript">'; 
echo 'alert("Logout");'; 
echo 'document.location.href ="'.base_url().'Login";';
echo '</script>';	
	}	

}
?>

	