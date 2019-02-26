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



<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/hos1.jpg" style="width:100%; height: 500px;">
        <div class="carousel-caption">
         
        </div>
      </div>

      <div class="item">
        <img src="img/hos2.jpg" alt="Chicago" style="width:100%; height: 500px;">
        <div class="carousel-caption">
         
        </div>
      </div>
    
      <div class="item">
        <img src="img/hos3.jpg" alt="New York" style="width:100%; height: 500px;">
        <div class="carousel-caption">
          
        </div>
      </div>
       <div class="item">
        <img src="img/hos4.jpg" alt="New York" style="width:100%; height: 500px;">
        <div class="carousel-caption">
         
        </div>
      </div>
       <div class="item">
        <img src="img/hos5.jpg" alt="New York" style="width:100%; height: 500px;">
        <div class="carousel-caption">
          
        </div>
      </div>
  


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>


<div class="container">
	<div class="content">
		<h1> Your one solution to many problems</h1>
		<hr>
	</div>
</div>



<div class=container>
<div class="row">
	<div class="col-md-4"> <div class="jumbotron"> 
		<h4> 24x7 Facilities </h4>
		<p> You can visit us at any hour. We're always there!</p> 
		
	</div>
	</div>
	<div class="col-md-4">  
		<div class="thumbnail">
			<img src="https://images.unsplash.com/photo-1535360868041-7fb2b7534f6a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ba39bb8f62bc642d9dedee657bde4b04&auto=format&fit=crop&w=752&q=80">	
		</div> 
	
	</div>
	<div class="col-md-4"> <div class="jumbotron" > 
		<h4> Spl Training programmes </h4>
		<p> We ensure that our employees are always ready for the worst.</p> 
	</div>
	</div>	

	<div class="col-md-4">  
		<div class="thumbnail">
			<img src="https://images.unsplash.com/photo-1535360868041-7fb2b7534f6a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ba39bb8f62bc642d9dedee657bde4b04&auto=format&fit=crop&w=752&q=80">	
		</div> 
	</div>

	<div class="col-md-4"> <div class="jumbotron"> 
		<h4> Air Ambulance </h4>
		<p> The roads are not always a safe route for your health.</p> 
	</div>
	</div>


	<div class="col-md-4">  
		<div class="thumbnail">
			<img src="https://images.unsplash.com/photo-1535360868041-7fb2b7534f6a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ba39bb8f62bc642d9dedee657bde4b04&auto=format&fit=crop&w=752&q=80">	
		</div> 
	</div>
</div>
</div>

<?php include('footer.php');?>



<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>