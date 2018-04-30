<?php

	$con = mysqli_connect("localhost", "root", "root","cal");

	if(!$con){
		echo "Not Connected to Server.";
	}

	$sql = "INSERT INTO advocateInformation(name, email, password, bio, image) 
				VALUES(?,?,?,?,?)";

	$insertUser = $con->prepare($sql); 
	
	if (!$insertUser) {
		print_r($con->error);
	}  else {
		$insertUser->bind_param('sssss', $name, $email, $password, $bio, $image);
	}
?>