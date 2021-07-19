<?php
error_reporting(0);
$con=mysqli_connect('localhost','root','','department');
session_start();
if(!isset($_SESSION['users'])){
	header('location:login_emp.php');
}
if(isset($_POST["add"]))
{
     $cust_name=htmlspecialchars($_POST["cust_name"]);
     $cust_mobile=htmlspecialchars($_POST["mobile"]);
     if(empty($cust_name))
     {
         $msg_name="please fill customer name";
     }
     else if(empty($_POST["mobile"]))
     {
        $msg_mobile="<span class='text-danger'>please fill mobile number</span>";
       
    }
    else if(!preg_match('/^[0-9]{10}+$/', $cust_mobile))
    {
       
       $msg_mobile="<span class='text-danger'>number should be 10 digit</span>";
    }
    else if(!empty($cust_mobile) && !empty($cust_name) && preg_match('/^[0-9]{10}+$/', $cust_mobile)) {
        
        
    
     $cust_date=$_POST["date"];

//session
$_SESSION["cust_name"]=$cust_name;
$_SESSION["cust_date"]=$cust_date;
$_SESSION["cust_mobile"]=$cust_mobile;

//



    $qty= $_POST["hidden_qty"];
  // echo  $_POST["hidden_id[]"];
     $_POST["product_name"];
    $rate=$_POST["rate"];
   /// echo $rate;
    //echo "sdeg".$_POST["data-rate"];
    $ratedata=explode(",",$_POST["product_name"]);
	$name=$ratedata[0];
	//echo $name;
	$rate=$ratedata[1];
	//echo $rate;
	$id=$ratedata[2];
    $_SESSION["id"]=$id;
 //$name=$_POST["product_name"];
    if(isset($_SESSION["order"]))
    {
        $myitems=array_column($_SESSION["order"],"product_name");
        //echo $myitems;
       
        if(in_array($name,$myitems))
        {
            echo "<script>alert('data already inserted')</script>";
        }
        else{
           
        
         $count=count($_SESSION["order"]);
         $_SESSION["order"][$count]=array("p_id"=>$id,"product_name"=>$name,"qty"=>$qty,"price"=>$rate);
        
         
        }
    }
    else{
        $_SESSION["order"][0]=array("p_id"=>$id,"product_name"=>$name,"qty"=>$qty,"price"=>$rate);
        
        
    }
}
}
if(isset($_POST["checkout"]))
{
     $query="insert into customer(cust_name,contact,add_date)values('$_SESSION[cust_name]',$_SESSION[cust_mobile],$_SESSION[cust_date])";
    $data=mysqli_query($con,$query);
    
}


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
		*,
*::before,
*::after {
  box-sizing: border-box;
}
*{
    list-style: none;
    outline: none;
    padding: 0;
    margin: 0;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}
