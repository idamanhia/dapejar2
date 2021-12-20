<?php
	
	switch ($_POST['cs']) {
		case 0:
			$dataId = $p_enc->dec(_ts($_POST['dataId']));
			$tambahanAlamatIP = _ts($_POST['tambahanAlamatIP']);
			$tambahanFrekuensi = _ts($_POST['tambahanFrekuensi']);
			$tambahanLebarFrekuensi = _ts($_POST['tambahanLebarFrekuensi']);
			$tambahanNamaWifi = _ts($_POST['tambahanNamaWifi']);
			$tambahanPassWifi = _ts($_POST['tambahanPassWifi']);
			$tambahan= $tb_umum->read_tb_umum_boll("
				INSERT INTO `tbl_data_tambahan`(`id_data_tambahan`, `id_peralatan`, `alamat_ip`, `frekuensi`, `lebar_frekuensi`, `nama_wifi`, `password_wifi`) VALUES (NULL,'$dataId','$tambahanAlamatIP','$tambahanFrekuensi','$tambahanLebarFrekuensi','$tambahanNamaWifi','$tambahanPassWifi')
				");

			if ($tambahan) {
				status_toast("Detail Tambahan Berhasil di tambahkan");
			}else{
				status_toast("Detail Tambahan Gagal di tambahkan");
			}
			break;
		default:
			# code...
			break;
	}
 ?>