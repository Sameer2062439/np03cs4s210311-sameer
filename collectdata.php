<?php

include 'conn.php';

if(isset($_POST['done'])){

	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];      
	$confirm_password = $_POST['confirm_password'];
	
 $q ="insert into water(firstname, middlename, lastname, gender,address,city, email, password, number, confirm_password) VALUES ('$firstname', '$middlename', '$lastname', '$gender', '$address', '$city', '$email', '$password', '$number', '$confirm_password')";

 if (mysqli_query($con, $q)) {
	echo "New record created successfully";
	header("location:user.php");
} else {
	echo "Error: " . $q . "<br>" . mysqli_error($con);
}
mysqli_close($con);
}
?>