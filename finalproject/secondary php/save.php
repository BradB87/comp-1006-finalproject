<?php
require './added/database.php';

// If information if left empty by user

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm password'];

$ok = true;
require './inc/header.php';
if (empty($fname)) {
	echo '<p>First name is needed</p>';
	$ok = false;
}
if (empty($lname)) {
	echo '<p>Last name is needed</p>';
	$ok = false;
}
if (empty($phone)) {
	echo '<p>phone number is needed</p>';
	$ok = false;
}
if ((empty($password)) || ($password != $confirm)) {
	echo '<p> Password is invalid</P>';
}
if ((empty($confirm_password)) || ($Confirm_password != $confirm)) {
	echo '<p> Password is invalid</P>';
}



// hash the password given
$password = hash('sha512', $_POST['password']);
$confirm_password= hash('sha512', $_POST['confirm password']);



?>
<!-- redirect to sign-in page-->
<section class="row success-back-row">
	<div>
		<p>All setup, click the button below to head to the sign in page!</p>
		<a href="signin.php" rel="sign-in" class ="btn btn-primary">Sign In</a>
	</div>
</section>
<?php include './added/footer.php'; ?>