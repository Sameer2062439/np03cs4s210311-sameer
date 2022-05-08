<?php
 include '../conn.php';

 //recieving form data
 if(isset($_POST["login"])){
   $email = $_POST["email"];
   $password = $_POST["password"];

  //check into database
  //check users
  $query = "SELECT * FROM employee WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $query);
  if ($row = mysqli_fetch_assoc($result)) {
    echo "Username Already Exists.";
    header("Location:http://localhost/hrs/Frontend/signup/index.html");
  } else {
    //insert form data into employee database
    echo "Login successfull ";

    //redirect 
    header("Location:http://localhost/hrs/Frontend/signup/index.html");
  }



//redirect to login
header("Location:http://localhost/hrs/Frontend/login/index.html");


 }
?>