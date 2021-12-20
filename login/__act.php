<?php

switch ($_POST['cs']) {
	case 0:
		$username = _ts($_POST['username']);
		$password = $p_enc->enc(_ts($_POST['password']));

		if(empty($username)){ status_toast("username tidak boleh kosong");exit();}
		if(empty($password)){ status_toast("password tidak boleh kosong");exit();}

		$cek= $tb_umum->read_tb_umum_no_loop("SELECT * FROM `tbl_user` WHERE username='$username' AND password='$password'");



		if (empty($cek)) {
		 	status_toast("username dan password tidak di temukan.");
		 }else{
			// $id_login = $cek['id_tbl_login'];
			$username = $cek['username'];
			$id_login = $cek['id_user'];


			$_SESSION['username'] = $username;
			$_SESSION['id_user'] = $id_login;
			// $_SESSION['role'] = $role;

		 	status_toast("Berhasil".$username.$id_login);
		 	timeOut($number=3,$link=$domain);

		 }
		
		break;
	
	default:
		status_toast("Terjadi Kesalahan.");
		break;
}
?>