<?php
	session_start();
	$_SESSION['bg']['body'] = '#004';
	$_SESSION['bg']['container'] = '#0f0';
	$_SESSION['bg']['footer'] = '#f00';
	$_SESSION['txt']['police'] = '#333';
	$_SESSION['txt']['border'] = '#000';
	$_SESSION['txt']['body'] = '#fff';
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<!-- CSS a partir de fichier PHP sans .css	-->
		<link rel="stylesheet" href="style.php" media="all" type="text/css" />
		<title>CSS Dynamique</title>
	</head>
	<body>
		<?php var_dump($_SESSION)?>
		<div id="container">salut</div>
	</body>
</html>