<?php include('top.php');?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
	.box{
		height: 200px;
		width: 200px;
		border-radius: 20px;
		border: 1px solid #ccc;
		display: flex;
		justify-content: center;
		flex-direction: column;
		align-items: center;
	}
	.container{
		display: flex;
		justify-content:space-between;
		align-items: center;
		font-size: 40px;
	}
	.box1{
		background: #161d6f;
		color:#FFF;
	}
	.box2{
		background: #51c2d5;
		color:#FFF;
	}
	.box3{
		background: #16c79a;
		color:#FFF;
	}
	@media(max-width: 900px)
	{
		.container{
			flex-direction: column;
			//margin: 20px;
		}
		.box{
			margin: 20px;
		}
	}
</style>
<div class="container">
<div class="box box1">
         <?php
                       include"database.inc.php";
                        $query="select * from product";
                        $data=mysqli_query($con,$query);
                        $row=mysqli_num_rows($data);
                        echo $row;
                    
                        ?>
                        <h3>Total Product</h3>
	</div>
	<div class="box box2">
		 <?php
                       include"database.inc.php";
                        $query="select * from transaction";
                        $data=mysqli_query($con,$query);
                        $row=mysqli_num_rows($data);
                        echo $row;
                    
                        ?>
		 <h3>Total Sales</h3>
	</div>
	<div class="box box3">
		 <?php
                       include"database.inc.php";
                        $query="select * from customer";
                        $data=mysqli_query($con,$query);
                        $row=mysqli_num_rows($data);
                        echo $row;
                    
                        ?>
		 <h3>Total Customer</h3>
	</div>
	
</div>
</body>
</html>
<?php include('footer.php');?>
