<?php
	session_start();
	session_destroy(); //destroy session
	echo "You have been logged out";
	$_SESSION['advocate'];
	header('location:Index.php');
?>