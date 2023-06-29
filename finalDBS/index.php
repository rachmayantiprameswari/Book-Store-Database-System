<!DOCTYPE html>
<html lang="en">
<head>
	<title>Book Store</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.css">
	
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">	
	<style type="text/css">
		body{
            background-image: url("bg0.jpg");
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
        table{
        	background: #f4cccc;
            padding: 5px;
            border: 1px solid black;
        }
        table tr{
            background: #f4cccc;
            padding: 5px;
        }
        table td:hover{
            background: #eddcdc;
        }
        table td{
            padding: 5px;
        }
        table label{
            font-weight: 900;
            cursor: pointer;
        }
    </style>
</head>
<body>
	<?php
	include('connection.php');
	$query = "SELECT * FROM book";
	$result = mysqli_query($conn, $query);
	?>

	<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
	<h1 align="center">BOOK STORE</h1>
	<hr>
	<div class="row">
		<div class="col-sm-4">
			<marquee><h2>~ Welcome to the Ama Book Store ~</h2></marquee>
			<form role="form" action="insert.php" method="post">
				<fieldset>
				<legend><h3>Form Book Data</h3></legend>
				<table>
					<tr>
						<td><label>ID Book</label></td>
						<td><input type="text" name="id_bk" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Book Title</label></td>
						<td><input type="text" name="title_bk" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Publisher Book</label></td>
						<td><input type="text" name="publish_bk" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Genre Book</label></td>
						<td><input type="text" name="genre_bk" class="form-control"></td>
					</tr>

					<tr>
						<td><label>Book Price</label></td>
						<td><input type="text" name="price_bk" class="form-control"></td>
					</tr>
					</table>
					<button type="submit" class="btn btn-info btn-block">Add Book</button>
				</fieldset>
			</form>

			</div>
			<div class="col-sm-8">
				<fieldset>
				<legend><h3>List of Book</h3></legend>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>ID Book</th>
							<th>Book Title</th>
							<th>Publisher Book</th>
							<th>Genre Book</th>
							<th>Book Price</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							while($row = mysqli_fetch_assoc($result)) {
						?>
						<tr align="center">
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['id_book']; ?></td>
							<td><?php echo $row['title_book']; ?></td>
							<td><?php echo $row['publish_book']; ?></td> 
							<td><?php echo $row['genre_book']; ?></td>
							<td><?php echo $row['price_book']; ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['id_book']; ?>" class="btn btn-success" role="button">Edit</a> 
								<a href="delete.php?id=<?php echo $row['id_book']; ?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>

						<?php
							} 
							mysqli_close($conn);
						?>
					</tbody>
				</table>
				</fieldset>
			</div>
		</div>
	</div>
</body>
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready(function() { 
			$('.dtabel').DataTable();
		} );
	</script>
</html>