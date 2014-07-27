<html>
<head>
<title>Welcome to Cubbard</title>
<link rel="stylesheet" href="./css/style.css" />
<link rel="shortcut icon" href="./favicon.ico" />
<script src="./js/jquery.js"></script>
<script src="./js/forms.js"></script>
<script src="./js/logo.js"></script>
</head>
<body>
	<div class="container">
		<?php include("header.php"); ?>
		<section class="main">

			<section class="welcome">
				<h1>Welcome</h1>
				<ul role='links'>
					<li><img id="logo" src="./closedLogo.png" height="20px" alt="small logo" /></li>
					<li><img id="slider" src="./img/arrowDown.png" height="16px" alt="down" /></li>
				</ul>
			</section>

			<div class="login">
				<form name="login" action="./account.php" method="POST">
				<h3 for="login">Login</h3>
					<input class="required" type="test" name="login-email" value="email" autocomplete="off" />
					<input class="required" type="password" name="login-password" value="password" autocomplete="off" />
					<input type="submit" value="login" />
				</form>
			</div>

			<section class="sign-up">
				<div class="suWrap">
					<h2>Sign Up</h2>
					<form action="./account.php" method="POST" name="sign-up">
						<input class="required" type="text" name="fname" value="First Name" autocomplete="off" /><input for="fname" role="status" value="" disabled/>
						<input class="required" type="text" name="lname" value="Last Name" autocomplete="off" /><input for="lname" role="status" value="" disabled/>
						<input class="required" type="text" name="email" value="Email" autocomplete="off" /><input for="email" role="status" value="" disabled/>
						<input class="required" type="text" name="confim-email" value="Confirm Email" autocomplete="off" /><input for="confirm-email" role="status" value="" disabled/>
						<input class="required" type="password" name="password" value="Password" autocomplete="off" /><input for="password" role="status" value="" disabled/>
						<input type="submit" value="Sign Up" />
					</form>
				</div>
				<div class="suDisplay">
					<h1>This is where we will place an ad</h1>
				</div>
			</section>

			<section class="footer">
				<p>Copyright 2014 Cubbard</p>
				<p>A John Burd - Garren Ijames production</p>
			</section>

		</section> <!-- end section.main -->

	</div> <!-- end div.container -->
</body>
</html>
