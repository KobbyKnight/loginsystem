<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update Profile</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
         <?php if ($info_message = $this->session->flashdata('success_msg')): ?>
            <div id="form-messages" class="alert alert-success" role="alert">
                <?php echo $info_message; ?> </div>
            <?php endif ?>
            <?php if ($error_message = $this->session->flashdata('error')): ?>
            <div id="form-messages" class="alert alert-danger" role="alert">
                <?php echo $error_message; ?> </div>
            <?php endif ?>
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <?php //echo "<pre>"; print_r($viewvehiclerequest); //die; ?>
                            <form role="form" method="post" action="<?php echo base_url('admin/updaterequest') ?>" class="registration_form1" class="form-horizontal" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $viewvehiclerequest[0]->id;?>">
                                <div class="form-group"> <label class="col-md-4">Registration Number:* </label>
                                    <div class="col-lg-6"> <input type="text" class="form-control" name="registration_number" placeholder="Enter Registration Number" value="<?php echo $viewvehiclerequest[0]->registration_number;?>"> <span class="red">
                                            <?php echo form_error('registration_number'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-4">Owner Name: * </label>
                                    <div class="col-lg-6"> <input type="text" class="form-control" name="owner_name" placeholder="Owner Name" value="<?php echo $viewvehiclerequest[0]->owner_name;?>"> <span class="red">
                                            <?php echo form_error('owner_name'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-4">Identification: * </label>
                                    <div class="col-lg-6"> <input type="text" class="form-control" name="identification" placeholder="Enter Identification" value="<?php echo $viewvehiclerequest[0]->identification;?>"> <span class="red">
                                            <?php echo form_error('identification'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-4">Owner Phone Number : * </label>
                                    <div class="col-lg-6"> <input type="text" class="form-control" name="owner_phone" placeholder="Enter Mobile" value="<?php echo $viewvehiclerequest[0]->owner_phone;?>"> <span class="red">
                                            <?php echo form_error('owner_phone'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-4">Chassis Number : * </label>
                                    <div class="col-lg-6"> <input type="text" class="form-control" name="chassis_number" placeholder="Enter Chassis Number" value="<?php echo $viewvehiclerequest[0]->chassis_number;?>"> <span class="red">
                                            <?php echo form_error('phone'); ?></span> </div>
                                </div>

                                <div class="form-group"> <label class="col-md-4">Owner Address : *</label>
                                    <div class="col-lg-6"> <input type="text" class="form-control" name="owner_address" placeholder="Enter Owner Address" value="<?php echo $viewvehiclerequest[0]->owner_address;?>"><span class="red">
                                            <?php echo form_error('owner_address'); ?></span> </div>
                                </div>
                              <!--   <div class="form-group"> <label class="col-md-4">Status : *</label>
                                    <div class="col-lg-6"> <textarea class="form-control" name="street" placeholder="Enter Street">< ?php echo $viewvehiclerequest[0]->status;?></textarea> <span class="red">
                                            < ?php echo form_error('street'); ?></span> </div>
                                </div> -->
                                <div class="form-group"> <label class="col-md-4">User Image: </label>
                                    <div class="col-lg-6"> <input type="file" name="owner_image" class="form-control"> <span class="red">
                                            <?php echo form_error('owner_image'); ?></span> </div>
                                </div>
                                <?php if(!empty($viewvehiclerequest[0]->custom_doc)){?>
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="form-group">
                                        <img src="<?php echo base_url('asset/uploads/').$viewvehiclerequest[0]->owner_image; ?>" style="max-width: 100px;max-height: 100px;">
                                    </div>
                                </div>
                                <?php }?>
                                <div class="form-group"> <label class="col-md-4">Vehicle Image: </label>
                                    <div class="col-lg-6"> <input type="file" name="vehicle_image" class="form-control"> <span class="red">
                                            <?php echo form_error('vehicle_image'); ?></span> </div>
                                </div>
                                <?php if(!empty($viewvehiclerequest[0]->custom_doc)){?>
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="form-group">
                                        <img src="<?php echo base_url('asset/uploads/').$viewvehiclerequest[0]->vehicle_image; ?>" style="max-width: 100px;max-height: 100px;">
                                    </div>
                                </div>
                                <?php }?>
                                <div class="form-group"> <label class="col-md-4">Custom Document: </label>
                                    <div class="col-lg-6"> <input type="file" name="image" class="form-control"> <span class="red">
                                            <?php echo form_error('image'); ?></span> </div>
                                </div>
                                <?php if(!empty($viewvehiclerequest[0]->custom_doc)){?>
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="form-group">
                                        <img src="<?php echo base_url('asset/uploads/').$viewvehiclerequest[0]->custom_doc; ?>" style="max-width: 100px;max-height: 100px;">
                                    </div>
                                </div>
                                <?php }?>
                                <div class="clearfix"></div>
                                <div class="col-md-12" align="center">
                                    <input type="submit" name="submit" value="Save" class="btn btn-success">&nbsp; <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
</div>
</div>
<script type="text/javascript">
    function get_state(country_id) {
        alert("jkdgnj");
        $.ajax({
            url: "<?php echo base_url('admin/get_record')?>",
            method: "GET",
            dataType: "json",
            data: {
                id: country_id,
                table: 'states',
                field: 'country_id'
            },
            success: function(response) {
                var option = '<option value="">-- Select State --</option>';
                for (var i = 0; i < response.length; i++) {
                    option += '<option value="' + response[i].id + '">' + response[i].name + '</option>';
                }
                $("#state").html('');
                $("#state").html(option);
                $("#state").niceSelect('update');
            },
            error: function() {
                alert("error");
            }
        });
    }

    function get_city(state_id) {
        $.ajax({
            url: "<?php echo base_url('admin/get_record')?>",
            method: "GET",
            dataType: "json",
            data: {
                id: state_id,
                table: 'cities',
                field: 'state_id'
            },
            success: function(response) {
                var option = '<option value="">-- Select City --</option>';
                for (var i = 0; i < response.length; i++) {
                    option += '<option value="' + response[i].id + '">' + response[i].name + '</option>';
                }
                $("#city").html('');
                $("#city").html(option);
                $("#city").niceSelect('update');
            },
            error: function() {
                alert("error");
            }
        });
    }
</script>