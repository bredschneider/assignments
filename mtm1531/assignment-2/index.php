<?php 
$number1 = 0;
$number2 = 0;
$function = '+';
$response = 0;

if (isset($_POST['number1'])) {
	$number1 = $_POST['number1'];
}

if (isset($_POST['number2'])) {
	$number2 = $_POST['number2'];
}

if (isset($_POST['function'])) {
	$function = $_POST['function'];
}

switch($function){
	case '-':
		$response = $number1 - $number2;
		break;
	case '*':
		$response = $number1 * $number2;
		break;
	case '/':
		$response = $number1 / $number2;
		break;
	case '+':
	default:
		$response = $number1 + $number2;
		break;
}

$total = $response * 1.13;

?>



<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Money Calculator Form</title>
        <link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
	<h1> Money Calculator Form</h1>
	<form method="post" action="index.php">
		<label for="number1">Number 1</label>
		<input type="number" id="number1" name="number1">
		<label for="number2">Number 2</label>
		<input type="number" id="number2" name="number2">
		
		<label for="function">Function</label>
		<select if="function" name="function">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		
		<button>Calculate</button>
		<strong>$<?php echo number_format($total, 2) ?></strong> 
	</form>

	</body>
</html>