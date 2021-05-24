<?php

$host="localhost:3306";
$user='root';
$pass="";
$db='Adventure';
$email=$_POST['email'];
$pwd=$_POST['pwd'];
session_start();
$_SESSION["email"]=$email;
 $con=mysqli_connect($host,$user,$pass,$db);
 if($con)
 { 
	 echo"Connnected";
     $sql="select * from uttar where email='$email' and pwd='$pwd' ";
     $result = mysqli_query($con,$sql);
     $check = mysqli_fetch_array($result);
     if(isset($check))
    {
        echo"welcome";
    echo header("Location:up.php");
      }
     else
     {
        
     echo header("Location:Book.html");;
     }
 
}
else
{
 echo"Not Connected";
}
    		
    	

?>