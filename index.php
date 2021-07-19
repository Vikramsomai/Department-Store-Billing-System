<!DOCTYPE html>
<html>
<head>
	<title>Department Store Billing System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<style type="text/css">
.head{
height: 80px;
width: 100%;
background: #FFF;
display: flex;
justify-content: space-between;
align-items: center;
box-shadow: 0 5px 20px 0 rgba(11,7,110,.04);
}
  .banner img{
    height:400px;
    width:400px;
  }
  .logo{
padding-left:1.5rem;
font-size:2rem;
font-weight: 600;
flex:1;
}
.font{
  font-size:20px;
}
</style>
<nav class="navbar navbar-expand-lg navbar-light  head">
      <a class="navbar-brand logo nav-link" href="index.php">Caroline Software</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link font" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link font" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link font" href="contact.php">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <button class="btn btn-primary">Sign in</button>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="admin/index.php">Admin</a>
              <a class="dropdown-item" href="employee/index.php">Employee</a>
             
          </li>
         
      </div>
      </nav>


<div class="section">
<!--	<h1> department store billing system</h1>
	<p>we provide best software for business </p>-->
  <div class="about">
  <h1> Department Store Billing System</h1>
	<p class="text-primary">we provide best software for business </p>
  <a class="btn btn-primary center-block mx-auto px-md-5" href="contact.php">contact</a>
  </div>
  <div class="banner">
  <img src="images/undraw_business_shop_qw5t.svg" alt="" srcset="">
  </div>
		</div>
<?php include'footer.php';?>
</body>
</html>