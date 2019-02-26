<?php
session_start();
//error_reporting(0);
include('config.php');
include('checklogin.php');
check_login();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Adam and Eve hospital</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="hosp.css">
</head>
<body>



<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="hospital.php">Adam And Eve</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       <li class="active"><a href="hospital.php">Home</a></li>
         <li><a href="aboutus.php">About US</a></li>
          <li><a href="gallery.html">Gallery</a></li>
        <li><a href="doctors.html">Our Doctors</a></li>
        <li><a href="user-login.php">Online Services</a></li>
        <li><a href="cont1.php">Contact us</a></li>
          <li><a href="locateus.php">Locate us</a></li>


        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Login</a></li>
      </ul>
       
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	
	<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">
						<a href="#" class="sidebar-mobile-toggler pull-left hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="ti-align-justify"></i>
						</a>
						<a class="navbar-brand" href="#">
							<h2 style="padding-top:2% ">PATIENT LOG IN</h2>
						</a>
						<a href="#" class="sidebar-toggler pull-right visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
							<i class="ti-align-justify"></i>
						</a>
						<a class="pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<i class="ti-view-grid"></i>
						</a>
					</div>
					<!-- end: NAVBAR HEADER -->
					<!-- start: NAVBAR COLLAPSE -->
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-right">
							<!-- start: MESSAGES DROPDOWN -->
								<li  style="padding-top:2% ">
								<H5>  &nbsp &nbsp <strong>SETTINGS</strong>   </h5>
							</li>
						
						
							<li class="dropdown current-user">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="img/3.png" alt="Peter"> <span class="username">



									<?php $query=mysql_query("select fullName from users where id='".$_SESSION['id']."'");
while($row=mysql_fetch_array($query))
{
	echo $row['fullName'];
}
									?> <i class="ti-angle-down"></i></i></span>
								</a>
								<ul class="dropdown-menu dropdown-dark">
									<li>
										<a href="dashboard.php">
											Dashboard
										</a>
									</li>
									<li>
										<a href="edit-profile.php">
											My Profile
										</a>
									</li>
								
									<li>
										<a href="change-password.php">
											Change Password
										</a>
									</li>
									<li>
										<a href="logout.php">
											Log Out
										</a>
									</li>
								</ul>
							</li>
							<!-- end: USER OPTIONS DROPDOWN -->
						</ul>
						<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
					</div>
				
					
					<!-- end: NAVBAR COLLAPSE -->
				</header>

				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User  | Appointment History</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User </span>
									</li>
									<li class="active">
										<span>Appointment History</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="panel panel-white">

									<div class="row">
								<div class="col-md-12">
									
		<?php
	
	$query=mysql_query("select fullName from users where id='".$_SESSION['id']."'");
	while($row=mysql_fetch_array($query))  
	
	{
		 $fulln=$row['fullName'];
	}
	echo "<h1>Hey ".$fulln."</h1>" ;
	?>
	<hr>
	
	<?php
	//$sql="SELECT * FROM documents";


	$sql="select * from reports where id='".$_SESSION['id']."'";
	$res=mysql_query($sql);

	//if ($res->num_rows == 0)
	if(mysql_num_rows($res)==0)
		echo "<p>Oops! No reports availabe </p>";
	else
		echo "<p> Reports available for download are: </p>";
	while ($row=mysql_fetch_array($res)) { 
		$id=$row['id']; 
		$name=$row['name'];
		$path=$row['path'];
		// echo $docid=$row['docid'];
		// echo $name=$row['name'];
		// echo $dept=$row['dept'];
		// echo $id=$row['dept id'];
		// echo $days=$row['days'];
		// echo "<hr>";


		echo "<h4>";
		echo " ".$name."<a href='download.php?dow=$path'> Download</a><br>";
		echo "</h4>";
	}

	?>
 

								</div>
							</div>
								</div>
						
					</div>







</div>



<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>