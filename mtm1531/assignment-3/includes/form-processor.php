<?php
$error_msg = array();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_EMAIL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($name)) {
		$error_msg ['name'] = true;
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error_msg ['email'] = true;
	}
}