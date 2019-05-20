<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>Vehicle Management System</title> 
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="<?php  if(isset($pages)){ echo $pages->meta_description; } ?>">
    <meta name="keywords" content="<?php  if(isset($pages)){ echo $pages->meta_keywords; } ?>">
    <meta name="title" content="<?php  if(isset($pages)){ echo $pages->meta_title; } ?>">
    
    <meta name="author" content="hsoft">
    <meta name="MobileOptimized" content="320"> 
    <!--Srart Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/animate.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/font-awesome.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/fonts.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/owl.carousel.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/owl.theme.default.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/magnific-popup.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/front/css/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/timepicker.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="<?php echo base_url('asset/css/sweetalert.min.css')?>" rel="stylesheet" type="text/css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('asset/front/images/favicon.ico')?>"> 
    <style type="text/css">
        /*.red {
            color: red;
        }

        .carticon {
            position: relative;
        }

        .carticon #notification-count {
                background: #000;
                color: #fff;
                width: 18px;
                height: 18px;
                display: block;
                text-align: center;
                font-size: 12px;
                line-height: 18px;
                border-radius: 50%;
                position: absolute;
                top: -10px;
                left: 13px;
        }

        .ast_autho_wrapper li > a > i {
            font-size: 22px;
        }

        .ast_contact_details ul li i, .ast_contact_details ul li a i {
            font-size: 22px;
        }*/


           
    </style>
</head>

