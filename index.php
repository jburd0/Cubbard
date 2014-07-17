<html>
<head>
<title>Welcome to Cubbard</title>
<link rel="stylesheet" href="./css/style.css" />
<link rel="shortcut icon" href="./favicon.ico" />
</head>
<body>
<?php include("header.php"); ?>
	<div class="container">
		<div class="loginWrap">
			<form action="" method="POST" name="login">
			<label for="login">Login</label>
				<input type="text" name="email" placeholder="email" autocomplete="off" />
				<input type="password" name="password" placeholder="password" autocomplete="off" />
				<input type="submit" value="login" />
			</form>
		</div>
		<h2>Sign Up</h2>
		<form action="" method="POST" name="sign-up">
			<input type="text" name="fname" placeholder="First Name" autocomplete="off" />
			<input type="text" name="lname" placeholder="Last Name" autocomplete="off" />
			<input type="text" name="email" placeholder="Email" autocomplete="off" />
			<input type="text" name="confim-email" placeholder="Confirm Email" autocomplete="off" />
			<input type="password" name="password" placeholder="Password" autocomplete="off" />
			<input type="submit" value="Sign Up" />
		</form>
	</div> <!-- end div.container -->
</body>
</html>
