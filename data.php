<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ex</title>
</head>
<body>


<?php 


$conn=mysqli_connect("localhost", "root" , "" , "hospital");



if($conn->connect_error)
{
	die("Connection failed : " . $conn->connect_error);
}

echo "Connected successfuly";

$conn->close();
 ?>


</body>
</html>