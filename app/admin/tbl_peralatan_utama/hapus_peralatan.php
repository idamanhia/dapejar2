<?php

    $dataId = $p_enc->dec($url[1]);

    $dataAlat= $tb_umum->read_tb_umum_boll("DELETE FROM `tbl_peralatan_utama` WHERE id_peralatan = '$dataId' ");
    
    if ($dataAlat) {
		status_toast("Alat Berhasil di Hapus");
    	timeOut($number=3,$link=$domain.'peralatan-utama/');
	}else{
		status_toast("Alat Gagal di Hapus");
	}
?>
