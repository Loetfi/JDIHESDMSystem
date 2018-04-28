<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PPID-ESDM | Login</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/client'); ?>/img/logo.gif">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/bootstrap/css/bootstrap.css">
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>resources/myResources/font-awesome.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/myResources/ionicons.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/dist/css/AdminLTE.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>resources/plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition login-page">
        <div class="login-box" style="min-width: 600px; margin: 10px auto 7%">
            <div class="login-logo" style="margin-bottom: 10px">
                <table width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><img src="<?php echo base_url('resources/myResources/img/logoESDM.png'); ?>" style="max-width: 145px;"></td>
                        <td>
                            <a href="<?php echo base_url(); ?>"><b>Sistem Informasi PPID Online<br>(SI<span style="color: red">PPID</span>OL)</b></a><br>
                            Kementerian ESDM
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="login-box-body box">
                <p class="login-box-msg">User/Guest Login</p>
                <form id="loginAdmin" method="post">
                    <div class="form-group has-feedback">
                        <input type="username" class="form-control" id="Username" placeholder="Username">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" id="Password" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <a href="<?php echo site_url('User_account/registrer'); ?>" class="text-center">Register</a>
                
                <div class="overlay" style="display: none;">
                    <i class="fa fa-refresh fa-spin"></i>
                </div>
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>resources/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url(); ?>resources/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>resources/plugins/iCheck/icheck.min.js"></script>
        <script>
            function sukses(url) {
                window.location = url;
            }
            $(function () {
                $("#loginAdmin").submit(function(){
                    username = $('#Username').val();
                    password = $('#Password').val();
                    
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo site_url('user_account/loginAct'); ?>',
                        data: {
                            username: username,
                            password: password,
                        },
                        beforeSend: function() {
                            $('.overlay .fa').addClass('fa-spin');
                            $('.overlay').css('display', 'block');
                        },
                        success: function(msg) {
                            if (msg == "sukses") {
                                $('.overlay .fa').removeClass('fa-refresh');
                                $('.overlay .fa').removeClass('fa-spin');
                                $('.overlay .fa').removeClass('fa-close');
                                $('.overlay .fa').addClass('fa-check');
                                setTimeout('sukses("<?php echo site_url('permohonan'); ?>")', 500);
                            }
                            else if (msg == "nonAktif"){
                                alert('Username atau Password masih belum aktif. Silahkan cek email Anda');
                                $('.overlay .fa').removeClass('fa-refresh');
                                $('.overlay .fa').removeClass('fa-spin');
                                $('.overlay .fa').removeClass('fa-check');
                                $('.overlay .fa').addClass('fa-close');
                                setTimeout(function(){
                                    $('.overlay .fa').removeClass('fa-check');
                                    $('.overlay .fa').removeClass('fa-close');
                                    $('.overlay .fa').addClass('fa-spin');
                                    $('.overlay .fa').addClass('fa-refresh');
                                    $('.overlay').css('display', 'none');
                                }, 1500);
                            }
                            else {
                                alert('Username atau Password salah');
                                $('.overlay .fa').removeClass('fa-refresh');
                                $('.overlay .fa').removeClass('fa-spin');
                                $('.overlay .fa').removeClass('fa-check');
                                $('.overlay .fa').addClass('fa-close');
                                setTimeout(function(){
                                    $('.overlay .fa').removeClass('fa-check');
                                    $('.overlay .fa').removeClass('fa-close');
                                    $('.overlay .fa').addClass('fa-spin');
                                    $('.overlay .fa').addClass('fa-refresh');
                                    $('.overlay').css('display', 'none');
                                }, 1500);
                                // alert('gagal');
                            }
                        },
                        error: function() {
                            alert('Some Error. Please Try Again');
                            $('.overlay .fa').removeClass('fa-check');
                                    $('.overlay .fa').removeClass('fa-close');
                                    $('.overlay .fa').addClass('fa-spin');
                                    $('.overlay .fa').addClass('fa-refresh');
                                    $('.overlay').css('display', 'none');
                        }
                    });
                    return false;
                    
                });
            });
        </script>
    </body>
</html>
