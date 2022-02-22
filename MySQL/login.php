<?php

	if (isset($_POST['email'])) {
		$mail = $_POST['email'];
		$assword = $_POST['password'];

		$connection = mysqli_connect('localhost', 'root', '', 'mybaza');

		$query = 'SELECT * FROM users;'; 
		 if($connection){
		      $query_result = mysqli_query($connection, $query);
		      if($query_result){
		        $data_array = mysqli_fetch_array($query_result);
		        print_r($data_array);
		      }
		    } else {
		      die ('connection failed');
		    }
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

		<form action="login.php" method="post">
	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label">Email address</label>
	    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">Password</label>
	    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
	  </div>
	  <div class="mb-3 form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <button name="submit" type="submit" class="btn btn-primary">Принять</button>
	</form>

</body>
</html>