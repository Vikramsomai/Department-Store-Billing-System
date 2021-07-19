<?php
include"config.php";
if(isset($_POST["login"]))
{ 
	$username=$_POST["username"];
	$password=$_POST["password"];
    $query="select * from users where username='$username' or password='$password' " ;
    $data=mysqli_query($conn,$query);

    if(mysqli_num_rows($data)>0)
    {
       header('location:admin/index.php');
    }
  

}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/caroline.css">
	<title></title>
</head>
<body>
<div class="container">
	
	<form method="post">
		<div class="input-box">
			<h1 class="btn btn-danger">error messsage</h1><br>
		</div>
		<div class="input-box">
			<h1>admin login</h1><br>
		</div>
		<div class="input-box">
			<label>username</label>
			<input type="text" name="username" class="input">
		</div>
		<div class="input-box">
			<label>username</label>
			<input type="password" name="password" class="input">
		</div>
		<div class="input-box">
			<input type="submit" name="login" value="login"class="btn btn-primary">
		</div>
	</form>
</div>
</body>
</html>