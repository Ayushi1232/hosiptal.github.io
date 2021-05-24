<?php
$host="localhost:3306";
$user='root';
$pass="";
$db='Adventure';
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
  echo"Connnected";
  $sql="delete from uttar where name='".$_POST['name']."' " ;           
  if(mysqli_query($con,$sql))
    {
     echo"<script> alert('Record Deleted')</script>";
	  header("Location:Book.html");
   }
  else
  {
   echo"<script> alert('Record not Deleted')</script>";
   header("Location: delete1.html");
  } 
 

}
else
{
 echo"Not Connected";
}
?>