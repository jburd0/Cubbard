<?php
include("functions.php");
$email = $_POST['loginEmail'];
$password = $_POST['loginPassword'];

if (!isset($email) || !isset($password)) {
	echo "Email and/or Password was not entered.";
//	header('Location: ../public/index.php');
	exit;
}
if (!get_magic_quotes_gpc) {
	addslashes($email);
	addslashes($password);
}
$password = md5($password.$salt);

$query = "SELECT COUNT(*) FROM users WHERE
	email = '".$email."' and
	password = '".$password."'";
$result = mysqli_query($db, $query);
if (!$result) {
	echo "Cannot run query";
	exit;
}
$row = mysqli_fetch_row($result);
$count = $row[0];
echo $email;

echo $count;
if ($count > 0) {
	header('Location: ../public/account.php');
} else {
	echo "You are not a memeber.";
}

?>
