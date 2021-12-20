<?php

// Framework Idaman

session_start();
error_reporting(0);

include("control/model.php");
$url = $App->parseURL($_GET['url']);
$assetLink =  $App->assetsLink();


if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	include("route/index.php");
}else{

	include("hf/header.php");

	if (!isset($_SESSION['username'])) {
		include("login/login.php");
	}else{
		
		
		switch ($_SESSION['role']) {
			case 0:include("app/admin/admin.php"); break;
			
		}
	}
	include("hf/footer.php");


}
?>