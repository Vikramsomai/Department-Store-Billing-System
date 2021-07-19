<?php include('top.php');?>
<?php
include'function.inc.php';
$id=$_REQUEST["id"];
                        include"database.inc.php";
                        $query="select * from category where id=$id";
                        $data=mysqli_query($con,$query);
                        $res=mysqli_fetch_assoc($data);
                        
                        	$name=$res["cat_name"];
                        	
                        	$desc=$res["description"];
                        
                        	
       
if(isset($_POST["submit"]))
{
	$edit_name=htmlspecialchars($_POST["name"]);

	$edit_desc=htmlspecialchars($_POST["desc"]);
	
$query="update category set cat_name='$edit_name',description='$edit_desc' where id='$id' ";
$data=mysqli_query($con,$query);
if($data)
{
	redirect("category.php");
}
else{
  echo "failed";
}


}
           
                        ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row">
			<h1 class="grid_title ml10 ml15">update category</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">category name</label>
                      <input type="text" class="form-control" placeholder="name" name="name" required value="<?php if(isset($name)){ echo $name ;} ?>">
					  
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">category description</label>
                      <input type="text" class="form-control" placeholder="description" name="desc" required value="<?php if(isset($desc)){ echo $desc ;} ?>">
					  
                    </div>
                    
                  
                    <input type="submit" class="btn btn-primary mr-2" name="submit">
                  </form>
                </div>
              </div>
            </div>
            
		 </div> 
</body>
</html>
<?php include('footer.php');?>