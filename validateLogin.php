<?php
/*
 * PHP file to handle AJAX request
 */
include_once('DBFunction.php');
$funObj = new DBFunction();
if(isset($_POST['emailid']) && isset($_POST['password'])){
	$emailId = $_POST['emailid'];
	$password = $_POST['password'];
	$user = $funObj->login($emailId, $password);

	if ($user != FALSE) {
		// Login Success
		echo 'success';
	} else {
		// Login Failed
		echo "Invalid Emailid/Password";
	}
}
