<?php include('top.php');?>
<?php
include'function.inc.php';
$id=$_REQUEST["id"];
                        include"database.inc.php";
                        $query="select * from product where p_id=$id";
                        $data=mysqli_query($con,$query);
                        $res=mysqli_fetch_assoc($data);
                        
                        	$name=$res["product_name"];
                        	$cat=$res["category"];
                        	$rate=$res["rate"];
                        	$desc=$res["description"];
                        	$qty=$res["qty"];
                        	
       
if(isset($_POST["submit"]))
{
	$edit_name=htmlspecialchars($_POST["name"]);
	$edit_category=htmlspecialchars($_POST["cat"]);
	$edit_desc=htmlspecialchars($_POST["desc"]);
	$edit_rate=htmlspecialchars($_POST["rate"]);
	$edit_qty=htmlspecialchars($_POST["qty"]);
$query="update product set product_name='$edit_name',category='$edit_category',rate='$edit_rate',description='$edit_desc',qty='$edit_qty' where p_id='$id' ";
$data=mysqli_query($con,$query);
if($data)
{
	redirect("product.php");
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
			<h1 class="grid_title ml10 ml15">edit product</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">product name</label>
                      <input type="text" class="form-control" placeholder="name" name="name" required value="<?php if(isset($name)){ echo $name ;} ?>">
					  
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>product category</label>
                      <select name="cat" class="form-control">
                      	<?php
                        include"database.inc.php";
                        $query="select * from category";
                        $data=mysqli_query($con,$query);
                        while($res=mysqli_fetch_assoc($data))
                        {
                          $name=$res["cat_name"];
      
                         echo " <option value='$name'class='form-control'>$name
                      	</option>";
                           }
                           ?>
                      </select>
                       
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">product description</label>
                      <textarea name="desc"class="form-control"><?php if(isset($desc)){ echo $desc ;} ?></textarea>
					
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">product rate</label>
                      <input type="number" class="form-control" placeholder="rate" name="rate" required value="<?php if(isset($rate)){ echo $rate ;} ?>">
					 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">product qty</label>
                      <input type="number" class="form-control" placeholder="qty" name="qty" required value="<?php if(isset($qty)){ echo $qty ;} ?>">
					
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