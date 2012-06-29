<?php
	$tabs='';
		if (isset($_GET['tabs'])) {
		$tabs = strtolower($_GET['tabs']);
	}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>AJAX Tabs</title>
		<link href="css/general.css" rel="stylesheet">

	</head>
	
	<body>
		<div id="page">
		<h1>London Olympics 2012, Athletes to Watch</h1>
			<ul class="mytabs" id="tabs">
				<li <?php if ($tabs != 'krystina' && $tabs != 'simon' && $tabs != 'brent'){?>class="current"<?php }?>><a href="?tabs=alex">Alexandre Despatie</a></li>
				<li <?php if ($tabs == 'krystina'){?>class="current"<?php }?>><a href="?tabs=krystina">Krystina Alogobo</a></li>
				<li <?php if ($tabs == 'simon'){?>class="current"<?php }?>><a href="?tabs=simon">Simon Whitfield</a></li>
				<li <?php if ($tabs == 'brent'){?>class="current"<?php }?>><a href="?tabs=brent">Brent Hayden</a></li>
			</ul>
			<div class="mytabs-container" id="empty-div">
            <?php 
			switch($tabs){
				case 'krystina' :
					include 'krystina.html';
				break;
				case 'simon' :
					include 'simon.html';
				break;
				case 'brent' :
					include 'brent.html';
				break;
				default:
					include 'alex.html';
				break;
			}
			?>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="js/general.js"></script>
	</body>
</html>
