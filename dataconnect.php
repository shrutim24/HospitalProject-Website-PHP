<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn=mysqli_connect($servername, $username , $password , $dbname);



if($conn->connect_error)
{
	die("Connection failed : " . $conn->connect_error);
}

//echo "Connected successfuly";

?>


<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>

<?php
//Step2
$query="SELECT * FROM doctors";
mysqli_query($conn,$query) or die('Error querying database.');

$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

while ($row=mysqli_fetch_array($result)) {
 echo $row['name'] . ' ' . $row['docid'] . ': ' . $row['dept'] . ' ' . $row['days'] .'<br />';
}


$conn->close();

?>

</body>
</html>