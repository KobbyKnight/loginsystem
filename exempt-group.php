<?php session_start();
require_once('dbconnection.php');

//Code for Registration 
if(isset($_POST['group']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$dob=$_POST['dob'];
	$marital=$_POST['marital'];
	$phone=$_POST['phone'];
    $raddress=$_['raddress'];
    $provider=$_['provider'];
    $condition=$_['condition'];
    $proof=$_['proof'];
    $photo=$_['photo'];
    $photo1=$_['photo1'];
	$a=date('Y-m-d');
	$msg=mysqli_query($con,"insert into group(fname,lname,dob,marital,phone,raddress,provider,condition,proof,photo,photo1,posting_date) values('$fname','$lname','$dob','$marital','$phone','$raddress','$provider','$photo','$photo1','$a')");
if($msg)
{
	echo "<script>alert('Group List successfully');</script>";
}
}
?><!DOCTYPE html>
<html>
<head>
<title>NHIS Registration System</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default',       
							width: 'auto', 
							fit: true 
						});
					});
				   </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,300italic,400italic,600italic|Lora:400,700,400italic,700italic|Raleway:400,500,300,600,700,200,100' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="main">
		<h1>Exempt Group Registration</h1>
	 <div class="sap_tabs">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  <ul class="resp-tabs-list">
			  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><div class="top-img"><img src="images/top-note.png" alt=""/></div><span>Register</span>
			  	  	
				</li>
				  
				  <div class="clear"></div>
			  </ul>		
			  	 
			<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<div class="facts">
					
						<div class="register">
							<form name="nhisregistration" method="post" action="upload.php" enctype="multipart/form-data">
								<p>First Name </p>
								<input type="text" class="text" value=""  name="fname" required >
								<p>Last Name </p>
								<input type="text" class="text" value="" name="lname"  required >
								<p>Date of Birth </p>
								<input type="text" class="text" value=""  name="dob" required >
								<p>Marital Status </p>
								<input type="radio" class="form-control" value="marital" id="marital" name="marital" required ><Label for="love">Married</label>
								<input type="radio" class="form-control" value="single" id="single" name="marital" required ><Label for="single">Single</label>
								<input type="radio" class="form-control" value="divorced" id="divorced" name="marital" required ><Label for="divorced">Divorced</label>
                                <p>Phone Number </p>
								<input type="text" class="text" value="" name="phone"  >
								<p>Residential Address </p>
								<input type="text" class="text" value="" name="raddress"  >
								<p>Prefered Primary Provider </p>
                                <input type="text" class="text" value="" name="provider"  >
                                <p>Specify Condition </p>
                                <input type="text" class="text" value="" name="condition"  >
                                <p>Proof of Condition </p>
								<input type="text" class="text" value="" name="proof"  >
								<p>Applicant Current Photo </p>
								
								<input type="file" accept="image/*" class="text"  name="photo" id="photo" >
								<p>National Id </p>
								<input type="file" accept="image/*" class="text"  name="photo1" id="id" >

								<p>Email Address </p>
								<input type="text" class="text" value="" name="email"  >
								<p>Password </p>
								<input type="password" value="" name="password" required>
								<div class="sign-up">
									<input type="reset" value="Reset">
									<input type="submit" name="Signup"  value="Sign Up" >
									<div class="clear"> </div>
								</div>
							</form>

						</div>
					</div>
                </div>
                 	     </div>

</body>
</html>		
