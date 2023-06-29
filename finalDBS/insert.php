<?php
include('connection.php');

$id      = $_POST['id_bk'];
$title   = $_POST['title_bk'];
$publish = $_POST['publish_bk'];
$genre   = $_POST['genre_bk'];
$price   = $_POST['price_bk'];

$query = "INSERT INTO book(id_book, title_book, publish_book, genre_book, price_book) VALUES('$id', '$title', '$publish', '$genre', '$price')";

if (mysqli_query($conn, $query)) {
	header("location:index.php");
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>