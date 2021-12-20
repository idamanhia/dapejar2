<div class="card ">
	<div class="card-header text-white bg-success">Tambah Peralatan</div>
	<div class="card-body">
		<h4 class="card-title">Input Data Peralatan</h4><hr>
		<form class="form" id="frmTambahAlat">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Nama Alat:</label>
                            <input type="text" id="alatNama" value="alatNama"  class="form-control" placeholder="Mis: Router" name="fname-column" required="required">
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Tahun Pembelian:</label>
                            <input type="date" id="alatTahun" value="2021-01-01" class="form-control"  placeholder="mis: 2021" >
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Jenis Alat:</label>
                            <input type="text" id="alatJenis" value="alatJenis" class="form-control"  placeholder="ROUTER" >
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Username Alat:</label>
                            <input type="text" id="alatUsername" value="alatUsername" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Password Alat:</label>
                            <input type="text" id="alatpassword" value="alatpassword" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12 col-12">
                        <div class="form-group">
                            <label for="first-name-column">Deskripsi Alat:</label>
                            <textarea class="form-control" id="alatDeskripsi" >alatDeskripsi</textarea>
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
		$("#frmTambahAlat").submit(function(e) {
            e.preventDefault();
			var alatNama = $("#alatNama").val();
			var alatTahun = $("#alatTahun").val();
			var alatJenis = $("#alatJenis").val();
			var alatUsername = $("#alatUsername").val();
			var alatpassword = $("#alatpassword").val();
			var alatDeskripsi = $("#alatDeskripsi").val();
			var a = confirm("Apakah anda ingin menambahkan ini ??");
			if (a) {
				$.post('./route/', {
			            act: 'app/admin/tbl_peralatan_utama/__act',
			            cs:0,
						alatNama:alatNama,
						alatTahun:alatTahun,
						alatJenis:alatJenis,
						alatUsername:alatUsername,
						alatpassword:alatpassword,
						alatDeskripsi:alatDeskripsi,
			        }, function(data, textStatus, xhr) {
			            $(".pesan").html(data);
			            $("#frmTambahAlat").reset();
			    });
			}
	    });
	});
</script>