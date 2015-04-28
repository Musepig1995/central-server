<?php
$username = $_POST['username'];
$password = $_POST['password'];

require_once 'api/UserDatabaseHandler.php';
require_once 'api/User.php';

$udh = new UserDatabaseHandler();

if($user = $udh->login($username, $password)){
	session_start();
	$_SESSION['user']['name'] = $user->name;
	$_SESSION['user']['alias'] = $user->alias;
	$_SESSION['user']['location'] = $user->location;
	$_SESSION['user']['phone'] = $user->phone;
	$_SESSION['user']['admin'] = $user->admin;
	header("Location: session_test.php");
	exit();
} else {
	header("Location: loginpage.php?error=1");
}

?>
