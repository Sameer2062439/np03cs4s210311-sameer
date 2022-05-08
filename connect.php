<?php
// echo "<pre>";
// var_dump($_POST);
// die();

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Database connection
	$conn = new mysqli('localhost','root','','signup');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}else {
		$sql = "insert into test (firstName, lastName, gender, email, password, number) values ('$firstName', '$lastName', '$gender', '$email', '$password', '$number')";
		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
			header("location:login.html");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
	  mysqli_close($conn);
	}
?>