
<?php include('top.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="card">
            <div class="card-body">
              <h1 class="grid_title">Product master</h1>
			  <a href="addproduct.php" class="add_link">Add Product</a>
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%"> no</th>
                           <th width="20%"> name</th>
                            <th width="10%">Category</th>
                            <th width="20%">description</th>
                            <th width="20%">rate</th>
                            <th width="20%">qty</th>
                            <th width="20%">edit</th>
                            <th width="20%">delete</th>
                            
                        </tr>
                       
                      </thead>
                      <tbody>
                      <?php
                        include"database.inc.php";
                        $query="select * from product";
                        $data=mysqli_query($con,$query);
                        while($res=mysqli_fetch_assoc($data))
                        {
                        	$name=$res["product_name"];
                        	$id=$res["p_id"];
                        	$cat=$res["category"];
                        	$rate=$res["rate"];
                        	$desc=$res["description"];
                        	$qty=$res["qty"];
                        	echo"
                            <tr>
                            <td>$id</td>
                            <td>$name</td>
                            <td>$cat</td>
                            <td>$desc</td>
                            <td>$rate</td>
                            <td>$qty</td>
                            <td><a href='editproduct.php?id=$id'class='btn btn-primary'>edit</a></td>
                            
                          <td><a href='deleteproduct.php?id=$id'class='btn btn-danger'>delete</a></td>
                            </tr>
                        	";
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
				</div>
              </div>
            </div>
          </div>
</body>
</html>
<?php include('footer.php');?>
