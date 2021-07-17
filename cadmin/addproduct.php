<?php
include"header.php";
?>
<style type="text/css">
	.container{
		margin-top:60px;
		justify-content: space-between;
		align-items: flex-start;
	}
	.input-box{
		width: 100%;
	}
	.input{
		width:300px;
	}
</style>
<div class="container">
	<form method="post">
<div class="input-box">
	<label>product name</label>
	<input type="text" name="name"class="input">
	<label>product category</label>
	<input type="text" name="name"class="input">

</div>
<div class="input-box">
	<label>product description</label>
	<input type="text" name="name"class="input">
	<label>product rate</label>
	<input type="text" name="name"class="input">
</div>
<div class="input-box">
	<label>product qty</label>
	<input type="text" name="name"class="input">
	
	
	
</div>
<div class="input-box">
	<input type="submit" name=""value="add product" class="btn btn-primary">
	
	
	
</div>

	</form>
	</div>