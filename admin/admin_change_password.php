<?php include('top.php');?>
<?php
if(isset($_POST["submit"]))
  {
    
  }
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">change password</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">new password</label>
                      <input type="text" class="form-control" placeholder="new password" name="pass" required value="">
					  
                    </div>
                     <div class="form-group">
                      <label for="exampleInputName1">confirm password</label>
                      <input type="text" class="form-control" placeholder="confirm password" name="confirm" required value="">
            
                    </div>
                    <input type="submit" class="btn btn-primary mr-2" name="submit">
                  </form>
                </div>
              </div>
            </div>
            
		 </div
     <?php include('footer.php');?>