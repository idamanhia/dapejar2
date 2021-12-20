<?php

	
	$dataAlat= $tb_umum->read_tb_umum("SELECT * FROM `tbl_peralatan_utama` WHERE 1");

?>

<div class="card">
	<div class="card-body">
		<h4 class="card-title">Daftar Peralatan Utama</h4><hr>
		<a href="<?=$domain?>tambah-peralatan/" class="btn btn-info btn-sm"><span class="fa fa-plus"></span> Tambah</a>
		<div class="table-responsive">
			<table class="table table-striped" style="white-space: nowrap;">
			<thead>
				<th>No</th>
				<th>Nama Alat</th>
				<th>Tahun Pembelian</th>
				<th>Jenis Alat</th>
			</thead>
			<tbody>
				<?php 
				$no=1;
				foreach ($dataAlat as $key => $value) {
					?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$value['nama_alat']?></td>
						<td><?=date("Y",strtotime($value['tahun_pembelian']));?></td>
						<td>
							<a href="<?=$domain?>detail-peralatan/<?=$p_enc->enc($value['id_peralatan'])?>/" class="btn btn-success btn-sm">
								<span class="fa fa-list"></span> Detail
							</a>
							<a href="<?=$domain?>edit-peralatan/<?=$p_enc->enc($value['id_peralatan'])?>/" class="btn btn-warning btn-sm">
								<span class="fa fa-pencil"></span> 
							</a>
								<a href="<?=$domain?>hapus-peralatan/<?=$p_enc->enc($value['id_peralatan'])?>/" onclick="return confirm('Apakah anda ingin menghapus ini ??')" class="btn btn-danger btn-sm">
								<span class="fa fa-trash"></span> 
							</a>
								<a href="<?=$domain?>data-tambahan/<?=$p_enc->enc($value['id_peralatan'])?>/" class="btn btn-primary btn-sm">
								<span class="fa fa-plus"></span> Tambahan
							</a>
						</td>	
					</tr>
					<?php
				}
				?>
				
			</tbody>
		</table>
		</div>
		
		<p class="card-text"></p>
	</div>
</div>