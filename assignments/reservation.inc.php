<?php
	
	if(isset($_POST['reservation-submit'])){
		
		require 'dbh.inc.php';
		
		$name = $_POST['ReservationName'];
		$email = $_POST['ReservationEmail'];
		$phone = $_POST['ReservationPhone'];
		$NumberPerson = $_POST['persons'];
		$date = $_POST['ReservationDate'];
		$time = $_POST['time'];
		$message = $_POST['message'];

		
	if(empty($name) || empty($email) || empty($phone) || empty($date)){
		header("Location:../assignments/home.php?error=emptyfields&ReservationName=".$name."&ReservationEmail=".$email."&ReservationPhone=".$phone."&ReservationDate=".$date."#section-reservation");
		exit();
	}

	else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^(\+?6?01)[0|1|2|3|4|6|7|8|9]\-*[0-9]{7,8}$/", $phone)){
		header("Location:../assignments/home.php?error=invalidemailphone&ReservationName=".$name."&ReservationDate=".$date."#section-reservation");
		exit();
	}
	
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location:../assignments/home.php?error=invalidemail&ReservationName=".$name."&ReservationPhone=".$phone."&ReservationDate=".$date."#section-reservation");
		exit();
	}

	else if (!preg_match("/^(\+?6?01)[0|1|2|3|4|6|7|8|9]\-*[0-9]{7,8}$/", $phone)){
		header("Location:../assignments/home.php?error=invalidphone&ReservationName=".$name."&ReservationEmail=".$email."&ReservationDate=".$date."#section-reservation");
		exit();
	}

	else{
		
		$sql = "INSERT INTO reservation (CName, CEmail, Phone, NumPerson, RDate, RTime, CMessage) VALUES (?,?,?,?,?,?,?)";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location:../assignments/home.php?error=sqlerror");
				exit();
			}
			else{
						
				mysqli_stmt_bind_param($stmt, "sssssss",$name,$email,$phone,$NumberPerson,$date,$time,$message);
				mysqli_stmt_execute($stmt);
				

						
				header("Location:../assignments/reservation.success.php");
				exit();
						
			}
		}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	}
	
else{
	header("Location:../assignments/home.php#section-reservation");
	exit();
	
}
	