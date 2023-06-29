<?php
include('connection.php');

$id      = $_GET['id_bk'];
$title   = $_GET['title_bk'];
$publish = $_GET['publish_bk'];
$genre   = $_GET['genre_bk'];
$price   = $_GET['price_bk'];

$query = "UPDATE book SET id_book='$id', title_book='$title', publish_book='$publish', genre_book='$genre', price_book='$price' WHERE id_book='$id' ";

if (mysqli_query($conn, $query)) {
	header("location:index.php");
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>