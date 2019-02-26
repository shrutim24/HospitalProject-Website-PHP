<?php

include('config.php');
if (isset($_GET['dow'])) {
	
	$path=$_GET['dow'];
	$res=mysqli_query($bd,"select * from reports where path='$path' ");
	// $res=mysql_query"select * from reports where path='$path' ");
	
	 header('Content-Type:application/octet-stream');
	 header('Content-Disposition: attachment; filename="'.basename($path).'" ');
	 header('Content-Length: '.filesize($path));
	 readfile($path);

	}

// $path="documents/OS%20Qb.jpeg";
// $res=mysqli_query($con,"select * from documents where path='$path' ");
	
// 	 header('Content-Type:application/octet-stream');
// 	 header('Content-Disposition: attachment; filename="'.basename($path).'" ');
// 	 header('Content-Length: '.filesize($path));
// 	 readfile($path);
?>
