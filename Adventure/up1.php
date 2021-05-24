<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>user portal</title>
</head>
<style type="text/css">
	.bg{
			background-image: url('img/12.jpg');
			background-size: 1540px;
</style>
<body class="bg">
	<h1 style="color:blue;font-style: italic;font-size:50px;text-align: center;">USER PORTAL</h1>
<?php
echo "WELCOME".$_SESSION["email"];
?>
<span style="color:brown;margin-left:300px;font-family:sans-serif;font-size:30px;"><a href="delete1.html"style="text-decoration: none;color: brown;"> DELETE ACCOUNT</a></span>
   <span style=";margin-left:80px;font-family:sans-serif;font-size:30px;color: brown;"><a href="show1.html"style="text-decoration: none;color:brown;">SHOW DETAILS</a></span>
   <span style="color:brown;margin-left:80px;font-family:sans-serif;font-size:30px; "><a href="edit1.html"style="text-decoration: none;color: brown;"> EDIT PROFILE</a></span>
  
</body>
</html>