<?php
include('database.inc.php');
include('function.inc.php');
$id=$_REQUEST["id"];
if(!empty($id))
{
$query="delete from product where p_id=$id";
$data=mysqli_query($con,$query);
if($data)
{
	redirect("product.php");
}


}
else
{
  redirect("index.php");
}
?>