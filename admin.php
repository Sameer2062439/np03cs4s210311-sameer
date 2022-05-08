<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();

// creat connection
$data=mysqli_connect($host,$user,$password,$db);

// check connection
if($data===false)
{
	die("connection error");
}

//test


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);
/* check the usertype condition is user or  admin. If usertpye is user, goes to userhome and if usertpye is admin, goes to adminhome page*/
	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;
        echo "USER";
		header("location:user.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:index.html");
	}

	else
	{
		echo "username or password incorrect";
		header("location:admin.php");
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
                    <p class="message">Not registered? <a href="water signup.html">Create an account</a></p>
                </form>
            </div>
        </div>
    </body>
</body>

</html>