<?php

if(isset($_POST['login-submit'])){
	
	require 'dbh.inc.php';
	
	$usernameemail = $_POST['UsernameEmail'];
	$password = $_POST['password'];
	
	if(empty($usernameemail) || empty($password)){
		header("Location:../assignments/login.php?error=emptyfields");
		exit();
	}
	else{
		$sql = "SELECT * FROM users WHERE UsernameUsers=? OR emailUsers=?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location:../assignments/login.php?error=sqlerror");
			exit();
		}
		else{
			
			mysqli_stmt_bind_param($stmt, "ss", $usernameemail, $usernameemail);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result)){
				$passwordCheck = password_verify($password, $row['passwordUsers']);
				if($passwordCheck == false){
					header("Location:../assignments/login.php?error=wrongpassword&UsernameEmail=".$usernameemail);
					exit();
				}
				else if($passwordCheck == true){
					session_start();
					$_SESSION['userId'] = $row['idUsers'];
					$_SESSION['usernameId'] = $row['UsernameUsers'];
					
					if($row['type'] == 1){
						$_SESSION['userType'] = "admin";
						header("Location:../assignments/home.php?login=adminsuccess");
						exit();
						
						
					}
					else{
						header("Location:../assignments/home.php?login=success");
						exit();
					}
					
					
					
					
				}
			}
			else{
				header("Location:../assignments/login.php?error=nouser");
				exit();
			}
		}
	}
	
}
else{
	header("Location:../assignments/login.php");
	exit();
}