    <!--Breadcrumb start-->

    <div class="ast_pagetitle">

        <div class="ast_img_overlay"></div>

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="page_title">

                        <h2>contact Us</h2>

                    </div>

                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">                      

                    <ul class="breadcrumb">

                        <li><a href="index.html">home</a></li>

                        <li>//</li>

                        <li><a href="contact.html">contact us</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <!--Breadcrumb end-->

    <!--Content Us Start-->

    <div class="ast_contact_wrapper ast_toppadder70 ast_bottompadder50" style="display: none;">

        <!-- Google add Start -->

       <!--  <div class="adds">

            <div class="container">

                <div class="jumbotron">

                    <h2>Add</h2>

                </div>

            </div>

        </div> -->

        <!-- Google add Ends -->

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">

                    <div class="ast_heading">

                        <h1>get in <span>touch</span></h1>

                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected hummer.</p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="ast_contact_info">

                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>

                        <h4>phone</h4>

                        <p>+233 57 393 4415</p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="ast_contact_info">

                        <span><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>

                        <h4>email</h4>

                        <p><a href="#">mickmickey03@gmail.com</a></p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                    <div class="ast_contact_info">

                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>

                        <h4>Digital Address</h4>

                        <p>GA-260-7351, Ogle road, Accra-Ghana</p> 

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--Content Us End-->

    <br><br><br><br>

    <!--Content Us Start-->

    <div class="ast_mapnform_wrapper ast_toppadder70">

      

         <?php if ($info_message = $this->session->flashdata('info_message')): ?>

            <div id="form-messages" class="alert alert-success" role="alert">

                <?php echo $info_message; ?>

            </div>

            <?php endif ?>

        <div class="ast_contact_map">

            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-2 col-xs-offset-0">

                <div class="ast_contact_form">

                    <form action="<?php echo base_url('front/contactus')?>" method="POST">

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <label>first name</label> 

                            <input type="text" name="first_name" class="require" required="required">

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <label>last name</label>

                            <input type="text" name="last_name" class="require">

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <label>email</label>

                            <input type="email" name="email" class="require" data-valid="email" data-error="Email should be valid." required="required">

                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            <label>subject</label>

                            <input type="text" name="subject" class="require" required="required">

                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <label>message</label>

                            <textarea rows="5" name="message" class="require" required="required"></textarea>

                        </div>

                        <div class="response"></div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <input class="ast_btn pull-right submitForm" type="submit" form-type="contact" value="send">

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <!--Content Us End-->

    <!-- Download wrapper start-->

    <div class="ast_download_wrapper ast_toppadder70 ast_bottompadder70">

    </div>

    <!-- Download wrapper End-->

    