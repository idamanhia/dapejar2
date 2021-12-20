<?php
	
	switch ($_POST['cs']) {
		case 0:
		$alatNama = _ts($_POST['alatNama']);
		$alatTahun = _ts($_POST['alatTahun']);
		$alatJenis = _ts($_POST['alatJenis']);
		$alatUsername = _ts($_POST['alatUsername']);
		$alatpassword = _ts($_POST['alatpassword']);
		$alatDeskripsi = _ts($_POST['alatDeskripsi']);

			$tambahAlat= $tb_umum->read_tb_umum_boll("
INSERT INTO `tbl_peralatan_utama`(`id_peralatan`, `nama_alat`, `tahun_pembelian`, `jenis_alat`, `username`, `password`, `spesifikasi`, `id_user_input`, `tanggal_input`) VALUES (NULL,'$alatNama','$alatTahun','$alatJenis','$alatUsername','$alatpassword','$alatDeskripsi','$username',CURRENT_TIMESTAMP())
				");
			if ($tambahAlat) {
				status_toast("Alat Berhasil di tambahkan");
			}else{
				status_toast("Alat Gagal di tambahkan");
			}
			break;
		
		case 1:
			$alatId = $p_enc->dec(_ts($_POST['alatId']));
			$alatNama = _ts($_POST['alatNama']);
			$alatTahun = _ts($_POST['alatTahun']);
			$alatJenis = _ts($_POST['alatJenis']);
			$alatUsername = _ts($_POST['alatUsername']);
			$alatpassword = _ts($_POST['alatpassword']);
			$alatDeskripsi = _ts($_POST['alatDeskripsi']);

			$editAlat= $tb_umum->read_tb_umum_boll("
UPDATE `tbl_peralatan_utama` SET `nama_alat`='$alatNama',`tahun_pembelian`='$alatTahun',`jenis_alat`='$alatJenis',`username`='$alatUsername',`password`='$alatpassword',`spesifikasi`='$alatDeskripsi' WHERE id_peralatan = '$alatId'
				");
			if ($editAlat) {
				status_toast("Alat Berhasil di Update");
			}else{
				status_toast("Alat Gagal di Update");
			}

			break;


		// Tambah Lokasi  
		case 4:

			$dataId = $p_enc->dec(_ts($_POST['dataId']));
			$lokasiNama = _ts($_POST['lokasiNama']);
			$lokasiJalan = _ts($_POST['lokasiJalan']);

			$tambahLokasi= $tb_umum->read_tb_umum_boll("
			INSERT INTO `tbl_lokasi_peralatan`(`id_lokasi`, `id_peralatan`, `nama_lokasi_peralatan`, `lokasi_jalan`,`tanggal_input`) VALUES (NULL,'$dataId','$lokasiNama','$lokasiJalan',CURRENT_DATE())");

			

			if ($tambahLokasi) {
				status_toast("Lokasi Alat Berhasil di Tambah");
			}else{
				status_toast("Lokasi Alat Gagal di Tambah");
			}
			break;
		default:
			# code...
			break;
	}
 ?>