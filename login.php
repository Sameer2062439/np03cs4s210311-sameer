<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();

// creat connection
$data=mysqli_connect($host,$user,$password,$db);

// if connection is wrong, it shows connection error
if($data===false)
{
	die("connection error");
}

//test


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];
  
// sql is querry of database. It is use for get data from database.

	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

/* check the usertype condition is user or  admin. If usertpye is user, goes to userpage and 
  if usertpye is admin, it takes us to admin dashboard page*/
  
	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;
        echo "USER";
		header("location:user.html");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:admin dashboard.html");
	}

	else
	{
		echo "username or password incorrect";
		header("location:login.php");
	}

}

?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Login.css">
    <title> Water Billing System </title>
</head>

<body>


    <body>
        <div class="login-page">
            <div class="form">
                <div class="login">
                    <div class="login-header">
                        <h2>Water Billing System</h2>

                        <p> Please enter your credentials to login..</p>
                    </div>
                </div>
                <form action='#' method="post">
					<div>

                        <input type="text" placeholder="username" name="username" required/>

                    </div>
                    <input type="password" placeholder="password" name="password" required/>
                    
					<div>
					<button>login</button>
	
                    </div>	
                    <p class="message">Not registered? <a href="signup.html">Create an account</a></p>
                </form>
            </div>
        </div>
    </body>
</body>

</html>