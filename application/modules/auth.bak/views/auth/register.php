<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="<?php echo base_url('assets/client'); ?>/img/logo.gif">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PPID-ESDM | Registrasi</title>
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
        <style>
            input.ui-state-error, textarea.ui-state-error{ 
                border-color: #b94a48;
                background-color: #f7e3e3;
            }
            #formRegistrasi label.ui-state-error{ 
                display: block;
                color: #b94a48;
            }
        </style>
    </head>
    <body class="hold-transition register-page">
        <div class="register-box" style="min-width: 600px; margin: 10px auto 7%">
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
            </div><!-- /.login-logo -->

            <div class="register-box-body">
                
                <?php if ($this->session->flashdata('itemFlashData') == 'Sukses'){ ?>
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                    <h4>    <i class="icon fa fa-check"></i> Registrasi Sukses!</h4>
                    Silahkan cek email anda untuk melakukan aktivasi.
                </div>
                <?php } else if ($this->session->flashdata('itemFlashData') == 'GagalUsernameEmail'){ ?>
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                    <h4><i class="icon fa fa-ban"></i> Registrasi Gagal!</h4>
                    Username/Email sudah dipergunakan
                </div>
                <?php } else if ($this->session->flashdata('itemFlashData') == 'Gagal'){ ?>
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                    <h4><i class="icon fa fa-ban"></i> Registrasi Gagal!</h4>
                    Silahkan Registrasi Ulang
                </div>
                <?php } ?>
                
                <p class="login-box-msg">Registrasi</p>
                <?php // echo validation_errors(); ?>
                <form action="<?php echo site_url('auth/register'); ?>" method="post" id="formRegistrasi" enctype="multipart/form-data">
                    <!-- nama -->
                    <div id="namaDiv" class="form-group has-feedback">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="<?php echo set_value('nama'); ?>" >
                        <label class="ui-state-error"><?php echo form_error('nama'); ?></label>
                    </div>
                    
                    <!-- identitas -->
                    <div id="identitasDiv" class="form-group has-feedback">
                        <select name="type_identitas" class="form-control" id="type_identitas" style="float: left; width: 25%; ">
                            <option value="KTP">KTP</option>
                            <option value="SIM">SIM</option>
                            <option value="NPWP">NPWP</option>
                        </select>
                        <input type="text" name="no_identitas" class="form-control" id="no_identitas" placeholder="No Identitas" style="width: 75%;" value="<?php echo set_value('no_identitas'); ?>">
                        <label class="ui-state-error"><?php echo form_error('no_identitas'); ?></label>
                    </div>
                    
                    <!-- gambar identitas -->
                    <div class="form-group has-feedback">
                        <input type="file" name="userfile" class="form-control" placeholder="Foto Identitas" style="padding: 0; " >
                        <label class="ui-state-error"><?php echo form_error('userfile'); ?></label>
                    </div>
                    
                    <!-- alamat -->
                    <div id="alamatDiv" class="form-group has-feedback">
                        <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat" ><?php echo set_value('alamat'); ?></textarea>
                        <label class="ui-state-error"><?php echo form_error('alamat'); ?></label>
                    </div>

                    <!-- tlp -->
                    <div id="tlpDiv" class="form-group has-feedback">
                        <input type="text" name="tlp" class="form-control" id="tlp" placeholder="TLP/HP" value="<?php echo set_value('tlp'); ?>" pattern="[0-9]+" >
                        Hanya angka
                        <label class="ui-state-error"><?php echo form_error('tlp'); ?></label>
                    </div>
                    
                    <!-- email -->
                    <div id="emailDiv" class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>" >
                        <span class="glyphicon form-control-feedback" style="top: 0;"></span>
                        <input type="hidden" id="statusEmail" value="salah">
                        <label class="ui-state-error"><?php echo form_error('email'); ?></label>
                    </div>
                    
                    <!-- pekerjaan -->
                    <div id="pekerjaanDiv" class="form-group has-feedback">
                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo set_value('pekerjaan'); ?>" >
                        <span class="glyphicon form-control-feedback"></span>
                        <label class="ui-state-error"><?php echo form_error('pekerjaan'); ?></label>
                    </div>
                    
                    <!-- Attch file KTP -->
                    <!-- div class="form-group has-feedback">
                        <input type="file" placeholder="file scan identitas" >
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div -->
                    
                    <!-- username -->
                    <div id="usernameDiv" class="form-group has-feedback">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?php echo set_value('username'); ?>" >
                        <span class="glyphicon form-control-feedback"></span>
                        <input type="hidden" id="statusUsername" value="salah">
                        <label class="ui-state-error"><?php echo form_error('username'); ?></label>
                    </div>
                    
                    <!-- password -->
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="<?php echo set_value('password'); ?>" minlength="6" >
                        <span class="glyphicon glyphicon-lock form-control-feedback" style="top: 0;"></span>
                        Min 6 karakter
                        <label class="ui-state-error"><?php echo form_error('password'); ?></label>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" name="repassword" class="form-control" id="repassword" placeholder="Retype password" value="<?php echo set_value('repassword'); ?>" minlength="6" >
                        <span class="glyphicon glyphicon-lock form-control-feedback" style="top: 0;"></span>
                        Min 6 karakter
                        <label class="ui-state-error"><?php echo form_error('repassword'); ?></label>
                    </div>
                    
                    <!-- captcha -->
                    <!--<div id="kode_keamananDiv" class="form-group has-feedback">
                        <img src="<?php echo site_url('User_account/getCaptcha'); ?>" id="imgCaptcha" class="form-control" style="float: left; width: 25%; padding: 0;">
                        <input type="text" name="kode_keamanan" class="form-control" id="kode_keamanan" placeholder="Kode Keamanan" style="width: 75%;" required>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>-->
                    
                    <div class="row">
                        <div class="col-xs-8">
                            <!-- div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> I agree to the <a href="#">terms</a>
                                </label>
                            </div -->
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div><!-- /.col -->
                    </div>
                </form>

                <a href="<?php echo site_url('User_account/login'); ?>" class="text-center">Login</a>
            </div><!-- /.form-box -->
        </div><!-- /.register-box -->
        
        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>resources/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url(); ?>resources/bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>resources/plugins/iCheck/icheck.min.js"></script>
        
        <script src="<?php echo base_url(); ?>resources/myResources/jquery.validate.js"></script>
        <script>
            function sukses(url) {
                window.location = url;
            }
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
                $('#formRegistrasiOld').submit(function(){
                    statusUsername = $('#statusUsername').val();
                    statusEmail = $('#statusEmail').val();
                    if (statusUsername == 'salah') {
                        alert("Username Sudah dipergunakan.\n Silahkan input yang lain");
                        return false;
                    } else if (statusEmail == 'salah') {
                        alert("Email Sudah dipergunakan.\n Silahkan input yang lain");
                        return false;
                    } else{
                        return true;
                    }
                    // alert('masuk');
                    // return false;
                });
                
                $('#email').change(function(){
                    email = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo site_url('User_account/cekEmail'); ?>',
                        data: { email: email, },
                        success: function(msg) {
                            if (msg == "sukses") {
                                // $('#emailDiv').removeClass('has-error');
                                $('#emailDiv span').removeClass('glyphicon-remove');
                                $('#statusEmail').val('benar');
                                // $('#emailDiv').addClass('has-success');
                                $('#emailDiv span').addClass('glyphicon-ok');
                            } else {
                                // $('#emailDiv').removeClass('has-success');
                                $('#emailDiv span').removeClass('glyphicon-ok');
                                $('#statusEmail').val('salah');
                                
                                // $('#emailDiv').addClass('has-error');
                                $('#emailDiv span').addClass('glyphicon-remove');
                                $('#email').addClass('ui-state-error');
                                $('#emailDiv label').css('display', 'block');
                                $('#emailDiv label').html('Email sudah dipergunakan');
                                alert('Email sudah dipergunakan');
                            }
                        }
                    });
                    
                });
                $('#username').change(function(){
                    username = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo site_url('User_account/cekUsername'); ?>',
                        data: { username: username, },
                        success: function(msg) {
                            if (msg == "sukses") {
                                // $('#usernameDiv').removeClass('has-error');
                                $('#usernameDiv span').removeClass('glyphicon-remove');
                                $('#statusUsername').val('benar');
                                // $('#usernameDiv').addClass('has-success');
                                $('#usernameDiv span').addClass('glyphicon-ok');
                            } else {
                                // $('#usernameDiv').removeClass('has-success');
                                $('#usernameDiv span').removeClass('glyphicon-ok');
                                $('#statusUsername').val('salah');
                                
                                // $('#usernameDiv').addClass('has-error');
                                $('#usernameDiv span').addClass('glyphicon-remove');
                                    
                                $('#username').addClass('ui-state-error');
                                $('#usernameDiv label').css('display', 'block');
                                $('#usernameDiv label').html('Username sudah dipergunakan');
                                alert('Username sudah dipergunakan');
                                
                            }
                        }
                    });
                    
                });
                /*
                $("#formRegistrasi").validate({
                    rules: {
                        repassword: {required: true},
                        password: {required: true}
                    },
                    messages: {
                        repassword: {required: "Isi repassword"},
                        password: {required: "Isi Password"}
                    },
                    errorPlacement: function(error, element) {
                        error.insertAfter(element); // default function
                    },
                        
                    submitHandler: function(form) {
                        alert('berhasil');
                        $('#email').change();
                        $('#username').change();
                        
                        kode_keamanan = $('#kode_keamanan').val();
                        $.ajax({
                            alert("cek captcha");
                            type: 'POST',
                            url: '<?php echo site_url('User_account/cekCaptcha'); ?>',
                            data: { kode_keamanan: kode_keamanan, },
                            success: function(msg) {
                                if (msg == 'salah'){
                                    
                                    $('#kode_keamanan').addClass('ui-state-error');
                                    $('#kode_keamanan').removeClass('valid');
                                    $('#kode_keamananDiv label').css('display', 'block');
                                    $('#kode_keamananDiv label').html('Inputkan kode keamanan yang benar');
                                    alert('Inputkan kode keamanan yang benar');
                                    return false;
                                } else{
                                    
                                    statusUsername = $('#statusUsername').val();
                                    statusEmail = $('#statusEmail').val();
                                    if (statusUsername == 'salah') {
                                        alert("Username Sudah dipergunakan.\n Silahkan input yang lain");
                                        // return false;
                                    } else if (statusEmail == 'salah') {
                                        alert("Email Sudah dipergunakan.\n Silahkan input yang lain");
                                        // return false;
                                    } else{
                                        // alert('sukses semua');
                                        form.submit();
                                    }
                                }
                            }
                        });
                    }
                });
                
            });
            */
            /* 
            var input = document.getElementById('no_identitas');
            input.oninvalid = function(event) {
                event.target.setCustomValidity('Coba Aja');
            } */
        </script>
    </body>
</html>