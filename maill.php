<!DOCTYPE html>
<html>
<head>
	<title> mail</title>
</head>
<body>

<?php
$to="sifatyk7@gmail.com";
$subject="this is not a drill";
$message="first test mail";
$header="From:www.gbnepal.com  \r\n";
$header.="Cc:afgh@somedomain.com \r\n";
$header.="MIME-Versionn: 1.U\r\n";
$header.="Content-type:text/html\r\n";

$retval=mail($to,$subject,$message,$header);

if ($retval==true) 
{
	echo "message sent";

	# code...
}
else
{
	echo "not sent";
}
?>


</body>
</html>