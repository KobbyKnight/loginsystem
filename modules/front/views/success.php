<!--Breadcrumb start-->


<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>Success</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">home</a></li>
                    <li>//</li>
                    <li><a href="">Success</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<div class="ast_cart_wrapper ast_toppadder70 ast_bottompadder70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="success_page_msg">
                    <!-- <h2 style="font-size:18px; color:#313131; padding-bottom:8px;">Dear Member</h2> -->
                    <div class="alert alert-success">
                        <span style="color: #646464; font-size:18px;"><strong>Dear Member !!! </strong>Your payment has been successful, thank you!</span><br />
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <table class="table table-responsive table-bordered">

                                <tr>
                                    <th>Owner Name</th>
                                    <th>Registration Number</th>
                                    <th>Chassis Number</th>
                                    <th>Translation Number</th>
                                    <th>Amount</th>
                                </tr>
                                <tr>
                                     <td><?php echo $owner_name; ?></td>
                                     <td><?php echo $registration_number; ?></td>
                                     <td><?php echo $chassis_number; ?></td>
                                     <td><?php echo $translation_id; ?></td>
                                     <td><?php echo $currency_code.' '.$amount; ?></td>
                                </tr>     
                                
                            </table>

                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
