<?php
session_start();
include 'database connection.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
   $email = $_POST["email"];
   $password = $_POST["password"];

  $query ="SELECT * FROM water WHERE email='$email' AND password='$password'";
  $result = mysqli_query($con, $query);
  if ($row = mysqli_fetch_assoc($result)) {
        
        echo "Login successful";
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;

        header("Location:http://localhost/water/user billl.html");
    }else {
               echo "Wrong email or password";
               header("Location:http://localhost/water/user.html");
     }
 } 
?>