<body>
    
   <!-- Header Start -->
    <div class="ast_top_header">  
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     
                    <div class="ast_autho_wrapper">
                        <ul>
                            <?php $session_ary = $this->session->userdata('logged_in');
                           
                            if(empty($session_ary)){?>
                                <li><a class="popup-with-zoom-anim" href="#login-dialog" id="login_modal"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</a></li>
                                <li><a class="popup-with-zoom-anim" href="#signup-dialog" ><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
                            <?php }
                            else{ ?>
                              <li><a href="<?php echo base_url('front/logout'); ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Log out</a></li>
                            <?php
                             if(isset($pendings)){ ?>
                              <li><a class="popup-with-zoom-anim ast_btn pull-right submitForm" href="#pay-dialog" ><i class="fa fa-money" aria-hidden="true"></i><span style="display: none;"></span>Pay Now</a></li>
                              
                            <?php } 
                            } 
                            ?>
                           
                        </ul>
                        <div id="login-dialog" class="zoom-anim-dialog mfp-hide">
                            <h1>Login Form</h1>
                            <form method="POST" action="">
                                <input type="text" placeholder="Email" name="email" id="email">
                                <input type="password" placeholder="Password" name="password" id="password">
                                <div class="ast_login_data">
                                    <label class="tp_custom_check" for="remember_me">Remember me 
                                    <input type="checkbox" name="ast_remember_me" value="yes" id="ast_remember_me">
                                    <span class="checkmark"></span>
                                    </label>
                                    <a href="#">Forgot password ?</a>
                                </div>
                                <input type="button" class="ast_btn login_btn" name="login_submit" value="Login">
                                <p>Create An Account ? <!-- <a href="#signup-dialog">SignUp</a> -->
                                  <a class="popup-with-zoom-anim" href="#signup-dialog"> Sign Up</a>
                                </p>
                            </form>
                        </div>
                        <div id="signup-dialog" class="zoom-anim-dialog mfp-hide">
                            <h1>signup form</h1>
                            <form method="POST" id="signup">
                                <span id="form_error" class="red"></span>
                                <input type="text" name="first_name" id="first_name" placeholder="First Name" required="required">
                                <span id="error_first_name" class="red"></span>
                                <input type="text" name="last_name" id="last_name" placeholder="Last Name" required="required">
                                <span id="error_last_name" class="red"></span>
                                <input type="email" name="email" id="register_email" placeholder="Email" required="required">
                                <span id="error_register_email" class="red"></span>
                                <input type="password" name="password" id="register_password" placeholder="Password" required="required">
                                <span id="error_register_password" class="red"></span>
                                <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" required="required">
                                <span id="error_mobile" class="red"></span>
                                <select name="gender" id="gender" required="required">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <span id="error_gender" class="red"></span>
                                <input type="submit" id="register_btn" class="ast_btn" name="submit" value="submit">
                                <p>Have An Account ? <!-- <a href="#">Login</a> -->
                                    <a class="popup-with-zoom-anim" href="#login-dialog" id="login_modal"> Log In</a>
                                </p>
                            </form>
                        </div>
                        <div id="pay-dialog" class="zoom-anim-dialog mfp-hide">
                           <h1>Pay Now</h1>
                           <?php
                             if(isset($pendings))
                             {

                                $payments='';
                                 foreach($pendings as $key=>$pending)
                                 {
                                    ?>
                                   <!--  <form action="< ?php echo base_url('front/buy') ?>" method="POST" id="< ?php echo $key; ?>">
                                     
                                    </form> -->

                                     <form action="<?php echo base_url('front/buy') ?>" method="post" name="paypal" id="paypal">
                                        <!-- Prepopulate the PayPal checkout page with customer details, -->
                                        <div class="alert alert-danger">
                                         <div class="alert-icon">
                                             
                                            <?php echo 'Owner : '.$pending->owner_name.', <br/> Registration No.  : '.$pending->registration_number.',<br/> Chassis No. :'.$pending->chassis_number; ?> 

                                                <input type="hidden" name="id" value="<?php echo $pending->id ?>">    
                                                <input type="hidden" name="user_id" value="<?php echo $pending->user_id ?>">
                                                <input type="hidden" name="owner_name" value="<?php echo $pending->owner_name ?>">
                                                <input type="hidden" name="registration_number" value="<?php echo $pending->registration_number ?>">
                                                <input type="hidden" name="chassis_number" value="<?php echo $pending->chassis_number ?>">

                                             <!-- <a href="http://localhost/rto/front/buy" class="btn btn-info check_login">checkout</a> -->
                                             
                                         </div>
                                     </div>
                                     <input type="submit" class="btn btn-info" name="checkout1" value="checkout">
                                    </form>
                                 <?php    
                                 } 
                             } 
                             ?>
                           

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ast_header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="ast_logo">
                        
                        <a href="<?php echo base_url()?>">
                           <img src="<?php echo base_url('asset/uploads/5cb5b7ed1c367.jpg')?>" alt="Logo" title="Logo">
                           <!-- <img src="asset/front/images/logos.jpg" alt="Logo" title="Logo">  --> 
                        </a>
                        
                        <button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="ast_main_menu_wrapper">
                        <div class="ast_menu">
                            <ul>
                                <li><a href="<?php echo base_url('/')?>" <?php if($this->uri->segment(2)==""){echo 'class="active"';}?> >home</a></li>
                                <li><a href="<?php echo base_url('front/about')?>" <?php if($this->uri->segment(2)=="about"){echo 'class="active"';}?> >About Us</a></li>
                                 <li><a href="<?php echo base_url('front/contact')?>" <?php if($this->uri->segment(2)=="contact"){echo 'class="active"';}?> >Contact Us</a></li>
                                 <?php 
                                  if(!empty($session_ary)){ ?>
                                   <li><a href="<?php echo base_url('front/registration')?>" <?php if($this->uri->segment(2)=="registration"){echo 'class="active"';}?> >Registration</a></li>
                                 <?php }
                                  else{ ?>
                                    <li><a class="popup-with-zoom-anim" href="#login-dialog" <?php if($this->uri->segment(2)=="registration"){echo 'class="active"';}?>>Registration</a></li>
                                 <?php } ?>
                              <?php /*   
                               
                                <li><a href="<?php echo base_url('front/shop')?>">Shop</a></li>
                                <li><a href="<?php echo base_url('front/donate')?>">Donate</a></li>
                               
                               */ ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if($this->session->flashdata('info_msg')) { ?>
    <div class="alert alert-success">
        <strong>
            <?php echo $this->session->flashdata('info_msg');?></strong>
    </div>
    <?php } 
    if($this->session->flashdata('error_msg')){?>
       
    <div class="alert alert-info">
        <strong>Info!</strong>
        <?php echo $this->session->flashdata('error_msg'); ?>
    </div>
    
    <?php }?>

    <!-- Header End -->