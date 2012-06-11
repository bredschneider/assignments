<?php 


?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add a Movie</title>
	</head>
	
	<body>
		<form method="post" action="add.php">
		<h1>Add a Movie</h1>
			<div>
				<label for="movie_title">Movie Title</label>
				<input id="movie_title" name="movie_title">
			</div>
			<div>
				<label for="release_date">Release Date</label>
				<input id="release_date" name="release_date">
			</div>
			<div>
				<label for="director">Director</label>
				<input id="director" name="director">
			</div>
			
		</form>
	</body>
</html>
