<?php

if(isset($_POST['register-submit'])){
	
	require 'dbh.inc.php';
	
	$username = $_POST['uid'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	
	if(empty($username) || empty($email) || empty($password) || empty($confirmpassword)){
		header("Location:../assignments/register.php?error=emptyfields&uid=".$username."&email=".$email);
		exit();
	}

	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
		header("Location:../assignments/register.php?error=invalidmailuid");
		exit();
	}

	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location:../assignments/register.php?error=invalidemail&uid.=".$username);
		exit();
	}

	else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
		header("Location:../assignments/register.php?error=invaliduid&email=".$email);
		exit();
	}

	else if ($password !== $confirmpassword){
		header("Location:../assignments/register.php?error=passwordcheck&uid=".$username."&email=".$email);
		exit();
	}

	else{
		
		$sql = "SELECT UsernameUsers FROM users WHERE UsernameUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location:../assignments/register.php?error=sqlerror");
			exit();
		}
		else{
			
			mysqli_stmt_bind_param($stmt,"s",$username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if($resultCheck > 0){
				header("Location:../assignments/register.php?error=usertaken&email=".$email);
				exit();
			}
			else{
				$sql = "INSERT INTO users (UsernameUsers, emailUsers, passwordUsers) VALUES (?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)){
					header("Location:../assignments/register.php?error=sqlerror");
					exit();
				}
				else{
					
					$hashPassword = password_hash($password, PASSWORD_DEFAULT);
					
					mysqli_stmt_bind_param($stmt, "sss",$username,$email,$hashPassword);
					mysqli_stmt_execute($stmt);
					
					header("Location:../assignments/login.php?signup=success");
					exit();
					
				}
			}
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}
else{
	header("Location:../assignments/register.php");
	exit();
	
}
