<?php include('top.php');?>
<?php
include('database.inc.php');
if(isset($_POST["submit"]))
  {
   $pass=htmlspecialchars($_POST["pass"]);
   $confirm=htmlspecialchars($_POST["confirm"]);
   if($pass===$confirm)
   {
    $query="update admin set password='$pass' where username='admin' ";
    $data=mysqli_query($con,$query);
    if($data)
    {
    	echo"sucess";
    } 
    else
    {
    	echo "no";
    }
  }
}
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Change Password</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">New Password</label>
                      <input type="text" class="form-control" placeholder="new password" name="pass" required value="">
					  
                    </div>
                     <div class="form-group">
                      <label for="exampleInputName1">Confirm Password</label>
                      <input type="text" class="form-control" placeholder="confirm password" name="confirm" required value="">
            
                    </div>
                    <input type="submit" class="btn btn-primary mr-2" name="submit">
                  </form>
                </div>
              </div>
            </div>
            
		 </div
     <?php include('footer.php');?>