h1,h2,h3,h4,h5,h6{
    margin: 0.5rem;
}
p{
    letter-spacing: 2px;
    padding: 1rem;
    word-spacing: 2px;
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


/*table  css */
.table{
    border-radius: 15px;
    border-collapse: collapse;
    box-shadow: 0px 5px 20px 0px rgba(0,0,0,.05);
    width:90%;
    max-width: 100%;
    overflow: hidden;
    font-size:20px;
    margin: 20px;
}
.table th{
   padding: 10px 15px;
   text-align: left;
   background: rgb(244,247,248);
   color:rgba(0,0,0,.6);
   font-weight: 500;
}

.table td{
  padding: 12px 15px;
}
.table tr
{
    transition: all .25s ease;
    color:rgba(0,0,0,.6);
    cursor: pointer;
}
.table tr:hover{
    background: rgba(25,91,255,.1);
    color:rgb(25,91,255);
}
/*end table */
.input-box{
    width:15rem;
    height: auto;
}
.input{
    padding:8px;
    width: 100%;
    font-size: 18px;
    margin:0.5rem;
    outline:none;
    border:2px solid transparent;
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
/* head   */
.head{
height: 80px;
width: 100%;
background: #FFF;
display: flex;
justify-content: space-between;
align-items: center;
box-shadow: 0 5px 20px 0 rgba(11,7,110,.04);
}
/*logo */
.logo{
padding-left:1.5rem;
font-size:2rem;
font-weight: 600;
flex:1;
}
/*nav */
.nav-bar{
justify-content: center;
flex:2;
}
.nav-bar ul li{
    display: inline-block;
    padding-left: 1rem;
    font-size: 22px;
     color: rgb(103, 110, 139);
    font-weight: 400;
    cursor:pointer;
    text-transform: capitalize;
}
		form{
			display: flex;
			justify-content: flex-start;
			flex-direction: column;
		    }
		    .form1{
		    	display: flex;
			 justify-content: flex-start;
			 align-items: center;
			width:100%;

		    }
		.input-box{
         margin-left: 40px;
		}
		.date{
			width:200px;
		}
      .add-item{
      	display: flex;
      	 justify-content: flex-start;
			 align-items: center;
			
      }
	  .msg{
		  color:green;
		  position: relative;
		  top:10px;
		  left:20px;
	  }
</style>
<div class="head">
	<div class="logo">
		caroline bill
	</div>
	<div class="nav-bar">
		<ul>
			<li><a href="logout_emp.php">logout</a></li>
		</ul>
	</div>
</div>
<?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
 
        function button1() {
    
           unset($_SESSION["order"]);
           unset($_SESSION["cust_name"]);
           unset($_SESSION["cust_mobile"]);
          
        }
       
    ?>

<div class="customer-section">
	<h2> Customer Details</h2>

	

	<form method="post" >
	<div class="form1">
		<div class="input-box">
		<label>Customer name:</label>
		<input type="text" name="cust_name"class="input"value="<?php if(isset($cust_name)){echo $cust_name;}elseif( isset($_SESSION["cust_name"])){echo $_SESSION["cust_name"];} ?>">
        <span class="alert text-danger"><?php  if(isset($msg_name)){echo $msg_name;}?></span>

    </div>
	<div class="input-box">
		<label>Mobile no:</label>
		<input type="number" name="mobile"class="input" value="<?php if(isset($cust_mobile)){echo $cust_mobile;}elseif( isset($_SESSION["cust_mobile"])){echo $_SESSION["cust_mobile"];} ?>">
        <span class="alert "><?php  if(isset($msg_mobile)){echo $msg_mobile;}else{ echo $msg_mobiles;}?></span>
	</div>
  <div class="input-box">
		<label>Bill date:</label>
		<input type="date" name="date"class="input date"value="<?php  
    echo $date = date('Y-m-d');?>">
   </div>
</div>


   <div class="bill-items">
   	<h2>Billing items</h2>
	 
   	<div class="add-item">
   		
      <div class="input-box">
      	<label>Product</label>
      	<select name="product_name"class="input">
		<?php 
		
//echo" <input type='hidden'value='$rate'name='rate'>";
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
                            if($qty<=0)
                            {
                              echo "product not available";
                            }
                            else{
                        	echo "<option value='$name , $rate , $id' data-rate='$rate'>$name</option>";
                            }
                        }
                  ?>

                  

		</select>
</div>
<div class="input-box">
		 <label>Quantity</label>
     <input type="number" name="hidden_qty" value="1" class="input">
         </div>
                    <input type="hidden" name="name" class="input"value="<?php echo $name;?>">
                  
                   <input type='hidden'value='<?php echo $rate; ?>'name='rate'>
                  <input type="hidden" name="hidden_id[]" value="<?php echo $id; ?>" />
	
	       <div class="input-box">
	     <input type="submit" name="add" value="Add item"class="btn btn-primary">
	       </div>
   
   </div>
	</form>

<form method="post">
  
    <table class="table" style="margin-left:50px">
  <thead class=" ">
    <tr>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  <?php 
   $total=0;
  if(isset($_SESSION["order"]))
  {
     
  foreach($_SESSION["order"] as $key=> $value)
  {
      $total=$total+$value['price']*$value['qty'];
  echo "
  <tr>

  <td>$value[product_name]</td>
  <td>$value[qty]</td>
  <td>&#8377; $value[price]</td>
  
  ";
  if(isset($_POST["checkout"]))
  {
     $query_i="INSERT INTO  transaction (cust_id,p_id,rate,qty,total)values((select cust_id from customer where cust_name='{$_SESSION['cust_name']}'),{$value['p_id']},{$value['price']},{$value['qty']},{$value['price']}*{$value['qty']})";
    $data_i=mysqli_query($con,$query_i);
    if($data_i)
    {
        echo"
        <div class='alert alert-success alert-dismissible fade show' role='alert'>
          successfully inserted
          </div>"; 
    $query="update product set qty= qty-{$value['qty']} where p_id={$value['p_id']}";
	     $data=mysqli_query($con,$query);
    }
    else{
        echo mysqli_error();
    }
  }
?>
<td>&#8377; <?php echo $value['price']*$value['qty']?></td>

  
</tr>
<tr>

<?php
    
  }
}

  ?>
    
    <tr>
    <td style=" direction: rtl;"colspan="3">Total</thd>
<td >&#8377;<?php echo $total;?></td>
</tr>

<tr style="background:white">
<td style=" direction: rtl;" colspan="4">
<input type="submit"value="checkout"name="checkout"class="btn btn-primary"></td>
<!--<td><input type="button"value="print"name="print"class="btn btn-primary"></td>-->
<td><form method="post">
    	<div class="input-box">
        <input type="submit" name="button1"
                class="btn btn-primary" value="clear" />
          </div>
        
    </form></td>
    <td>
        <?php 
        if(isset($_POST["checkout"]))
        {
        $con=mysqli_connect('localhost','root','','department');
        $query="SELECT * FROM transaction WHERE trans_id=(SELECT max(trans_id) FROM transaction);";
        $data=mysqli_query($con,$query);
        $res=mysqli_fetch_assoc($data);
         $billid=$res["cust_id"];
        }
        echo" <a href='bill.php?id=$billid'class='btn btn-primary'>print</a>";
        
        ?>
</td>
</tr>
  </tbody>
</table>
</form>
<script>

</script>