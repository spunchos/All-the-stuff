<!-- CRUD - CREATE, READ, UPDATE, DELETE -->

<?php
		include "db_connection.php";

		$query = 'SELECT * FROM users;';

		$query_result = mysqli_query($connection, $query);
		if(!$query_result){
			die("Query failed".mysqli_error());
		}



		// if($connection) {
		// 	$query_result = mysqli_query($connection, $query);
		// 	if($query_result){
		// 		$data_array = mysqli_fetch_array($query_result);
		// 		echo "Hello ".$data_array['username']."! Your email is "
		// 		.$data_array['email']." and your password is ".$data_array['password'];
		// 	}
		// } else {
		// 	die('Connection failed');
		// }
	

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		
		<div class="col-md-6">
			
			<?php 


				// while ($row = mysqli_fetch_row($query_result)) {
				// 	print_r($row);
				// }
				while ($row = mysqli_fetch_assoc($query_result)) {
					?>

					<pre>
						<?php
							print_r($row);
						 ?>
					</pre>
					<?php
					
				}


			?>

		</div>

	</div>

</body>
</html>