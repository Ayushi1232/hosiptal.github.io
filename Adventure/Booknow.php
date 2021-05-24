<?php
$host="localhost:3306";
$user='root';
$pass="";
$db='Adventure';
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
  echo" <h1>GLACIAL RAFTING ADVENTURE</h1>";
$sql="insert into uttar values('".$_POST['name']."','".$_POST['email']."','".$_POST['addr']."','".$_POST['city']."', '".$_POST['cont']."', '".$_POST['aadhar']."', '".$_POST['dob']."', '".$_POST['hd']."', '".$_POST['packages']."', '".$_POST['pwd']."','".$_POST['pwd1']."')";
  if($_POST['pwd']==$_POST['pwd1'])
  
    if(mysqli_query($con,$sql))
    {
	  echo"<script> alert('Registration Done Successfully .... Thank You')</script>";
	  header("Location:home.html");
	}
   
  
  
  
  else
  {
   echo"<script> alert('Somthing Went Wrong')</script>";
  header("Location: Booknow.html");
  }  
}

?>
 