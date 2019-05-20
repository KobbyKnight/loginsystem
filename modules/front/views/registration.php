 

    <!--Breadcrumb start-->
    <div class="ast_pagetitle">
        <div class="ast_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="page_title">
                        <h2>Registration</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="#">home</a></li> 
                        <li>//</li>
                        <li><a href="#">Registration</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumb end-->
    <br><br><br><br>
    <!--Content Us Start-->
    <div class="ast_mapnform_wrapper ast_toppadder70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <div class="ast_heading">
                        <h1>Registration</h1>    
                    </div>
                </div>
            </div>
        </div>
         <?php if ($info_message = $this->session->flashdata('info_message')): ?>
            <div id="form-messages" class="alert alert-success" role="alert">
                <?php echo $info_message; ?>
            </div>
            <?php endif; 
           

            ?>


        <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">   
                            <div class="" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Vehicle Registration</h3>
                                <div class="row register-form">
                                     <div class="col-md-12 col-sm-8 col-xs-12">   
                        <div class="ast_contact_form">
                            <?php 
                             if ($success_message = $this->session->flashdata('success')): ?>
                                <div id="form-messages" class="alert alert-success" role="alert">
                                     <?php echo $success_message; ?>
                                </div>
                              <?php endif; 
                              if($error_message = $this->session->flashdata('errors')): ?>
                                <div id="form-messages" class="alert alert-danger" role="alert">
                                    <?php echo $error_message; ?>
                                </div>
                                <?php endif;
                             ?> 
                            <form action="<?php echo base_url('front/registration')?>"  method="POST" enctype="multipart/form-data">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Full Name</label>                
                                    <input type="text" name="owner_name" class="require" required="required" value="<?= set_value('owner_name')?>"> 
                                </div>
                                 
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Upload Custom's documents</label> 
                                    <input type="file" name="custom_doc" class="require" value="<?=set_value('custom_doc')?>" > 
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Upload Pictures of the vehicle</label> 
                                    <input type="file" name="vehicle_image" required="required" class="require" value="<?=set_value('vehicle_image')?>"> 
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Passport size picture</label> 
                                    <input type="file" name="owner_image" required="required" class="require"  value="<?=set_value('owner_image')?>"> 
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Positive personal identification card</label> 
                                    <input type="text" name="identification" class="require" value="<?=set_value('identification')?>"> 
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label>Upload all other documents</label> 
                                    <input type="file" name="other_doc" class="require" value="<?= set_value('other_doc')?>"> 
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label> Proposed Personalised Number</label>    
                                    <input type="text" name="owner_phone" required="required" class="require" value="<?=set_value('owner_phone')?>">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <label> Vehicle Chassis Number</label>    
                                    <input type="text" name="chassis_number" required="required" class="require" value="<?=set_value('chassis_number')?>">
                                </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 input-group date" id="datetimepicker1">
                                    <label> My Availability </label>    
                                    <input type="text" name="availability" required="required" class="require date" value="<?=set_value('availability')?>">
                                    <span class="input-group-addon data-inputset">
                                        <span class="glyphicon-calendar glyphicon"></span></span>
                                    
                                    <!-- <div class="input-group date" id="datetimepicker1">
                                        <input type="text" class="require"   value="< ?=set_value('availability')?>"/><span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
                                         </div> -->
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label> Residential Address</label>    
                                    <textarea rows="2" name="owner_address" required="required" class="require" required="required"><?= set_value('chassis_number') ?></textarea>
                                </div>
                                
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                                    <input class="ast_btn pull-right submitForm" id="register_btn"  type="submit" form-type="contact" value="SUBMIT">
                                </div> 
                            </form>
                        </div>
                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

    </div>
    <!--Content Us End-->
    <!-- Download wrapper start-->
    <div class="ast_download_wrapper ast_toppadder70 ast_bottompadder70">
    </div>
    <!-- Download wrapper End-->
    