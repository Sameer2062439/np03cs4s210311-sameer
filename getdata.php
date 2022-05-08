<?php> 

include 'conn.php';



if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"];


	$sql="select * from water where email='".$email."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

    if($row["email"]=="email")
	{	

		$_SESSION["email"]=$email;
        echo "USER";
		header("location:userhome.php");
	}
}



?>