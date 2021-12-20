<?php

    $dataId = $p_enc->dec($url[1]);
    $dataAlat= $tb_umum->read_tb_umum("SELECT * FROM `tbl_peralatan_utama` WHERE id_peralatan = '$dataId' ");
    $riwayatAlat= $tb_umum->read_tb_umum("SELECT * FROM `tbl_rekam_jejak` WHERE id_peralatan = '$dataId' ");
    $lokasiAlat= $tb_umum->read_tb_umum("SELECT * FROM `tbl_lokasi_peralatan` WHERE id_peralatan = '$dataId' ORDER by id_lokasi DESC LIMIT 5 ");
?>

	<div class="card ">
		<div class="card-header text-white bg-primary">Detail Peralatan</div>
		<div class="card-body">
			<h4 class="card-title mt-3">Detail</h4><hr>
			<div class="table-responsive">
				<table class="table table-sm">
					<tbody>
						<tr><td>Nama:</td><td><?=$dataAlat[0]['nama_alat']?></td></tr>
						<tr><td>Tahun Pembelian:</td><td><?=date("Y",strtotime($dataAlat[0]['tahun_pembelian']))?></td></tr>
						<tr><td>Jenis Alat:</td><td><?=$dataAlat[0]['jenis_alat']?></td></tr>
						<tr><td>Username :</td><td><?=$dataAlat[0]['username']?></td></tr>
						<tr><td>Password:</td><td><?=$dataAlat[0]['password']?></td></tr>
						<tr><td>Spesifikasi:</td><td><?=$dataAlat[0]['spesifikasi']?></td></tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="card ">
		<div class="card-header text-white bg-info">Lokasi Alat</div>
		<div class="card-body">
			<h4 class="card-title mt-3">Lokasi</h4><hr>
			<a href="<?=$domain?>tambah-lokasi-peralatan/<?=$url[1]?>/" class="btn btn-info btn-sm"><span class="fa fa-geo"></span> Tambah Lokasi</a>
			<div class="table-responsive">
				<table class="table table-sm">
					<tbody>
						<?php 
						if (empty($lokasiAlat)) {
							echo "Data Belum Ada.";
						}else{
							foreach ($lokasiAlat as $key => $value) {
								?>
									<tr>
											<td>Nama Lokasi : <?=$value['nama_lokasi_peralatan']?></td>
											<td>Lokasi Jalan : <?=$value['lokasi_jalan']?></td>
											<td>Tanggal Input : <?=$value['tanggal_input']?></td>
									</tr>
								<?php 
							}
						}
						?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="card ">
		<div class="card-header text-white bg-warning">Riwayat Lokasi Alat</div>
		<div class="card-body">
			<h4 class="card-title mt-3">Detail</h4><hr>
			<div class="table-responsive">
				<table class="table table-sm">
					<tbody>
						<?php 
						if (empty($riwayatAlat)) {
							echo "Data Belum Ada.";
						}else{
							foreach ($riwayatAlat as $key => $value) {
								?>
									<tr><td>Nama:</td><td><?=$dataAlat[0]['nama_alat']?></td></tr>
									<tr><td>Tahun Pembelian:</td><td><?=date("Y",strtotime($dataAlat[0]['tahun_pembelian']))?></td></tr>
									<tr><td>Jenis Alat:</td><td><?=$dataAlat[0]['jenis_alat']?></td></tr>
									<tr><td>Username :</td><td><?=$dataAlat[0]['username']?></td></tr>
									<tr><td>Password:</td><td><?=$dataAlat[0]['password']?></td></tr>
									<tr><td>Spesifikasi:</td><td><?=$dataAlat[0]['spesifikasi']?></td></tr>
								<?php 
							}
						}
						?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>