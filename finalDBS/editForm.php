<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>Book Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script> <script src="bootstrap/js/bootstrap.min.js"></script>
	<style type="text/css">
	body{
            background-image: url("bg.jpg");
            padding: 5px;
        }
    form{
            padding: 5px;
        }
    form table{
            border-spacing: 0;
            border: 1px solid black;
        }
    form tr{
            background: #f4cccc;
            padding: 5px;
        }
    form tr:hover{
            background: #eddcdc;
        }
    form td{
            padding: 5px;
        }
    form label{
            font-weight: 900;
            cursor: pointer;
        }
    form .textfield{
            padding: 5px;
            border: 1px solid black;
        }
    form .textfield:hover{
            border: 1px solid black;
        }
    form .button{
            background: #b0d0ff;
            border: 1px solid black;
            cursor: pointer;
        }
    form .button:hover{
            background: #6c3636;
        }
    </style>
</head>
<body>
	<?php
	$id = $_GET['id'];

	//koneksi database
	include('connection.php');

	//query
	$query = "SELECT * FROM book WHERE id_book='$id'";
	$result = mysqli_query($conn, $query);
	?>
	<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
		<h1 align="center">BOOK STORE</h1>
		<hr>
		<marquee><h2>~ Welcome to the Ama Book Store ~</h2></marquee>
		<h3>Update Book Data</h3>
		<form role="form" action="edit.php" method="get">		
				<?php
				while ($row = mysqli_fetch_assoc($result)) {
				?>
				<fieldset>
				<legend><h3>Form Edit Book Data</h3></legend>
				<table>
					<tr>
						<td><label>ID Book</label></td>
						<td><input type="text" name="id_bk" class="form-control" value="<?php echo $row['id_book']; ?>"></td>
					</tr>

					<tr>
						<td><label>Book Title</label></td>
						<td><input type="text" name="title_bk" class="form-control" value="<?php echo $row['title_book']; ?>"></td>
					</tr>

					<tr>
						<td><label>Publisher Book</label></td>
						<td><input type="text" name="publish_bk" class="form-control" value="<?php echo $row['publish_book']; ?>"></td>
					</tr>

					<tr>
						<td><label>Genre Book</label></td>
						<td><input type="text" name="genre_bk" class="form-control" value="<?php echo $row['genre_book']; ?>"></td>
					</tr>

					<tr>
						<td><label>Book Price</label></td>
						<td><input type="text" name="price_bk" class="form-control" value="<?php echo $row['price_book']; ?>"></td>
					</tr>
					</table>
					<button type="submit" class="btn btn-success btn-block">Update Book</button>
				</fieldset>
				<?php
				}
				mysqli_close($conn);
				?>
		</form>
		<div class="footer" style="background: lightpink;" align="center">
            &copy; 2022 Ama Book Store
        </div>
	</div>
</body>
</html>