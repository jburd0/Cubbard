<?php
/*
/ Mysql Connect
*/
@ $db = new mysqli("localhost", "root", "audistock", "cubbard");
// Check connection
if (mysqli_connect_errno()) {
	echo "Error could not connect to database. Please try again.";
	exit;
}
// salt use for passwords
$salt = "iMr2baB735";
?>
