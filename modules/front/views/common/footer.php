<!-- Footer wrapper start-->
<footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
            
                <!-- End Col -->
                <div class="col-md-12 col-lg-12">   
                    <div class="row">
                        <div class="col-md-4"> 
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Digital Address:</h3>
                                    <p>GA-260-7351, Ogle road, <br> Accra-Ghana</p>                        
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-4">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Phone:</h3> 
                                    <p>+233 57 393 4415</p> 
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>

                        <div class="col-md-4">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Email:</h3> 
                                    <p>mickmickey03@gmail.com</p>  
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>

                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2019, All Right Reserved Vehicle Registration System</span> 
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url('/') ?>">Home</a>  
                                </li> 
                                <li>
                                    <a href="<?php echo base_url('front/about') ?>">About Us</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('front/contact') ?>">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
        <!-- End Back to top -->
</footer>
<!-- Footer wrapper End-->
<!--Main js file Style-->



<script type="text/javascript" src="<?php echo base_url('asset/js/jquery.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/jquery.magnific-popup.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/owl.carousel.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/jquery.countTo.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/jquery.appear.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/price_range_script.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/slick/jquery-migrate-1.2.1.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/slick/slick.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/custom.js')?>"></script>

<script type="text/javascript" src="<?php echo base_url('asset/front/js/wow.js')?>"></script>   

<script type="text/javascript" src="<?php echo base_url('asset/js/timepicker.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/js/sweetalert.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('asset/front/js/custom.js')?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js">
</script>

              <script> 
                  new WOW().init();  
              </script>

