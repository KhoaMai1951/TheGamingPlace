<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	// Connect to MySQL
	$conn = mysqli_connect("localhost","root",null,"gamingplace");
	
	// Test connection
	if(mysqli_connect_errno())
	{
		echo 'Failed to connect to MySQL: '.mysqli_connect_error();
	}
	
?>
</body>
</html>