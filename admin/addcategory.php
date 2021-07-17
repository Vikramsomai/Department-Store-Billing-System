<?php 
include"top.php";
include('database.inc.php');
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	
	$desc=$_POST["desc"];

	$query="insert into category(cat_name,description)values('$name','$desc')";
$data=mysqli_query($con,$query);
if($data)
{
	redirect("category.php");
}
}
?>
<div class="row">
			<h1 class="grid_title ml10 ml15">Add category</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">category name</label>
                      <input type="text" class="form-control" placeholder="name" name="name" required value="">
					  
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required> category description</label>
                    
                      <input type="text" class="form-control" placeholder="description" name="desc" required value="">
                        </div>
                    <input type="submit" class="btn btn-primary mr-2" name="submit">
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
<?php include"footer.php";?>