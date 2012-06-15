<?php 

$errors = array();

$movie_title = filter_input(INPUT_POST, 'movie_title', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_STRING);
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] =='POST') {
	if (strlen($movie_title) < 1 || strlen($movie_title) > 256) {
		$errors['movie_title'] = true;
	}
	
	if (strlen($release_date) < 1 || strlen($release_date) > 256) {
		$errors['release_date'] = true;
	}
	if (strlen($director) < 1 || strlen($director) > 256) {
		$errors['director'] = true;
	}
if (empty($errors)) {
		require_once 'includes/db.php';
		$sql = $db->prepare('
		INSERT INTO movies (movie_title, release_date, director)
		VALUES (:movie_title, :release_date, :director)
		');
		$sql->bindValue(':movie_title', $movie_title, PDO::PARAM_STR);
		$sql->bindValue(':release_date', $release_date, PDO::PARAM_STR);
		$sql->bindValue(':director', $director, PDO::PARAM_STR);
		$sql->execute();
		
		header('location:index.php');
		exit;
	}
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add a Movie</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
		<form method="post" action="add.php">
		<h1>Add a Movie</h1>
			<div>
				<label for="movie_title">Movie Title<?php if (isset($errors['movie_title'])):?><strong>is required</strong><?php endif ?></label>
				<input id="movie_title" name="movie_title" required value="<?php echo $movie_title; ?>">
			</div>
			<div>
				<label for="release_date">Release Date<?php if (isset($errors['release_date'])):?><strong>is required</strong><?php endif ?></label>
				<input type="date" name="release_date" required value="<?php echo $movie_title; ?>">
			</div>
			<div>
				<label for="director">Director<?php if (isset($errors['Director'])):?><strong>is required</strong><?php endif ?></label>
				<input id="director" name="director" required value="<?php echo $movie_title; ?>">
			</div>
			<button type="submit">Sumbit</button>
		</form>
	</body>
</html>