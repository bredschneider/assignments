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
		<h1>Registration Form</h1>
        <p>Register with us and you win, we win, everybody wins!</p>
<?php if ($thank_you) : ?>
<strong>Thank you for registering</strong>
<?php else : ?>
		<form method="post" action="index.php">
			<div>
				<label for ="name">Name<?php if(isset($error_msg['name'])) : ?><strong> is a required field.</strong><?php endif?></label>
				<input id="name" name="name" required>
			</div>
			
			<div>
				<label for="email">Email Address<?php if(isset($error_msg['email'])) : ?><strong> is a required field.</strong><?php endif?></label>
				<input type="email" id="email" name="email" required>
			</div>
			
			<div>
				<label for="username">Username<?php if(isset($error_msg['username'])) : ?><strong> is a required field.</strong><?php endif?></label>
				<input id="username" name="username" required>
                <p>Max length is 25 characters.</p>
			</div>
			
			<div>
				<label for="password">Password<?php if(isset($error_msg['password'])) : ?><strong> is a required field.</strong><?php endif?></label>
				<input type="password" id="password" name="password" required>
			</div>
			
			<div>
				<fieldset>
					<legend>Preferred Language</legend>
					<?php foreach($languages as $key => $value) : ?>
                    	<input type="radio" id="languages" name="lang">
           				<label value="<?php echo $key;?>"><?php echo $value;?></label>
					<?php endforeach; ?>
				</fieldset>
			</div>
			
			<div>
				<label for="notes">Notes</label>
				<textarea id="notes" name="notes"><?php echo $notes;?></textarea>
			</div>
			
			<div>
				<input type="checkbox" id="terms" value="1"><?php if (isset($_POST['terms']))?>
               <label for="terms">I have read and accept terms?</label><?php if(isset($errors['terms'])) : ?><strong class="error">You must comply!</strong><?php endif;?>
			</div>
			
			<button type="submit">Submit</button>
<?php endif; ?>	
		
	</body>
</html>
