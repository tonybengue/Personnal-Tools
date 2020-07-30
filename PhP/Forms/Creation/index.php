<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
<?php
use \tools\Autoloader;
use \html\BootstrapForm;

// Appel de l'Autoloader
require 'Autoloader.php';
Autoloader::register();

// Charge le formulaire souhaité
//$form = new Form($_POST);
$form = new BootstrapForm($_POST);
?>

<form action="#" method="post">
<?php
	echo $form->input('username');
	echo $form->input('password');
	echo $form->submit('submit');
?>
</form>
</body>
</html>
