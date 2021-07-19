<?php include('top.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="card">
            <div class="card-body">
              <h1 class="grid_title">Customar Details</h1>
			  
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th width="10%">id</th>
                           <th width="20%"> customar name</th>
                            
                            <th width="20%">number</th>
                            <th idth="20%">edit</th>
                            <th idth="20%">delete</th>
                           
                            
                            
                        </tr>
                       
                      </thead>
                      <tbody>
                      <?php
                        include"database.inc.php";
                        $query="select * from customer";
                        $data=mysqli_query($con,$query);
                        
                        while($res=mysqli_fetch_assoc($data))
                        { $i=0;
                          $i++;
                        	$customer=$res["cust_name"];
                        
                          $cid=$res["cust_id"];
                          $contact=$res["contact"];
                        	echo"
                            <tr>
                            
                            <td>$cid</td>
                            <td>$customer</td>
                            <td>$contact</td>
                            
                            
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
</body>
</html>
<?php include('footer.php');?>
