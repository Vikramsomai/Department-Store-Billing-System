<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>
<div class="head"id="head">
            <a href="index.php" class="btn btn-primary"style="margin-right:20px;">back</a>
            <button class="btn btn-primary" onclick="printbill('printarea')">print</button>
  </div>
<body>
    <style >
        .container{
            display:flex;
            justify-content:center;
           // align-items:center;
            flex-direction:column;
            width:100%;
            height:100%;
            margin:60px;
            padding:20px;
            font-size:18px;
        }
        .heading{
            align-self:center;
            font-size:20px;
        }
        
       
        .customar{
          //margin:20px;
        }
        .customar span{
         line-height:45px;
         margin:10px;
        // margin:50px;
        }
        body{
    margin:40px;
    
  }
        .head{
height: 80px;
width: 100%;
background: #FFF;
display: flex;
margin-left:100px;
align-items: center;
justify-content:center;
box-shadow: 0 5px 20px 0 rgba(11,7,110,.04);
}

@media print {
  .container{
   // background:red;
  }
    .customar span{
       //  line-height:100px;
         margin:10px;
        // background:red;
        // margin:50px;
        }
        .heading h1{
         // margin-left:100px;
        }
}
        </style>
       
        <div id="printarea">
    <div class="container">
    <?php
 error_reporting(0);
 $id=$_REQUEST["id"];
 $total=0;
 $con=mysqli_connect('localhost','root','','department');
 $query="SELECT t.trans_id,p.product_name,c.cust_name,c.contact,t.qty,t.rate,t.trans_date FROM transaction as t inner join product as p on p.p_id=t.p_id inner join customer as c on c.cust_id=t.cust_id WHERE t.cust_id=$id";
  $data=mysqli_query($con,$query);
 $res=mysqli_fetch_assoc($data);
 
 $date=explode(" ",$res["trans_date"]);
 $billno=$res["trans_id"];
 $cust_name=$res["cust_name"];
 $contact= $res["contact"];
 ?>
        <div class="billno" style="margin-left:20px;">
            Bill no:<?php echo $billno; ?>
        </div>
        <div class="heading">
            <h1>Caroline Billing</h1>
        </div>
        
 
        <?php
       echo" <div class='customar'>
        <span>Customer Name:  $cust_name</span><br>
        <span>Customer Mobile:  $contact</span><br>
        <span>Billing Date:   $date[0]    </span><br>
            
        </div>";
?>
        <div class="bill-table">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"> Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
      <?php 
      $id=$_REQUEST["id"];
      $total=0;
      $con=mysqli_connect('localhost','root','','department');
      $query="SELECT p.product_name,c.cust_name,c.contact,t.qty,t.rate FROM transaction as t inner join product as p on p.p_id=t.p_id inner join customer as c on c.cust_id=t.cust_id WHERE t.cust_id=$id";
       $data=mysqli_query($con,$query);
      while($res=mysqli_fetch_assoc($data))
      {
          $name=$res["product_name"];
          $qty=$res["qty"];
          $price=$res["rate"];
          $total=$total+$res['rate']*$res['qty'];
     echo "
     <tr>
    
      <td>$name</td>
      <td>$qty</td>
      <td>$price</td>
      <td>".($qty*$price)."</td>
    </tr>";
      }
    ?>
    <tr>
        <th>Grand Total</th>
        <td><?php echo $total;?></td>
    </tr>
  </tbody>
</table>
        </div>
    </div>
    </div>
</body>
<script>
   /* $(document).ready(function()
    {
      
    })*/
    function printbill(pre)
    {
       
        document.getElementById("head").style="display:none";
     
        window.print();
      
      document.getElementById("head").style="display:block";
    }

    </script>
</html>