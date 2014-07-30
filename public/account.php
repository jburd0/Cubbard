<html>
<head>
<title>Welcome to Cubbard</title>
<link rel="stylesheet" href="./css/style.css" />
<link rel="shortcut icon" href="./favicon.ico" />
<script src="./js/jquery.js"></script>
<script src="./js/logo.js"></script>
<script src="./js/userEdit.js"></script>
</head>
<body>
	<div class="container">
	<?php include("header.php"); ?>

		<section class="main">

			<section class="welcome">
				<ul role="user-display">
					<li><img src="./img/garren_ijames_777.jpg" height="40px" width="40px" alt="profile picture"/></li>
					<li><h1>Garren Ijames</h1></li>
					<li><a href="./index.php">logout</a></li>
				</ul>
			</section> <!-- .welcome -->

			<section class="user-utils">
				<ul role='tool-box'>
					<li>mail (<a role="mail-box" href="">3</a>)</li>
					<li><a href="">rummage</a></li>
				</ul>
			</section> <!-- end .user-utils -->

			<section class="user-profile">
				<div class="user-info">
					<h3>User Information</h3>
					<form name="edit-user-info" action="" method="POST">
						<input class="edit" type="text" name="name" value="Name:" disabled />
						<input class="edit-info-field" type="text" name="name-edit" value="Garren Ijames" disabled /><button class="field-trigger" for="name">+</button>
						<input class="edit" type="text" name="name" value="Email:" disabled />
						<input class="edit-info-field" type="text" name="email-edit" value="test@test.com" disabled /><button class="field-trigger" for="email">+</button>
						<input class="edit" type="text" name="gender" value="Gender:" disabled />
						<input class="edit-info-field" type="text" name="gender-edit" value="Male" disabled /><button class="field-trigger" for="gender">+</button>
						<input class="edit" type="text" name="name" value="Occupation:" disabled />
						<input class="edit-info-field" type="text" name="occupation-edit" value="Web Developer" disabled /><button class="field-trigger" for="occupation">+</button>
						<input type="submit" value="Save" />
					</form>
				</div>
				<div class="user-feed">
					<div role="feed-header">
						<h1>My Shelf</h1>
						<form name="feed-filter" action="" method="POST">
							<select name="filter-select">
								<option selected disabled value="">filter</option>
								<option value="saved">saved</option>
								<option value="pending">pending</option>
							</select>
						</form>
					</div>
					<div class="post-status">
						<form name="create-memo" action="" method="POST">
							<input type="image" src="./img/pen.png" alt="create" />
							<textarea type="text" name="status" placeholder="By Garren Ijames" autocomplete="off"></textarea> 
						</form>
					</div>
				</div>
			</section> <!-- end .user-profile -->

			<section class="footer">
				<p>Copyright 2014 Cubbard</p>
				<p>A John Burd - Garren Ijames production</p>
			</section>

		</section> <!-- end section.main -->

	</div> <!-- end div.container -->
</body>
</html>
