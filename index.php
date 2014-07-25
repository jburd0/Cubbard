<html>
<head>
<title>Welcome to Cubbard</title>
<link rel="stylesheet" href="./css/style.css" />
<link rel="shortcut icon" href="./favicon.ico" />
<script src="./js/jquery.js"></script>
<script src="./js/forms.js"></script>
</head>
<body>
<?php include("header.php"); ?>
	<div class="container">

		<section class="main">
			<div class="loginWrap">
				<form name="login" action="" method="POST">
				<label for="login">Login</label>
					<input class="nonRequired" type="test" name="email" value="email" autocomplete="off" />
					<input class="nonRequired" type="password" name="password" value="password" autocomplete="off" />
					<input type="submit" value="login" />
				</form>
			</div>

			<section class="signUp">
				<div class="suWrap">
					<h2>Sign Up</h2>
					<form action="" method="POST" name="sign-up">
						<input class="required" type="text" name="fname" size="10" value="First Name" autocomplete="off" />
						<input class="required" type="text" name="lname" size="10" value="Last Name" autocomplete="off" />
						<input class="required" type="text" name="email" value="Email" autocomplete="off" />
						<input class="required" type="text" name="confim-email" value="Confirm Email" autocomplete="off" />
						<input class="required" type="password" name="password" value="Password" autocomplete="off" />
						<span id="checker">
						<input type="submit" value="Sign Up" />
						</span>
					</form>
				</div>
				<div class="suDisplay">

				</div>
			</section>

		</section> <!-- end section.main -->

		<section class="footer">
			<p>Copyright 2014 Cubbard</p>
			<p>A John Burd - Garren Ijames production</p>
		</section>

	</div> <!-- end div.container -->
</body>
</html>
