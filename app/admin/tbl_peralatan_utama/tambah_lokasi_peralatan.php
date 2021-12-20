<div class="card ">
	<div class="card-header text-white bg-success">Tambah Peralatan</div>
	<div class="card-body">
		<h4 class="card-title">Input Data Peralatan</h4><hr>
		<form class="form" id="frmTambahLokasi">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Nama Lokasi:</label>
                            <input type="text" id="lokasiNama" value="Dinas Sosial"  class="form-control"  name="fname-column" required="required">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Jalan Lokasi:</label>
                            <input type="text" id="lokasiJalan" value="Jalan Diponegoro" class="form-control"   >
                        </div>
                    </div>
                    
				<button class="btn btn-primary" class="btn btn-primary"> Tambahkan</button>
                <div class="pesan"></div>
        </form>
		<!--  -->
	</div>
	<hr>
	<a href="<?=$domain?>detail-peralatan/<?=$url[1]?>/" class="btn btn-warning" class="btn btn-primary"> Kembali</a>
</div>
<script type="text/javascript">
	$(document).ready(function($) {
		$("#frmTambahLokasi").submit(function(e) {
            e.preventDefault();
			var lokasiNama = $("#lokasiNama").val();
			var lokasiJalan = $("#lokasiJalan").val();
			
			var a = confirm("Apakah anda ingin menambahkan ini ??");
			if (a) {
				$.post('./route/', {
			            act: 'app/admin/tbl_peralatan_utama/__act',
			            cs:4,
						dataId:'<?=$url[1]?>',
						lokasiNama:lokasiNama,
						lokasiJalan:lokasiJalan,
			        }, function(data, textStatus, xhr) {
			            $(".pesan").html(data);
			            $("#frmTambahAlat").reset();
			    });
			}
	    });
	});
</script>