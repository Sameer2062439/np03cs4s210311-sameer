<?php

//con is variable for database connection

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'water');

/*  when database is unable to connect, it show message that connection can't be estblished */

if($con->connect_error){
	die("Connection can't be established: ".$con->connect_error);
	}

?>