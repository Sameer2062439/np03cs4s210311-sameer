<?php


$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'water');

if($con->connect_error){
	die("Connection can't be established: ".$con->connect_error);
	}

?>