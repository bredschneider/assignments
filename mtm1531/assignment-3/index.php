<?php

$languages = array (
	'English'
	,'French'
	,'Spanish'
);

require_once 'includes/form-processor.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration Form Validation</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
	
		<form method="post" action="index.php">
			<div>
				<label for ="name">Name<?php if(isset($error_msg['name'])) : ?><strong> is a required field.</strong><?php endif?></label>
				<input id="name" name="name" required>
			</div>
			
			<div>
				<label for="email">Email Address<?php if(isset($error_msg['name'])) : ?><strong> is a required field.</strong><?php endif?></label>
				<input type="email" id="email" name="email" required>
			</div>
			
			<div>
				<label for="username">Username</label>
				<input id="username" name="username" required>
			</div>
			
			<div>
				<label for="password">Password</label>
				<input type="password" id="password" name="password" required>
			</div>
			
			<div>
				<fieldset>
					<legend>Preferred Language</legend>
					<input type="radio" id="languages">
				</fieldset>
			</div>
			
			<div>
				<label for="notes">Notes</label>
				<textarea id="notes" name="notes"></textarea>
			</div>
			
			<div>
				<label for="terms">Accept Terms</label>
				<input type="checkbox" id="terms" value="1">
			</div>
			
			<button type="submit">Submit</button>
		
	</body>
</html>
