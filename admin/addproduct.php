<?php include('top.php');?>

<?php
include('database.inc.php');
include('function.inc.php');
if(isset($_POST["submit"]))
{
	$name=htmlspecialchars($_POST["name"]);
	$category=htmlspecialchars($_POST["cat"]);
	$desc=htmlspecialchars($_POST["desc"]);
	$rate=htmlspecialchars($_POST["rate"]);
	$qty=htmlspecialchars($_POST["qty"]);
	/*
if(empty($_POST["name"]))
{
$nmsg="enter product name";
}
else{
	$name=$_POST["name"];
}
if(empty($_POST["cat"]))
{
$cmsg="enter product category";
}
else{
	$category=$_POST["cat"];
}
if(empty($_POST["desc"]))
{
$dmsg="enter product description";
}
else{
	$desc=$_POST["desc"];
}
if(empty($_POST["rate"]))
{
$rmsg="enter product rate";
}
else{
	$rate=$_POST["rate"];
}
if(empty($_POST["qty"]))
{
$qmsg="enter product qty";
}
else{
	$qty=$_POST["qty"];
}
*/
$query="insert into product(product_name,category,description,rate,qty)values('$name','$category','$desc','$rate','$qty')";
$data=mysqli_query($con,$query);
if($data)
{
	redirect("product.php");
}


}

?>
<style type="text/css">
	input-box{
    width:15rem;
    height: auto;
}
*{
  text-transform: capitalize;
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
              <div class="card">
                <div class="card-body">

                  <form class="forms-sample" method="post">
                    <div class="form-group">
                      <label for="exampleInputName1">Product Name</label>
                      <input type="text" class="form-control" placeholder="name" name="name" required value="">
					  
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3" required>Product Category</label>
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
                      <label for="exampleInputName1">Product Description</label>
                      <textarea name="desc"class="form-control" ></textarea>
					
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">product rate</label>
                      <input type="number" class="form-control" placeholder="rate" name="rate" required value="">
					 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">product qty</label>
                      <input type="number" class="form-control" placeholder="qty" name="qty" required value="">
					
                    </div>
                    <input type="submit" class="btn btn-primary mr-2" name="submit">
                  </form>
                </div>
              </div>
            </div>
            
		 </div>

<?php include('footer.php');?>
