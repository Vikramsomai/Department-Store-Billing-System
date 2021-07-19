<?php include('top.php');?>

<?php
include('database.inc.php');
include('function.inc.php');
if(isset($_POST["submit"]))
{
	$name=htmlspecialchars($_POST["name"]);
	$pass=htmlspecialchars($_POST["password"]);

$query="insert into users(username,password)values('$name','$pass')";
$data=mysqli_query($con,$query);
if($data)
{
	redirect("employees.php");
}


}

?>
<style type="text/css">
	input-box{
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
    border:2px solid #000;
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
.btn{
    padding:8px;
    margin:0.5rem;
    font-size:18px;
    outline: none;
    border:none;
    cursor:pointer;
    font-weight: 300;
    border-radius:4px;
}
.btn-primary{
    color:#fff;
    background: #00B4FF;
}
.btn-danger{
    color:#fff;
    background: red;
}
.btn-warning{
    color:#fff;
    background:#f0a500;
}
.btn-primary:active{
    box-shadow: 0px 4px 10px 0px #00D7FF;
}
.btn-danger:hover{
    box-shadow: 0px 4px 10px 0px #FF0042;
}
</style>
<div class="row">
			<h1 class="grid_title ml10 ml15">Add Product</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">-
                <div class="card-body">

                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Employee Name</label>
                      <input type="text" class="form-control" placeholder="name" name="name" required value="">
					  
                    </div>
                  
                    <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                     <input type="password" class="form-control" placeholder="name" name="password" required value="">
                    </div>
                   
                    <input type="submit" class="btn btn-primary mr-2" name="submit">
                  </form>
                </div>
              </div>
            </div>
            
		 </div>

<?php include('footer.php');?>
