<?php
	
	include "db_connection.php";

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$username = $_POST['username'];
		$id = $_POST['id'];

		$update_query = "UPDATE users SET username = '$username', email = '$email', password = '$password' WHERE id = $id";

		// $update_query = "UPDATE users SET";
		// $update_query .= " username = '$username',";
		// $update_query .= " email = '$email',";
		// $update_query .= " password = '$password'";
		// $update_query .= " WHERE id = $id"; 

		$update_query_result = mysqli_query($connection, $update_query);

		if(!$update_query_result){
			die("Query failed ".mysqli_error());
		}

		
	}

	$query = 'SELECT * FROM users;';

	$query_result = mysqli_query($connection, $query);

	if(!$query_result){
		die("Query failed ".mysqli_error());
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<form action="login_edit.php" method="post">
	  <div class="form-group">
	    <label for="exampleInputUsername1">Username</label>
	    <input type="form-text" class="form-control" name="username" id="exampleInputUsername1" aria-describedby="emailHelp" placeholder="Enter your name">
	    
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
	  </div>
	  <div class="form-group">
	    <select name="id">
	    	<?php

	    		while ($row = mysqli_fetch_assoc($query_result)) {
	    			$id = $row['id'];
	    			echo "<option value='$id'>$id</option>";
	    		}

	    	?>
	    	
	    </select>
	  </div>
	  <button type="submit" class="btn btn-primary" name="submit">Edit</button>
	</form>

</body>
</html>