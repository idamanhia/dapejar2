<?php
	// $domain = "http://192.168.43.173/toko_baju/";
	$domain = "http://localhost/dapejar/";
	// $domain = "http://192.168.43.63/kiagizi/";
	$App = new App();
	// class
	$p_enc = new Encryption();
	
	
	//model
	$tb_umum = new tb_umum();

	
	if (isset($_SESSION['id_login'])) {
		$id_login = $_SESSION['id_user'];
		$username = $_SESSION['username'];
		$role = $_SESSION['role'];
	}
?>