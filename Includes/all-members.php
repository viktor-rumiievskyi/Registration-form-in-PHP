<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
	

<div class="container my-5">
	<h2>List of Clients</h2>
	<a class="btn btn-primary" href="./signup.php" role="button">New Clients</a>
	<br>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Adress</th>
				<th>Create At</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php
			$servername = "localhost"; 
			$username = "root";
			$password = "";
			$database = "myshop";

			$connection = new mysqli($servername, $username, $password, $database);

			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

			$sql = "SELECT * FROM clients";
			$result = $connection->query($sql);


			if (!$result) {
				die("Invalid query: " . $connection->error);
			}

			while($row = $result->fetch_assoc()) {
				echo "
				<tr>
				<td>$row[id]</td>
				<td>$row[first_name] $row[last_name]</td>
				<td>
				<a href='mailto:?email=$row[email]'>$row[email]</a>
				</td>
				<td>$row[address]</td>
				<td>$row[created_at]</td>
				<td>
				<a class='btn btn-danger btn-sm' href='../Button/delete.php?id=$row[id]'>Delete</a>
			</td>
			</tr>
				";
			}
			?>
<a href="../Button/uSocial.php"></a>
		</tbody>
	</table>
</div>
</body>
</html>