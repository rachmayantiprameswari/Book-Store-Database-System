<?php
$host= "localhost";
$user= "root";
$pass= ""; 
$database= "final";
$conn= mysqli_connect($host, $user, $pass); 

if ($conn) {
	$open= mysqli_select_db($conn, $database); 
	echo "database is connected";
	if (!$open) {
		echo "database is not connected";
	}
}else{
	echo "MySQL is not connected";
}
?>