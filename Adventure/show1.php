<?php
$host="localhost:3306";
$user='root';
$pass="";
$db='Adventure';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
  echo" <h1> GLACIAL RAFTING ADVENTURE</h1>";
 
$sql="select name,email,addr,city,cont,aadhar,dob,hd,packages,pwd,pwd1 from uttar ";
 if(mysqli_query($con,$sql))
    {
	    $result = $con->query($sql);
		if ($result->num_rows > 0) 
		{
           while($row = $result->fetch_assoc())
		    {
        echo "
		<table style='border: 2px solid black;width:1000px;text-align:center'>
		<th> NAME</th>
		<th> EMAIL</th>
		<th> ADDRESS</th>
		<th> CITY</th>
		<th> CONTACT NUMBER</th>
	    <th>ID PROOF</th>
		<th>DATE OF BIRTH</th>
		<th>HOLIDAY DATE</th>
	    <th>PACKAGES OF UTTARAKHAND</th>
		<th>PASSWORD</th>
		<th>CONFIRM PASSWORD</th>
		<tr>
		 <td>". $row["name"]. "</td>
		 <td>" . $row["email"] . "</td>
		  <td>" . $row["addr"] . "</td>
		 <td>" . $row["city"] . "</td>
		 <td>" . $row["cont"] . "</td>
		 <td>" . $row["aadhar"] . "</td>
		  <td>" . $row["dob"] . "</td>
		  <td>" . $row["hd"] . "</td>
		   <td>" . $row["packages"] . "</td>
		 <td>" . $row["pwd"] . "</td>
		  <td>" . $row["pwd1"] . "</td>
		
		</tr>
		</table>
		
	
		 }
		 }
 
 else
  {
     echo"<script> alert('Somthing Went Wrong')</script>";
  }  
  }
?>
 