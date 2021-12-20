		<div id="app">
			<?php include("sidebar.php"); ?>
			<div id="main">
				<?php include("navbarAtas.php"); ?>
				<div class="main-content container-fluid">
				    <div class="page-title">
				        <h3><?php echo ucwords(str_replace('-', ' ', $url[0])); ?></h3>
				        <p class="text-subtitle text-muted">Silahkan pilih fitur yang ini gunakan.</p>
				    </div>
				    <section class="section">
				    	<?php 

							switch ($url[0]) {
								// Peralatan 

								case 'peralatan-utama': include("app/admin/tbl_peralatan_utama/peralatan_utama.php");break;
								case 'tambah-peralatan': include("app/admin/tbl_peralatan_utama/tambah_peralatan.php");break;
								case 'edit-peralatan': include("app/admin/tbl_peralatan_utama/edit_peralatan.php");break;
								case 'hapus-peralatan': include("app/admin/tbl_peralatan_utama/hapus_peralatan.php");break;
								
								// Data Tambahan
								case 'data-tambahan': include("app/admin/tbl_data_tambahan/data_tambahan.php");break;
								case 'detail-peralatan': include("app/admin/tbl_peralatan_utama/detail_peralatan.php");break;
								case 'tambah-lokasi-peralatan': include("app/admin/tbl_peralatan_utama/tambah_lokasi_peralatan.php");break;
								
								case 'logout':session_destroy(); timeOut(); break;


								default: break;
							}
						?>
				    </section>
				</div>
			</div>
	</div>


