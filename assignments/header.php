<?php
	session_start()
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Matcho Cafe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body class="bg-light">

    <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">

    <div class="site-wrap">
      
      <nav class="site-menu" id="ftco-navbar-spy">
        <div class="site-menu-inner" id="ftco-navbar">
          <ul class="list-unstyled">

            <li><a href="home.php#section-home">Home</a></li>
            <li><a href="home.php#section-about">About Us</a></li>
            <li><a href="home.php#section-menu">Our Menu</a></li>
            <li><a href="home.php#section-reservation">Reserve A Table</a></li>
			<?php
			
				if(isset($_SESSION['userType'])){
					
					
						echo '<li><a href="adminpanel.php">Admin Panel</a></li>';
					
					
				}
			?>
          </ul>
		  <ul class="list-unstyled">
		  <?php
			if(isset($_SESSION['userId'])){
				
				echo '<li>
						<form action="logout.inc.php" method="post">
							<button type="submit" class="btn btn-outline-primary" name="logout-submit">Logout</button>
						</form>
						</li>';
				
			}
			else{
				
				echo '<li><a href="login.php">Login</a></li>';
			}
			?>
		  </ul>
        </div>
      </nav>

      <header class="site-header">
        <div class="row align-items-center">
          <div class="col-5 col-md-3">
             
          </div>
          <div class="col-2 col-md-6 text-left site-logo-wrap">
            <a href="assignment.html"><img src="images/matcho.png" width="150" height="100"></a>
          </div>
			
          <div class="col-5 col-md-9 text-right menu-burger-wrap">
			<?php
				if(isset($_SESSION['userId'])){
					echo '<div class="col-2 col-md-8 text-right site-logo-wrap">';
					echo $_SESSION['usernameId'];
					echo '</div>';
				}
				
			?>
            <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>

          </div>
        </div>
       
      </header> <!-- site-header -->
      
