<?php
$host="localhost:3306";
$user='root';
$pass="";
$db='Adventure';
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
  echo"Connnected";
  
   $name= $_POST['name'];
    $email= $_POST['email'];
     $addr= $_POST['addr'];
     $cont=$_POST['cont'];
 $sql= "UPDATE uttar SET email=\"$email\",addr=\"$addr\",cont=\"$cont\" where name=\"$name\"";
   if(mysqli_query($con,$sql))
    
  {
   echo"<script>alert('Data update successfully')</script>";
    echo"welcome";
    echo header("Location:up.html");
  }
  else{
    echo"<script>alert('data is not updated')</script>";
  }
}
else
{
 echo"Not Connected";
}
?>