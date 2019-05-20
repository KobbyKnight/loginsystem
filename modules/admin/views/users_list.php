<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Normal Users List </h1>
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
                <div class="panel-heading">
                    <a class="btn btn-primary" href="<?php echo base_url('admin/users')?>"><i class="fa fa-th-list">&nbsp;Add User </i></a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="bg-primary">
                                <th>S.No</th>
                                <th>User Name</th>
                                <th>Email Address</th>
                                <th>Mobile</th>
                                <th>DOB</th>
                                <th>DOJ</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count=1; if(!empty($normal_users)) {  foreach ($normal_users as  $value) {?>
                            <tr class="odd gradeX" id="tr_<?php echo $count;?>">
                                <td>
                                    <?php echo $count; ?>
                                </td>
                                <td class="center">
                                    <?php echo ucwords($value->username); ?>
                                </td>
                                <td class="center">
                                    <?php echo $value->email;  ?>
                                </td>
                                <td class="center">
                                    <?php echo $value->mobile;  ?>
                                </td>
                                <td class="center">
                                    <?php echo date("m-d-Y", strtotime($value->date_of_birth)); ?>
                                </td>
                                <td class="center">
                                    <?php echo $value->created_at;  ?>
                                </td>
                                <td class="center">
                                    <?php /*
                                    <a href="<?php echo base_url('admin/users/'.$value->id); ?>">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    */ ?>
                                    <a href="javascript:void(0)" onclick="delete_record('<?php echo $value->id?>','<?php echo $count;?>')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                    <?php 
                                    if($value->is_active == '0'){ ?>
                                        <a href="javascript:void(0)" onclick="normal_user_activate('<?php echo $value->id?>','<?php echo $value->is_active ?>')">
                                            <i class="fa fa-thumbs-down" aria-hidden="true"></i>
                                        </a>
                                    <?php }
                                    else{ ?>
                                        <a href="javascript:void(0)" onclick="normal_user_activate('<?php echo $value->id?>','<?php echo $value->is_active ?>')">
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
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Date</th>
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
                table: 'users',
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

function normal_user_activate(id,is_active) {
    swal({
        title: "Are you sure?",
        text: "Yes/No",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, Normal User Activated !",
        closeOnConfirm: false
    }, 
    function (isConfirm) {
        if (!isConfirm) return;
        $.ajax({
            url: "<?php echo base_url('admin/user_activate')?>",
            type: "POST",
            data: {
                id: id,
                is_active: is_active,
                table: 'users',
            },
            success: function () {
                swal("Done!", "It was succesfully activated!", "success");
                location.reload();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                swal("Error deleting!", "Please try again", "error");
            }
        });
    });
}   

// $(document).ready(function() {
//     $('#notice').DataTable( {
//         responsive: {
//             details: {
//                 display: $.fn.dataTable.Responsive.display.modal( {
//                     header: function ( row ) {
//                         var data = row.data();
//                         return 'Details for '+data[1];
//                     }
//                 } ),
//                 renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
//                     tableClass: 'table'
//                 } )
//             }
//         }
//     } );
// });

</script>