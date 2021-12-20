<?php

if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	
	$act = $_POST['act'];
	switch ($act) {
		case $act: 
		if (file_exists($act.".php")) {
			include($act.".php"); break;
		}else{
			status("danger","Terjadi Kesalahan saat mengambil Data");
		}
	break;

		default: echo "404 NOT FOUND"; break;
	}

} 
?>