<!DOCTYPE html>
<html lang="en">

<head>
	<link href="css/login.css" rel="stylesheet">
</head>

<body>
<?php
		session_start();
		if(isset($_POST["ok"]))
		{
			$con = mysqli_connect("localhost","root","","resume");
			$q = "select * from admin where email = '".$_POST['emailL']."' and password = '".$_POST['passwordL']."' " ;
			$r = mysqli_query($con,$q);
			$count = mysqli_num_rows($r);
			if ($count == 1) {
				$_SESSION['email'] = $_POST['emailL'];
				$_SESSION['password'] = $_POST['passwordL'];
				echo "<script>window.location='index.php'</script>";
			  } else {
				echo "<script>alert('Invalid user Name And Password')</script>";
			  }
		}  

	?>

<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="POST" style="padding-top:55px;">
			<h1 style="padding-bottom:20px;"><center>Admin Login</center> </h1>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="Email" name="emailL" required>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password" name="passwordL" required>
				</div>
				

				<input type="submit" class="button login__submit" name="ok" value="Login">

				</a>
			</form>

				

		
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>

</html>