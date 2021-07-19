
<?php include('top.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="card">
            <div class="card-body">
              <h1 class="grid_title">sell master</h1>
              <div class="row grid_box">
				
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                       
                           <th width="10%"> trans id</th>
                            <th width="10%">customer</th>
                            <th width="20%">product</th>
                            <th width="20%">rate</th>
                            <th width="10%">qty</th>
                      
                            <th width="10%">total</th>
                            <th width="20%">date</th>
                            <th width="20%">edit</th>
                            <th width="20%">delete</th>
                            
                        </tr>
                       
                      </thead>
                      <tbody>
                      <?php
                        include"database.inc.php";
                        $query="select t.trans_id,p.product_name,p.p_id,t.cust_id,t.rate,t.qty,c.cust_name,t.total,t.trans_date from transaction as t, product as p,customer as c where t.p_id=p.p_id and c.cust_id=t.cust_id";
                        $data=mysqli_query($con,$query);
                        $i=0;
                        while($res=mysqli_fetch_assoc($data))
                        { 
                          $i++;
                        	$total=$res["total"];
                          $trans_id=$res["trans_id"];
                        	$pid=$res["p_id"];
                          $customer=$res["cust_name"];
                          $name=$res["product_name"];
                        	$cid=$res["cust_id"];
                        	$rate=$res["rate"];
                        	$date=$res["trans_date"];
                          $pieces = explode(" ", $date);
                           
                        	$qty=$res["qty"];
                        	echo"
                            <tr>
                            <td>$trans_id</td>
                            <td>$customer</td>
                            <td>$name</td>
                            <td>&#8377; $rate</td>
                            <td>$qty</td>
                            <td>$total</td>
                            <td>$pieces[0]</td>
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
