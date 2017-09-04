<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<div class="container">
		<div class="col-xs-12 text-center">
			<h1>Les <?php 
				echo $header;
				?> du Bon Coin Coin !</h1>
			</div>
		</div>
		<div class="container text-center">
			<div class="col-xs-2">
				<ul class="list-unstyled">
					<li><a href="../Site/index.php">Index</a></li>
					<li><a <?php echo $rubric; ?> href="../Site/rubriques.php">Rubriques</a></li>
					<li><a <?php echo $announce; ?> href="../Site/annonces.php">Annonces</a></li>
					<li><a <?php echo $user; ?> href="../Site/annonceurs.php">Annonceurs</a></li>
					<li><a <?php echo $searchUser; ?> href="../test-formulaire/formulaire1.php">Recherche d'annonceurs</a></li>
					<li><a <?php echo $createUser; ?> href="../Site/ajout_utilisateur.php">Créer un compte</a></li>
				</ul>
			</div>
			<div class="col-xs-10">
				<?php
				$bdd = new PDO('mysql:host=localhost;dbname=annonces_immo;charset=utf8', 'root', 'simplonco');
				$reponse = $bdd->query('SELECT * FROM rubric');
				?>
				<table>
					<?php echo $headTab;

					echo $tab;
				?>
				</table>
			</div>
		</div>
		<div class="container text-center">
			<div class="col-xs-12">
				<h3>"J'en ai rien à footer"</h3>
			</div>
		</div>
	</body>
	</html>