<?php
session_start();
include"../config/config.php";
if(isset($_POST["login"]))
{
	$username=mysqli_real_escape_string($conn,$_POST["username"]);
	$password=mysqli_real_escape_string($conn,$_POST["password"]);
    $query="select * from users where username='$username' and password='$password' " ;
    $data=mysqli_query($conn,$query);
 
    if(mysqli_num_rows($data)>0)
    {
    	 print_r($data);
     $_SESSION['users']="user";
     header('location:index.php');
    }
    else
    {
    	$msg="invalid password and username";
    }
  

}
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<title></title>
</head>
<body>
	<style>
    *{
        text-transform:capitalize;
    }
		/* head   */
.head{
height: 80px;
width: 100%;
background: #FFF;
display: flex;
justify-content: space-between;
align-items: center;
box-shadow: 0 5px 20px 0 rgba(11,7,110,.04);
}
/*logo */
.logo{
padding-left:1.5rem;
font-size:2rem;
font-weight: 600;
flex:1;
}
/*nav */
.nav-bar{
justify-content: center;
flex:2;
}
.nav-bar ul li{
    display: inline-block;
    padding-left: 1rem;
    font-size: 22px;
     color: rgb(103, 110, 139);
    font-weight: 400;
    cursor:pointer;
    text-transform: capitalize;
}
		.input-box{
    width:15rem;
    height: auto;
}
label{
    font-size: 18px;
    font-weight: 400;
    padding: 4px;
    margin:10px;
}
.input{
    padding:8px;
    width: 100%;
    font-size: 18px;
    margin:0.5rem;
    outline:none;
    border:2px solid transparent;
    background: rgb(240,243,244);
    border-radius:14px;
    overflow:hidden;
    transition: all .25s ease;
}
.input:hover
{
    border:2px solid rgba(0,0,0,.1);
}
.input:focus{
    border:2px solid rgb(25,91,255);
    padding-left: 15px;
    padding-right: 5px;
}
.error{
    margin-left:0.8rem;
     color:#495057;
     padding: 0.1rem;
}
.container{
	display:flex;
	justify-content:center;
	align-items:center;
}
.btn-my{
	margin-left:10px;
}
		</style>
<nav class="navbar navbar-expand-lg navbar-light  head">
      <a class="navbar-brand logo" href="../index.php">caroline software</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
</nav>
<div class="container">

	<form method="post">
		
			<h4 class="" style="color:red;"><?php if(isset($msg)){echo $msg;}?></h4>
		
	
			<h3>Employee login</h3>
	
		<div class="input-box">
			<label>username</label>
			<input type="text" name="username" class="input"placeholder="adam">
		</div>
		<div class="input-box">
			<label>password</label>
			<input type="password" name="password" class="input"placeholder="123">
		</div>
		<br>
		<div class="input-box">
			<input type="submit" name="login" value="login"class="btn btn-primary  btn-block btn-my">
       </div>
	</form>
</div>
</body>
</html>