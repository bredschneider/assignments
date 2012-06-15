<?php 
	$planet ='';
	if (isset($_GET['planet'])) {
		$planet = strtolower($_GET['planet']);
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Planets</title>
		<link href="css/general.css" rel="stylesheet">
	</head>
	
	<body>
		
		<nav>
			<ul>
				<li<?php if ($planet != 'mars' && $planet != 'jupiter' && $planet != 'venus'){?>class="current"<?php }?>><a href="?planet=earth">Earth</a></li>
				<li<?php if ($planet == 'mars'){?>class="current"<?php }?>><a href="?planet=mars">Mars</a></li>
				<li<?php if ($planet == 'jupiter'){?>class="current"<?php }?>><a href="?planet=jupiter">Jupiter</a></li>
				<li<?php if ($planet == 'venus'){?>class="current"<?php }?>><a href="?planet=venus">Venus</a></li>
			</ul>
		</nav>
		
		<article>
		<!--switch: check to see the value of one single variable-->
		<?php 
			switch($planet){
				case 'mars' :
					include 'includes/mars.php';
				break;
				case 'venus' :
					include 'includes/venus.php';
				break;
				case 'jupiter' :
					include 'includes/jupiter.php';
				break;
				default:
					include 'includes/earth.php';
				break;
			}
		?>
		</article>
	</body>
</html>