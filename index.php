<?php

if(isset($_POST(Register))){
	$link = mysqli_connect("localhost", "root", "", "demo");
 
	// Check connection
	if($link === false){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 
	// Escape user inputs for security
	$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
	$last_name = mysqli_real_escape_string($link, $_REQUEST['second_name']);
	$username = mysqli_real_escape_string($link, $_REQUEST['username']);
	$password = mysqli_real_escape_string($link, $_REQUEST['password']);


	// attempt insert query execution
	$sql = "INSERT INTO persons (first_name, last_name, username, password) VALUES ('$first_name', '$second_name', '$email',  '$password')";
	if(mysqli_query($link, $sql)){
	    echo "Records added successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	 
	// close connection
	mysqli_close($link);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Zalego</title>
</head>
<body>
	<div>
		<h2>Registration</h2>
		First Name: <input type="text" name="firstname">
		Last Name: <input type="text" name="lastname">
		Username: <input type="text" name="username">
		Password: <input type="text" name="password"> </br>
		<a href="login.html"><p>login</p></a>
		<input type="button" name="Register">
	</div>
</body>
</html>