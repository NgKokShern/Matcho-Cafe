<?php

if(isset($_POST['addnewitems-submit'])){
	
	require 'dbh.inc.php';
	
	$name = $_POST['name'];
	$image = $_POST['image'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$type = $_POST['type'];
	
	
	
	$sql = "INSERT INTO menu (ItemName,ItemImage,ItemPrice,ItemDesc,ItemType) VALUES (?,?,?,?,?)";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location:../assignments/adminpanelmenuform.php?error=sqlerror");
				exit();
			}
			else{
						
				mysqli_stmt_bind_param($stmt, "sssss",$name,$image,$price,$description,$type);
				mysqli_stmt_execute($stmt);
				
				session_start();
				$_SESSION['itemid'] = $row['ItemId'];
				 $_SESSION['itemname'] = $row['ItemName'];
				 $_SESSION['image'] = $row['ItemImage'];
				 $_SESSION['description'] = $row['ItemDesc'];
				 $_SESSION['type'] = $row['ItemType'];
						
				header("Location:../assignments/adminpanelmenu.php?add=success");
				exit();
						
			}
		
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	
}
	
