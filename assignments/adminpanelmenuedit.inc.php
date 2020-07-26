<?php

if(isset($_POST['editnewitems-submit'])){
	
	require 'dbh.inc.php';
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$image = $_POST['image'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$type = $_POST['type'];
	
	

	$sql = "UPDATE menu SET  ItemName='$name', ItemImage='$image', ItemPrice='$price', ItemDesc='$description',ItemType='$type' WHERE ItemId='$id'";
	$query_run = mysqli_query($conn,$sql);
	
	if($query_run){
		
		header("Location:../assignments/adminpanelmenu.php?update=success");
	}
	else{
		
		header("Location:../assignments/adminpanelmenu.php?update=failed");
	}
}
