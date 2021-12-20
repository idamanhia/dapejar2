<?php 
switch ($_POST['act']) {
	case 'app/admin/ganti_password/__ganti':
	
		$passwordLama = $p_enc->dec(_ts($_POST['passwordLama']));
		$passwordBaru = $p_enc->enc(_ts($_POST['passwordBaru']));
		$passwordKonfBaru = $p_enc->enc(_ts($_POST['passwordKonfBaru']));


		$cekPassLama = $tb_umum->read_tb_umum_boll("SELECT password FROM `tbl_login` WHERE id_tbl_login = '$id_login' AND password = '$passwordLama'");

		if ($passwordLama) {status("danger","Maaf Password Lama tidak sesuai");exit; }
		if ($passwordBaru != $passwordKonfBaru) {status("warning","Konfirmasi Password Baru tidak sesuai");exit;}
		
		$gantiPass = $tb_umum->read_tb_umum_boll("UPDATE `tbl_login` SET `password` = '$passwordBaru' WHERE `tbl_login`.`id_tbl_login` = '$id_login';");

		if ($gantiPass) {status("success","Password Berhasil di ganti.");session_destroy();
			timeOut(); }else{
			status("info","Password Gagal di ganti.");
		}

		break;
	
	default:
		# code...
		break;
}
?>