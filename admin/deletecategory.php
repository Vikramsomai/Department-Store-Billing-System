<?php
include('database.inc.php');
include('function.inc.php');
$id=$_REQUEST["id"];
if(!empty($id))
{
$query="delete from category where id=$id";
$data=mysqli_query($con,$query);
if($data)
{
	redirect("category.php");
}


}
else
{
  redirect("index.php");
}
?>