<?php 
 	$dataId = $p_enc->dec($url[1]);
    $dataAlat= $tb_umum->read_tb_umum_no_loop("SELECT * FROM `tbl_peralatan_utama` WHERE id_peralatan = '$dataId' ");

    
?>

<div class="card ">
	<div class="card-header text-white bg-success">Data Tambahan Peralatan</div>
	<div class="card-body">
		<h4 class="card-title">Tambah Data Tambahan</h4><hr>
		<form class="form" id="frmTambahanData">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Alamat IP:</label>
                            <input type="text" id="tambahanAlamatIP" value="tambahanAlamatIP"  class="form-control" placeholder="Mis: Router" name="fname-column" required="required">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Frekuensi:</label>
                            <input type="number" id="tambahanFrekuensi" value="3.4" class="form-control"  placeholder="2.4" >
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Lebar Frekuensi:</label>
                            <input type="text" id="tambahanLebarFrekuensi" value="tambahanLebarFrekuensi" class="form-control"  placeholder="ROUTER" >
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Nama Wifi:</label>
                            <input type="text" id="tambahanNamaWifi" value="tambahanNamaWifi" class="form-control"  placeholder="ROUTER" >
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Password Wifi:</label>
                            <input type="text" id="tambahanPassWifi" value="tambahanPassWifi" class="form-control"  placeholder="ROUTER" >
                        </div>
                    </div>


                    <button class="btn btn-primary" class="btn btn-primary"> Simpan</button>
                </div>
                <div class="pesan"></div>
        </form>
		<!--  -->
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function($) {
		$("#frmTambahanData").submit(function(e) {
            e.preventDefault();
                var tambahanAlamatIP = $("#tambahanAlamatIP").val();
                var tambahanFrekuensi = $("#tambahanFrekuensi").val();
                var tambahanLebarFrekuensi = $("#tambahanLebarFrekuensi").val();
                var tambahanNamaWifi = $("#tambahanNamaWifi").val();
                var tambahanPassWifi = $("#tambahanPassWifi").val();

			var a = confirm("Apakah anda ingin menambahkan ini ??");
			if (a) {
				$.post('./route/', {
			            act: 'app/admin/tbl_data_tambahan/__act',
			            cs:0,
                        dataId:'<?=$url[1]?>',
                        tambahanAlamatIP:tambahanAlamatIP,
                        tambahanFrekuensi:tambahanFrekuensi,
                        tambahanLebarFrekuensi:tambahanLebarFrekuensi,
                        tambahanNamaWifi:tambahanNamaWifi,
                        tambahanPassWifi:tambahanPassWifi
			        }, function(data, textStatus, xhr) {
			            $(".pesan").html(data);
			            $("#frmTambahanData").reset();
			    });
			}
	    });
	});
</script>