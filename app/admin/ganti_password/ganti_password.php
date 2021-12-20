<div class="row">
	<div class="card ">
		<div class="card-header text-white bg-secondary">Password Baru </div>
		<div class="card-body">
			<br>
			<form id="frmGantiPass">
			<div class="row">
					
                    <div class="col-md-4">
                        <label>Password Lama:</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="password" id="passwordLama" class="form-control" required="required">
                    </div>
                    <div class="col-md-4">
                        <label>Password Baru:</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="password" id="passwordBaru" class="form-control" required="required">
                    </div>
                    <div class="col-md-4">
                        <label>Konfirmasi Password Baru:</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="password" id="passwordKonfBaru" class="form-control" required="required">
                    </div>
                </div>
                <div id="pesan"></div>
                <br>
                <a onclick="window.history.back();" class="btn btn-warning"><i data-feather="arrow-left" width="20"></i> Kembali</a>
                <button class="btn btn-primary"><i data-feather="save" width="20"></i> set password</button>
			</form>
            </div>
		</div>
	</div>
	
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#frmGantiPass").submit(function(e){
            e.preventDefault();
			var passwordLama = $("#passwordLama").val();
			var passwordBaru = $("#passwordBaru").val();
			var passwordKonfBaru = $("#passwordKonfBaru").val();
            $.post("./route/",
                  {
                    act: "app/admin/ganti_password/__ganti",
					passwordLama:passwordLama,
					passwordBaru:passwordBaru,
					passwordKonfBaru:passwordKonfBaru
                  },
                  function(data, status){
                    $("#pesan").html(data);
                    
            });
        });

    })
</script>