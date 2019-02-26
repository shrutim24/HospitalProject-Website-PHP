<?php
	if (isset($_POST['submit'])) {
		
		# code...
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$comments=$_POST['comments'];
		$to = "shrutisanjaymore@gmail.com";
		$headers = "From: $name<$email>";
		$message = "Name : $name \n\nEmail:$email \n\nSubject:$subject \n\n Doubt:$comments";
		if(mail($to,$subject,$message,$headers))
		{
			echo "<script type='text/javascript'>alert('Sent!')</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Try again later')</script>";
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="hosp.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="hosp.css">
	<style type="text/css">
	.yo{
		position: relative;
			height: 250px;
			width: 500px;
			background: lightgrey;
			left: 450px;
			padding-top: 20px;
			top: 50px;
	}
		#form1{
			position: relative;
			height: 480px;
			width: 500px;
			background: rgba(85,85,85,0.3);
			left: 450px;
			padding-top: 20px;
			top: 50px;
			margin-bottom: 50px;
		}
		#for1{
			position: relative;
			left: 150px;
		}
		.ha{
			position: relative;
			left: 150px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
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
<div class="yo">
	<h1 class="ha">Contact us</h1>
	<p class="ha">Contact number: 022-28780853</p>
	<p class="ha">Phone number: (91)-9930564305</p>
	<p class="ha">Email Id: adam.ask@gmail.com</p>
	<h2>For futher queries Email Us here:</h2>
	</div>
<div id="form1">
	<form action="" method="post" id="for1">
		<p><b>Name</b><br/>

		<input type="text" name="name">
		</p>
		<p><b>Email</b><br/>
		<input type="text" name="email" width="100px">
		</p>
		<p><b>Subject</b><br/>
		<input type="text" name="subject">
		</p>
		<p><b>Your doubt?<b><br/>
		<textarea name="comments" cols="30" rows="10"></textarea></p>
		<p><input type="submit" name="submit" value="Send Email">
		</p>
		
	</form>
	</div


<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>