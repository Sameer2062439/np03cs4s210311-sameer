<?php

$conn = mysqli_connect("localhost","root","water");

// Check Connection
if (mysql_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>