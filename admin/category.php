<?php 
include('top.php');


?>
  <div class="card">
            <div class="card-body">
              <h1 class="grid_title">Category Master</h1>
			  <a href="addcategory.php" class="add_link">Add Category</a>
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">S.No #</th>
                            <th width="30%">Category</th>
                            <th width="50%">description</th>
                             <th width="30%">edit</th>
                             <th width="30%">delete</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        include"database.inc.php";
                        $query="select * from category";
                        $data=mysqli_query($con,$query);
                        while($res=mysqli_fetch_assoc($data))
                        {
                          $name=$res["cat_name"];
                          $id=$res["id"];
                          $desc=$res["description"];
                          
                          echo"
                            <tr>
                            <td>$id</td>
                            <td>$name</td>
              
                            <td>$desc</td>
                          
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
        
<?php include('footer.php');?>