<script type="text/javascript">
    window.onload = function() {
        get_count();
    };
    $(document).ready(function() {

        // $('#female_birth_time').timepicker({
        //     timeFormat: 'h:mm:ss p',
        //     interval: 1,
        //     scrollbar: true
        // });
        // $('#male_birth_time').timepicker({
        //     timeFormat: 'h:mm:ss p',
        //     interval: 1,
        //     scrollbar: true
        // });
        var date_input = $('.date');
        var dateToday = new Date();    
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        var options = {
            format: 'mm-dd-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
            minDate: dateToday
        };
        date_input.datepicker(options);
        $('#myCarousel').carousel({
            interval: 5000
        });
        $('#carousel-text').html($('#slide-content-0').html());
        $('[id^=carousel-selector-]').click(function() {
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
        $('#myCarousel').on('slid.bs.carousel', function(e) {
            var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-' + id).html());
        });
        $('#media').carousel({
            pause: true,
            interval: false,
        });


        
    });

    function get_count(){
            $.ajax({                
                url: "<?php echo site_url('front/count_cart');?>",
                method: "POST",
                
                success: function(data) { 
                    if(data!=0){
                     $('#notification-count').text(data); 
                     $('#notification-count').show();
                        
                    }
                    console.log(data);                
                   // $('.ast_cart_box').html(data);                
                }            
            });
    }   

    function isAlphaOrParen(str) {
        return /^[a-zA-Z()]+$/.test(str);
    }

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function validatePhone(txtPhone) {
        var a = document.getElementById(txtPhone).value;
        var filter = /[1-9]{1}[0-9]{9}/;
        if (filter.test(a)) {
            return true;
        } else {
            return false;
        }
    }            
    $('.ast_cart_box').load("<?php echo site_url('front/load_cart');?>");                  
    $(document).on('click', '.romove_cart', function() {            
        var row_id = $(this).attr("id");            
        $.ajax({                
            url: "<?php echo site_url('front/delete_cart');?>",
            method: "POST",
            data: {
                row_id: row_id
            },
            success: function(data) {                    
                $('.ast_cart_box').html(data);    
                get_count();              
            }            
        });        
    });

    function isAlphaOrParen(str) {
        return /^[a-zA-Z()]+$/.test(str);
    }

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function validatePhone(txtPhone) {
        var a = document.getElementById(txtPhone).value;
        var filter = /[1-9]{1}[0-9]{9}/;
        if (filter.test(a)) {
            return true;
        } else {
            return false;
        }
    }
    $(".ast_add_cart").click(function() {
        var product_id    = $(this).data("id");            
        var quantity      = $('#' + product_id).val();       
        $.ajax({                
            url: "<?php echo site_url('front/add_to_cart');?>",
            method: "POST",
            data: {
                product_id: product_id,
                quantity: quantity
            },
            success: function(data) {
                swal("Good job!", "Product Added to Cart", "success");     
                $('.ast_cart_box').html(data);       
                get_count();         
            }            
        });        
    });
    /* 
     **  Function For Load into Cart after add into cart 
     */
    $(".carticon").click(function() {
        $.ajax({
            url: "<?php echo base_url('front/viewcart'); ?>",
            method: "GET",
            success: function(data) {
                $('#customcart').html(data);
            }
        });
    });
    $(document).on('click', '.ast_remove_item', function() {
        var row_id = $(this).attr('id');
        swal({
            title: "Are you sure?",
            text: "you want to remove this from cart!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, remove it!",
            closeOnConfirm: false
        }, function(isConfirm) {
            if (!isConfirm) return;
            $.ajax({
                url: "<?php echo base_url('front/remove')?>",
                type: "POST",
                data: {
                    row_id: row_id
                },
                success: function() {
                    swal("Done!", "It was succesfully deleted!", "success");
                    window.location.reload();
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    swal("Error deleting!", "Please try again", "error");
                }
            });
        });
    });
    $(document).on('click', '.update_cart_item', function() {
        var row_id = $(this).attr('id');
        var quantity = $('#pro_quantity_' + row_id).val();
        if (quantity >= 0) {
            $.ajax({
                url: "<?php echo base_url('front/update_cart'); ?>",
                method: "POST",
                data: {
                    row_id: row_id,
                    quantity: quantity
                },
                success: function(data) {
                    swal({
                        title: "Updated!",
                        text: "Cart has been updated successfully",
                        imageUrl: "<?php echo base_url('asset/uploads/thumbs-up.jpg');?>"
                    });
                    window.setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                }
            });
        } else {
            swal("Quantity can not be negative");
            return false;
        }
    });

    function loadintocart() {
        $.ajax({
            url: "<?php echo base_url('front/add'); ?>",
            method: "POST",
            data: {
                product_id: product_id,
                product_name: product_name,
                product_price: product_price,
                quantity: quantity
            },
            success: function(data) {
                alert("Product Added into Cart");
                $('#cart_details').html(data);
                $('#' + product_id).val('');
            }
        });
    };

    function removeitem($id) {
        var row_id = $id;
        if (confirm("Are you sure you want to remove this?")) {
            $.ajax({
                url: "<?php echo base_url('front/remove'); ?>",
                method: "POST",
                data: {
                    row_id: row_id
                },
                success: function(data) {
                    $('#cart_details').html(data);
                }
            });
        } else {
            return false;
        }
    }
    $(document).on('click', '.login_btn', function(e) {
        e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        if (!email) {
            swal("Email is required");
            return false;
        } else if (!password) {
            swal("Password is required");
            return false;
        } else {
            $.ajax({
                url: "<?php echo base_url('front/signin'); ?>",
                method: "POST",
                dataType: "json",
                data: {
                    email: email,
                    password: password
                },
                success: function(data) {
                    if (data.msg == "success") {
                        swal({
                            title: "Loggedin!",
                            text: data.response,
                            imageUrl: "<?php echo base_url('asset/uploads/thumbs-up.jpg');?>"
                        });
                        window.setTimeout(function() {
                            window.location.href='front/registration';
                        }, 2000);
                    } else if (data.msg == "error") {
                        swal({
                            title: "Error!",
                            text: data.response,
                            //imageUrl: "<?php //echo base_url('asset/uploads/thumbs-up.jpg');?>"
                        });
                    }
                }
            });
        }
    });
    $(function() {
        $('#signup').submit(function(event) {
            event.preventDefault();
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var register_email = $('#register_email').val();
            var register_password = $('#register_password').val();
            var mobile = $('#mobile').val();
            var gender = $('#gender').val();
            if (!first_name) {
                $('#error_first_name').val('First name is required');
            } else if (!last_name) {
                $('#error_last_name').val('First name is required');
            } else if (!register_email) {
                $('#error_register_email').val('First name is required');
            } else if (!register_password) {
                $('#error_register_password').val('First name is required');
            } else if (!mobile) {
                $('#error_mobile').val('First name is required');
            } else if (!gender) {
                $('#error_gender').val('First name is required');
            } else {
                $.ajax({
                    type: 'POST',
                    url: "<?php echo base_url('front/signup')?>",
                    data: {
                        'first_name': first_name,
                        'last_name': last_name,
                        'register_email': register_email,
                        'register_password': register_password,
                        'mobile': mobile,
                        'gender': gender
                    },
                    dataType: "json",
                    success: function(results) {
                        if (results.msg == "success") {
                        swal({
                            title: "Registered!",
                            text: results.response,
                            imageUrl: "<?php echo base_url('asset/uploads/thumbs-up.jpg');?>"
                        });
                        window.setTimeout(function() {
                            window.location.href='front/index';
                        }, 2000);
                        } else if (results.msg == "error") {
                            $('#form_error').html(results.response);
                        }
                        
                    }
                });
            }
        });
    });


    $(document).on('click','.check_login', function(e){
         e.preventDefault();
         $.ajax({
            url: "<?php echo base_url('front/checkSession'); ?>",
            method: "GET",
            success: function(data) {

                if (data==0) {
                    $('#login_modal').click();
                }else if (data==1){
                    window.location.href="<?php echo base_url('front/buy')?>";
                }
                            
            }
        });

    });


     $(".date").datetimepicker({
        minDate:new Date()
    });


</script>
</body>

</html>

