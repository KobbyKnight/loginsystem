<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Vehical Request List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <?php if ($info_message = $this->session->flashdata('info_message')): ?>
            <div id="form-messages" class="alert alert-success" role="alert">
                <?php echo $info_message; ?>
            </div>
            <?php endif ?>
            <div class="panel panel-default">
               <!--  <div class="panel-heading">
                    <a class="btn btn-primary" href="< ?php echo base_url('admin/users')?>"><i class="fa fa-th-list">&nbsp;List Vehical Requset</i></a>
                </div> -->
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="bg-primary">
                                <th>S.No</th>
                                <th>Registration No.</th>
                                <th>Vehicle Image</th>
                                <th>Owner Name</th>
                                <th>Documents</th>
                                <th>Owner Image</th>
                                <th>Availability Date</th>
                                <th>Request Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count=1; if(!empty($vehiclerequestlist)) {  foreach ($vehiclerequestlist as  $value) {?>
                            <tr class="odd gradeX" id="tr_<?php echo $count;?>">
                                <td>
                                    <?php echo $count; ?>
                                </td>
                                <td class="center">
                                    <?php echo ucwords($value->registration_number); ?>
                                </td>
                                <td class="center">
                                    <img src="<?php echo base_url('asset/uploads/').$value->vehicle_image; ?>" style="max-width: 100px;max-height: 100px;">
                                </td>
                                <td class="center">
                                    <?php echo $value->owner_name;  ?>
                                </td>
                                <td class="center">
                                    <img src="<?php echo base_url('asset/uploads/').$value->custom_doc; ?>" style="max-width: 100px;max-height: 100px;">
                                </td>
                                <td class="center">
                                    <img src="<?php echo base_url('asset/uploads/').$value->owner_image; ?>" style="max-width: 100px;max-height: 100px;">
                                </td>
                                 <td class="center">
                                    <?php echo $value->availability;  ?>
                                </td>
                                <td class="center">
                                    <?php echo $value->created_at;  ?>
                                </td>
                                <td class="center">
                                    <a href="<?php echo base_url('admin/editVehicalRequest/'.$value->id); ?>">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" onclick="delete_record('<?php echo $value->id?>','<?php echo $count;?>')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                     <?php 
                                    if($value->status == '0'){ ?>
                                        <a href="javascript:void(0)" onclick="approve_vehicle_request('<?php echo $value->id?>','<?php echo $value->status ?>')">
                                            <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                        </a>
                                    <?php }
                                    else{ ?>
                                        <a href="javascript:void(0)" onclick="approve_vehicle_request('<?php echo $value->id?>','<?php echo $value->status ?>')">
                                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                        </a>
                                    <?php } ?>
                                    
                                </td>
                            </tr>
                            <?php $count++; }}?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S.No</th>
                                <th>Registration No.</th>
                                <th>Vehicle Image</th>
                                <th>Owner Number</th>
                                <th>Documents</th>
                                <th>Owner Image</th>
                                <th>Availability Date</th>
                                <th>Request Date</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
function delete_record(id, tr_id) {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function (isConfirm) {
        if (!isConfirm) return;
        $.ajax({
            url: "<?php echo base_url('admin/delete')?>",
            type: "POST",
            data: {
                id: id,
                table: 'vehicle_request',
            },
            success: function () {
                swal("Done!", "It was succesfully deleted!", "success");
                 $('#tr_' + tr_id).remove();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                swal("Error deleting!", "Please try again", "error");
            }
        });
    });
}

function approve_vehicle_request(id,status) {
    swal({
        title: "Are you sure?",
        text: "Yes/No",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, Vehicle Request Approved !",
        closeOnConfirm: false
    }, 
    function (isConfirm) {
        if (!isConfirm) return;
        $.ajax({
            url: "<?php echo base_url('admin/request_approval')?>",
            type: "POST",
            data: {
                id: id,
                status: status,
                table: 'vehicle_request',
            },
            success: function () {
                swal("Done!", "It was succesfully approved!", "success");
                location.reload();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                swal("Error deleting!", "Please try again", "error");
            }
        });
    });
}   

</script>