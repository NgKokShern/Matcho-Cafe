<!doctype html>
<html>
<head>
	<title>Register</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>
	<div class="img-bg" style="background-image: url(images/tropicalbackground2.jpg);">
		
	
	<div class="register-page">
	<div class="form">
	<a href="home.php"><img src="images/matcho.png" width="150" height="100"></a>
	<?php
		if(isset($_GET['error'])){
			if($_GET['error']== "emptyfields"){
				echo '<p style="color:red">Fill in all blanks!</p>';
			}
			else if($_GET['error']== "invalidmailuid"){
				echo '<p style="color:red">Invalid Username and E-mail!</p>';
			}
			else if($_GET['error']== "invalidemail"){
				echo '<p style="color:red">Invalid E-mail!</p>';
			}
			else if($_GET['error']== "invaliduid"){
				echo '<p style="color:red">Invalid Username!</p>';
			}
			else if($_GET['error']== "passwordcheck"){
				echo '<p style="color:red">Your passwords do not match!</p>';
			}
			else if($_GET['error']== "usertaken"){
				echo '<p style="color:red">Username already taken!</p>';
			}
		
		}
	?>
    <form class="login-form" action="register.inc.php" method="post">
      <input type="text" name="uid" placeholder="name"  value="<?php if(isset($_GET["uid"])){echo($_GET["uid"]);}?>"/>
	  <input type="text" name="email" placeholder="email address"  value="<?php if(isset($_GET["email"])){echo($_GET["email"]);}?>"/>
      <input type="password" name="password" placeholder="password"/>
	  <input type="password" name="confirmpassword" placeholder="confirm password"/>
      
      <button type="submit" name="register-submit">Register</button>
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>
	</div>
	</div>
	</div>

</body>
</html>