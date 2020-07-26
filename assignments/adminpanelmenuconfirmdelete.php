<?php

	include('adminpanelmenudelete.inc.php');

if(isset($_POST['confirmdeleteitems-submit'])){
	
	require 'dbh.inc.php';
	

	$sql = "DELETE FROM menu WHERE ItemId=$id";
	$query_run = mysqli_query($conn,$sql);
	
	if($query_run){
		
		
		header("Location:../assignments/adminpanelmenu.php?delete=success");
	}
	else{
		
		header("Location:../assignments/adminpanelmenu.php?delete=failed");
	}
}

