<!-- CRUD - CREATE, READ, UPDATE, DELETE -->

<?php
		include "db_connection.php";

		$query = 'SELECT * FROM users;';

		$query_result = mysqli_query($connection, $query);
		if(!$query_result){
			die("Query failed".mysqli_error());
		}

?>