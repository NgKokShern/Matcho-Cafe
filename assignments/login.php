<!doctype html>
<html>
<head>
	<title>Login</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>
	<div class="img-bg" style="background-image: url(images/tropicalbackground.jpg);">
	
	<div class="login-page">
	<div class="form">
	<a href="home.php"><img src="images/matcho.png" width="150" height="100"></a>
	<?php
		if(isset($_GET['error'])){
			if($_GET['error']== "emptyfields"){
				echo '<p style="color:red">Fill in all blanks!</p>';
			}
			else if($_GET['error']== "wrongpassword"){
				echo '<p style="color:red">Wrong password!</p>';
			}
			else if($_GET['error']== "nouser"){
				echo '<p style="color:red">That user is not registered!</p>';
			}
		}
		else if(isset($_GET['signup'])){
			if($_GET['signup']=="success"){
				echo '<p style="color:green">Successfully registered!</p>';
			}
		}
	?>
    <form class="login-form" action="login.inc.php" method="post">
      <input type="text" name="UsernameEmail" placeholder="username/email" value="<?php if(isset($_GET["UsernameEmail"])){echo($_GET["UsernameEmail"]);}?>"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit" name="login-submit">login</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
	</div>
	</div>
	</div>

</body>
</html>