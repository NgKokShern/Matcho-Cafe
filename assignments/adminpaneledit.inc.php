<?php

if(isset($_POST['reservationedit-submit'])){
	
	require 'dbh.inc.php';
	
	$id = $_POST['id'];
	$name = $_POST['ReservationName'];
	$email = $_POST['ReservationEmail'];
	$phone = $_POST['ReservationPhone'];
	$NumberPerson = $_POST['persons'];
	$date = $_POST['ReservationDate'];
	$time = $_POST['time'];
	$message = $_POST['message'];
	
	

	$sql = "UPDATE reservation SET  CName='$name',CEmail='$email',Phone='$phone',NumPerson='$NumberPerson',RDate='$date',RTime='$time',CMessage='$message' WHERE idUsers='$id'";
	$query_run = mysqli_query($conn,$sql);
	
	if($query_run){
		
		header("Location:../assignments/adminpanel.php?update=success");
	}
	else{
		
		header("Location:../assignments/adminpanel.php?update=failed");
	}
}
