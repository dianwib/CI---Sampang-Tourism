function post_slides()
    {
        $authorization="Authorization: Bearer ".$this->token;
        $url_gambar= $this->API.'upload-slide-picture';
        $ch = curl_init($url_gambar);
        $tmpfile = $_FILES['picture']['tmp_name'];
$filename = basename($_FILES['picture']['name']);
$data = array(
    'x-file' => "@".$filename, 'type' => $_FILES['picture']['type']
);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
         'Content-Type: multipart/form-data',$authorization));
        // Submit the POST request
        $result = curl_exec($ch);
 
        // Close cURL session handle
        
        curl_close($ch); 
        echo($result);
        echo($payload);

        $url = $this->API.'slides';
        $ch = curl_init($url);