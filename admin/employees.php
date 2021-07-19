<?php include('top.php');?>
<div class="card">
            <div class="card-body">
              <h1 class="grid_title">Employee Master</h1>
			  <a href="addemployee.php" class="add_link">Add Employee</a>
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">id</th>
                            <th width="30%">Username</th>
                            <th width="50%">Password</th>
                             <th width="30%">Edit</th>
                             <th width="30%">Delete</th>

                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        include"database.inc.php";
                        $query="select * from users";
                        $data=mysqli_query($con,$query);
                        $i=0;
                        while($res=mysqli_fetch_assoc($data))
                        {
                          $name=$res["username"];
                      $i++;

                          $password=$res["password"];
                          
                          echo"
                            <tr>
                            <td>$i</td>
                            <td>$name</td>
              
                            <td>$password</td>
                          
                            <td><a href=''class='btn btn-primary'>edit</a></td>
                            
                          <td><a href=''class='btn btn-danger'>delete</a></td>
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