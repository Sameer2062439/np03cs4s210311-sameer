<?php 
  include('conn.php');
 
   $sql = "SELECT * FROM orders WHERE 'Name'='".$_POST['Name']."'";
   $query = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_assoc($query))
   {
         $data = $row;
   }
    echo json_encode($data)
?>