<?php
ob_start(); //Turns on output buffering 
session_start();

$timezone = date_default_timezone_set("Europe/London");

$con = mysqli_connect("localhost", "root", "", "sk"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>

<!-- <html>
<head>
	<title>skollbubble</title>
</head>
<body>
	HELLO JARRET!!!!!!!!
</body>
</html> -->
