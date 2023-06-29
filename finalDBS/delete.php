<?php

$id = $_GET['id'];

//include(dbconnect.php); 
include('connection.php');

//query hapus
$query= "DELETE FROM book WHERE id_book = '$id' ";

if (mysqli_query($conn, $query)) {
	# redirect ke index.php
	header("location:index.php");
}
else{
	echo "ERROR, data failed to delete". mysqli_error($conn);
}

mysqli_close($conn);
?>