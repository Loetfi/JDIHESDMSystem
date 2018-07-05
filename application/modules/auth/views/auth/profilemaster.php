<style>
#detailPemohon th{ text-align: right;}
</style>
<div class="row">
    <div class="col-lg-8">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Profile Pemohon</h3>
            </div>
            <div class="box-body">
                <table id="detailPemohon" class="table">
                    <tr>
                        <th>nama</th>
                        <td>:</td>
                        <td><?php echo $detail['nama']; ?></td>
                    </tr>
                    <tr>
                        <th>type_identitas</th>
                        <td>:</td>
                        <td>
                            <?php echo $detail['type_identitas']; ?><br><?php echo $detail['no_identitas']; ?><br>
                            <?php  if ($detail['ktp_img'] != '') { ?>
                            <img src="<?php echo base_url('uploads/profile/'.$detail['ktp_img']); ?>" style="max-height: 200px; max-width: 200px;" ><br>
                            <?php } else { ?>
                            <img src="<?php echo base_url('resources/myResources/img/no_img.jpg'); ?>" style="max-height: 200px; max-width: 200px;" ><br>
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <th>type_identitas</th>
                        <td>:</td>
                        <td><?php echo $detail['type_identitas']; ?></td>
                    </tr>
                    <tr>
                        <th>alamat</th>
                        <td>:</td>
                        <td><?php echo $detail['alamat']; ?></td>
                    </tr>
                    <tr>
                        <th>tlp</th>
                        <td>:</td>
                        <td><?php echo $detail['tlp']; ?></td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td>:</td>
                        <td><?php echo $detail['email']; ?></td>
                    </tr>
                    <tr>
                        <th>pekerjaan</th>
                        <td>:</td>
                        <td><?php echo $detail['pekerjaan']; ?></td>
                    </tr>
                    <tr>
                        <th>status</th>
                        <td>:</td>
                        <td><?php echo $detail['status']; ?></td>
                    </tr>
                    <tr>
                        <th>remarks</th>
                        <td>:</td>
                        <td><?php echo @$detail['remarks']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Update Status Pemohon</h3>
            </div>
            <div class="box-body">
                <form id="doApp" action="<?php echo site_url('master/doApp'); ?>" method="POST" role="form">
                    <input type="hidden" id="userId" value="<?php echo $detail['user_id']; ?>">
                    <table class="table">
                        <tr>
                            <td>
                                <select id="updateStatus" class="form-control">
                                    <option value="Approve">Approve</option>
                                    <option value="Reject">Reject</option>
                                </select>
                            </td>
                        </tr>
                        <tr id="formRemarks">
                            <td>
                                <b>Remarks Reject</b>
                                <textarea id="remarks" class="form-control"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-check"></i> SAVE</button>
                                <a href="<?php echo site_url('master/pemohon'); ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="overlay" style="display: none;"><i class="fa fa-refresh fa-spin"></i></div>
        </div>
    </div>
</div>
<script>
$('#updateStatus').change(function(){
    val = $(this).val();
    $('#formRemarks').css('display','none');
    if (val == 'Reject')$('#formRemarks').css('display','table-row');
    // alert(val);
});
$('#updateStatus').change();

$('#doApp').submit(function(){
    userId = $('#userId').val();
    updateStatus = $('#updateStatus').val();
    remarks = $('#remarks').val();
    $.ajax({
        url: site_url + '/master/doApp',
        type: "POST",
        data : {
            userId : userId, 
            updateStatus: updateStatus,
            remarks: remarks
        },
        beforeSend: function() {
            $('.overlay').css('display', 'block');
        },
        success: function(data) {
            if (data == 'sukses') alert('Status pemohon telah di update');
            else alert('Some Error');
            // else if (data == 'terupdate') alert('Status pemohon tidak bisa diubah');
        },
        complete: function() {
            $('.overlay').css('display', 'none');
        },
        error: function() {
            alert('some Error');
        }
    });
    return false;
});
</script>

