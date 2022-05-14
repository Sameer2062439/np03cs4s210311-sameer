<?php

include 'database connection.php';

if(isset($_POST['done'])){

	$fullname = $_POST['fullname'];
	$citizenship_number = $_POST['citizenship_number'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];      
	$confirm_password = $_POST['confirm_password'];
	
 $q = "insert into water(fullname, gender, email, password, number, confirm_password, citizenship_number) VALUES ('$fullname', '$gender', '$email', '$password', '$number', '$confirm_password', '$citizenship_number')";

 if (mysqli_query($con, $q)) {
	echo "New record created successfully";
	header("location:user.html");
} else {
	echo "Error: " . $q . "<br>" . mysqli_error($con);
}
mysqli_close($con);
}
?>