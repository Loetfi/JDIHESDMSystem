<div class="row">
    <div class="col-lg-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Foto</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <?php  if ($detail['foto'] != '') { ?>
                <img src="<?php echo base_url('uploads/profile/'.$detail['foto']); ?>" style="max-height: 200px; max-width: 200px;" ><br>
                <?php } /* else {
                <img src="<?php echo base_url('resources/myResources/img/no_img.jpg'); ?>" style="max-height: 200px; max-width: 200px;" ><br>
                } */ ?>
            </div>
            <div class="box-footer">
                <form action="<?php echo site_url('User_account/doFoto'); ?>" method="POST" id="thisFormPhoto" class="form-horizontal" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-sm-8">
                            <input type="file" name="userfile" id="userfile" placeholder="Photo Profile" required>
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> SAVE</button>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>
        
        <div class="box box-default collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Scan KTP/SIM/NPWP</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <?php  if ($detail['ktp_img'] != '') { ?>
                <img src="<?php echo base_url('uploads/profile/'.$detail['ktp_img']); ?>" style="max-height: 200px; max-width: 200px;" ><br>
                <?php } else { ?>
                <img src="<?php echo base_url('resources/myResources/img/no_img.jpg'); ?>" style="max-height: 200px; max-width: 200px;" ><br>
                <?php } ?>
            </div>
            <div class="box-footer">
                <form action="<?php echo site_url('User_account/doScan'); ?>" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-sm-8">
                            <input type="file" name="userfile" placeholder="Scan KTP/SIM/NPWP" required>
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> SAVE</button>
                        </div>
                    </div>
                </form>
            
            </div>
        </div>
        
        <div class="box box-default collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title" >Edit Password</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <form method="POST" id="thisFormPassword" role="form">
                    <!-- Password Lama -->
                    <div id="namaDiv" class="form-group has-feedback">
                        <label class="control-label">Password Lama</label>
                        <input type="text" name="OldPassword" class="form-control" id="OldPassword" placeholder="Old Password" required>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                    
                    <!-- Password Baru -->
                    <div id="namaDiv" class="form-group has-feedback">
                        <label class="control-label">Password Baru</label>
                        <input type="text" name="NewPassword" class="form-control" id="NewPassword" placeholder="New Password" required>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                    <!-- RePassword Baru -->
                    <div id="namaDiv" class="form-group has-feedback">
                        <label class="control-label">RePassword Baru</label>
                        <input type="text" name="ReNewPassword" class="form-control" id="ReNewPassword" placeholder="ReNew Password" required>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> SAVE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
    </div>
    <div class="col-lg-8">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Profile</h3>
            </div>
            <div class="box-body">
                <form action="<?php echo site_url('User_account/doProfile'); ?>" method="POST" role="form">
                    <!-- nama -->
                    <div id="namaDiv" class="form-group has-feedback">
                        <label class="control-label">nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" value="<?php echo $detail['nama']; ?>" required>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                    
                    <!-- identitas -->
                    <div id="identitasTypeDiv" class="form-group has-feedback">
                        <label class="control-label">Type Identitas</label>
                        <select name="type_identitas" class="form-control" id="type_identitas">
                            <option value="KTP" <?php echo ($detail['type_identitas'] == 'KTP' ? 'selected' : '' ); ?>>KTP</option>
                            <option value="SIM" <?php echo ($detail['type_identitas'] == 'SIM' ? 'selected' : '' ); ?>>SIM</option>
                            <option value="NPWP" <?php echo ($detail['type_identitas'] == 'NPWP' ? 'selected' : '' ); ?>>NPWP</option>
                        </select>
                    </div>
                    
                    <!-- identitas -->
                    <div id="identitasNoDiv" class="form-group has-feedback">
                        <label class="control-label">No Identitas</label>
                        <input type="text" name="no_identitas" class="form-control" id="no_identitas" placeholder="No Identitas" value="<?php echo $detail['no_identitas']; ?>" required>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                    
                    <!-- alamat -->
                    <div id="alamatDiv" class="form-group has-feedback">
                        <label class="control-label">alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat" required><?php echo $detail['alamat']; ?></textarea>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>

                    <!-- tlp -->
                    <div id="tlpDiv" class="form-group has-feedback">
                        <label class="control-label">tlp</label>
                        <input type="text" name="tlp" class="form-control" id="tlp" placeholder="TLP/HP" value="<?php echo $detail['tlp']; ?>" required>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                    
                    <!-- email -->
                    <div id="emailDiv" class="form-group has-feedback">
                        <label class="control-label">email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $detail['email']; ?>" required>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                    
                    <!-- pekerjaan -->
                    <div id="pekerjaanDiv" class="form-group has-feedback">
                        <label class="control-label">pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan" value="<?php echo $detail['pekerjaan']; ?>" required>
                        <span class="glyphicon form-control-feedback"></span>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> SAVE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
