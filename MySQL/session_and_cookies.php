<?php

	// session_start();

	// // $_SESSION['username'] = 'jake1234';

	// // echo $_SESSION['username'];

	// if($_SESSION['email']){
	// 	echo "You are logged in";
	// } else {
	// 	header("Location: login_task.php");
	// }

	// setcookie('user_id', '1111', time() + 60 * 60 * 24 * 7);

	// setcookie('user_id', '', time() + 60 * 60 * 24);
	$_COOKIE['user_id'] = '2222';
	echo $_COOKIE['user_id'];

?>