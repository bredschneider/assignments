<?php
$error_msg = array();
$thank_you = false;

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$lang = filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_NUMBER_INT);
$notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($name)) {
		$error_msg ['name'] = true;
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error_msg ['email'] = true;
	}
	
	if (strlen($username) < 1 || strlen($username) > 25) {
		$error_msg ['username'] = true;
	}
	
	if (empty($password)) {
		$error_msg ['password'] = true;
	}
	
	if (!array_key_exists($lang, $languages)) {
		$errors['lang'] = true;
	}
	
	if (!isset($_POST['terms'])) {
		$errors['terms'] = true;
	}
	
	if (empty($errors)) {
		$thank_you = true;
		$headers = 'From: ' . $name . ' <' . $email . '>';
		mail($email, 'Thank you for registering', "From Jessica Bredschneider");
	}
}