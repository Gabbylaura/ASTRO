<?php 
	if (isset($_GET['login-submit'])) {
		
		require 'db.php';

	$username = $_GET['user'];
	$id = $_GET['id'];
	$number = $_GET['number'];
	$password = $_GET['password'];
	$pwdrepeat = $_GET['pwdrepeat'];
}