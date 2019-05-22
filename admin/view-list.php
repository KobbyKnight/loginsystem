<!DOCTYPE html>
<?php
	require_once 'checklogin.php';
    $conn = new mysqli("localhost", "root", "", "loginsystem") or die(mysqli_error());

    $grabid = $_GET['uid'];
	//$query = $conn->query("SELECT * FROM `list` WHERE `id` = '$grabid'") or die(mysqli_error());
	//$fetch = $query->fetch_array();
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Update List</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>

            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">



                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"></h5>

                  <li class="mt">
                      <a href="change-password.php">
                          <i class="fa fa-file"></i>
                          <span>Change Password</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="manage-users.php" >
                          <i class="fa fa-users"></i>
                          <span>Manage Users</span>
                      </a>

                  </li>

                  <li class="sub-menu">
                      <a href="manage-exempt.php">
                          <i class="fa fa-users"></i>
                          <span>Manage Group List</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="manage-list.php">
                          <i class="fa fa-users"></i>
                          <span>Manage List</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="paid-list.php">
                          <i class="fa fa-users"></i>
                          <span>Paid Personal</span>
                      </a>
                  </li>


              </ul>
          </div>
      </aside>
      <?php
      $ret=mysqli_query($conn,"select * from list where id= '$grabid'");
	  while($row=mysqli_fetch_array($ret)){
          ?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $row['First_name'];?>'s Information</h3>

              <div class = "panel-body" id="div-id-name">
					<table id="table" class="display" style="border:none">

						<tr>
							<th> Name: </th>
							<td><?php echo $row['First_name'].' '.$row['Last_name'] ?></td>
						</tr>

						<tr>
							<th> Date of Birth: </th>
							<td><?php echo $row['D.O.B'].' '?></td>
						</tr>

						<tr>
							<th> Marital Status: </th>
							<td><?php echo $row['Marital_status'].' '?></td>
						</tr>

						<tr>
							<th> Phone: </th>
							<td><?php echo $row['Phone'].' '?></td>
						</tr>

						<tr>
							<th> Address: </th>
							<td><?php echo $row['Address'].' '?></td>
						</tr>

						<tr>
							<th> Provider : </th>
							<td><?php echo $row['Provider'].' '?></td>
						</tr>

						<tr>
							<th> Photo: </th>
							<td><?php echo $row['Photo'].' '?></td>
						</tr>

						<tr>
							<th> Identification: </th>
							<td><?php echo $row['Identification'].' '?></td>
						</tr>
					</table>
			</div>
		</div>

      <?php } ?>

      </section></section>      <h3>
	  <a href="#" id="print" class="btn btn-info" onclick="javascript:printlayer('div-id-name')">Print</a>
	</h3>
	</div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>

<?php

?>
