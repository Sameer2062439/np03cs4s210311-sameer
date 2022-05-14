<?php 
  include('database connection.php');
 
   $sql = "SELECT * FROM water WHERE 'Name'='".$_POST['Name']."'";
   $query = mysqli_query($con,$sql);
   while($row = mysqli_fetch_assoc($query))
   {
         $data = $row;
   }
    echo json_encode($data)
?>