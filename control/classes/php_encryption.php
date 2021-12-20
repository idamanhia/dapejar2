<?php
class Encryption {
	
    private $output = false;
    private $encrypt_method = "AES-256-CBC";
    private $secret_key = 'fJAyrTdS9fMeNxIdYGURcKvXPuo5MyfRCldLsHsgATwIuGm0QrYrpmOv3mX2x8nmtJK2fwbIu7OiGzPQwV'; // You can change it whatever you want to secure the data
    private $secret_iv = 'F1C584F82F999C86DDF664413CEE3QutJbC1pmMtQYECXiktiuoG9Jrco1biGVgpdbyD0Ak';

    public  function enc($value){ 
        if(!$value){return false;}
		$key = hash('sha256', $this->secret_key);
    	$iv = substr(hash('sha256', $this->secret_iv), 0, 16);
        $output = openssl_encrypt($value, $this->encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
        return $output; 
    }

    public function dec($value){
        if(!$value){return false;}
		$key = hash('sha256', $this->secret_key);
    	$iv = substr(hash('sha256', $this->secret_iv), 0, 16);
        $output = openssl_decrypt(base64_decode($value), $this->encrypt_method, $key, 0, $iv);
        return $output;
    }
}


// $converter = new Encryption;
// echo "Encoded String: ".$converter->encode('some_random_string');
// echo "Decoded String: ".$converter->decode('TGx0RkRwNVcxeFpCTWhsbFI2ajFicWcyQXMwa1E4b01JY3lHaFNCMWJxdz0=');
?>