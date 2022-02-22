<?php

	include "db_connection.php";

	if (isset($_POST['submit'])) {

		if(!$_POST['email'] OR !$_POST['password']){
			echo "You must input email and password";
		} else {
			$email = mysqli_real_escape_string($connection, 
				$_POST['email']);
			$password = mysqli_real_escape_string($connection, 
				$_POST['password']);
			$password = password_hash($password, PASSWORD_DEFAULT);
			$username = mysqli_real_escape_string($connection, 
				$_POST['username']);



			$select_query = "SELECT * FROM users WHERE email = '".$email."';";
			$select_query_result = mysqli_query($connection, $select_query);
			if(mysqli_num_rows($select_query_result) > 0){
				echo "This email already exists, please input another email";
			} else {
				$query = "INSERT INTO users (username, email, password) VALUES 
				('$username', '$email', '$password');";

				$query_result = mysqli_query($connection, $query);

				if(!$query_result){
					die("Query failed ".mysqli_error());
				} else {
					echo "You are signed up";
				}
			}
		}
		
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<form action="login_task.php" method="post">
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
	  <div class="form-group form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>

</body>
</html>