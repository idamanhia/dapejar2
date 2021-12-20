<?php

 // $data = $p_enc->enc("admin");
 

?>

<div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <!-- <img src="assets/images/favicon.svg" height="48" class='mb-4'> -->
                        <h3>Masuk</h3>
                        <p>Silahkan Masuk terlebih dahulu untuk memulai.</p>
                    </div>
                    <form method="POST" id="frmLogin" action="#">
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" id="username" required="required">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                                <a href="#" class='float-right' onclick="javacsript:alert('Silahkan di hubungi admin.');">
                                    <small>Forgot password?</small>
                                </a>
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password" required="required">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right">Submit</button>
                        </div>

                        
                    </form>
                </div>
                        <dir id="pesan"></dir>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#frmLogin").submit(function(e){
            e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();
            $.post("./route/",
                  {
                    act: "login/__act",
                    cs:0,
                    username:username,
                    password:password
                  },
                  function(data, status){
                    $("#pesan").html(data);
                    
            });
        });

    })
</script>
